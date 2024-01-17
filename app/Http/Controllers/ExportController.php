<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Exports\CompanyExport;
use Maatwebsite\Excel\Facades\Excel;


class ExportController extends Controller
{
    public function export_company(Request $request){
        $company_ids = $request->company_ids;
        return Excel::download(new CompanyExport($company_ids), 'ACMA Buyers Guide.xlsx');
    }
}
