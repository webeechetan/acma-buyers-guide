<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guest $guest)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {    
        $company = Company::find($id);

        if ($company) {
            //here I am removing the company update request table related data
            foreach ($company->company_update_requests as $updatelogs) {
               $updatelogs->delete();
            }
            
            
            $company->delete();
    
            $this->alert('Success', 'Company and related data deleted successfully', 'success');
            return redirect()->route('admin.companies');
        } else {
            $this->alert('Error', 'Invalid details', 'danger');
            return redirect()->back();
        }
    }

   

}
