<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contactUs = ContactUs::first();
        return view('contactus.index', [
            'contactUs' => $contactUs,
        ]);
    }
}
