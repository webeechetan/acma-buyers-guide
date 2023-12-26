<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyUpdateRequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        
        $ProfileapprovedCount = CompanyUpdateRequest::where('status', 'approved')->count();
        $ProfilependingCount = CompanyUpdateRequest::where('status', 'pending')->count();

        $totalCompanyCount = Company::count();
        $lastestFiveCompanies = Company::orderBy('created_at', 'desc')->limit(5)->get();
        return view('admin.dashboard', compact('totalCompanyCount','lastestFiveCompanies','ProfilependingCount','ProfileapprovedCount'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
