<?php

use App\Http\Controllers\Api\v1\CategoriesController;
use App\Http\Controllers\Api\v1\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::get('/', function () {
        return ['status' => 'success', 'version' => '1.0.0'];
    });

    Route::resource('categories', CategoriesController::class);
    Route::resource('products', ProductsController::class);
});
