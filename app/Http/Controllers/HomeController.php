<?php

namespace App\Http\Controllers;

use App\DonorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public  function home()
    {
        return view('frontend.pages.home');
    }

    public function searchPage()
    {
        return view('frontend.pages.search');
    }

    public function search(Request $request)
    {
         $data = DonorModel::where('type', $request->input('type'))->paginate(10);
        return view('frontend.pages.search', compact('data',$data));

    }
}
