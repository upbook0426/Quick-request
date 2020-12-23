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
        //宛先のアドレス情報を取得
        $email = Request::input("email");
        $to = [
            [
                "email" => $email,
                "name" => "TEST",
            ],
        ];

        Mail::to($to)->send(new SendMail());

        return view("emails.sent");
    }
}
