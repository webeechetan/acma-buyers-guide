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
    public function handle()
    {

        $pdfPath = storage_path('app/public/CompanyData/Acma_Buyers_Guide.pdf');
        if (File::exists($pdfPath)) {
            File::delete($pdfPath);
        }
        
        $companies = Company::all();

        $view = View::make('all-company-download-pdf', compact('companies'));
        $pdf = \PDF::loadHTML($view->render());
        $pdfPath = storage_path('app/public/CompanyData/Acma_Buyers_Guide.pdf');
        $pdf->save($pdfPath);
    }

}
