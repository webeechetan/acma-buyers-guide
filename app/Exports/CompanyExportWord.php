<?php

namespace App\Exports;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\Font;
use App\Models\Company;

class CompanyExportWord
{
    public $company_ids = [];

    public function __construct($company_ids = null)
    {
        $this->company_ids = $company_ids;
    }

    public function export($format = 'Word2007')
    {
        $companies = Company::all();
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $header = ['size' => 16, 'bold' => true];

        $filler = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '
            . 'Nulla fermentum, tortor id adipiscing adipiscing, tortor turpis commodo. '
            . 'Donec vulputate iaculis metus, vel luctus dolor hendrerit ac. '
            . 'Suspendisse congue congue leo sed pellentesque.';

        // Normal
        $section = $phpWord->addSection();
        $section->addText("Normal paragraph. {$filler}");

        // Two columns
        $section = $phpWord->addSection(
            [
                'colsNum' => 2,
                'colsSpace' => 1440,
                'breakType' => 'continuous',
            ]
        );
        $section->addText("Two columns, one inch (1440 twips) spacing. {$filler}");

        // Normal
        $section = $phpWord->addSection(['breakType' => 'continuous']);
        $section->addText("Normal paragraph again. {$filler}");

        // Three columns
        $section = $phpWord->addSection(
            [
                'colsNum' => 3,
                'colsSpace' => 720,
                'breakType' => 'continuous',
            ]
        );
        $section->addText("Three columns, half inch (720 twips) spacing. {$filler}");

        // Normal
        $section = $phpWord->addSection(['breakType' => 'continuous']);
        $section->addText("Normal paragraph again. {$filler}");

        // Save the Word document
        $filename = 'exported_document.docx';
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, $format);
        $objWriter->save(storage_path($filename));

        // Provide the download link for the user
        return response()->download(storage_path($filename));
    }
}
