<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    //
    public function agents()
    {
        return view('frontend.agents');
    }
    public function properties()
    {
        return view('frontend.properties');
    }
        public function about()
    {
        return view('frontend.about');
    }
        public function contact()
    {
        return view('frontend.contact');
    }
            public function index()
    {
        return view('frontend.index');
    }
}
