<?php

use App\Http\Controllers\Api\v1\ProductsController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'products'], function ($router) {
    Route::get('/', [ProductsController::class, 'index']);
});
