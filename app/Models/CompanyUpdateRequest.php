<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CompanyKeyPersonnel;
use App\Models\Company;
use App\Models\CompanyContactDetail;
use App\Models\CompanyProductDetails;
use App\Models\CompanyForeignCollaboration;


class CompanyUpdateRequest extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function approve(){
        $data = json_decode($this->data, true);
        $company = Company::find($this->company_id);
        $company_contact_detail = CompanyContactDetail::where('company_id', $this->company_id)->first();
        $company_key_personnel = CompanyKeyPersonnel::where('company_id', $this->company_id)->first();
        $company_product_detail = CompanyProductDetails::where('company_id', $this->company_id)->first();
        $company_foreign_collaboration = CompanyForeignCollaboration::where('company_id', $this->company_id)->first();

        if($this->modal == 'CompanyContactDetail'){
            foreach ($data as $key => $value) {
                $company_contact_detail->$key = $value['new'];
            }
            try{
                $company_contact_detail->save();
                $this->status = 'approved';
                $this->save();
                return true;
            }catch(\Exception $e){
                return false;
            }

        }

        if($this->modal == 'CompanyKeyPersonnel'){
            foreach ($data as $key => $value) {
                $company_key_personnel->$key = $value['new'];
            }
            try{
                $company_key_personnel->save();
                $this->status = 'approved';
                $this->save();
                return true;
            }catch(\Exception $e){
                return false;
            }
        }

        if($this->modal == 'CompanyProductDetails'){
            foreach ($data as $key => $value) {
                $company_product_detail->$key = $value['new'];
            }
            try{
                $company_product_detail->save();
                $this->status = 'approved';
                $this->save();
                return true;
            }catch(\Exception $e){
                return false;
            }
        }

        if($this->modal == 'CompanyForeignCollaboration'){
            foreach ($data as $key => $value) {
                $company_foreign_collaboration->$key = $value['new'];
            }
            try{
                $company_foreign_collaboration->save();
                $this->status = 'approved';
                $this->save();
                return true;
            }catch(\Exception $e){
                return false;
            }
        }

        return false;

    }
}
