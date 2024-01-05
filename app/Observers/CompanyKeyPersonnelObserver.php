<?php

namespace App\Observers;
use App\Models\CompanyKeyPersonnel;
use App\Models\CompanyUpdateRequest;


class CompanyKeyPersonnelObserver
{
    /**
     * Handle the CompanyKeyPersonnel "updating" event.
     *
     * @param  \App\Models\CompanyKeyPersonnel  $CompanyKeyPersonnel
     * @return void
     */
    public function updating(CompanyKeyPersonnel $CompanyKeyPersonnel)
    {

        // $updated_models = session('updated_models');
        // $updated_models['CompanyKeyPersonnel'] = true;
        // session(['updated_models' => $updated_models]);

        // get the original data
        $original = $CompanyKeyPersonnel->getOriginal();
        // get the updated data
        $updated = $CompanyKeyPersonnel->getAttributes();

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

        $company_update_request = new CompanyUpdateRequest();

        $company_update_request->company_id = $CompanyKeyPersonnel->company_id;
        $company_update_request->data = json_encode($update_request);
        $company_update_request->modal = 'CompanyKeyPersonnel';
        $company_update_request->save();

        // stop the update
        return false;

    }
}
