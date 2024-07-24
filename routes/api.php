<?php

use App\Http\Controllers\API\AuthController as APIAuthController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/user', [APIAuthController::class, 'getUser']);
    Route::post('/logout', [APIAuthController::class, 'logout']);

    Route::apiResource('products', ProductController::class);
    Route::apiResource('categories', CategoryController::class)->except('show');
    Route::apiResource('users', UserController::class);
    Route::apiResource('customers', CustomerController::class);
    Route::get('/categories/tree', [CategoryController::class, 'getAsTree']);
    Route::get('/countries', [CustomerController::class, 'countries']);
    Route::get('orders', [OrderController::class, 'index']);
    Route::get('orders/statuses', [OrderController::class, 'getStatuses']);
    Route::post('orders/change-status/{order}/{status}', [OrderController::class, 'changeStatus']);
    Route::get('orders/{order}', [OrderController::class, 'view']);
    

});


Route::post('/login', [APIAuthController::class, 'login']);
