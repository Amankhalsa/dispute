<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class BackendController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function admin_dashboard(){
    return view('backend.index');

}
// admin_contact
public function admin_contact(){
    return view('backend.contact');

}

// admin_user_mgmt

public function admin_user_mgmt(){
    return view('backend.user_mgmt');

}
// admin_video_tutorials

public function admin_video_tutorials(){
    return view('backend.video_tutorials');

}
// admin_library
public function admin_library(){
    return view('backend.Library');

}
// backend.create.video

public function admin_create_video(){
    return view('backend.video_create');

}
// create_library
public function admin_create_library(){
    return view('backend.create_library');

}

}
