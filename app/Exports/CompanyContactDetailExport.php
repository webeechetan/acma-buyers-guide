<?php

namespace App\Exports;

use App\Models\CompanyContactDetail;
use Maatwebsite\Excel\Concerns\FromCollection;

class CompanyContactDetailExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CompanyContactDetail::all();
    }
}
