<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\DataTables\CompanyDataTable;
use Illuminate\Cache\RateLimiter;
use App\Models\Company;
use App\Models\CompanyContactDetail;
use App\Models\CompanyKeyPersonnel;
use App\Models\CompanyProductDetails;
use App\Models\CompanyForeignCollaboration;
use App\Models\Setting;
use App\Notifications\Company\ForgotPasswordOtpNotification;
use App\Notifications\Company\LoginOtpNotification;
use App\Helpers\CompanyHelper;
use App\Models\CompanyUpdateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;





//use Illuminate\Support\Facades\Cookie;

class CompanyController extends Controller
{

    public function login()
    {
        return view('website.auth.login');
    }

    public function generateLoginOtp(Request $request)
    {

        $rules = [
            'email' => 'required|email|exists:companies'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
           return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        
        $user = Company::where('email', $request->email)->first();

        $otp = random_int(100000, 999999);

        $user->otp = $otp;
        $user->saveQuietly();
        $user->notify(new LoginOtpNotification($user, $otp));

        return $this->sendResponse('Otp sent to your email address sucessfully','success');

    }

    public function showOtpLoginForm(Request $request)
    {
        return view('website.auth.otp-loginform-view');
    }


    public function authenticate(Request $request)
    {

        $request->validate([
            'otp' => 'required|digits:6|exists:companies',
        ]);
        
        
        $company = Company::where('otp', $request->otp)->first();

        if ($company) {
            Auth::guard('company')->login($company);
            $request->session()->regenerate();
            return redirect()->route('company.dashboard');
        }

        $this->alert('Error', 'Invalid Details' , 'danger');
        return back();
    }

    public function register()
    {
        return view('website.auth.register');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(CompanyDataTable $datatable)
    {
       return $datatable->render('admin.companies.index');
    }


    public function fillUpDetails(Request $request){

        CompanyHelper::generateCompanyDataAsNull(Auth::guard('company')->user()->id);

        $company = Company::where('id',Auth::guard('company')->user()->id)->first();
        $company_contact_details = CompanyContactDetail::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_key_personnels = CompanyKeyPersonnel::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_product_details = CompanyProductDetails::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_foreign_collaboration = CompanyForeignCollaboration::where('company_id',Auth::guard('company')->user()->id)->first();

        $settings = Setting::latest()->first();



        return view('website.auth.fill-up-details', compact('company','company_contact_details','company_key_personnels','company_product_details','company_foreign_collaboration','settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, CompanyHelper $companyHelper)
    {

        $request->validate([
            'company_name' => 'required',
            'email' => 'required|email|unique:companies',
            'password' => 'required|min:6',
        ]);
        
        $company = new Company();
        $company->name = $request->company_name;
        $company->email = $request->email;
        $company->password = Hash::make($request->password);

        if ($company->save()) {
            $companyHelper->generateCompanyDataAsNull($company->id);
            Auth::guard('company')->login($company);

            $this->alert('Success', 'Registration Successful' , 'success');
            return redirect()->route('company.dashboard');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {

        dd($company);
        if ($company->delete()) {
            $this->alert('success', 'User Deleted successfully', 'success');

            dd('deleted');
            // return redirect()->route('user-index');
        } else {

            dd('not deleted');
            $this->alert('error', 'Something went wrong', 'danger');
            // return redirect()->back();
        }
        // dd($company->id);

        // $company->delete();
        // return redirect()->route('your.index.route')->with('success', 'Company deleted successfully');
    }

    public function fillUpDetailsStore(Request $request){
        $company_id = Auth::guard('company')->user()->id;
        $data = $request->all();


        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:50',
            'phone' => 'nullable|regex:/^[0-9()-]{7,12}$/',
        ]);
        
       
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img_company_logo', 'public'); 
            $data['image'] = $imagePath;
        }

        
        $company = Company::where('id',$company_id)->first();
        $company_contact_detail = CompanyContactDetail::where('company_id',$company_id)->first();
        $company_key_personnel = CompanyKeyPersonnel::where('company_id',$company_id)->first();
        $company_product_detail = CompanyProductDetails::where('company_id',$company_id)->first();
        $company_foreign_collaboration = CompanyForeignCollaboration::where('company_id',$company_id)->first();

        // $updated_models = ['CompanyContactDetail' => false , 'CompanyKeyPersonnel' => false , 'CompanyProductDetails' => false , 'CompanyForeignCollaboration' => false];
        // session('updated_models', $updated_models);

        session()->put('is_updated', false);

        $company->update($data);
        $company_contact_detail->update($data);
        $company_key_personnel->update($data);
        $company_product_detail->update($data);
        $company_foreign_collaboration->update($data);

        if(session('is_updated') == true){
            $this->alert('Success', 'Details sent to review. we will notify you once approved. ' , 'success');
        }

        return redirect()->route('company.dashboard');
    }

    public function dashboard(Request $request) {
     
        $auth_id = auth()->guard('company')->user()->id;

        // $user = auth()->guard('company')->user();
        // dd($user);
       

         $companies = CompanyHelper::filter($request);  
        
        // $response = Benchmark::measure([
        //     fn() => Company::all(),
        //     fn() =>  Company::select('name')->groupBy('name')->get(),
        //   ]);
       
         $companies_name = Company::all(); // Adjust the number per page as needed
        
        $regions = CompanyKeyPersonnel::select('region')
        ->whereNotNull('region')->where('region', '<>', '')->groupBy('region')->get();
         

        $combinedProducts = CompanyProductDetails::select('id', 'products_manufactured', 'product2', 'product3', 'product4')
    ->groupBy('id', 'products_manufactured', 'product2', 'product3', 'product4')
    ->get();

    
        $trademarks = CompanyProductDetails::select('trademark')
        ->whereNotNull('trademark')->where('trademark', '<>', '')->groupBy('trademark')->get();
        $salesTurnovers = CompanyProductDetails::select('sales_turnover')->groupBy('sales_turnover')->get();
        
        $states = CompanyContactDetail::select('state')->whereNotNull('state')->where('state', '<>', '')->groupBy('state')->get();
        $cities = CompanyContactDetail::select('city')->whereNotNull('city')->where('city', '<>', '')->groupBy('city')->get();

        // Extract state and city values from collections
        $stateArray = $states->pluck('state')->toArray();
        $cityArray = $cities->pluck('city')->toArray();

        $merged_array = array_merge($stateArray, $cityArray);
        $uniqueLocations = array_unique($merged_array);

        // // If you want to re-index the array after removing duplicates
         $combinedLocations = array_values($uniqueLocations);

        return view('admin.companies.dashboard', compact('companies','regions','companies_name','trademarks','salesTurnovers','combinedLocations','combinedProducts'));
    
    }


    public function logout()
    {
        $this->alert('success', 'You are logged out successfully','success');
        Auth::guard('company')->logout();
        return redirect()->route('company.login');
    }

    public function forgotpassword_view(Request $request)
    {
        
        return view('website.forgotpassword.forgotpassword');
    }


    
    public function forget_password(Request $request,  RateLimiter $limiter)
    {

        $request->validate([

            'email' => 'required|email|exists:companies'
        ]);
        
      
        $user = Company::where('email',$request->email)->first();       

        $request->session()->put('Otp_email', $user->email);
       
            $otp = rand(000000,999999);

            $user->otp = $otp;
            $user->saveQuietly();
            $user->notify(new ForgotPasswordOtpNotification($user, $otp));

            $this->alert('Success', 'Otp sent to your registered email address sucessfully' , 'success');
            return redirect()->route('company.forgotpassword.otpverify');
       
    }



    public function otp_verify_form(Request $request) 
    {

        return view('website.forgotpassword.otpverification');
    }

    public function otp_authentication(Request $request)
    {
        $rules = [
            'otp' => 'required|digits:6|exists:companies',
        ];

        $messages = [
            'otp.required' => 'Please enter otp',
            'otp.digits' => 'Please enter 6 digit otp',
            'otp.exists' => 'Please enter valid otp',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
           return $this->sendError('Validation Error.', $validator->errors(), 422);
        }

        $company = Company::where('otp', $request->otp)->first();
        Auth::guard('company')->login($company);

        return $this->sendResponse('Otp verified successfully');

    }


    public function reset_password_form(Request $request)
    {

        return view('website.forgotpassword.resetpassword');
    }

    public function reset_password_update(Request $request)
    {

        $password = $request->password;
        $confirm_password = $request->password_confirmation;
        
        $request->validate([    
            'password' => 'required|min:6|confirmed',
        ]);
    
            $otpEmail = session('Otp_email');
            $user = Company::where('email', $otpEmail)->first();
            
            $hashedPassword  = Hash::make($password);
            $user->password = $hashedPassword;

            $user->saveQuietly();

            $this->alert('success', 'Password Updated Successfully' , 'success');
            return redirect()->route('company.login');

    }


    public function view_company(Request $request) 
    {
        $id = $request->id;

        $company = Company::where('id', $id)->first();
        $company_contact_details = CompanyContactDetail::where('company_id', $id)->first();
        $company_key_personnels = CompanyKeyPersonnel::where('company_id', $id)->first();
        $company_product_details = CompanyProductDetails::where('company_id', $id)->first();
        $company_foreign_collaboration = CompanyForeignCollaboration::where('company_id', $id)->first();

        return view('website.company.view-company', compact('company','company_contact_details','company_key_personnels','company_product_details','company_foreign_collaboration'));

    }

    
    public function myprofile()
    {
        $company = Company::where('id',Auth::guard('company')->user()->id)->first();
        $company_contact_details = CompanyContactDetail::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_key_personnels = CompanyKeyPersonnel::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_product_details = CompanyProductDetails::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_foreign_collaboration = CompanyForeignCollaboration::where('company_id',Auth::guard('company')->user()->id)->first();

        // $CompanyUpdateRequests = CompanyUpdateRequest::where('company_id', auth()->guard('company')->user()->id)->get();

        $CompanyUpdateRequests = CompanyUpdateRequest::where('company_id', auth()->guard('company')->user()->id)
    ->orderBy('created_at', 'desc') 
    ->get();

        return view('website.profile', compact('company','company_contact_details','company_key_personnels','company_product_details','company_foreign_collaboration','CompanyUpdateRequests'));

    }


    public function CurrencyconversionRate(Request $request)
    {



        $request->validate([

            'dollar_rate' => 'required|numeric'
        ]);
        
       
        $currency = $request->dollar_rate;

      
        $setting = new Setting();
        $setting->dollar_price = $currency;
        $setting->save();

        $this->alert('success', '$ Rate is set Successfully' , 'success');
        return back();
    
       
    }


}
