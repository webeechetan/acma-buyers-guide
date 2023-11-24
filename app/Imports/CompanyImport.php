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
            
          
            $company = new Company();
            $company->name = $row['company_name'];
            $company->email = $row['email'];
            $company->save();


            $company_contact_details = new CompanyContactDetail();

            $company_contact_details->company_id = $company->id;
            $company_contact_details->company_name = $company->name; 
            $company_contact_details->company_address = $row['company_address'];
            $company_contact_details->pin = $row['pin'];
            $company_contact_details->phone = $row['phone'];
            $company_contact_details->fax = $row['fax'];
            $company_contact_details->website = $row['website'];
            $company_contact_details->website_address = $row['website_address'];
            $company_contact_details->main_plant_address = $row['main_plant_address'];
            $company_contact_details->plant_pin = $row['plant_pin'];
            $company_contact_details->plant_phone = $row['plant_phone'];
            $company_contact_details->plant_fax = $row['plant_fax'];
            $company_contact_details->plant_email = $row['plant_email'];
            $company_contact_details->plant_website = $row['plant_website'];
            $company_contact_details->overseas_plant_address = $row['overseas_plant_address'];
            $company_contact_details->other_plant_address = $row['other_plant_address'];
            $company_contact_details->overseas_plant_1 = $row['overseas_plant_1'];
            $company_contact_details->overseas_plant_2 = $row['overseas_plant_2'];
            $company_contact_details->overseas_plant_3 = $row['overseas_plant_3'];
            $company_contact_details->otheraddress = $row['otheraddress'];
            $company_contact_details->otheraddress_1 = $row['otheraddress_1'];
            $company_contact_details->otherplant_address1 = $row['otherplant_address1'];
            $company_contact_details->otherplant_address2 = $row['otherplant_address2'];
            $company_contact_details->otherplant_address3 = $row['otherplant_address3'];
            $company_contact_details->year_commencing = $row['year_commencing'];
           
            $company_contact_details->save();

            $CompanyKeyPersonnel = new CompanyKeyPersonnel();
            $CompanyKeyPersonnel->company_id = $company->id;
            $CompanyKeyPersonnel->managing_director = $row['managing_director'];
            $CompanyKeyPersonnel->managing_director_email = $row['managing_director_email'];
            // $CompanyKeyPersonnel->managing_director_email = $row['managing_director_email'];
            // $CompanyKeyPersonnel->managing_director_contact =$row['managing_director_contact'];
            $CompanyKeyPersonnel->managing_director_contact =$row['managing_director_contact'];
            $CompanyKeyPersonnel->chief_executive  =$row['chief_executive'];
            $CompanyKeyPersonnel->chief_executive_email =$row['chief_executive_email'];
            $CompanyKeyPersonnel-> chief_executive_contact =$row['chief_executive_contact'];
            $CompanyKeyPersonnel-> sales_in_charge =$row['sales_in_charge'];
            $CompanyKeyPersonnel->sales_in_charge_email  =$row['sales_in_charge_email'];
            $CompanyKeyPersonnel->sales_in_charge_contact  =$row['sales_in_charge_contact'];
            $CompanyKeyPersonnel-> export_in_charge =$row['export_in_charge'];
            $CompanyKeyPersonnel->export_in_charge_email =$row['export_in_charge_email'];
            $CompanyKeyPersonnel->export_in_charge_contact =$row['export_in_charge_contact'];
            $CompanyKeyPersonnel->production_in_charge =$row['production_in_charge'];
            $CompanyKeyPersonnel->production_in_charge_email =$row['production_in_charge_email'];
            $CompanyKeyPersonnel->production_in_charge_contact =$row['production_in_charge_contact'];
            $CompanyKeyPersonnel->hr_in_charge =$row['hr_in_charge'];
            $CompanyKeyPersonnel->hr_in_charge_email =$row['hr_in_charge_email'];
            $CompanyKeyPersonnel->hr_in_charge_contact =$row['hr_in_charge_contact'];
            $CompanyKeyPersonnel->it_in_charge =$row['it_in_charge'];
            $CompanyKeyPersonnel->it_in_charge_email =$row['it_in_charge_email'];
            $CompanyKeyPersonnel->it_in_charge_contact =$row['it_in_charge_contact'];
            $CompanyKeyPersonnel->quality_in_charge =$row['quality_in_charge'];
            $CompanyKeyPersonnel->quality_in_charge_email =$row['quality_in_charge_email'];
            $CompanyKeyPersonnel->quality_in_charge_contact =$row['quality_in_charge_contact'];
            $CompanyKeyPersonnel->r_d_in_charge =$row['r_d_in_charge'];
            $CompanyKeyPersonnel->r_d_in_charge_email =$row['r_d_in_charge_email'];
            $CompanyKeyPersonnel->r_d_in_charge_contact =$row['r_d_in_charge_contact'];
            $CompanyKeyPersonnel->metallurgy_in_charge =$row['metallurgy_in_charge'];
            $CompanyKeyPersonnel->metallurgy_in_charge_email =$row['metallurgy_in_charge_email'];
            $CompanyKeyPersonnel->metallurgy_in_charge_contact =$row['metallurgy_in_charge_contact'];
            $CompanyKeyPersonnel->finance_in_charge =$row['finance_in_charge'];
            $CompanyKeyPersonnel->finance_in_charge_email =$row['finance_in_charge_email'];
            $CompanyKeyPersonnel->finance_in_charge_contact =$row['finance_in_charge_contact'];
            $CompanyKeyPersonnel->scm_in_charge =$row['scm_in_charge'];
            $CompanyKeyPersonnel->scm_in_charge_email =$row['scm_in_charge_email'];
            $CompanyKeyPersonnel->scm_in_charge_contact =$row['scm_in_charge_contact'];
            $CompanyKeyPersonnel->plant_in_charge =$row['plant_in_charge'];
            $CompanyKeyPersonnel->plant_in_charge_email =$row['plant_in_charge_email'];
            $CompanyKeyPersonnel->plant_in_charge_contact =$row['plant_in_charge_contact'];
            $CompanyKeyPersonnel->hrd_incharge =$row['hrd_incharge'];
            $CompanyKeyPersonnel->rnd_incharge =$row['rnd_incharge'];
            $CompanyKeyPersonnel->responded =$row['responded'];
            $CompanyKeyPersonnel->serial_no =$row['serial_no'];
            $CompanyKeyPersonnel->update =$row['update'];
            $CompanyKeyPersonnel->update_date =$row['update_date'];
            $CompanyKeyPersonnel->region =$row['region'];

             $CompanyKeyPersonnel->save();

             $CompanyProductDetails = new CompanyProductDetails();
             $CompanyProductDetails->company_id = $company->id;
             $CompanyProductDetails->products_manufactured = $row['products_manufactured'];
             $CompanyProductDetails->product2 = $row['product2'];
             $CompanyProductDetails->product3 = $row['product3'];
             $CompanyProductDetails->product4 = $row['product4'];
             $CompanyProductDetails->scale = $row['scale'];

                 $CompanyProductDetails['ssi_info']= $row['ssi_info'];
                 $CompanyProductDetails['trademark']= $row['trademark']; 
                 $CompanyProductDetails['total_capital']= $row['total_capital'];
                 $CompanyProductDetails['net_investment_plant']= $row['net_investment_plant']; 
                 $CompanyProductDetails['total_investment_plant']= $row['total_investment_plant']; 
                 $CompanyProductDetails['sales_turnover']= $row['sales_turnover'];
                 $CompanyProductDetails['s_turn_in']= $row['s_turn_in'];
                 $CompanyProductDetails['export_turn_02_03']= $row['export_turn_02_03'];
                 $CompanyProductDetails['exports_in_mln']= $row['exports_in_mln'];
                 $CompanyProductDetails['number_of_employees']= $row['number_of_employees'];
                 $CompanyProductDetails['skilled']= $row['skilled'];
                 $CompanyProductDetails['semi_skilled']= $row['semi_skilled'];
                 $CompanyProductDetails['un_skilled']= $row['un_skilled'];
                 $CompanyProductDetails['contractual']= $row['contractual'];
                 $CompanyProductDetails['management_above']= $row['management_above'];
                 $CompanyProductDetails['net_excise_duty_paid']= $row['net_excise_duty_paid'];
                 $CompanyProductDetails['total_custom_duty_paid']= $row['total_custom_duty_paid'];
                 $CompanyProductDetails['list_of_product_exported1']= $row['list_of_product_exported1'];
                 $CompanyProductDetails['list_of_product_exported2']= $row['list_of_product_exported2'];
                 $CompanyProductDetails['per_share_export_buy']= $row['per_share_export_buy'];
                 $CompanyProductDetails['per_share_export_oem']= $row['per_share_export_oem'];
                 $CompanyProductDetails['per_share_export_tier1']= $row['per_share_export_tier1'];
                 $CompanyProductDetails['per_share_export_afm']= $row['per_share_export_afm'];
                 $CompanyProductDetails['per_share_domestic_oem']= $row['per_share_domestic_oem'];
                 $CompanyProductDetails['per_share_domestic_tier1']= $row['per_share_domestic_tier1'];
                 $CompanyProductDetails['per_share_domestic_afm']= $row['per_share_domestic_afm'];
                 $CompanyProductDetails['product_patent']= $row['product_patent'];
                 $CompanyProductDetails['share_spent_on_rnd']= $row['share_spent_on_rnd'];
                 $CompanyProductDetails['dsir']= $row['dsir'];
                 $CompanyProductDetails['expen_rd']= $row['expen_rd'];
                 $CompanyProductDetails['employee_rd']= $row['employee_rd'];
                 $CompanyProductDetails['person_name']= $row['person_name'];
                 $CompanyProductDetails['person_designation']= $row['person_designation'];
                 $CompanyProductDetails['person_email']= $row['person_email'];
                 $CompanyProductDetails['advertisement']= $row['advertisement'];
                 $CompanyProductDetails['field1']= $row['field1'];
                 $CompanyProductDetails['field2']= $row['field2'];
                 $CompanyProductDetails['net_duty_paid']= $row['net_duty_paid'];
                 $CompanyProductDetails['custom_duty']= $row['custom_duty'];
                 $CompanyProductDetails['other_mark1']= $row['other_mark1'];
                 $CompanyProductDetails['other_mark2']= $row['other_mark2'];
                 $CompanyProductDetails['domesticoe']= $row['domesticoe'];
                 $CompanyProductDetails['domesticoe1']= $row['domesticoe1'];
                 $CompanyProductDetails['domesticoe2']= $row['domesticoe2'];
                 $CompanyProductDetails['domesticoe3']= $row['domesticoe3'];
                 $CompanyProductDetails['domesticoe4']= $row['domesticoe4'];
                 $CompanyProductDetails['domestic_tier_oe']= $row['domestic_tier_oe'];
                 $CompanyProductDetails['domestic_tier_oe1']= $row['domestic_tier_oe1'];
                 $CompanyProductDetails['domestic_tier_oe2']= $row['domestic_tier_oe2'];
                 $CompanyProductDetails['domestic_tier_oe3']= $row['domestic_tier_oe3'];
                 $CompanyProductDetails['cusint1']= $row['cusint1'];
                 $CompanyProductDetails['cusint2']= $row['cusint2'];
                 $CompanyProductDetails['cusint3']= $row['cusint3'];
                 $CompanyProductDetails['cusint_tier1']= $row['cusint_tier1'];
                 $CompanyProductDetails['cusint_tier2']= $row['cusint_tier2'];
                 $CompanyProductDetails['cusint_tier3']= $row['cusint_tier3'];
                 $CompanyProductDetails['afmkt1']= $row['afmkt1'];
                 $CompanyProductDetails['afmkt2']= $row['afmkt2'];
                 $CompanyProductDetails['afmkt3']= $row['afmkt3'];

                 $CompanyProductDetails->save();

                 $CompanyForeignCollaboration =  new CompanyForeignCollaboration();
                 $CompanyForeignCollaboration->company_id = $company->id;
                 $CompanyForeignCollaboration->f_collab1 = $row['f_collab1'];
                 $CompanyForeignCollaboration->f_prod1 = $row['f_prod1'];
                 $CompanyForeignCollaboration->nature1 = $row['nature1'];
                 $CompanyForeignCollaboration->per1 = $row['per1'];
                 $CompanyForeignCollaboration->f_collab2 = $row['f_collab2'];
                 $CompanyForeignCollaboration->f_prod2 = $row['f_prod2'];
                 $CompanyForeignCollaboration->nature2 = $row['nature2'];
                 $CompanyForeignCollaboration->per2 = $row['per2'];
                 $CompanyForeignCollaboration->f_collab3 = $row['f_collab3'];
                 $CompanyForeignCollaboration->f_prod3 = $row['f_prod3'];
                 $CompanyForeignCollaboration->nature3 = $row['nature3'];
                 $CompanyForeignCollaboration->per3 = $row['per3'];
                 $CompanyForeignCollaboration->f_collab4 = $row['f_collab4'];
                 $CompanyForeignCollaboration->f_prod4 = $row['f_prod4'];
                 $CompanyForeignCollaboration->nature4 = $row['nature4'];
                 $CompanyForeignCollaboration->per4 = $row['per4'];
                 $CompanyForeignCollaboration->f_collab5 = $row['f_collab5'];
                 $CompanyForeignCollaboration->f_prod5 = $row['f_prod5'];
                 $CompanyForeignCollaboration->nature5 = $row['nature5'];
                 $CompanyForeignCollaboration->per5 = $row['per5'];
                 $CompanyForeignCollaboration->f_collab6 = $row['f_collab6'];
                 $CompanyForeignCollaboration->f_prod6 = $row['f_prod6'];
                 $CompanyForeignCollaboration->nature6 = $row['nature6'];
                 $CompanyForeignCollaboration->per6 = $row['per6'];
                 $CompanyForeignCollaboration->f_collab7 = $row['f_collab7'];
                 $CompanyForeignCollaboration->f_prod7 = $row['f_prod7'];
                 $CompanyForeignCollaboration->nature7 = $row['nature7'];
                 $CompanyForeignCollaboration->per7 = $row['per7'];
                 $CompanyForeignCollaboration->f_collab8 = $row['f_collab8'];
                 $CompanyForeignCollaboration->f_prod8 = $row['f_prod8'];
                 $CompanyForeignCollaboration->nature8 = $row['nature8'];
                 $CompanyForeignCollaboration->per8 = $row['per8'];
                 $CompanyForeignCollaboration->f_collab9 = $row['f_collab9'];
                 $CompanyForeignCollaboration->f_prod9 = $row['f_prod9'];
                 $CompanyForeignCollaboration->nature9 = $row['nature9'];
                 $CompanyForeignCollaboration->per9 = $row['per9'];
                 $CompanyForeignCollaboration->f_collab10 = $row['f_collab10'];
                 $CompanyForeignCollaboration->f_prod10 = $row['f_prod10'];
                 $CompanyForeignCollaboration->nature10 = $row['nature10'];
                 $CompanyForeignCollaboration->per10 = $row['per10'];
                 
                 $CompanyForeignCollaboration->member = $row['member'];
                 $CompanyForeignCollaboration->iso = $row['iso'];
                 $CompanyForeignCollaboration->isodate = $row['isodate'];
                 $CompanyForeignCollaboration->isoagency = $row['isoagency'];
                 $CompanyForeignCollaboration->qs = $row['qs'];
                 $CompanyForeignCollaboration->qsdate = $row['qsdate'];
                 $CompanyForeignCollaboration->qsagency = $row['qsagency'];
                 $CompanyForeignCollaboration->iso14 = $row['iso14'];
                 $CompanyForeignCollaboration->iso14date = $row['iso14date'];
                 $CompanyForeignCollaboration->iso14agency = $row['iso14agency'];
                 $CompanyForeignCollaboration->ts = $row['ts'];
                 $CompanyForeignCollaboration->tsdate = $row['tsdate'];
                 $CompanyForeignCollaboration->tsagency = $row['tsagency'];
                 $CompanyForeignCollaboration->deming_award = $row['deming_award'];
                 $CompanyForeignCollaboration->japan_quality_medal = $row['japan_quality_medal'];
                 $CompanyForeignCollaboration->emark = $row['emark'];
                //  $CompanyForeignCollaboration->bismark = $row['bismark'];

                 $CompanyForeignCollaboration->save();
                 

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
            $companies_data_format['phone'] = $row[3];
            $companies_data_format['fax'] = $row[4];
            $companies_data_format['email'] = $row[5];
            $companies_data_format['website'] = $row[6];
            $companies_data_format['website_address'] = $row[7];
            $companies_data_format['main_plant_address'] = $row[8];
            $companies_data_format['plant_pin'] = $row[9];
            $companies_data_format['plant_phone'] = $row[10];
            $companies_data_format['plant_fax'] = $row[11];
            $companies_data_format['plant_email'] = $row[12];
            $companies_data_format['plant_website'] = $row[13];
            $companies_data_format['overseas_plant_address'] = $row[14];
            $companies_data_format['other_plant_address'] = $row[15];
            $companies_data_format['overseas_plant_1'] = $row[16];
            $companies_data_format['overseas_plant_2'] = $row[17];
            $companies_data_format['overseas_plant_3'] = $row[18];
            $companies_data_format['otheraddress'] = $row[19];
            $companies_data_format['otheraddress_1'] = $row[20];
            $companies_data_format['otherplant_address1'] = $row[21];
            $companies_data_format['otherplant_address2'] = $row[22];
            $companies_data_format['otherplant_address3'] = $row[23];
            $companies_data_format['year_commencing'] = $row[24];
            $companies_data_format['managing_director'] = $row[25];


            $companies_data_format['managing_director'] = $row[26];
            $companies_data_format['managing_director_email'] = $row[27];
            $companies_data_format['managing_director_contact'] = $row[28];
            $companies_data_format['chief_executive'] = $row[29];
            $companies_data_format['chief_executive_email'] = $row[30];
            $companies_data_format['chief_executive_contact'] = $row[31];
            $companies_data_format['sales_in_charge'] = $row[32];
            $companies_data_format['sales_in_charge_email'] = $row[33];
            $companies_data_format['sales_in_charge_contact'] = $row[34];
            $companies_data_format['export_in_charge'] = $row[35];
            $companies_data_format['export_in_charge_email'] = $row[36];
            $companies_data_format['export_in_charge_contact'] = $row[37];
            $companies_data_format['production_in_charge'] = $row[38];
            $companies_data_format['production_in_charge_email'] = $row[39];
            $companies_data_format['production_in_charge_contact'] = $row[40];
            $companies_data_format['hr_in_charge'] = $row[41];
            $companies_data_format['hr_in_charge_email'] = $row[42];
            $companies_data_format['hr_in_charge_contact'] = $row[43];
            $companies_data_format['it_in_charge'] = $row[44];
            $companies_data_format['it_in_charge_email'] = $row[45];
            $companies_data_format['it_in_charge_contact'] = $row[46];
            $companies_data_format['quality_in_charge'] = $row[47];
            $companies_data_format['quality_in_charge_email'] = $row[48];
            $companies_data_format['quality_in_charge_contact'] = $row[49];
            $companies_data_format['r_d_in_charge'] = $row[50];
            $companies_data_format['r_d_in_charge_email'] = $row[51];
            $companies_data_format['r_d_in_charge_contact'] = $row[52];
            $companies_data_format['metallurgy_in_charge'] = $row[53];
            $companies_data_format['metallurgy_in_charge_email'] = $row[54];
            $companies_data_format['metallurgy_in_charge_contact'] = $row[55];
            $companies_data_format['finance_in_charge'] = $row[56];
            $companies_data_format['finance_in_charge_email'] = $row[57];
            $companies_data_format['finance_in_charge_contact'] = $row[58];
            $companies_data_format['scm_in_charge'] = $row[59];
            $companies_data_format['scm_in_charge_email'] = $row[60];
            $companies_data_format['scm_in_charge_contact'] = $row[61];
            $companies_data_format['plant_in_charge'] = $row[62];
            $companies_data_format['plant_in_charge_email'] = $row[63];
            $companies_data_format['plant_in_charge_contact'] = $row[64];
            $companies_data_format['hrd_incharge'] = $row[65];
            $companies_data_format['rnd_incharge'] = $row[66];
            $companies_data_format['responded'] = $row[67];
            $companies_data_format['serial_no'] = $row[68];
            $companies_data_format['update'] = $row[69];
            $companies_data_format['update_date'] = $row[70];
            $companies_data_format['region'] = $row[71];
            $companies_data_format['products_manufactured'] = $row[72];
            $companies_data_format['product2'] = $row[73];
            $companies_data_format['product3'] = $row[74];
            $companies_data_format['product4'] = $row[75];
            $companies_data_format['scale'] = $row[76];
            $companies_data_format['ssi_info'] = $row[77];
            $companies_data_format['trademark'] = $row[78];
            $companies_data_format['total_capital'] = $row[79];
            $companies_data_format['net_investment_plant'] = $row[80];
            $companies_data_format['total_investment_plant'] = $row[81];
            $companies_data_format['sales_turnover'] = $row[82];
            $companies_data_format['s_turn_in'] = $row[83];
            $companies_data_format['export_turn_02_03'] = $row[84];
            $companies_data_format['exports_in_mln'] = $row[85];
            $companies_data_format['number_of_employees'] = $row[86];
            $companies_data_format['skilled'] = $row[87];
            $companies_data_format['semi_skilled'] = $row[88];
            $companies_data_format['un_skilled'] = $row[89];
            $companies_data_format['contractual'] = $row[90];
            $companies_data_format['management_above'] = $row[91];
            $companies_data_format['net_excise_duty_paid'] = $row[92];
            $companies_data_format['total_custom_duty_paid'] = $row[93];
            $companies_data_format['list_of_product_exported1'] = $row[94];
            $companies_data_format['list_of_product_exported2'] = $row[95];
            $companies_data_format['per_share_export_buy'] = $row[96];
            $companies_data_format['per_share_export_oem'] = $row[97];
            $companies_data_format['per_share_export_tier1'] = $row[98];
            $companies_data_format['per_share_export_afm'] = $row[99];
            $companies_data_format['per_share_domestic_oem'] = $row[100];
            $companies_data_format['per_share_domestic_tier1'] = $row[101];
            $companies_data_format['per_share_domestic_afm'] = $row[102];
            $companies_data_format['product_patent'] = $row[103];
            $companies_data_format['share_spent_on_rnd'] = $row[104];
            $companies_data_format['dsir'] = $row[105];
            $companies_data_format['expen_rd'] = $row[106];
            $companies_data_format['employee_rd'] = $row[107];
            $companies_data_format['person_name'] = $row[108];
            $companies_data_format['person_designation'] = $row[109];
            $companies_data_format['person_email'] = $row[110];
            $companies_data_format['advertisement'] = $row[111];
            $companies_data_format['field1'] = $row[112];
            $companies_data_format['field2'] = $row[113];
            $companies_data_format['net_duty_paid'] = $row[114];
            $companies_data_format['custom_duty'] = $row[115];
            $companies_data_format['other_mark1'] = $row[116];
            $companies_data_format['other_mark2'] = $row[117];
            $companies_data_format['domesticoe'] = $row[118];
            $companies_data_format['domesticoe1'] = $row[119];
            $companies_data_format['domesticoe2'] = $row[120];
            $companies_data_format['domesticoe3'] = $row[121];
            $companies_data_format['domesticoe4'] = $row[122];
            $companies_data_format['domestic_tier_oe'] = $row[123];
            $companies_data_format['domestic_tier_oe1'] = $row[124];
            $companies_data_format['domestic_tier_oe2'] = $row[125];
            $companies_data_format['domestic_tier_oe3'] = $row[126];
            $companies_data_format['cusint1'] = $row[127];
            $companies_data_format['cusint2'] = $row[128];
            $companies_data_format['cusint3'] = $row[129];
            $companies_data_format['cusint_tier1'] = $row[130];
            $companies_data_format['cusint_tier2'] = $row[131];
            $companies_data_format['cusint_tier3'] = $row[132];
            $companies_data_format['afmkt1'] = $row[133];
            $companies_data_format['afmkt2'] = $row[134];
            $companies_data_format['afmkt3'] = $row[135];

            $companies_data_format['f_collab1'] = $row[136];
            $companies_data_format['f_prod1'] = $row[137];
            $companies_data_format['nature1'] = $row[138];
            $companies_data_format['per1'] = $row[139];
            $companies_data_format['f_collab2'] = $row[140];
            $companies_data_format['f_prod2'] = $row[141];
            $companies_data_format['nature2'] = $row[142];
            $companies_data_format['per2'] = $row[143];
            $companies_data_format['f_collab3'] = $row[144];
            $companies_data_format['f_prod3'] = $row[145];
            $companies_data_format['nature3'] = $row[146];
            $companies_data_format['per3'] = $row[147];
            $companies_data_format['f_collab4'] = $row[148];
            $companies_data_format['f_prod4'] = $row[149];
            $companies_data_format['nature4'] = $row[150];
            $companies_data_format['per4'] = $row[151];
            $companies_data_format['f_collab5'] = $row[152];
            $companies_data_format['f_prod5'] = $row[153];
            $companies_data_format['nature5'] = $row[154];
            $companies_data_format['per5'] = $row[155];
            $companies_data_format['f_collab6'] = $row[156];
            $companies_data_format['f_prod6'] = $row[157];
            $companies_data_format['nature6'] = $row[158];
            $companies_data_format['per6'] = $row[159];
            $companies_data_format['f_collab7'] = $row[160];
            $companies_data_format['f_prod7'] = $row[161];
            $companies_data_format['nature7'] = $row[162];
            $companies_data_format['per7'] = $row[163];
            $companies_data_format['f_collab8'] = $row[164];
            $companies_data_format['f_prod8'] = $row[165];
            $companies_data_format['nature8'] = $row[166];
            $companies_data_format['per8'] = $row[167];
            $companies_data_format['f_collab9'] = $row[168];
            $companies_data_format['f_prod9'] = $row[169];
            $companies_data_format['nature9'] = $row[170];
            $companies_data_format['per9'] = $row[171];
            $companies_data_format['f_collab10'] = $row[172];
            $companies_data_format['f_prod10'] = $row[173];
            $companies_data_format['nature10'] = $row[174];
            $companies_data_format['per10'] = $row[175];
            $companies_data_format['member'] = $row[176];
            $companies_data_format['iso'] = $row[177];
            $companies_data_format['isodate'] = $row[178];
            $companies_data_format['isoagency'] = $row[179];
            $companies_data_format['qs'] = $row[180];
            $companies_data_format['qsdate'] = $row[181];
            $companies_data_format['qsagency'] = $row[182];
            $companies_data_format['iso14'] = $row[183];
            $companies_data_format['iso14date'] = $row[184];
            $companies_data_format['iso14agency'] = $row[185];
            $companies_data_format['ts'] = $row[186];
            $companies_data_format['tsdate'] = $row[187];
            $companies_data_format['tsagency'] = $row[188];
            $companies_data_format['deming_award'] = $row[189];
            $companies_data_format['japan_quality_medal'] = $row[190];
            $companies_data_format['emark'] = $row[191];
            // $companies_data_format['bismark'] = $row[192];
           


            $companies[] = $companies_data_format;
        }
        return $companies;
    }
}
