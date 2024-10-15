<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendContratCandidat extends Notification
{
    use Queueable;
    public $names;
    public $offre;
    public $ids;
    public $dates;

    /**
     * Create a new notification instance.
     */
    public function __construct($names, $offre, $ids,$dates)
    {
        $this->names = $names;
        $this->offre = $offre;
        $this->ids = $ids;
        $this->dates = $dates;
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
                    ->line($this->names )
                    ->line('Suite à nos échanges et entretiens, nous avons le plaisir de vous proposer un contrat de travail en qualité de'.' '. $this->offre.' '.' au sein de notre société,.' . Auth::user()->societe.' '. 'Nous sommes convaincus que vos compétences seront un atout précieux pour notre équipe.')
                    ->line('Afin de finaliser cette démarche, nous vous invitons à suivre le lien ci-dessous pour répondre à cette proposition :')
                    ->line('lien !'.':'.route('reponsepropositioncontrat',['id'=> $this->ids]))
                    ->line('Cette proposition de contrat expirera le : '. ' '. $this->dates.'.')
                    ->line('Nous restons à votre disposition pour toute question.')
                    ->line('Veuillez agréer M/Mme'. ' ' .$this->names .' '.', l\'expression de nos salutations distinguées.')
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

