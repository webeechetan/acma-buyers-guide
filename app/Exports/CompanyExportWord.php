<?php

namespace App\Exports;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\Font;
use App\Models\Company;
use App\Models\CompanyContactDetail;
use App\Models\CompanyKeyPersonnel;
use App\Models\CompanyForeignCollaboration;

use PDF;


class CompanyExportWord
{
    public $company_ids = [];

    public function __construct($company_ids = null)
    {
        $this->company_ids = $company_ids;
    }

    public function export($format = 'Word2007')
{
    $companies = Company::with('contact_details', 'key_personnels', 'foreign_collaboration', 'product_details')->get();

 
    $phpWord = new \PhpOffice\PhpWord\PhpWord();

    foreach ($companies as $company) {

        $section = $phpWord->addSection();
        $section->addColumns(['space' => 1000, 'continuous' => false]); // Adjust space as needed

        $header = ['size' => 10, 'bold' => true];
        $subheading = ['size' => 8, 'bold' => true];

        // Title for each company
        $section->addTextBreak(1);

       // Two columns
        $section = $phpWord->addSection(
            [
                'colsNum' => 2,
                'colsSpace' => 1440,
                'breakType' => 'continuous',
            ]
        );

        $section->addText("Company: {$company->name}", $header);
        $section->addText("Phone: {$company->contact_details->phone}", $subheading);
        $section->addText("Fax: {$company->contact_details->fax}", $subheading);
        $section->addText("Email: {$company->email}", $subheading);
        $section->addText("Website: {$company->website}", $subheading);
        $section->addText("Address: {$company->contact_details->company_address}", $subheading);
        $section->addText("Managing Director: {$company->key_personnels->managing_director}", $subheading);
        $section->addText("Chief Executive: {$company->key_personnels->chief_executive}", $subheading);
        $section->addText("Year of Commencing Production: {$company->contact_details->year_commencing}", $subheading);
        $section->addText("Products Manufactured: {$company->product_details->products_manufactured}", $subheading);
        $section->addText("No of Employees: {$company->product_details->number_of_employees}", $subheading);

        
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
     
    }

        $filename = 'exported_document1.docx';
        \PhpOffice\PhpWord\Settings::setOutputEscapingEnabled(true);
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, $format);

        // Set appropriate headers for download
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Output the Word document directly to the browser
        $objWriter->save('php://output');

}



}
