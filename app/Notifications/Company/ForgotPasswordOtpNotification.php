<?php

namespace App\Notifications\Company;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Http\Controllers\CompanyController;

class ForgotPasswordOtpNotification extends Notification
{
    use Queueable;

    public $user;
    public $otp;

    /**
     * Create a new notification instance.
     */
    public function __construct($user, $otp)
    {
        $this->user = $user;
        $this->otp = $otp;
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

                    ->subject('OTP to reset your password')
                    ->greeting('Hello ' . $this->user->name . ',' )
                    ->line('We received a request to reset your Acma Buyers Guide account password. Please use the following one-time password to verify yourself')
                    ->line('**Here is your OTP: ' . $this->otp . '**')
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
