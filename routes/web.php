<?php

use Illuminate\Support\Facades\Route;

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
Route::group([
    'prefix'=>config('admin.prefix'),
    'namespace'=>'App\\Http\\Controllers',
],function () {

    Route::get('login','LoginAdminController@formLogin')->name('admin.login');
    Route::post('login','LoginAdminController@login');

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout','LoginAdminController@logout')->name('admin.logout');
        Route::view('/','dashboard')->name('dashboard');
        Route::view('/post','data-post')->name('post')->middleware('can:role,"admin","editor"');
        Route::view('/admin','data-admin')->name('admin')->middleware('can:role,"admin"');
    });
});

Route::get('/', function () {
    return view('welcome');
});

# routing untuk homepage
Route::get('/', function () {

  $flb_home = [
    [
      "tittle" => "Festival Literasi Balige",
      "author" => "team festival",
      "body" => "Festival literasi yang diselenggarakan oleh pihak RumaBalige di daeragh Balige sebagai wujud dan usaha Rumabalige dalam memajukan pendidikan dan budaya masyarakat Indonesia terkhusus di wilayah Balige sekitarnya."
    ],
   
  ];


    return view('welcome', [
      "tittle" => "Home",
      "home" => $flb_home
    ]);
  });
  
  # routing untuk halaman about
  Route::get('/about', function () {
    return view('about',[
      "tittle" => "About"
    ]);
  });
  
  # routing untuk halaman list projects
  Route::get('/contactus', function () {
    return view('contactus', [
      "tittle" => "Contact Us"
    ]);
  });
  

   # routing untuk halaman list projects
   Route::get('/sponsor', function () {
    return view('sponsor', [
      "tittle" => "Sponsor"
    ]);
  });
  
  Route::get('/event', function () {
    return view('event', [
      "tittle" => "Event"
    ]);
  });

  
  Route::get('/faq', function () {
    return view('faq', [
      "tittle" => "FAQ"
    ]);
  });

  Route::get('/media', function () {
    return view('media', [
      "tittle" => "Media"
    ]);
  });