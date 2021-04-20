<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Auth\LoginController;
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
/*Route::get('/faqih', function () {
    return 'Yusuf Muhammad Faqih';
});

Route::get('/belajar', function () {
    echo '<h1>Pemograman Lanjut</h1>';
    echo '<p>Sedang Mempelajari Laravel dan Membuat Route Baru</p>';
});

Route::get('page/{nomor}', function ($nomor){
    return 'Ini Halaman ke-' . $nomor;
});

Route::get('/image', function () {
    return view('gambar');
});*/

/*Route::get('user', [HomeController::class, 'index']);
Route::resource('user', HomeController::class);

Route::get("/Faqih", function(){
    return view("Faqih");
});

Route::group(['namespace' => 'frontend'], function(){
Route::get('home', [HomeController::class, 'index']);
});


Route::group(['namespace' => 'backend'], function(){
    Route::get('dashboard', [DashboardController::class, 'index']);
 });*/
    
    
Auth::routes();
    Route::group(['namespace' => 'Frontend'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });
    Route::resource('home', HomeController::class);


    Route::middleware(['web', 'auth'])->group(function (){
    Route::resource('home', HomeController::class);
    Route::resource('dashboard', DashboardController::class);   
});