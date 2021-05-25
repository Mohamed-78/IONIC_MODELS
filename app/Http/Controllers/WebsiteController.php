<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function welcome()
    {
    	return view('front.index');
    }

    public function contacts()
    {
    	return view('front.contact');
    }

    public function details()
    {
    	return view('front.detail_modele');
    }
}
