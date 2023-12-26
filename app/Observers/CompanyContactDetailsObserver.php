<?php

namespace App\Observers;
use App\Models\CompanyContactDetail;
use App\Models\CompanyUpdateRequest;

class CompanyContactDetailsObserver
{
    /**
     * Handle the CompanyContactDetail "created" event.
     *
     * @param  \App\Models\CompanyContactDetail  $companyContactDetail
     * @return void
     */
    public function created(CompanyContactDetail $companyContactDetail)
    {
        //
    }

    /**
     * Handle the CompanyContactDetail "updated" event.
     *
     * @param  \App\Models\CompanyContactDetail  $companyContactDetail
     * @return void
     */
    public function updated(CompanyContactDetail $companyContactDetail)
    {
        // dd($companyContactDetail);
    }

    /**
     * Handle the CompanyContactDetail "updating" event.
     *
     * @param  \App\Models\CompanyContactDetail  $companyContactDetail
     * @return void
     */
    public function updating(CompanyContactDetail $companyContactDetail)
    {

       
        
        // set current model as updated

        // $updated_models = session('updated_models');
        // $updated_models['CompanyContactDetail'] = true;
        // session(['updated_models' => $updated_models]);


        // get the original data
        $original = $companyContactDetail->getOriginal();
        // get the updated data
        $updated = $companyContactDetail->getAttributes();

        
        // get the keys that were updated and are different from the original
        $updatedKeys = array_keys(array_diff_assoc($updated, $original));
        
       
        $update_request = [];
        foreach ($updatedKeys as $key) {
            $update_request[$key] = [
                'old' => $original[$key],
                'new' => $updated[$key]
            ];
        }

        if(count($update_request) == 0)  {
            return false;
        }
        
        $company_update_request = new CompanyUpdateRequest();

        $company_update_request->company_id = $companyContactDetail->company_id;
        $company_update_request->data = json_encode($update_request);
        $company_update_request->modal = 'CompanyContactDetail';

        $company_update_request->save();
        // stop the update
        return false;



    }

    /**
     * Handle the CompanyContactDetail "deleted" event.
     *
     * @param  \App\Models\CompanyContactDetail  $companyContactDetail
     * @return void
     */
    public function deleted(CompanyContactDetail $companyContactDetail)
    {
        //
    }

    /**
     * Handle the CompanyContactDetail "restored" event.
     *
     * @param  \App\Models\CompanyContactDetail  $companyContactDetail
     * @return void
     */
    public function restored(CompanyContactDetail $companyContactDetail)
    {
        //
    }

    /**
     * Handle the CompanyContactDetail "force deleted" event.
     *
     * @param  \App\Models\CompanyContactDetail  $companyContactDetail
     * @return void
     */
    public function forceDeleted(CompanyContactDetail $companyContactDetail)
    {
        //
    }
}
