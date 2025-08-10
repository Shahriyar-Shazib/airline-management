<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    // Route::get('/user', [UserController::class, 'userList']);
});
Route::middleware('auth:sanctum')->get('/user-list', [UserController::class, 'userList']);

