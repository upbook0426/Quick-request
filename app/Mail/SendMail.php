<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $post)
    {
        $data1 = $post::all();
        $pdf = \PDF::loadView("generate_pdf", compact("data1"));
        return $this->view("emails.mail")
            ->from("upbook.26@gmail.com", "Test")
            ->subject("This is a test mail")
            ->attachData($pdf->output(), "filename.pdf");
    }
}
