<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendNotificationCandidatAcceptContrat extends Notification
{
    use Queueable;
    public $names;
    public $emails;
    public $motdepasse;
 

    /**
     * Create a new notification instance.
     */
    public function __construct($names,$emails,$motdepasse)
    {
        $this->names = $names;
        $this->emails = $emails;
        $this->motdepasse = $motdepasse;
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
                    ->line($this->names .' '.'Felicitations et bienvenue dans notre équipe' )
                    ->line('Vous faites désormais partie de la base de données de notre entreprise'.' '.Auth::user()->societe)
                    ->line('Vous pouvez dès maintenant vous connecter à l\'application de gestion ressources humaines de notre entreprise via l\'espace employé en utilisant votre email'.' : '.$this->emails.' '.'et votre mot de passe'. ' : '.$this->motdepasse)
                    ->line('Nous sommes ravis de vous compter parmi nous et restons à votre disposition pour toute assistance!')
                    ->line('Cordialement')
                    ->line(Auth::user()->name)
                    ->line(Auth::user()->societe);
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
