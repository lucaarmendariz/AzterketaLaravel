<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;


Route::get('/', [AppointmentController::class, 'index'])->name('appointments.index');
