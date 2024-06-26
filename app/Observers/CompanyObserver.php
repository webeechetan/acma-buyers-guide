<?php

namespace App\Observers;
use App\Models\Company;
use App\Models\CompanyUpdateRequest;

class CompanyObserver
{
    /**
     * Handle the Company "created" event.
     */

     public function deleting(Company $company){
        // dd('alert');
     }

    public function created(Company $company): void
    {
        // dd('created');
    }

    /**
     * Handle the Company "updated" event.
     */
    public function updated(Company $company): void
    {
       // dd('updated');
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

        
        if(count($update_request) == 0)  {
            return false;
        }

        session()->put('is_updated', true);
        session()->put('should_send_under_review_mail', true);

        $company_update_request = new CompanyUpdateRequest();

        $company_update_request->company_id = $company->id;
        $company_update_request->data = json_encode($update_request);
        $company_update_request->modal = 'Company';
        $company_update_request->saveQuietly();

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
