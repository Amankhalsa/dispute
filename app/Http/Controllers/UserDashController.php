<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserDashController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user_dashboard(){
        return view('user_dashboard.index');
    
    }
    // credit_report
    public function credit_report(){
        return view('user_dashboard.credit_report');


    }

    // disputes
    public function disputes(){
        return view('user_dashboard.disputes');


    }

    public function letter_library(){
        return view('user_dashboard.letter_library');

    }

    // video_tutorials
    public function video_tutorials(){
        return view('user_dashboard.video_tutorials');

    }


}
