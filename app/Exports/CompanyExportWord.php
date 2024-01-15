<?php

namespace App\Exports;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\Font;
use App\Models\Company;
use App\Models\CompanyContactDetail;
use App\Models\CompanyKeyPersonnel;
use App\Models\CompanyForeignCollaboration;



class CompanyExportWord
{
    public $company_ids = [];

    public function __construct($company_ids = null)
    {
        $this->company_ids = $company_ids;
    }

    public function export($format = 'Word2007')
{
    //$companies = Company::all();

    $companies = Company::with('contact_details', 'key_personnels', 'foreign_collaboration', 'product_details')->get();

 
    $phpWord = new \PhpOffice\PhpWord\PhpWord();

    foreach ($companies as $company) {

      //  dd($company->key_personnels->chief_executive);
        $section = $phpWord->addSection();
        
        $header = ['size' => 10, 'bold' => true];

        // Title for each company
        $section->addTextBreak(1);
        $section->addText("Company: {$company->name}", $header);

        // Table for each company
        $fancyTableStyleName = 'Fancy Table';
        $fancyTableStyle = [
            'borderSize' => 1,
            'borderColor' => '006699',
            'cellMargin' => 80,
            'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER,
            'cellSpacing' => 50,
        ];
        $fancyTableFirstRowStyle = [
            'borderBottomSize' => 18,
            'borderBottomColor' => '0000FF',
            'bgColor' => '66BBFF',
        ];
        $fancyTableCellStyle = ['valign' => 'center'];
        $fancyTableFontStyle = ['bold' => true];

        $phpWord->addTableStyle($fancyTableStyleName, $fancyTableStyle, $fancyTableFirstRowStyle);
        // Set the left margin to 0
        $table = $section->addTable($fancyTableStyleName);

        // Header row
        $table->addRow(900);
        $table->addCell(2000, $fancyTableCellStyle)->addText('Company Details', $fancyTableFontStyle);
        $table->addCell(2000, $fancyTableCellStyle)->addText('Company Contact Details', $fancyTableFontStyle);

        // Data rows
        // there should be a card in each cell of the table with the company details


        $table->addRow();
        $table->addCell(2000)->addText($company->name);
        $table->addCell(2000)->addText($company->contact_details->company_address);
        $table->addCell(2000)->addText($company->key_personnels->managing_director);

     
    }

    // Save the Word document
    $filename = 'exported_document1.docx';
    \PhpOffice\PhpWord\Settings::setOutputEscapingEnabled(true);
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, $format);
    $objWriter->save(storage_path($filename));

   
    return response()->download(storage_path($filename));
}



}
