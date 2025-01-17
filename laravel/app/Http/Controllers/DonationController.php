<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function show(Donation $donation)
    {
        $donation = Donation::where('id', $donation->id)->first();

        return view("admin.pages.donationCRUD.show", [
            "donation" => $donation,
        ]);
    }
}
