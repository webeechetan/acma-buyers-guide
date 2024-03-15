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

        $company = Company::find($id);

        $view = View::make('website.company.companydownload-pdf', compact('company'));

        // Generate PDF from the Blade view
        $pdf = \PDF::loadHTML($view->render());

        // Save the PDF file to a temporary location
        $pdfPath = storage_path('app/Acma_Buyers_Guide.pdf');
        $pdf->save($pdfPath);

        // Return the file download response
        return response()->download($pdfPath, 'Acma Buyers Guide.pdf')->deleteFileAfterSend(true);
    }


    public function exportMultipleCompanyPDF(Request $request){

       
       // $company_ids = $request->company_ids;

       $company_ids = array_unique($request->company_ids);

        if ($company_ids && count($company_ids) > 0) {
            $companies = Company::whereIn('id', $company_ids)->get();

        
            if ($companies->count() > 0) {
                $view = View::make('selected-company-download-pdf', compact('companies'));
        
                $pdf = \PDF::loadHTML($view->render());
        
                $pdfPath = storage_path('app/Acma_Buyers_Guide.pdf');
                $pdf->save($pdfPath);
                session()->put('downloaded', true);
        
                return response()->download($pdfPath, 'Acma Buyers Guide.pdf')->deleteFileAfterSend(true);

            } else {
                return 'No companies found';
            }
        } else {
            return redirect()->route('company.dashboard');
        }

        return redirect()->route('company.dashboard');
       
   }


   
   public function exportAllCompanyPDF(Request $request)
   
     {
       
        $company = auth('company')->user();
        $downloadLimit = 5;

        if ($company->download_count >= $downloadLimit) {
            // Company has reached the download limit, redirect or show an error
            $this->alert('Error', 'Free Download limit finished' , 'danger');
            return back();
        }
  
        $filePath = storage_path('app/public/CompanyData/Acma_Buyers_Guide.pdf');
        // Check if the file exists
        if (file_exists($filePath)) {

            $company->download_count++;
            $company->saveQuietly();
            // Provide headers for the download
            return response()->download($filePath, 'Acma_Buyers_Guide.pdf');
        } else {
                $this->alert('Error', 'File Not found' , 'danger');
                return back();
        }
   
    }



   
}
