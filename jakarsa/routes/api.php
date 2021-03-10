<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('semua','DataPribadiController@get_all_user');
Route::post('user/tambah_user', 'DataPribadiController@insert_new_user');
Route::put('/user/update/{kode_user}','DataPribadiController@update_data_user');
Route::delete('user/delete/{kode_user}','DataPribadiController@delete_user');
