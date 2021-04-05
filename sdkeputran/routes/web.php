<?php

use App\Http\Controllers\InfoSiswaController;
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

Route::get('/admin', function () {
    return view('welcome');
});

// Route untuk halaman
Route::get('/', function () {
    return view('dashboard');
});
Route::view('/loginsiswa','loginsiswa');
Route::view('/registersiswa','registersiswa');
Route::view('/daftar', 'daftar');
Route::view('/profilesekolah','profilesekolah');

Route::resource('infosiswa', InfoSiswaController::class);






// Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// setup routes
Route::namespace('Auth')->group(function(){
    Route::get('/login','LoginController@show_login_form')->name('login');
    Route::post('/login','LoginController@process_login')->name('login');
    Route::get('/register','LoginController@show_signup_form')->name('register');
    Route::post('/register','LoginController@process_signup');
    Route::post('/logout','LoginController@logout')->name('logout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/guru', [App\Http\Controllers\GuruController::class, 'index']);
Route::get('/admin/guru/detail/{id_guru}', [App\Http\Controllers\GuruController::class, 'detail']);
