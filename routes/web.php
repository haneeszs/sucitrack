<?php

use App\Http\Controllers\MenstrualController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware(['auth'])->group(function () {
});

Route::resource('menstrual_records', MenstrualController::class);

