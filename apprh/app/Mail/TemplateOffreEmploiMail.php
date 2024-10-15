<?php

namespace App\Mail;

use App\Models\OffreEmploi;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class TemplateOffreEmploiMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
   public $data ;

    /**
     * Create a new message instance.
     */
    public function __construct($details,$data)
    {
        $this->details = $details;
        $this->data = $data;
       
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Template Offre Emploi Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
       
        return new Content(
           
            view: 'sendtemplateoffre',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
