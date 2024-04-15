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
use Illuminate\Support\Facades\Log;


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
        // send only one email when last created update request is created
        
        // $updated_models = session('updated_models');

        // $current_model = $CompanyUpdateRequest->modal;
        // $current_model_status = session('updated_models')[$current_model];

        // Log::info($current_model . ' -> '.$current_model_status);
 
        $CompanyUpdateRequest->notify(new UpdateUnderReviewNotification($CompanyUpdateRequest, $CompanyUpdateRequest->company));
        $admin = User::find(1);
        $admin->notify(new NewUpdateRequestNotification($CompanyUpdateRequest, $CompanyUpdateRequest->company));

    }

}
