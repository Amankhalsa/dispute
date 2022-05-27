<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\UserDashController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home_page')->name('front.home_page');
    // about_us
    Route::get('/about', 'about_us')->name('front.about_us');
    //Contact 
    Route::get('/contact', 'contact_us')->name('front.contact_us');
    // privacy_policy
    Route::get('/privacy', 'privacy_policy')->name('front.privacy_policy');
    //Term and conditions
    Route::get('/terms', 'terms_condition')->name('front.terms_condition');
    // Repair Business
    Route::get('/repair-business', 'repair_business')->name('front.repair_business');
    // Fix Bad Credit
    Route::get('/fix-bad-credit', 'fix_bad_credit')->name('front.fix_bad_credit');
    // Affiliate Program
    Route::get('/affiliate-program', 'affiliate_program')->name('front.affiliate_program');
});

//======================== Admin Dashboard ========================
Route::group(['prefix'=>'admin'], function(){
Route::controller(BackendController::class)->group(function () {
// Admin Dashboard
Route::get('/dashboard', 'admin_dashboard')->name('backend.admin.dashboard');
// Contact
Route::get('/contact', 'admin_contact')->name('backend.admin.contact');
// User mgmt
Route::get('/user-mgmt', 'admin_user_mgmt')->name('backend.user.mgmt');
//admin_video_tutorials
Route::get('/video-tutorials', 'admin_video_tutorials')->name('backend.video.tutorials');
// admin_library
Route::get('/admin-library', 'admin_library')->name('backend.admin.library');
// create-video
Route::get('/create-video', 'admin_create_video')->name('backend.create.video');
// create_library

Route::get('/create-library', 'admin_create_library')->name('backend.create.library');





    });   
    });

    // user dashboard
    
    Route::group(['prefix'=>'user'], function(){
        Route::controller(UserDashController::class)->group(function () {
            // Admin Dashboard
            Route::get('/dashboard', 'user_dashboard')->name('frontend.user.dashboard');
            // credit report 
            Route::get('/credit-report', 'credit_report')->name('frontend.credit_report');

            // Disputes
            Route::get('/disputes', 'disputes')->name('frontend.disputes');
            // letter_library
            Route::get('/letter-library', 'letter_library')->name('frontend.letter.library');

            // video_tutorials
            Route::get('/video-tutorials', 'video_tutorials')->name('frontend.video.tutorials');


            });   
            });
