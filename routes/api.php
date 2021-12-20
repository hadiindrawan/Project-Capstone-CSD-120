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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/data/rumah-sakit/store', 'api\data_rumahsakit@store');
Route::post('/data/ambulan/store', 'api\data_Ambulans@store');
Route::post('/data/damkar/store', 'api\data_mobilDamkar@store');
Route::post('/data/markas-damkar/store', 'api\data_markasDamkar@store');