<?php
namespace App\Helpers;
use App\Models\  {Company , CompanyContactDetail , CompanyKeyPersonnel , CompanyProductDetails , CompanyForeignCollaboration};
use Illuminate\Support\Facades\Auth;


class CompanyHelper { 

    public static function generateCompanyDataAsNull($company_id){
        $company_contact_details = CompanyContactDetail::where('company_id',$company_id)->first();
        $company_key_personnels = CompanyKeyPersonnel::where('company_id',$company_id)->first();
        $company_product_details = CompanyProductDetails::where('company_id',$company_id)->first();
        $company_foreign_collaboration = CompanyForeignCollaboration::where('company_id',$company_id)->first();

        if(!$company_contact_details){
            $company_contact_detail = new CompanyContactDetail();
            $company_contact_detail->company_id = $company_id;
            $company_contact_detail->save();
        }

        if(!$company_key_personnels){
            $company_key_personnel = new CompanyKeyPersonnel();
            $company_key_personnel->company_id = $company_id;
            $company_key_personnel->save();
        }

        if(!$company_product_details){
            $company_product_detail = new CompanyProductDetails();
            $company_product_detail->company_id = $company_id;
            $company_product_detail->save();
        }

        if(!$company_foreign_collaboration){
            $company_foreign_collaboration = new CompanyForeignCollaboration();
            $company_foreign_collaboration->company_id = $company_id;
            $company_foreign_collaboration->save();
        }
    }

}

?>