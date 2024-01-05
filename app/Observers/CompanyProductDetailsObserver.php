<?php

namespace App\Observers;

use App\Models\CompanyProductDetails;
use App\Models\CompanyUpdateRequest;

class CompanyProductDetailsObserver
{
    /**
     * Handle the CompanyProductDetails "created" event.
     */
    public function created(CompanyProductDetails $companyProductDetails): void
    {
        //
    }

    /**
     * Handle the CompanyProductDetails "updated" event.
     */
    public function updated(CompanyProductDetails $companyProductDetails): void
    {
        //
    }


    public function updating(CompanyProductDetails $companyProductDetails)
    {
        // $updated_models = session('updated_models');
        // $updated_models['CompanyProductDetail'] = true;
        // session(['updated_models' => $updated_models]);

        $original = $companyProductDetails->getOriginal();

        $updated = $companyProductDetails->getAttributes();

        //  dd($original , $updated);

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

        session()->put('is_updated', true);

        $company_update_request = new CompanyUpdateRequest();

        $company_update_request->company_id = $companyProductDetails->company_id;
        $company_update_request->data = json_encode($update_request);
        $company_update_request->modal = 'CompanyProductDetails';
        $company_update_request->save();

        return false;

    }


    /**
     * Handle the CompanyProductDetails "deleted" event.
     */
    public function deleted(CompanyProductDetails $companyProductDetails): void
    {
        //
    }

    /**
     * Handle the CompanyProductDetails "restored" event.
     */
    public function restored(CompanyProductDetails $companyProductDetails): void
    {
        //
    }

    /**
     * Handle the CompanyProductDetails "force deleted" event.
     */
    public function forceDeleted(CompanyProductDetails $companyProductDetails): void
    {
        //
    }
}
