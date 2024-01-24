<?php


namespace App\Console\Commands;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Console\Command;

use Illuminate\Support\Facades\File;

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
        // $this->generatePdf();
        // $this->info('PDF generated successfully.');

        $this->deletePdf();
        $this->info('PDF deleted successfully.');
    }

    private function generatePdf()
    {
        // Generate PDF
        $pdf = PDF::loadView('mypdf'); // replace 'pdf.template' with your actual Blade template
        $pdf->save(public_path('CompanyData/Acma Buyers Guide.pdf'));
        // $pdf->save(storage_path('app/public/CompanyData/Acma Buyers Guide.pdf'));
    }

    private function deletePdf()
    {
       
        // Delete PDF
        // $pdfPath = storage_path('app/public/CompanyData/Acma Buyers Guide.pdf');
        $pdfPath = public_path('CompanyData/Acma Buyers Guide.pdf');

        dd($pdfPath);
        
         if (File::exists($pdfPath)) {
            
            dd('if');
            File::delete($pdfPath);
        } else {
            dd('else');
            $this->error('PDF not found for deletion.');
        }
       
    }

}
