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
use App\Models\CompanyFproductDetails;

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
            return redirect()->route('company.fillUpDetails');
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

        $company_contact_details = CompanyContactDetail::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_key_personnels = CompanyKeyPersonnel::where('company_id',Auth::guard('company')->user()->id)->first();

        if(!$company_contact_details){
            $company_contact_detail = new CompanyContactDetail();
            $company_contact_detail->company_id = Auth::guard('company')->user()->id;
            $company_contact_detail->save();
        }

        if(!$company_key_personnels){
            $company_key_personnel = new CompanyKeyPersonnel();
            $company_key_personnel->company_id = Auth::guard('company')->user()->id;
            $company_key_personnel->save();
        }

        $company_contact_details = CompanyContactDetail::where('company_id',Auth::guard('company')->user()->id)->first();
        $company_key_personnels = CompanyKeyPersonnel::where('company_id',Auth::guard('company')->user()->id)->first();

        return view('website.auth.fill-up-details', compact('company_contact_details','company_key_personnels'));
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
    public function store(Request $request)
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
            $this->alert('Success', 'Company Registered Successfully' , 'success');
            return redirect()->route('company.login');
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
        $company_fproduct_detail = CompanyFproductDetails::where('company_id',$company_id)->first();

        $success = true;


        try {

                if($company_contact_detail){
                    $company_contact_detail->update($data);
                }else{
                    $data['company_id'] = $company_id;
                    CompanyContactDetail::create($data);
                }

                if($company_key_personnel){
                    $company_key_personnel->update($data);
                }else{
                    $data['company_id'] = $company_id;
                    CompanyKeyPersonnel::create($data);
                }

                if($company_product_detail){
                    $company_product_detail->update($data);
                }else{
                    $data['company_id'] = $company_id;
                    CompanyProductDetails::create($data);
                }

                if($company_fproduct_detail){
                    $company_fproduct_detail->update($data);
                }else{
                    $data['company_id'] = $company_id;
                    CompanyFProductDetails::create($data);

                }
            }catch (\Exception $e) {

                $success = false;

            }

            

            if($success){

                $response = ['status' => 'success',
                             'message' => 'Data Uploaded successfully',
                             'code' => 1];
            }else{
                $response = ['status' => 'error',
                             'message' => 'Some error occured',
                             'code' => 0];
            }


        return response()->json($response);

        
    }

    public function dashboard() {
    
        return view('admin.companies.dashboard');
    
    }

}
