<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter;

class EmailController extends Controller
{
    public function subscribe(Request $r)
    {
        if ( ! Newsletter::isSubscribed($r->email) ) {
            Newsletter::subscribePending($r->user_email);
        }
    }
}
