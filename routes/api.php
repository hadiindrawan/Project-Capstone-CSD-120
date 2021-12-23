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

<<<<<<< Updated upstream
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
=======
//API route for register new user
Route::post('/register', 'api\AuthController@register');
//API route for login user
Route::post('/login', 'api\AuthController@login')->name('login');

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/data/rumah-sakit/store', 'api\data_rumahsakit@store');
    Route::post('/data/ambulan/store', 'api\data_Ambulans@store');
    Route::post('/data/damkar/store', 'api\data_mobilDamkar@store');
    Route::post('/data/markas-damkar/store', 'api\data_markasDamkar@store');

    Route::post('/logout', 'api\AuthController@logout');
>>>>>>> Stashed changes
});

Route::post('/data/rumah-sakit/store', 'api\data_rumahsakit@store');
Route::post('/data/ambulan/store', 'api\data_Ambulans@store');
Route::post('/data/damkar/store', 'api\data_mobilDamkar@store');
Route::post('/data/markas-damkar/store', 'api\data_markasDamkar@store');