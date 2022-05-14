<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mails extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    //public function __construct($details, $subject, $view)
    public function __construct($data)
    {
        $this->data = $data;
//        $this->subject = $subject;
//        $this->view = $view;
    }
    public function build()
    {
        return $this->subject($this->data['subject'])
            ->view($this->data['view'])
            ->with('details', $this->data);
    }
}
