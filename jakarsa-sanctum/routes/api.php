<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login','AuthController@login');
Route::group(['prefix' => 'auth','middleware' => 'auth:sanctum'], function(){
    //manggil controller sesuai bawaan laravel 8
    Route::post('logout', [AuthController::class, 'logout']);
    //manggil controller dengan mengubah namespace di RouteServiceProvider.php biar bisa kayak versi sebelumnya
    Route::post('logoutall', 'AuthController@logoutall');
});
