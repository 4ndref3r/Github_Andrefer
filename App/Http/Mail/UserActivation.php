<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserActivation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $user;

    public function __construct($user)
    {
        $this->user=$user;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'User Activation',
        );
    }

    public function build()
    {
        $activationLink= route('activate', ['token' => $this->user->email_verification_token]);
        return $this->view('authentication.activation') // Vista que se usará
                    ->subject('Activa tu cuenta - Sayani') // Asunto del correo
                    ->with([
                        'user' => $this->user,
                        'activationLink' => $activationLink
                    ]); // Pasa datos a la vista
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
