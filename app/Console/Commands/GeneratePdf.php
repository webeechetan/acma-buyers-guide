<?php


namespace App\Console\Commands;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use App\Models\Company;
use Illuminate\Support\Facades\View;


class GeneratePdf extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-pdf';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    // public function handle()
    // {

    //     $pdfFileName = 'Acma_Buyers_Guide_' . date('Y-m-d_H-i-s') . '.pdf';
    //     $pdfPath = storage_path('app/public/CompanyData/' . $pdfFileName);


    //     $isFile = storage_path('app/public/CompanyData/*.pdf');

    //     // Use glob() to get an array of all PDF files in the directory
    //     $isFile = glob($isFile);


    //     //$pdfPath = storage_path('app/public/CompanyData/Acma_Buyers_Guide.pdf');
    //     if (File::exists($isFile)) {
    //         File::delete($isFile);
    //     }

        
        
    //     $companies = Company::all();

    //     $view = View::make('all-company-download-pdf', compact('companies'));
    //     $pdf = \PDF::loadHTML($view->render());
    //     //$pdfPath = storage_path('app/public/CompanyData/Acma_Buyers_Guide.pdf');
    //     $pdf->save($pdfPath);
    // }

    public function handle()
{
    $pdfFileName = 'Acma_Buyers_Guide_' . date('Y-m-d_H-i-s') . '.pdf';
    $pdfPath = storage_path('app/public/CompanyData/' . $pdfFileName);

    // Check if any PDF files exist in the directory
    $pdfFiles = glob(storage_path('app/public/CompanyData/*.pdf'));

    // Check if any PDF files were found
    if (!empty($pdfFiles)) {
        // Iterate over each found PDF file and delete it
        foreach ($pdfFiles as $file) {
            File::delete($file);
            $this->info("Deleted existing PDF file: $file");
        }
    }

    $companies = Company::all();

    $view = View::make('all-company-download-pdf', compact('companies'));
    $pdf = \PDF::loadHTML($view->render());
    $pdf->save($pdfPath);
    $this->info("New PDF file saved: $pdfPath");
}


}
