
<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenstrualController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {
    
    // Main Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Menstrual Records CRUD System
    Route::resource('menstrual_records', MenstrualController::class);
});

require __DIR__.'/auth.php';