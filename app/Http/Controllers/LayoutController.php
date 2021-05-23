<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function  index()
    {
        return view('frontend.layout');
    }

    public function why()
    {
        return view('frontend.pages.why');
    }

    public function support()
    {
        return view('frontend.pages.support');
    }

    public function privacy()
    {
        return view('frontend.pages.privacy');
    }

    public function news()
    {
        return view('frontend.pages.news');
    }

    public function donation()
    {
        return view('frontend.pages.donation');
    }

    public function aboutus()
    {
        return view('frontend.pages.about-us');
    }

    public function counter()
    {
        return view('frontend.pages.counter');
    }


}



