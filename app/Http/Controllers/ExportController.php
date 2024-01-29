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
        $company_ids = $request->company_ids;
           
        $companies = Company::whereIn('id', $company_ids)->get();

        $view = View::make('selected-company-download-pdf', compact('companies'));

        // Generate PDF from the Blade view
        $pdf = \PDF::loadHTML($view->render());

         // Save the PDF file to a temporary location
         $pdfPath = storage_path('app/Acma_Buyers_Guide.pdf');
         $pdf->save($pdfPath);
 
         // Return the file download response
         return response()->download($pdfPath, 'Acma Buyers Guide.pdf')->deleteFileAfterSend(true);
        //   // Generate PDF
        //  $pdf = PDF::loadView('book-format-pdf', $companies );
     

       
   }


   
   public function exportAllCompanyPDF(Request $request){
       

    $company = auth('company')->user();
    $downloadLimit = 5;

    if ($company->download_count >= $downloadLimit) {
        // Company has reached the download limit, redirect or show an error
        $this->alert('Error', 'Download limit finished' , 'danger');
        return back();
    }
    

    $company->download_count++;
    $company->saveQuietly();

    //  $companies = Company::all();

    //$customersWithOrders = Customer::with('')->select('customer_id', 'customer_name', 'email')->get();

    // $companies = Company::with([
    //     'contact_details' => function ($query) {
    //         $query->select('state', 'pin', 'city');
    //     },
    //     'key_personnels' => function ($query) {
    //         $query->select('managing_director', 'chief_executive', 'sales_in_charge');
    //     }
    // ])->select('id', 'name', 'email', 'website')->get();
    

     $companies = Company::take(100)->get();

    $view = View::make('all-company-download-pdf', compact('companies'));
    $pdf = \PDF::loadHTML($view->render());

     // Save the PDF file to a temporary location
     $pdfPath = storage_path('app/Acma2_Buyers_Guide.pdf');
     $pdf->save($pdfPath);

     
     // Return the file download response
     return response()->download($pdfPath, 'Acma2 Buyers Guide.pdf')->deleteFileAfterSend(true);

   
}



   
}
