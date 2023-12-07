<?php

namespace App\Http\Controllers;

use App\Exports\CompaniesExport;
use App\Models\CompanyContactDetail;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CompanyContactDetailController extends Controller
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
    public function show(CompanyContactDetail $companyContactDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyContactDetail $companyContactDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyContactDetail $companyContactDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyContactDetail $companyContactDetail)
    {
        //
    }

    public function export()
    {
        return Excel::download(new CompaniesExport, 'Companies.xlsx');
    }
}
