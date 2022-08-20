<?php

use App\Http\Controllers\Api\v1\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'AuthController@logout']);
    Route::post('refresh', [AuthController::class, 'AuthController@refresh']);
    Route::post('me', [AuthController::class, 'AuthController@me']);
});
