<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QueryFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $queryData;
    /**
     * Create a new message instance.
     */
    public function __construct($queryData)
    {
        $this->queryData = $queryData;
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Query Form Mail',
    //     );
    // }
    public function build()
    {
        return $this->subject('New Query Received')
                    ->view('emails.query-form')
                    ->with('queryData', $this->queryData);
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
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
