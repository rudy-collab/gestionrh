<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendTempOffreWork extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
 
    public $details;
    public $data;
    public $id;
    public function __construct( $details, $data, $id)
    {
    
        $this->details = $details;
        $this->data = $data;
        $this->id = $id;
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
        ->line('Ci-dessous les informations relatives å l\'offre d\'emploi que vous devez publier : ')
        ->line($details)
        ->action('Les candidats peuvent postuler å cette adresse :', url("/route('offresetformulaire', ['id' => $data->$id])"))
        ->line('Merci!');
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
