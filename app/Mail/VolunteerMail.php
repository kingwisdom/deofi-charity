<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VolunteerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $volObj;
    public $attachedFilePath;
    public $attachedFile;

    public function __construct($volObj, $attachedFile)
    {
        $this->volObj = $volObj;
        $this->attachedFilePath = $attachedFile->getRealPath();
        $this->attachedFile = $attachedFile;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Volunteer Mail')
            ->cc(['adeoyetemitayo99@gmail.com', 'scholardayo@deofi.org.ng'])
            ->view('mail.volunt')
            ->attach($this->attachedFilePath, [
                'as' => $this->attachedFile->getClientOriginalName(),
                'mime' => $this->attachedFile->getClientMimeType(),
            ]);
    }
}
