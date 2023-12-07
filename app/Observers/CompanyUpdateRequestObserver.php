<?php

namespace App\Observers;
use App\Models\CompanyContactDetail;
use App\Models\CompanyUpdateRequest;
use App\Models\CompanyForeignCollaboration;
use App\Models\CompanyKeyPersonnel;
use App\Models\CompanyProductDetails;
use App\Models\Company;
use App\Models\User;
use App\Notifications\Company\UpdateUnderReviewNotification;
use App\Notifications\Company\UpdateApprovedNotification;
use App\Notifications\Admin\NewUpdateRequestNotification;


class CompanyUpdateRequestObserver
{
 
    /**
     * Handle the CompanyUpdateRequest "created" event.
     *
     * @param  \App\Models\CompanyUpdateRequest  $CompanyUpdateRequest
     * @return void
     */

    public function created(CompanyUpdateRequest $CompanyUpdateRequest)
    {
       
        $CompanyUpdateRequest->notify(new UpdateUnderReviewNotification($CompanyUpdateRequest, $CompanyUpdateRequest->company));
        $admin = User::find(1);
        $admin->notify(new NewUpdateRequestNotification($CompanyUpdateRequest, $CompanyUpdateRequest->company));

    }

}
