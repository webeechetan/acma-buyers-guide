<?php

namespace App\Exports;

use App\Models\Company;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class AdminCompanyExport implements FromCollection, WithHeadings ,WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $companyIds;

    public function __construct($companyIds = null)
    {
        $this->companyIds = $companyIds;
    }

   
    public function collection()
    {


        if ($this->companyIds) {
           
            $companies = Company::with('key_personnels', 'contact_details', 'product_details', 'foreign_collaboration')
            ->whereIn('id', $this->companyIds)
            ->get();
     
        }else{

        $companies = Company::with('key_personnels', 'contact_details', 'product_details', 'foreign_collaboration')->get();

        }
      
        $data = [];

        foreach ($companies as $company) {
            $rowData = [
                'Company Name' => $company->name,
                'Company Email' => $company->email,
                'Website' => $company->website,
                'Company Address' => optional($company->contact_details)->company_address,
                'Pin' => optional($company->contact_details)->pin,
                'City' => optional($company->contact_details)->city,
                'State' => optional($company->contact_details)->state,
                'Image' => optional($company->contact_details)->image,
                'Address 2' => optional($company->contact_details)->address2,
                'Address 3' => optional($company->contact_details)->address3,
                'Phone' => optional($company->contact_details)->phone,
                'Fax' => optional($company->contact_details)->fax,
                'mainaddress1' => optional($company->contact_details)->mainaddress1,
                'mainaddress2' => optional($company->contact_details)->mainaddress2,
                'maincity' => optional($company->contact_details)->maincity,
                'plantpin' => optional($company->contact_details)->plant_pin,
                'mainstate' => optional($company->contact_details)->mainstate,
                'plant_phone' => optional($company->contact_details)->plant_phone,
                'plant_fax' => optional($company->contact_details)->plant_fax,
                'plant_email' => optional($company->contact_details)->plant_email,
                'overseas_plant_1' => optional($company->contact_details)->overseas_plant_1,
                'overseas_plant_2' => optional($company->contact_details)->overseas_plant_2,
                'overseas_plant_3' => optional($company->contact_details)->overseas_plant_3,
                'otheraddress' => optional($company->contact_details)->otheraddress,
                'otheraddress_1' => optional($company->contact_details)->otheraddress_1,
                'otherplant_address1' => optional($company->contact_details)->otherplant_address1,
                'otherplant_address2' => optional($company->contact_details)->otherplant_address2,
                'otherplant_address3' => optional($company->contact_details)->otherplant_address3,
                'year_commencing' => optional($company->contact_details)->year_commencing,
               
                // Key Personnel 
                'managing_directory' => optional($company->key_personnels)->managing_directory,
                'chief_executive' => optional($company->key_personnels)->chief_executive,
                'sales_in_charge' => optional($company->key_personnels)->sales_in_charge,
                'export_in_charge' => optional($company->key_personnels)->export_in_charge,
                'production_in_charge' => optional($company->key_personnels)->production_in_charge,
                'quality_in_charge' => optional($company->key_personnels)->quality_in_charge,
                'hrd_incharge' => optional($company->key_personnels)->hrd_incharge,
                'rnd_incharge' => optional($company->key_personnels)->rnd_incharge,
                'update_date' => optional($company->key_personnels)->update_date,
                'Region' => optional($company->key_personnels)->region,
                // Production table data

                'Products_manufactured' => optional($company->product_details)->products_manufactured,
                'product2' => optional($company->product_details)->product2,
                'product3' => optional($company->product_details)->product3,
                'product4' => optional($company->product_details)->product4,
                'scale' => optional($company->product_details)->scale,
                'ssi_info' => optional($company->product_details)->ssi_info,
                'trademark' => optional($company->product_details)->trademark,
                'total_capital' => optional($company->product_details)->total_capital,
                'net_investment_plant' => optional($company->product_details)->net_investment_plant,
                'total_investment_plant' => optional($company->product_details)->total_investment_plant,
                'sales_turnover' => optional($company->product_details)->sales_turnover,
                's_turn_in' => optional($company->product_details)->s_turn_in,
                'export_turn_02_03' => optional($company->product_details)->export_turn_02_03,
                'export_in_mln' => optional($company->product_details)->export_in_mln,
                'number_of_employees' => optional($company->product_details)->number_of_employees,
                'skilled' => optional($company->product_details)->skilled,
                'semi_skilled' => optional($company->product_details)->semi_skilled,
                'un_skilled' => optional($company->product_details)->un_skilled,
                'contractual' => optional($company->product_details)->contractual,
    
                'management_above' => optional($company->product_details)->management_above,
                'other_mark1' => optional($company->product_details)->other_mark1,
                'other_mark2' => optional($company->product_details)->other_mark2,
                'domesticoe' => optional($company->product_details)->domesticoe,
                'domesticoe1' => optional($company->product_details)->domesticoe1,
                'domesticoe2' => optional($company->product_details)->domesticoe2,
                'domesticoe3' => optional($company->product_details)->domesticoe3,
                'domesticoe4' => optional($company->product_details)->domesticoe4,
                'domestic_tier_oe' => optional($company->product_details)->domestic_tier_oe,
                'domestic_tier_oe1' => optional($company->product_details)->domestic_tier_oe1,
                'domestic_tier_oe2' => optional($company->product_details)->domestic_tier_oe2,
                'domestic_tier_oe3' => optional($company->product_details)->domestic_tier_oe3,
                'custin1' => optional($company->product_details)->custin1,
                'custin2' => optional($company->product_details)->custin2,
                'custin3' => optional($company->product_details)->custin3,
                'custint_tier1' => optional($company->product_details)->custint_tier1,
                'custint_tier2' => optional($company->product_details)->custint_tier2,
                'custint_tier3' => optional($company->product_details)->custint_tier3,
                'afmkt1' => optional($company->product_details)->afmkt1,
                'afmkt2' => optional($company->product_details)->afmkt2,
                'afmkt3' => optional($company->product_details)->afmkt3,
                
                //Foreign Collaboratoin

                'f_collab1' => optional($company->foreign_collaboration)->f_collab1,
                'f_prod1' => optional($company->foreign_collaboration)->f_prod1,
                'nature1' => optional($company->foreign_collaboration)->nature1,
                'per1' => optional($company->foreign_collaboration)->per1,

                'f_collab2' => optional($company->foreign_collaboration)->f_collab2,
                'f_prod2' => optional($company->foreign_collaboration)->f_prod2,
                'nature2' => optional($company->foreign_collaboration)->nature2,
                'per2' => optional($company->foreign_collaboration)->per2,

                'f_collab3' => optional($company->foreign_collaboration)->f_collab3,
                'f_prod3' => optional($company->foreign_collaboration)->f_prod3,
                'nature3' => optional($company->foreign_collaboration)->nature3,
                'per3' => optional($company->foreign_collaboration)->per3,

                'f_collab4' => optional($company->foreign_collaboration)->f_collab4,
                'f_prod4' => optional($company->foreign_collaboration)->f_prod4,
                'nature4' => optional($company->foreign_collaboration)->nature4,
                'per4' => optional($company->foreign_collaboration)->per4,

                'f_collab5' => optional($company->foreign_collaboration)->f_collab5,
                'f_prod5' => optional($company->foreign_collaboration)->f_prod5,
                'nature5' => optional($company->foreign_collaboration)->nature5,
                'per5' => optional($company->foreign_collaboration)->per5,

                'f_collab6' => optional($company->foreign_collaboration)->f_collab6,
                'f_prod6' => optional($company->foreign_collaboration)->f_prod6,
                'nature6' => optional($company->foreign_collaboration)->nature6,
                'per6' => optional($company->foreign_collaboration)->per6,

                'f_collab7' => optional($company->foreign_collaboration)->f_collab7,
                'f_prod7' => optional($company->foreign_collaboration)->f_prod7,
                'nature7' => optional($company->foreign_collaboration)->nature7,
                'per7' => optional($company->foreign_collaboration)->per7,

                'f_collab8' => optional($company->foreign_collaboration)->f_collab8,
                'f_prod8' => optional($company->foreign_collaboration)->f_prod8,
                'nature8' => optional($company->foreign_collaboration)->nature8,
                'per8' => optional($company->foreign_collaboration)->per8,

                'f_collab9' => optional($company->foreign_collaboration)->f_collab9,
                'f_prod9' => optional($company->foreign_collaboration)->f_prod9,
                'nature9' => optional($company->foreign_collaboration)->nature9,
                'per9' => optional($company->foreign_collaboration)->per9,

                'f_collab10' => optional($company->foreign_collaboration)->f_collab10,
                'f_prod10' => optional($company->foreign_collaboration)->f_prod10,
                'nature0' => optional($company->foreign_collaboration)->nature10,
                'per10' => optional($company->foreign_collaboration)->per10,
                'member' => optional($company->foreign_collaboration)->member,
                'iso' => optional($company->foreign_collaboration)->iso,
                'isodate' => optional($company->foreign_collaboration)->isodate,
                'isoagency' => optional($company->foreign_collaboration)->isoagency,
                'qs' => optional($company->foreign_collaboration)->qs,
                'qsdate' => optional($company->foreign_collaboration)->qsdate,
                'qsagency' => optional($company->foreign_collaboration)->qsagency,
                'iso14' => optional($company->foreign_collaboration)->iso14,
                'iso14date' => optional($company->foreign_collaboration)->iso14date,
                'iso14agency' => optional($company->foreign_collaboration)->iso14agency,
                'ts' => optional($company->foreign_collaboration)->ts,
                'tsdate' => optional($company->foreign_collaboration)->tsdate,
                'tsagency' => optional($company->foreign_collaboration)->tsagency,
                'deming_award' => optional($company->foreign_collaboration)->deming_award,
                'japan_qualit_medal' => optional($company->foreign_collaboration)->japan_qualit_medal,
                'emark' => optional($company->foreign_collaboration)->emark,
                'bismark' => optional($company->foreign_collaboration)->bismark,

                
            ];

            $data[] = $rowData;
        }

        return collect($data);
    }


    public function headings(): array
    {
        return [
            
            'Company Name',
            'Email',
            'Website',
            'Company Address',
            'Pin',
            'City',
            'State',
            'Image',
            'Address 2',
            'Address 3',
            'Phone',
            'Fax',
            'Main Address1',
            'Main Address2',
            'Main City',
            'Plant Pin',
            'Main State',
            'Plant Phone',
            'Plant Fax',
            'Plant Email',
            'Overseas Plant1',
            'Overseas Plant2',
            'Overseas Plant3',
            'Other Address',
            'Other Address1',
            'OtherPlant Address1',
            'OtherPlant Address2',
            'OtherPlant Address3',
            'Year of Commencing',
            'Managing Director',
            'Chief Executive',
            'Sales In Charge',
            'Export In Charge',
            'Productio In Charge',
            'Quality In Charge',
            'HRD In Charge',
            'R&D In Charge',
            'Update Year',
            'Region',
            'Products Manufacturered',
            'Product2',
            'Product3',
            'Product4',
            'Scale',
            'SSI Info',
            'TradeMark',
            'Total Capital',
            'Net Investment Plant',
            'Total Investment Plant',
            'Sales Turnover In Lakhs',
            'Sales Turnover in $Mln',
            'Export Turnover in Lakhs',
            'Export Turnover in $Mln',
            'Number of Employees',
            'Skilled',
            'Semi Skilled',
            'Un-Skilled',
            'Contractual',
            'Management and above',
            'Other Mark1',
            'Other Mark2',
            'Domesticoe',
            'Domesticoe1',
            'Demesticoe2',
            'Demesticoe3',
            'Demesticoe4',
            'Domestic Tier Oe',
            'Domestic Tier oe1',
            'Demestic Tier oe2',
            'Domestic Tier oe3',
            'Customer Intl1',
            'Customer Intl2',
            'Customer Intl3',
            'Customer Intl Tier1',
            'Customer Intl Tier2',
            'Customer Intl Tier3',
            'After Mkt 1',
            'After Mkt 2',
            'After Mkt 3',
            'Foreign Collab1',
            'Foreign Product1',
            'Nature1',
            'Percentage1',
            'Foreign Collab2',
            'Foreign Product2',
            'Nature2',
            'Percentage2',
            'Foreign Collab3',
            'Foreign Product3',
            'Nature3',
            'Percentage3',
            'Foreign Collab4',
            'Foreign Product4',
            'Nature4',
            'Percentage4',
            'Foreign Collab5',
            'Foreign Product5',
            'Nature5',
            'Percentage5',
            'Foreign Collab6',
            'Foreign Product6',
            'Nature6',
            'Percentage6',
            'Foreign Collab7',
            'Foreign Product7',
            'Nature7',
            'Percentage7',
            'Foreign Collab1',
            'Foreign Product1',
            'Nature1',
            'Percentage1',
            'Foreign Collab9',
            'Foreign Product9',
            'Nature9',
            'Percentage9',
            'Foreign Collab10',
            'Foreign Product10',
            'Nature10',
            'Percentage10',
            'Member',
            'ISO',
            'ISO Date',
            'ISO Agency',
            'QS',
            'QS Date',
            'QS Agency',
            'ISO 14',
            'ISO 14 Date',
            'ISO 14 Agency',
            'TS',
            'TS Date',
            'TS Agency',
            'Deming Award',
            'Japan Qualit Medal',
            'Emark',
            'BisMark',
            
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:ZZ1')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
        ]);
    }

}
