<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
Session::start();

class ContactUsController extends Controller
{
    public  function contactUs()
    {
        return view('frontend.pages.contact');
    }

    public  function addSuggestion(Request $request)
    {
        $result = array();
        $result['id'] = $request->id;
        $result['email']  = $request->email;
        $result['name']  = $request->name;
        $result['msg']  = $request->msg;

        DB::table('suggestions')->insert($result);
        Session::put('msg','Your Msg Sent Successfully');
        return redirect('/contact-us');

    }
}
