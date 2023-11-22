<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

use App\Models\ {
    Company,
    CompanyContactDetail,
    CompanyForeignCollaboration,
    CompanyKeyPersonnel,
    CompanyProductDetails,
};

class CompanyImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        $formatted_rows = $this->format_in_assoc_array($rows);
        foreach($formatted_rows as $row){
            $company = Company::create([
                'name' => $row['company_name'],
                'address' => $row['company_address'],
                'pin' => $row['pin'],
            ]);
        }
    }

    public function format_in_assoc_array($rows){
        $companies = [];
        $companies_data_format = [
            'company_name' => '',
            'company_address' => '',
            'pin' => '',
        ];
        foreach($rows as $row){
            $companies_data_format['company_name'] = $row[0];
            $companies_data_format['company_address'] = $row[1];
            $companies_data_format['pin'] = $row[2];
            $companies[] = $companies_data_format;
        }
        return $companies;
    }
}
