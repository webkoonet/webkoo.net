<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Default locale (English) - no prefix
Route::get('/', [HomeController::class, 'index'])->name('home');

// Indonesian locale with /id prefix
Route::prefix('id')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.id');
});
