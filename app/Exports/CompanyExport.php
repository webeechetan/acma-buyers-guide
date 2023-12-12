<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Company;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;

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
            $company->id,
            $company->name,
            $company->contact_details->company_address,
            $company->foreign_collaboration->f_collab1,
            $company->key_personnels->managing_director,
            $company->product_details->products_manufactured,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Address',
            'Foreign Collaboration',
            'Managing Director',
            'Products Manufactured',
        ];
    }
}
