<?php

namespace App\Exports;

use App\Models\Company;
use App\Models\CompanyContactDetail;
use App\Models\CompanyForeignCollaboration;
use App\Models\CompanyKeyPersonnel;
use App\Models\CompanyProductDetails;
use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Support\Collection;

use Illuminate\Contracts\View\View;


class CompanyExportPDF implements FromCollection
{

    protected $companyId;

    public function __construct($companyId)
    {
        $this->companyId = $companyId;
    }
      
    public function collection()
    {
        // $company = Company::find($this->companyId);

        $company = Company::with('contact_details', 'foreign_collaboration','product_details','key_personnels')->find($this->companyId);
        
        $data = [
            'name' => $company->name,
            'email' => $company->email,
            'website' => $company->website,

            //Company contact details
            'company_address' => $company->contact_details->company_address,
            'pin' => $company->contact_details->pin,
            'city' => $company->contact_details->city,
            'state' => $company->contact_details->state,
            'address2' => $company->contact_details->address2,
            'address3' => $company->contact_details->address3,
            'phone' => $company->contact_details->phone,
            'fax' => $company->contact_details->fax,
            'mainaddress1' => $company->contact_details->mainaddress1,
            'mainaddress2' => $company->contact_details->mainaddress2,
            'maincity' => $company->contact_details->maincity,
            'plant_pin' => $company->contact_details->plant_pin,
            'mainstate' => $company->contact_details->mainstate,
            'plant_phone' => $company->contact_details->plant_phone,
            'plant_fax' => $company->contact_details->plant_fax,
            'plant_email' => $company->contact_details->plant_email,
            'overseas_plant_1' => $company->contact_details->overseas_plant_1,
            'overseas_plant_2' => $company->contact_details->overseas_plant_2,
            'overseas_plant_3' => $company->contact_details->overseas_plant_3,
            'otheraddress' => $company->contact_details->otheraddress,
            'otheraddress_1' => $company->contact_details->otheraddress_1,
            'otherplant_address1' => $company->contact_details->otherplant_address1,
            'otherplant_address2' => $company->contact_details->otherplant_address2,
            'otherplant_address3' => $company->contact_details->otherplant_address3,
            'year_commencing' => $company->contact_details->year_commencing,
           

            //company region
            'managing_director' => $company->key_personnels->managing_director,
            'chief_executive' => $company->key_personnels->chief_executive,
            'sales_in_charge' => $company->key_personnels->sales_in_charge,
            'export_in_charge' => $company->key_personnels->export_in_charge,
            'production_in_charge' => $company->key_personnels->production_in_charge,
            'quality_in_charge' => $company->key_personnels->quality_in_charge,
            'hrd_incharge' => $company->key_personnels->hrd_incharge,
            'rnd_incharge' => $company->key_personnels->rnd_incharge,
            'update_date' => $company->key_personnels->update_date,
            'region' => $company->key_personnels->region,

            // Add product details

            'products_manufactured' => $company->product_details->products_manufactured,
            'product2' =>  $company->product_details->product2,
            'product3' =>  $company->product_details->product3,
            'product4' =>  $company->product_details->product4,
            'scale' =>  $company->product_details->scale,
            'ssi_info' => $company->product_details->ssi_info,
            'trademark' => $company->product_details->trademark,
            'total_capital' => $company->product_details->total_capital,
            'net_investment_plant' => $company->product_details->net_investment_plant,
            'total_investment_plant' => $company->product_details->total_investment_plant,
            'sales_turnover' => $company->product_details->sales_turnover,
            's_turn_in' =>  $company->product_details->s_turn_in,
            'export_turn_02_03' => $company->product_details->export_turn_02_03,
            'export_in_mln' => $company->product_details->export_export_mln,
            'number_of_employees' => $company->product_details->number_of_employees,
            'skilled' => $company->product_details->killed,
            'semi_skilled' => $company->product_details->semi_skilled,
            'un_skilled' => $company->product_details->un_skilled,
            'contractual' => $company->product_details->contractual,
            'management_above' => $company->product_details->manangment_above,
            'other_mark1' => $company->product_details->other_mark1,
            'other_mark2' => $company->product_details->other_mark2,
            'domesticoe' => $company->product_details->domesticoe,
            'domesticoe2' => $company->product_details->domesticoe2,
            'domesticoe3' => $company->product_details->domesticoe3,
            'domesticoe4' => $company->product_details->domesticoe4,
            'domestic_tier_oe' => $company->product_details->domestic_tier_oe,
            'domestic_tier_oe1' => $company->product_details->domestic_tier_oe1,
            'domestic_tier_oe2' => $company->product_details->domestic_tier_oe2,
            'domestic_tier_oe3' => $company->product_details->domestic_tier_oe3,
            'custint1' => $company->product_details->custint1,
            'custint2' => $company->product_details->custint2,
            'custint3' => $company->product_details->custint3,
            'custint_tier1' => $company->product_details->custint_tier1,
            'custint_tier2' => $company->product_details->custint_tier2,
            'custint_tier3' => $company->product_details->custint_tier3,
            'afmkt1' => $company->product_details->afmkt1,
            'afmkt2' => $company->product_details->afmkt2,
            'afmkt3' => $company->product_details->afmkt3,

            //company foreign collaborations

            'f_collab1' => $company->foreign_collaboration->f_collab1,
            'f_prod1' => $company->foreign_collaboration->f_prod1,
            'nature1' => $company->foreign_collaboration->nature1,
            'per1' => $company->foreign_collaboration->per1,
                      
            

            'f_collab2' => $company->foreign_collaboration->f_collab2,
            'f_prod2' => $company->foreign_collaboration->f_prod2,
            'nature2' => $company->foreign_collaboration->nature2,
            'per2' => $company->foreign_collaboration->per2,
            

            'f_collab3' => $company->foreign_collaboration->f_collab3,
            'f_prod3' => $company->foreign_collaboration->f_prod3,
            'nature3' => $company->foreign_collaboration->nature3,
            'per3' => $company->foreign_collaboration->per3,


            'f_collab4' => $company->foreign_collaboration->f_collab4,
            'f_prod4' => $company->foreign_collaboration->f_prod4,
            'nature4' => $company->foreign_collaboration->nature4,
            'per4' => $company->foreign_collaboration->per4,



            'f_collab5' => $company->foreign_collaboration->f_collab5,
            'f_prod5' => $company->foreign_collaboration->f_prod5,
            'nature5' => $company->foreign_collaboration->nature5,
            'per5' => $company->foreign_collaboration->per5,



            'f_collab6' => $company->foreign_collaboration->f_collab6,
            'f_prod6' => $company->foreign_collaboration->f_prod6,
            'nature6' => $company->foreign_collaboration->nature6,
            'per6' => $company->foreign_collaboration->per6,



            'f_collab7' => $company->foreign_collaboration->f_collab7,
            'f_prod7' => $company->foreign_collaboration->f_prod7,
            'nature7' => $company->foreign_collaboration->nature7,
            'per7' => $company->foreign_collaboration->per7,



            'f_collab8' => $company->foreign_collaboration->f_collab8,
            'f_prod8' => $company->foreign_collaboration->f_prod8,
            'nature8' => $company->foreign_collaboration->nature8,
            'per8' => $company->foreign_collaboration->per8,


            'f_collab9' => $company->foreign_collaboration->f_collab9,
            'f_prod9' => $company->foreign_collaboration->f_prod9,
            'nature9' => $company->foreign_collaboration->nature9,
            'per9' => $company->foreign_collaboration->per9,


            'f_collab10' => $company->foreign_collaboration->f_collab10,
            'f_prod10' => $company->foreign_collaboration->f_prod10,
            'nature10' => $company->foreign_collaboration->nature10,
            'per10' => $company->foreign_collaboration->per10,
            
            'member' => $company->foreign_collaboration->member,
            'iso' => $company->foreign_collaboration->iso,
            'isodate' => $company->foreign_collaboration->isodate,
            'isoagency' => $company->foreign_collaboration->isoagency,
            'qs' => $company->foreign_collaboration->qs,
            'qsdate' => $company->foreign_collaboration->qsdate,
            'qsagency' => $company->foreign_collaboration->qsagency,
            'iso14' => $company->foreign_collaboration->iso14,
            'iso14date' => $company->foreign_collaboration->iso14date,
            'iso14agency' => $company->foreign_collaboration->iso14agency,
            'ts' => $company->foreign_collaboration->ts,
            'tsdate' => $company->foreign_collaboration->tsdate,
            'tsagency' => $company->foreign_collaboration->tsagency,
            'deming_award' => $company->foreign_collaboration->deming_award,
            'japan_quality_medal' => $company->foreign_collaboration->japan_quality_medal,
            'emark' => $company->foreign_collaboration->emark,
            'bismark' => $company->foreign_collaboration->bismark,

          
 

        ];

        return new Collection([$data]);
    }
   
}
