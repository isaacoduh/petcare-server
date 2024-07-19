<?php

use App\Http\Controllers\API\AuthController as APIAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/user', [APIAuthController::class, 'getUser']);
    Route::post('/logout', [APIAuthController::class, 'logout']);
});


Route::post('/login', [APIAuthController::class, 'login']);
