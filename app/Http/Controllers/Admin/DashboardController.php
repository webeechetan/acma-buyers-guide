<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyUpdateRequest;
use App\Models\CompanyKeyPersonnel;
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

        $regionsCount = CompanyKeyPersonnel::select('region', \DB::raw('count(*) as count'))
            ->whereNotNull('region')
            ->where('region', '<>', '')
            ->groupBy('region')
            ->get();
        
        $lastestFiveCompanies = Company::orderBy('created_at', 'desc')->limit(5)->get();
        return view('admin.dashboard', compact('totalCompanyCount','lastestFiveCompanies','ProfilependingCount','ProfileapprovedCount','regionsCount'));
    }

}
