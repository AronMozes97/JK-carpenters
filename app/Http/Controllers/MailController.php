<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    private const CONTACT_MAIL = 'stefankantor78@gmail.com';

    /**
     * @param Request $request
     * @return void
     */
    public function sendContactMail(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'businessName' => $request->input('businessName'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::to(@self::CONTACT_MAIL)->send(new Contact($data));
    }
}
