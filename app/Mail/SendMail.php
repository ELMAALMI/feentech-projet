<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mail;
    public $sub ;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail,$sub)
    {
        $this->mail = $mail;
        $this->sub = $sub;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->sub)->view("");
    }
}
