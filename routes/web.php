<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController; 
use App\Http\Controllers\OverrideController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/override', [OverrideController::class, 'index'])->middleware(['auth']);
Route::post('/override/{device}/toggle', [OverrideController::class, 'toggle'])->middleware(['auth']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


