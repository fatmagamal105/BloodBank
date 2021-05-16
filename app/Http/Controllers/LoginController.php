<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
Session::start();

class LoginController extends Controller
{
    public function login()
    {
        return view('frontend.pages.login');
    }

    public function addDonor(Request $request)
    {
        $donor = array();
        $donor['id'] = $request->id;
        $donor['username'] = $request->username;
        $donor['email'] = $request->email;
        $donor['phone'] = $request->phone;
        $donor['address'] = $request->address;
        $donor['governor'] = $request->governor;
        $donor['contact_type'] = $request->contact_type;
        $donor['type'] = $request->type;
        $donor['contact_time'] = $request->contact_time;

        DB::table('donors')->insert($donor);
        Session::put('msg','Your Data Saved as a Donor');
        return redirect('/login');
    }
}
