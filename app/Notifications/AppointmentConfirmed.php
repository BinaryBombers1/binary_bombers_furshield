<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AppointmentConfirmed extends Notification
{
    use Queueable;

    // ✅ Send both database + email
    public function via($notifiable)
    {
        return ['database'];
    }

    // ✅ Email content
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Appointment Confirmed')
            ->line('Your vet appointment has been confirmed.');
    }

    // ✅ Database content
    public function toDatabase($notifiable)
    {
        return [
            'message' => 'Your appointment has been confirmed.',
        ];
    }
}

