<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Company;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

  class CompanyExport implements FromCollection, WithMapping, WithHeadings

{

    public $company_ids;

    public function __construct($company_ids = null)
    {
        $this->company_ids = $company_ids;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        if($this->company_ids == null){
            return Company::all();
        }
        return Company::whereIn('id', $this->company_ids)->get();
    }

     /**
    * @param Invoice $invoice
    */
    public function map($company): array
    {
        return [
            
            $company->name,
            $company->contact_details->company_address,
            $company->contact_details->city,
            $company->contact_details->state,
            $company->contact_details->phone,
            $company->key_personnels->managing_director,
            $company->key_personnels->chief_executive,
            $company->key_personnels->export_in_charge,
            $company->foreign_collaboration->f_collab1,
            $company->key_personnels->managing_director,
            $company->product_details->products_manufactured,
            $company->product_details->sales_turnover,
            $company->product_details->export_turn_02_03,
            $company->contact_details->year_commencing,
        ];
    }

    public function headings(): array
    {
        return [
           
            'Name',
            'Address',
            'City',
            'State',
            'Phone',
            'Managing Director',
            'Chief Executive',
            'Export Incharge',
            'Foreign Collaboration',
            'Managing Director',
            'Products Manufactured',
            'Sales Turnover',
            'Export Turnover',
            'Year of Commencing'
        ];
    }

 
   
}
