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
        //入力データー取得
        $data1 = $post::all();
        
        $pdf = \PDF::loadView("generate_pdf", compact("data1"));
        return $this->view("emails.mail")
            ->from("upbook.26@gmail.com", "担当者")
            ->subject("依頼書送付")
        //PDFファイル添付
            ->attachData($pdf->output(), "配送依頼書.pdf");
    }
}
