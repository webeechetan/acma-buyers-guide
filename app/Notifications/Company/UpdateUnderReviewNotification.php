<?php

namespace App\Notifications\Company;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class UpdateUnderReviewNotification extends Notification
{
    use Queueable;

    public $company_update_request;
    public $company;

    /**
     * Create a new notification instance.
     */
    public function __construct($company_update_request, $company)
    {
        $this->company_update_request = $company_update_request;
        $this->company = $company;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Your company update request is under review')
            ->greeting('Hello ' . $this->company->name . ',')
            ->line('Your company update request is under review.')
            ->line('We will notify you once it is approved.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
