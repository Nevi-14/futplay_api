<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class email extends Mailable
{
    use Queueable, SerializesModels;
    public $name = null;
    public $body = null;
    public $footer = null;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$body,$footer)
    {
        $this->name = $name;
        $this->body = $body;
        $this->footer = $footer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.template')
        ->with(['name', $this->name], ['footer', $this->footer]);
    }


}