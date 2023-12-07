<?php

namespace App\Notifications\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUpdateRequestNotification extends Notification
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
        $data = $this->company_update_request->data;
        $data = json_decode($data , true);
        $updating_data = '';
        foreach ($data as $key => $value) {
            if(!$value['old']){
                $value['old'] = 'NULL';
            }
            $updating_data .= $key . ' From ' . $value['old'] . ' to ' . $value['new'] . '</br>';
        }

        return (new MailMessage)
            ->subject('New Update Request')
            ->line('New Update Request for ' . $this->company->name . ' is pending for approval.')
            ->line('Updating Data : ' . $updating_data)
            ->action('View', url('/admin/profile-approval'))
            ->line('Thank you for using our application!');
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
