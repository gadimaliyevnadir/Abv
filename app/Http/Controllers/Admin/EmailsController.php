<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactsMail;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public static function sendEmail($fullname,$email,$phone,$note)
    {
        $data = [
            'fullname' => $fullname,
            'email'=>$email,
            'phone'=>$phone,
            'note'=>$note
        ];
        Mail::to('qadimaliyevnadir@gmail.com')->send(new ContactsMail($data));
    }
}
