<?php

namespace App\Http\Controllers;

use Request;

use App\Mail\SendMail;

use Mail;

class MailSendController extends Controller
{
    public function send()
    {
        $data = [];
        $$to = [
            [
                "email" => "upbook426@gmail.com",
                "name" => "TEST",
            ],
        ];

        Mail::to($to)->send(new SendMail());

        return view("emails.sent");
    }
}
