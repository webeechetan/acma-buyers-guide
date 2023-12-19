<?php

namespace App\Observers;
use App\Models\Company;
use App\Models\CompanyUpdateRequest;

class CompanyObserver
{
    /**
     * Handle the Company "created" event.
     */
    public function created(Company $company): void
    {
        
    }

    /**
     * Handle the Company "updated" event.
     */
    public function updated(Company $company): void
    {
        //
    }

    public function updating(Company $company)
    {

       
        // get the original data
        $original = $company->getOriginal();
        // get the updated data
        $updated = $company->getAttributes();

        // get the keys that were updated and are different from the original
        $updatedKeys = array_keys(array_diff_assoc($updated, $original));

        $update_request = [];
        foreach ($updatedKeys as $key) {
            $update_request[$key] = [
                'old' => $original[$key],
                'new' => $updated[$key]
            ];
        }

        $company_update_request = new CompanyUpdateRequest();

        $company_update_request->company_id = $company->id;
        $company_update_request->data = json_encode($update_request);
        $company_update_request->modal = 'Company';
        $company_update_request->save();

        // stop the update
        return false;



    }

    /**
     * Handle the Company "deleted" event.
     */
    public function deleted(Company $company): void
    {
        //
    }

    /**
     * Handle the Company "restored" event.
     */
    public function restored(Company $company): void
    {
        //
    }

    /**
     * Handle the Company "force deleted" event.
     */
    public function forceDeleted(Company $company): void
    {
        //
    }
}
