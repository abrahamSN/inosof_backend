<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function () {
    Route::post('login', 'App\Http\Controllers\Api\AuthController@login');
    Route::post('register', 'App\Http\Controllers\Api\AuthController@register');
    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::get('logout', 'App\Http\Controllers\Api\AuthController@logout');
        Route::get('user', 'App\Http\Controllers\Api\AuthController@user');
    });
});

Route::prefix('v1')->group(function () {
    Route::prefix('vehicle')->group(function () {
        Route::get('/', 'App\Http\Controllers\Api\VehicleController@index');
        Route::get('/{id}', 'App\Http\Controllers\Api\VehicleController@show');
        Route::post('/', 'App\Http\Controllers\Api\VehicleController@store');
        Route::put('/{id}', 'App\Http\Controllers\Api\VehicleController@update');
        Route::delete('/{id}', 'App\Http\Controllers\Api\VehicleController@destroy');
    });
});
