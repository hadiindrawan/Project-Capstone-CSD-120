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

// Route::get('/login', 'api\AuthController@getLogin')->name('login');
// Route::get('/register', 'api\AuthController@getRegister');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/data/ambulan', 'api\data_Ambulans@index');
    Route::get('/data/damkar', 'api\data_mobilDamkar@index');
    Route::get('/data/markas-damkar', 'api\data_markasDamkar@index');
    Route::get('/data/rumah-sakit', 'api\data_rumahsakit@index');
});

require __DIR__ . '/auth.php';
