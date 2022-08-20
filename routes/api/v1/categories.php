<?php

use App\Http\Controllers\Api\v1\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'categories'], function ($router) {
    Route::get('/', [CategoriesController::class, 'index']);
});
