<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(HomeController::class)->group(function () {
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