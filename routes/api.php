<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tests', [TestController::class, 'index']);
Route::get('/tests/{id}', [TestController::class, 'show']);
Route::post('/tests', [TestController::class, 'store']);
Route::delete('/tests/{id}', [TestController::class, 'destroy']);

