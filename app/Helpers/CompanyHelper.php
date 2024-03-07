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

        $companies = Company::with('key_personnels','contact_details','product_details','foreign_collaboration');

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


        if ($request->has('products')) {

            $selectedProductId = $request->input('products');
            if (is_array($selectedProductId)) {
                $companies = $companies->whereHas('product_details', function ($query) use ($selectedProductId) {
                    $query->whereIn('id', $selectedProductId);
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

        
        // checkbox filter for sales turnover
        if ($request->has('range')) {

            $ranges = $request->input('range');
        
            // Iterate through each range in the array
            foreach ($ranges as $range) {
                [$min, $max] = explode('-', $range);
        
                $min = (int) $min;
                $max = (int) $max;
        
                $companies = $companies->orWhereHas('product_details', function ($query) use ($min, $max) {
                    $query->whereBetween('sales_turnover', [$min, $max]);
                });
            }
        }


        //checkbox filter for export turnover
        
        if ($request->has('ranges')) {

            $ranges = $request->input('ranges');
            foreach ($ranges as $range) {
            [$min, $max] = explode('-', $range);

            $min = (int) $min;
            $max = (int) $max;
        
            
                $companies = $companies->orWhereHas('product_details', function ($query) use ($min, $max) {
                    $query->whereBetween('export_turn_02_03', [$min, $max]);
                });
            }
        }

        ////////No of emp filter/////
        if ($request->has('no_ofEmp')) {

           
            $ranges = $request->input('no_ofEmp');

            foreach ($ranges as $range) {

            [$min, $max] = explode('-', $range);

            $min = (int) $min;
            $max = (int) $max;
        
            
            $companies = $companies->orWhereHas('product_details', function ($query) use ($min, $max) {
                $query->whereBetween('number_of_employees', [$min, $max]);
            });
            }
        }

          //checkbox filters for quality


          if($request->has('quality')) {

            $quality = $request->quality;

            $companies = $companies->whereHas('foreign_collaboration', function ($query) use ($quality) {
                $query->whereIn('iso', $quality)
                      ->orWhereIn('qs', $quality)
                      ->orWhereIn('iso14', $quality)
                      ->orWhereIn('ts', $quality);
                     
            });

        }

     
       

        

        if ($request->has('location')) {
            $location = $request->location;
            
            $companies = $companies->whereHas('contact_details', function ($query) use ($location) {
                $query->whereIn('state', $location)
                      ->orWhereIn('city', $location)
                      ->orWhereIn('address2', $location)
                      ->orWhereIn('address3', $location)
                      ->orWhereIn('mainaddress1', $location)
                      ->orWhereIn('mainaddress2', $location);
            });
        }
        

        //commenging the old code her
            // {
        
            //         if($request->has('name')){
            //             $companies = $companies->where('name','like','%'.$request->name.'%');
            //         }

            //         if($request->has('email')){
            //             $companies = $companies->where('email','like','%'.$request->email.'%');
            //         }

            //         if($request->has('phone')){
            //             $companies = $companies->where('phone','like','%'.$request->phone.'%');
            //         }

            //         if ($request->has('salesTurnover')) {
            //             $companies = $companies->whereHas('product_details', function ($query) use ($request) {
            //                 $query->where('sales_turnover', 'like', '%' . $request->salesTurnover . '%');
            //             });
            //         }

            //             if ($request->has('ForeignCollaboration')) {
            //         $companies = $companies->whereHas('foreign_collaboration', function ($query) use ($request) {
            //             $query->where('f_collab1', 'like', '%' . $request->ForeignCollaboration . '%')
            //                   ->orWhere('f_collab2', 'like', '%' . $request->ForeignCollaboration . '%')
            //                   ->orWhere('f_collab3', 'like', '%' . $request->ForeignCollaboration . '%')
            //                   ->orWhere('f_collab4', 'like', '%' . $request->ForeignCollaboration . '%')
            //                   ->orWhere('f_collab4', 'like', '%' . $request->ForeignCollaboration . '%')
            //                   ->orWhere('f_collab5', 'like', '%' . $request->ForeignCollaboration . '%')
            //                   ->orWhere('f_collab6', 'like', '%' . $request->ForeignCollaboration . '%')
            //                   ->orWhere('f_collab7', 'like', '%' . $request->ForeignCollaboration . '%')
            //                   ->orWhere('f_collab8', 'like', '%' . $request->ForeignCollaboration . '%')
            //                   ->orWhere('f_collab9', 'like', '%' . $request->ForeignCollaboration . '%')
            //                   ->orWhere('f_collab10', 'like', '%' . $request->ForeignCollaboration . '%');
            //         });
            //     }

            //     if ($request->has('OverseasAftermarket')) {
            //         $companies = $companies->whereHas('contact_details', function ($query) use ($request) {
            //             $query->where('overseas_plant_1', 'like', '%' . $request->OverseasAftermarket . '%')
            //                 ->orWhere('overseas_plant_address', 'like', '%' . $request->OverseasAftermarket . '%')
            //                 ->orWhere('overseas_plant_2', 'like', '%' . $request->OverseasAftermarket . '%')
            //                 ->orWhere('overseas_plant_3', 'like', '%' . $request->OverseasAftermarket . '%');
            //         });
            //     }

            // }

         return $companies->paginate(15);

    }


   

}

?>