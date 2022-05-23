<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home page view 
    public function home_page(){
        return view('frontend.index');
    }

    // about us 
    public function about_us(){
        return view('frontend.about');


    }

    //contact_us 
    public function contact_us(){
        return view('frontend.contact');
    }
    //privacy policy 
    public function privacy_policy(){
        return view('frontend.privacy');
    }

    // terms_condition
    public function terms_condition(){
        return view('frontend.terms');


    }

    // repair_business
    public function repair_business(){
        return view('frontend.repair');


    }
    // fix_bad_credit
    public function fix_bad_credit(){
        return view('frontend.fixbad');

    }
    // affiliate_program
    public function affiliate_program(){
        return view('frontend.affiliate_program');


    }


}
