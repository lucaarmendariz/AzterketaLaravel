<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DoctorApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/doctors/{doctor}', [DoctorApiController::class, 'show']);
Route::post('/doctors', [DoctorApiController::class, 'store']);
