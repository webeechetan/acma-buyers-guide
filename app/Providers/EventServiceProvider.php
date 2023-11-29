<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Models\CompanyContactDetail;
use App\Observers\CompanyContactDetailsObserver;
use App\Models\CompanyUpdateRequest;
use App\Models\CompanyKeyPersonnel;
use App\Observers\CompanyKeyPersonnelObserver;
use App\Models\CompanyProductDetails;
use App\Observers\CompanyProductDetailsObserver;
use App\Models\CompanyForeignCollaboration;
use App\Observers\CompanyForeignCollaborationObserver;
use App\Observers\CompanyUpdateRequestObserver;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        CompanyContactDetail::observe(CompanyContactDetailsObserver::class);
        CompanyKeyPersonnel::observe(CompanyKeyPersonnelObserver::class);
        CompanyProductDetails::observe(CompanyProductDetailsObserver::class);
        CompanyForeignCollaboration::observe(CompanyForeignCollaborationObserver::class);
        CompanyUpdateRequest::observe(CompanyUpdateRequestObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
