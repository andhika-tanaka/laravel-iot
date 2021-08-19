<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/home', function () {
    return view('index');
});

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

Route::resource('user', 'UserController')->middleware('auth');
Route::resource('deviceSensor', 'DeviceSensorController')->middleware('auth');
Route::resource('device', 'DeviceController')->middleware('auth');
Route::resource('sensor', 'SensorController')->middleware('auth');
Route::resource('sensorCategory', 'SensorCategoryController')->middleware('auth');
Auth::routes();

Route::get('/logout', function()
	{
		Auth::logout();
        Session::flush();
		return Redirect::to('/');
	});

