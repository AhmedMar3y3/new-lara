<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;



Route::get('/tests', [TestController::class, 'index']);
Route::post('/tests', [TestController::class, 'store']);
