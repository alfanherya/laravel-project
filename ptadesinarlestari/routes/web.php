<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestiController;

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
    return view('dashboard');
});

// to get external API will do the route below
Route::get("testimoni", [TestiController::class,'index'])->name('dashboard');

