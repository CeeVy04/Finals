<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUs extends Controller
{
        public function index()
    {
        return view('contactus.contactus');
    }
}