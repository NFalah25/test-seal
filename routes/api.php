<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

//Route::get('/user', function (Request $request) {
//    Route::get('/user', [UserController::class, 'index']);
//})->middleware('auth:sanctum');

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource('user', UserController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::apiResource('project', ProjectController::class);
Route::apiResource('task', TaskController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

