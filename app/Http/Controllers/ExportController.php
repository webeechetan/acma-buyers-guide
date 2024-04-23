<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Exports\CompanyExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\View;
use App\Exports\CompanyExportPDF;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;
use Illuminate\Http\Response;



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



public function exportMultipleCompanyPDF(Request $request) {
    
    $companyIds = $request->company_ids;

    $companyIds = array_unique($companyIds);
    
    if ($companyIds && count($companyIds) > 0) {
        
        $companies = Company::whereIn('id', $companyIds)->get();

        
        if ($companies->count() > 0) {
            
            $view = view('selected-company-download-pdf', compact('companies'));
            $pdf = \PDF::loadHTML($view->render());

             $pdfPath = storage_path('app/public/Acma_Buyers_Guide.pdf');

            // $pdfPath = env('APP_URL').'/storage/Acma_Buyers_Guide.pdf';

            $pdfPathOne = env('APP_URL').'/storage/Acma_Buyers_Guide.pdf';

            $pdf->save($pdfPath);

            if (file_exists($pdfPath)) {

                $return_arr= array(
					'code'=> 1,
					'status'=>'success',
					'message'=>"Success! File downloaded successfully",
                    'path'=>$pdfPathOne
				);

            } else{
                $return_arr = array(
                    'code'=>0,
                    'status'=>'error',
                    'message'=>"Invalid Request"
                );

            }

           
        } else {
            // No companies found
            $return_arr = array(
                'code'=>0,
                'status'=>'error',
                'message'=>"Invalid Request"
            );
        }
    } else {
        // No companies selected
        $return_arr = array(
            'code'=>0,
            'status'=>'error',
            'message'=>"Invalid Request"
        );
    }
    
    echo json_encode($return_arr);exit;
}



   public function exportAllCompanyPDF(Request $request)

    {


       
        $company = auth('company')->user();
        $downloadLimit = 1;

        if ($company->download_count >= $downloadLimit) {
            // Company has reached the download limit, redirect or show an error
            $this->alert('Error', 'Free Download limit finished' , 'danger');
            return back();
        }
  
       
        // $filePath = storage_path('app/public/CompanyData/Acma_Buyers_Guide.pdf');
        // // Check if the file exists
        // if (file_exists($filePath)) {

        //     $company->download_count++;
        //     $company->saveQuietly();

          
        //     return response()->download($filePath, 'Acma_Buyers_Guide.pdf');
        // } else {
        //         $this->alert('Error', 'File Not found' , 'danger');
        //         return back();
        // }

        $pdfFiles = File::glob(storage_path('app/public/CompanyData/*.pdf'));

        // Check if any PDF files were found
        if (!empty($pdfFiles)) {
            $filePath = $pdfFiles[0]; // Assuming you only need to download the first PDF found

            $fileName = basename($filePath);

            $company->download_count++;
            $company->saveQuietly();
            // return response()->download($filePath, 'Acma_Buyers_Guide.pdf');
            return response()->download($filePath, $fileName);
        } else {
            $this->alert('Error', 'File Not found', 'danger');
            return back();
        }
   
    }



   
}
