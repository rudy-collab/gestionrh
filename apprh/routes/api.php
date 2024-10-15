<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;




Route::post('/registered', [ApiController::class, 'registered']);
Route::get('/lesusers', [ApiController::class, 'lesusers']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
