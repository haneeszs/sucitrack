<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrayerController;
use App\Http\Controllers\MenstrualController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});

/*
| Dashboard
*/
Route::get('/dashboard', [PrayerController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

/*
| Authenticated routes
*/
Route::middleware(['auth'])->group(function () {

    // Profile routes (if used)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Menstrual module (keep inside auth for safety)
    Route::resource('menstrual_records', MenstrualController::class);
});

