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

    public static function filter($request){

        $companies = Company::with('key_personnels','contact_details','product_details');

        $filter = '';


        // checkbox filters for company name
        if ($request->has('company_name')) {
            $selectedCompanies = $request->input('company_name');            
            if (is_array($selectedCompanies)) {
                $companies = $companies->whereIn('name', $selectedCompanies);
            }
        }
        
       // checkbox filters for Region
        if ($request->has('regions')) {
            $selectedRegion = $request->input('regions');
            
            if (is_array($selectedRegion)) {
                $companies = $companies->whereHas('key_personnels', function ($query) use ($selectedRegion) {
                    $query->whereIn('region', $selectedRegion);
                });
            }
           
        }

        //checkbox filters for products
        if($request->has('products')) {
            $selectedProducts = $request->input('products');
            if(is_array($selectedProducts)) {
                $companies = $companies->whereHas('product_details', function ($query) use ($selectedProducts) {       
                    $query->whereIn('products_manufactured', $selectedProducts);
                });
            }
        }


          // checkbox filters for Location states
          if ($request->has('state')) {
            $selectedRegion = $request->input('state');
            
            if (is_array($selectedRegion)) {
                $companies = $companies->whereHas('contact_details', function ($query) use ($selectedRegion) {
                    $query->whereIn('state', $selectedRegion);
                });
            }
           
        }




        //checkbox filter for trademarks

        if($request->has('trademarks')) {
            $selectedtrademarks = $request->input('trademarks');
            if(is_array($selectedtrademarks)) {
                $companies = $companies->whereHas('product_details', function ($query) use ($selectedtrademarks) {
                
                    $query->whereIn('trademark', $selectedtrademarks);
                });
            }
        }


        //checkbox filter for sales turnover
        if ($request->has('range')) {
            $range = $request->input('range');

            [$min, $max] = explode('-', $range);

            $min = (int) $min;
            $max = (int) $max;
       
            
            $companies = $companies->whereHas('product_details', function ($query) use ($min, $max) {
                $query->whereBetween('sales_turnover', [$min, $max]);
            });
        }

        if($request->has('name')){
            $companies = $companies->where('name','like','%'.$request->name.'%');
        }

        if($request->has('email')){
            $companies = $companies->where('email','like','%'.$request->email.'%');
        }

        if($request->has('phone')){
            $companies = $companies->where('phone','like','%'.$request->phone.'%');
        }

        if ($request->has('salesTurnover')) {
            $companies = $companies->whereHas('product_details', function ($query) use ($request) {
                $query->where('sales_turnover', 'like', '%' . $request->salesTurnover . '%');
            });
        }

        if ($request->has('location')) {
            $companies = $companies->whereHas('contact_details', function ($query) use ($request) {
                $query->where('company_address', 'like', '%' . $request->location . '%');
            });
        }

        if ($request->has('region')) {
            $companies = $companies->whereHas('key_personnels', function ($query) use ($request) {
                $query->where('region', 'like', '%' . $request->region . '%');
            });
        }

        if ($request->has('product')) {
            $companies = $companies->whereHas('product_details', function ($query) use ($request) {
                $query->where('products_manufactured', 'like', '%' . $request->region . '%');
            });
        }

        if ($request->has('product')) {
            $companies = $companies->whereHas('product_details', function ($query) use ($request) {
                $query->where('products_manufactured', 'like', '%' . $request->product . '%')
                      ->orWhere('product2', 'like', '%' . $request->product . '%')
                      ->orWhere('product3', 'like', '%' . $request->product . '%')
                      ->orWhere('product4', 'like', '%' . $request->product . '%');
            });
        }

        if ($request->has('trademark')) {
            $companies = $companies->whereHas('product_details', function ($query) use ($request) {
                $query->where('trademark', 'like', '%' . $request->trademark . '%');
            });
        }

        if ($request->has('exportTurnover')) {
            $companies = $companies->whereHas('product_details', function ($query) use ($request) {
                $query->where('export_turn_02_03', 'like', '%' . $request->exportTurnover . '%');
            });
        }

        if ($request->has('salesTurnover')) {
            $companies = $companies->whereHas('product_details', function ($query) use ($request) {
                $query->where('sales_turnover', 'like', '%' . $request->salesTurnover . '%');
            });
        }

        if ($request->has('ForeignCollaboration')) {
            $companies = $companies->whereHas('foreign_collaboration', function ($query) use ($request) {
                $query->where('f_collab1', 'like', '%' . $request->ForeignCollaboration . '%')
                      ->orWhere('f_collab2', 'like', '%' . $request->ForeignCollaboration . '%')
                      ->orWhere('f_collab3', 'like', '%' . $request->ForeignCollaboration . '%')
                      ->orWhere('f_collab4', 'like', '%' . $request->ForeignCollaboration . '%')
                      ->orWhere('f_collab4', 'like', '%' . $request->ForeignCollaboration . '%')
                      ->orWhere('f_collab5', 'like', '%' . $request->ForeignCollaboration . '%')
                      ->orWhere('f_collab6', 'like', '%' . $request->ForeignCollaboration . '%')
                      ->orWhere('f_collab7', 'like', '%' . $request->ForeignCollaboration . '%')
                      ->orWhere('f_collab8', 'like', '%' . $request->ForeignCollaboration . '%')
                      ->orWhere('f_collab9', 'like', '%' . $request->ForeignCollaboration . '%')
                      ->orWhere('f_collab10', 'like', '%' . $request->ForeignCollaboration . '%');
            });
        }

        if ($request->has('OverseasAftermarket')) {
            $companies = $companies->whereHas('contact_details', function ($query) use ($request) {
                $query->where('overseas_plant_1', 'like', '%' . $request->OverseasAftermarket . '%')
                    ->orWhere('overseas_plant_address', 'like', '%' . $request->OverseasAftermarket . '%')
                    ->orWhere('overseas_plant_2', 'like', '%' . $request->OverseasAftermarket . '%')
                    ->orWhere('overseas_plant_3', 'like', '%' . $request->OverseasAftermarket . '%');
            });
        }
        
         return $companies->paginate(15);

    }


   

}

?>