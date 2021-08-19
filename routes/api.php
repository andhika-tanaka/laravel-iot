<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceSensorDataController;

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

Route::get('deviceSensorData', [DeviceSensorDataController::class, 'index']);
Route::post('deviceSensorData', [DeviceSensorDataController::class, 'store']);
Route::delete('deviceSensorData/{id}', [DeviceSensorDataController::class, 'destroy']);
