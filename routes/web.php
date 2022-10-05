<?php

use App\Http\Controllers\AuthController;
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

Route::get('/test', function () {
    return view('invoice');
});


Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /** Works for both, depends on if you validate it in the view */
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('/register', 'RegisterController@show')->name('register.show');

    /** Not logged in */
    Route::group(['middleware' => ['guest']], function() {
        Route::get('/', 'LoginController@show')->name('login.show');
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    /** Logged in */
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::resource('devices', 'DeviceController');
        Route::resource('methods', 'MethodController');
        Route::resource('laboratories', 'LaboratoryController');
        Route::resource('intermediate-checks', 'IntermediateChecksController');
    });
});
