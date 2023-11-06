<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\DataTables\CompanyDataTable;
use App\Models\CompanyContactDetail;
use App\Models\CompanyKeyPersonnel;
use App\Models\CompanyProductDetails;
use App\Models\CompanyForeignCollaboration;
use App\Helpers\CompanyHelper;

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
        $company_contact_details = CompanyContactDetail::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_key_personnels = CompanyKeyPersonnel::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_product_details = CompanyProductDetails::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_foreign_collaboration = CompanyForeignCollaboration::where('company_id',Auth::guard('company')->user()->id)->first();

        return view('website.auth.fill-up-details', compact('company_contact_details','company_key_personnels','company_product_details','company_foreign_collaboration'));
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
            return redirect()->route('company.payments');
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
        //
    }

    public function fillUpDetailsStore(Request $request){
        $company_id = Auth::guard('company')->user()->id;
        $data = $request->all();

        $company_contact_detail = CompanyContactDetail::where('company_id',$company_id)->first();
        $company_key_personnel = CompanyKeyPersonnel::where('company_id',$company_id)->first();

        $company_product_detail = CompanyProductDetails::where('company_id',$company_id)->first();
      //  $company_fproduct_detail = CompanyFproductDetails::where('company_id',$company_id)->first();
        
        $company_foreign_collaboration = CompanyForeignCollaboration::where('company_id',$company_id)->first();
        
        
        try{
            $company_contact_detail->update($data);
            $company_key_personnel->update($data);
            $company_product_detail->update($data);
            $company_foreign_collaboration->update($data);

            return response()->json([
                'success' => true,
                'message' => 'Details Updated Successfully',
                'data' => null
            ]);

        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'data' => null
            ]);
        }

        
    }

    public function dashboard(Request $request) {

        if($request->has('name')){
            $companies = Company::with('key_personnels','contact_details');
            $companies->where('name','like','%'.$request->name.'%');
            $companies = $companies->get();
        }else{
            $companies = Company::with('key_personnels','contact_details')->get();
        }

        return view('admin.companies.dashboard', compact('companies'));
    
    }


    public function logout()
    {
        $this->alert('success', 'You are logged out successfully','success');
        Auth::guard('company')->logout();
        return redirect()->route('company.login');
    }

}
