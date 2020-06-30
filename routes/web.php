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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');
Route::resource('deviceSensor', 'DeviceSensorController');
Route::resource('device', 'DeviceController');
Route::resource('sensor', 'SensorController');
Route::resource('sensorCategory', 'SensorCategoryController');
Auth::routes();

Route::get('/logout', function()
	{
		Auth::logout();
        Session::flush();
		return Redirect::to('/home');
	});

Route::get('/home', 'HomeController@index')->name('home');
