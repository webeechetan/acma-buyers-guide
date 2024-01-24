<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Exports\CompanyExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\View;


use App\Exports\CompanyExportPDF;

use Illuminate\Support\Collection;


class ExportController extends Controller
{
    public function export_company(Request $request){

        $company_ids = $request->company_ids;
        return Excel::download(new CompanyExport($company_ids), 'ACMA Buyers Guide.xlsx');
    }




    public function exportToPDF($id)
    {
        $export = new CompanyExportPDF($id);

        // Retrieve the data from the export class
        $collection = $export->collection()->first();

        // Pass the data to a Blade view for customization
        $view = View::make('website.company.companydownload-pdf', compact('collection'));

        // Generate PDF from the Blade view
        $pdf = \PDF::loadHTML($view->render());

        // Save the PDF file to a temporary location
        $pdfPath = storage_path('app/Acma_Buyers_Guide.pdf');
        $pdf->save($pdfPath);

        // Return the file download response
        return response()->download($pdfPath, 'Acma Buyers Guide.pdf')->deleteFileAfterSend(true);
    }

}
