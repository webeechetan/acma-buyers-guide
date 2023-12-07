<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\DataTables\CompanyDataTable;
use Illuminate\Cache\RateLimiter;
use App\Models\CompanyContactDetail;
use App\Models\CompanyKeyPersonnel;
use App\Models\CompanyProductDetails;
use App\Models\CompanyForeignCollaboration;
use App\Notifications\Company\ForgotPasswordOtpNotification;
use App\Helpers\CompanyHelper;
use App\Models\CompanyUpdateRequest;
use Illuminate\Support\Facades\Password;

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

        $company_contact_detail = CompanyContactDetail::where('company_id',$company_id)->first();
        $company_key_personnel = CompanyKeyPersonnel::where('company_id',$company_id)->first();
        $company_product_detail = CompanyProductDetails::where('company_id',$company_id)->first();
        $company_foreign_collaboration = CompanyForeignCollaboration::where('company_id',$company_id)->first();
        
        $company_contact_detail->update($data);
        $company_key_personnel->update($data);
        $company_product_detail->update($data);
        $company_foreign_collaboration->update($data);

        $this->alert('Success', 'Details under review. we will notify you once opproved. ' , 'success');
        return redirect()->route('company.dashboard');
    }

    public function dashboard(Request $request) {

        $companies = CompanyHelper::filter($request);
        
        $companies_name = Company::select('name')->groupBy('name')->get();
        $regions = CompanyKeyPersonnel::select('region')->groupBy('region')->get();
        $products = CompanyProductDetails::select('products_manufactured')->groupBy('products_manufactured')->get();
        $trademarks = CompanyProductDetails::select('trademark')->groupBy('trademark')->get();
        $salesTurnovers = CompanyProductDetails::select('sales_turnover')->groupBy('sales_turnover')->get();

        return view('admin.companies.dashboard', compact('companies','regions','companies_name','trademarks','products','salesTurnovers'));
    
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
            $user->save();
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

            $user->save();

            $this->alert('success', 'Password Updated Successfully' , 'success');
            return redirect()->route('company.login');

    }


    public function view_company(Request $request) 
    {
        $id = $request->id;

        $company = Company::where('id',Auth::guard('company')->user()->id)->first();
        $company_contact_details = CompanyContactDetail::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_key_personnels = CompanyKeyPersonnel::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_product_details = CompanyProductDetails::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_foreign_collaboration = CompanyForeignCollaboration::where('company_id',Auth::guard('company')->user()->id)->first();

    
        return view('website.company.view-company', compact('company','company_contact_details','company_key_personnels','company_product_details','company_foreign_collaboration'));


    }

}
