<?php

namespace App\Observers;

use App\Models\CompanyForeignCollaboration;
use App\Models\CompanyUpdateRequest;

class CompanyForeignCollaborationObserver
{
    /**
     * Handle the CompanyForeignCollaboration "created" event.
     */
    public function created(CompanyForeignCollaboration $companyForeignCollaboration): void
    {
        //
    }

    /**
     * Handle the CompanyForeignCollaboration "updated" event.
     */
    public function updated(CompanyForeignCollaboration $companyForeignCollaboration): void
    {
        //
    }


    
 public function updating(CompanyForeignCollaboration $companyForeignCollaboration)
 {

     dd('companyForeignCollaboration');
     $original = $companyForeignCollaboration->getOriginal();
     $updated = $companyForeignCollaboration->getAttributes();

     $updatedKeys = array_keys(array_diff_assoc($updated, $original));

     $update_request = [];
     foreach ($updatedKeys as $key) {
         $update_request[$key] = [
             'old' => $original[$key],
             'new' => $updated[$key]
         ];
     }

     $company_update_request = new CompanyUpdateRequest();

     $company_update_request->company_id = $companyForeignCollaboration->company_id;
     $company_update_request->data = json_encode($update_request);
     $company_update_request->modal = 'CompanyForeignCollaboration';
     $company_update_request->save();

     return false;

 }

    /**
     * Handle the CompanyForeignCollaboration "deleted" event.
     */
    public function deleted(CompanyForeignCollaboration $companyForeignCollaboration): void
    {
        //
    }

    /**
     * Handle the CompanyForeignCollaboration "restored" event.
     */
    public function restored(CompanyForeignCollaboration $companyForeignCollaboration): void
    {
        //
    }

    /**
     * Handle the CompanyForeignCollaboration "force deleted" event.
     */
    public function forceDeleted(CompanyForeignCollaboration $companyForeignCollaboration): void
    {
        //
    }
}
