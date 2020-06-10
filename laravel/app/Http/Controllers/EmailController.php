<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\Newsletter\Newsletter;

class EmailController extends Controller
{
    public function subscribe(Request $r)
    {
        if ( ! Newsletter::isSubscribed($r->email) ) {
            Newsletter::subscribePending($r->user_email);
        }
    }

    public function store()
    {
        request()->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to(request('email'))
            ->send(new Contact(request('subject'), request('message')));


        return redirect('/');
    }
}
