<?php

use App\Http\Controllers\Api\v1\UsersController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'users'], function ($router) {
    Route::post('/', [UsersController::class, 'create']);
});
