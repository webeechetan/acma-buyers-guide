<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\DataTables\CompanyDataTable;
use Illuminate\Cache\RateLimiter;
use App\Models\Company;
use App\Models\CompanyContactDetail;
use App\Models\CompanyKeyPersonnel;
use App\Models\CompanyProductDetails;
use App\Models\CompanyForeignCollaboration;
use App\Notifications\Company\ForgotPasswordOtpNotification;
use App\Helpers\CompanyHelper;
use App\Models\CompanyUpdateRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Benchmark;





//use Illuminate\Support\Facades\Cookie;

class CompanyController extends Controller
{

    public function login()
    {
        return view('website.auth.login');
    }

    public function authenticate(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            //setting cookies in client browser

                if ($request->has('remember')) {
                
                
                setcookie("email", $request->email, time() + 3600 * 24 * 7);
                setcookie("password", $request->password, time() + 3600 * 24 * 7);
               
            } else {
               
                setcookie("email", "", time() - 3600); 
                setcookie("password", "", time() - 3600);    
            }
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

        return view('website.auth.fill-up-details', compact('company','company_contact_details','company_key_personnels','company_product_details','company_foreign_collaboration'));
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
        dd("destroy");
    }

    public function fillUpDetailsStore(Request $request){
        $company_id = Auth::guard('company')->user()->id;
        $data = $request->all();

        $is_updated = false;
       
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


        $company->update($data);
        $company_contact_detail->update($data);
        $company_key_personnel->update($data);
        $company_product_detail->update($data);
        $company_foreign_collaboration->update($data);

        
        $this->alert('Success', 'Details sent to review. we will notify you once approved. ' , 'success');

       
        return redirect()->route('company.dashboard');
    }

    public function dashboard(Request $request) {
     
       
        $auth_id = auth()->guard('company')->user()->id;


         $companies = CompanyHelper::filter($request);       
        
        // $response = Benchmark::measure([
        //     fn() => Company::all(),
        //     fn() =>  Company::select('name')->groupBy('name')->get(),
        //   ]);

       
         $companies_name = Company::all(); // Adjust the number per page as needed
        
        $regions = CompanyKeyPersonnel::select('region')
        ->whereNotNull('region')->where('region', '<>', '')->groupBy('region')->get();
         
        $products = CompanyProductDetails::select('products_manufactured')->groupBy('products_manufactured')->get();
        $products2 = CompanyProductDetails::select('product2')->groupBy('product2')->get();
        $products3 = CompanyProductDetails::select('product3')->groupBy('product3')->get();
        $products4 = CompanyProductDetails::select('product4')->groupBy('product4')->get();

        // Combine all above arrays into a single array
         $combinedProducts = array_merge($products->pluck('products_manufactured')->toArray(), $products2->pluck('product2')->toArray(),$products3->pluck('product3')->toArray(),$products4->pluck('product4')->toArray());
        
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

        // dd(count($uniqueLocations));
        return view('admin.companies.dashboard', compact('companies','regions','companies_name','trademarks','products','salesTurnovers','combinedLocations','combinedProducts'));
    
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
        
        $request->validate([
            'otp' => 'required|numeric|exists:companies',
        ]);


        $otpEmail = session('Otp_email');

        $user = Company::where('email', $otpEmail)->first();
       
        if ($user) {
            return redirect()->route('company.ResetPassword.form');
        }            
        
        return redirect()->back();
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

        $CompanyUpdateRequests = CompanyUpdateRequest::where('company_id', auth()->guard('company')->user()->id)->get();

        return view('website.profile', compact('company','company_contact_details','company_key_personnels','company_product_details','company_foreign_collaboration','CompanyUpdateRequests'));

    }

}
