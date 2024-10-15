<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\MyChangeVuCandidate\ChangeVuCandidate;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;

class SendEmailSondageCandidat extends Notification
{
    use Queueable;
public $names;
public $offre;
public $ids;

 
    /**
     * Create a new notification instance.
     */
    public function __construct($names, $offre, $ids)
    {
        $this->names = $names;
        $this->offre = $offre;
        $this->ids = $ids;
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
        ->line('Merci pour l’intérêt que vous portez à la position de'.' '. $this->offre.' '.' chez'.' '. Auth::user()->societe.' '.' Nous avons examiné votre candidature avec attention et sommes heureux de vous informer que votre profil a retenu notre attention. ')
        ->line("Afin de poursuivre le processus de recrutement, nous vous invitons à compléter un sondage en suivant le lien ci-dessous. Ce sondage nous aidera à mieux comprendre vos compétences et vos attentes.")
        ->line('lien !'.':'.route('formulairesondage',['id'=> $this->ids]))
        ->line('Nous vous remercions par avance pour votre coopération et restons à votre disposition pour toute question éventuelle.')
        ->line('Cordialement')
        ->line(Auth::user()->societe)
        ->line(Auth::user()->email)
        ->line(Auth::user()->telephone);

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
