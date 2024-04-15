<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new user_message instance.
     */
    public function __construct(
        private array $data
    ) {
    }

    /**
     * Get the user_message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Un Message venant du site web',
            from: 'contact@apis-sahel.org',

        );
    }

    /**
     * Get the user_message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.mail-content',
            with: [
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'subject' => $this->data['subject'],
                'user_message' => $this->data['user_message']
            ],
        );
    }

    /**
     * Get the attachments for the user_message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
