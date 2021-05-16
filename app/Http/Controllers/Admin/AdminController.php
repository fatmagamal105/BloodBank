<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();
class AdminController extends Controller
{
    public function showAdmin(){
        return view('backend.admin.admin_login');
    }

    public function dashboard(){
        return view('backend.dashboard');
    }

   public function login(Request $request){

        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('admin')
            ->where('email',$email)
            ->where('password',$password)
            ->first();
        if($result) {
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');

        }else{

            Session::put('msg','Incorrect Username and password');
            return Redirect::to('/dashboard');
        }
    }

    public function allDonors()
    {

        $data = DB::table('donors')->get();
        return view('backend.dashboard.all',[
            'data' => $data
        ]);
    }

    public function allSuggestion()
    {
        $data = DB::table('suggestions')->get();
        return view('backend.dashboard.suggestion',[
            'data' => $data
        ]);
    }

    public function deleteSuggestion($id){

        DB::table('suggestions')->where('id',$id)->delete();
        Session::put('msg','the Section Deleted Successfully');
        return redirect('/all-suggestion');
    }

    public function deleteDonor($id)
    {
        DB::table('donors')->where('id',$id)->delete();
        Session::put('msg','Donor Deleted Successfully');
        return redirect('/all-donors');
    }
}
