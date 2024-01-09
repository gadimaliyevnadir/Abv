<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\EmailsController;
use App\Http\Controllers\Controller;
use App\Http\Requests\MailsRequest;
use App\Models\ContactsMail;

class ContsMailController extends Controller
{
    public function emails(MailsRequest $request)
    {
        $data = $request->validated();
        $create = ContactsMail::create($data);
        if ($create) {
            EmailsController::sendEmail($data['fullname'],$data['email'],$data['phone'], $data['note']);
            flash()->success('Sizin Mesajınız Göndərildi')->flash();
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }
}
