<?php
namespace App\Exports;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\Font;
use App\Models\Company;

class CompanyExportWord {
    public $company_ids = [];

    public function __construct($company_ids = null)
    {
        $this->company_ids = $company_ids;
    }

    public function export($foramt = 'Word2007'){
        $companies = Company::all();

        // design a card for each company and add it to the word document
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        $fontStyle = new Font();
        $fontStyle->setBold(true);
        $fontStyle->setName('Arial');
        $fontStyle->setSize(12);

        foreach($companies as $company){
            $section->addText($company->name, $fontStyle);
            $section->addText($company->contact_details->company_address, $fontStyle);
            $section->addText($company->contact_details->city, $fontStyle);
            $section->addText($company->contact_details->state, $fontStyle);
            $section->addText($company->contact_details->phone, $fontStyle);
            $section->addText($company->key_personnels->managing_director, $fontStyle);
            $section->addText($company->key_personnels->chief_executive, $fontStyle);
            $section->addText($company->key_personnels->export_in_charge, $fontStyle);
            $section->addText($company->foreign_collaboration->f_collab1, $fontStyle);
            $section->addText($company->key_personnels->managing_director, $fontStyle);
            $section->addText($company->product_details->products_manufactured, $fontStyle);
        }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, $foramt);
        $objWriter->save(storage_path('helloWorld.docx'));
    }
}
?>