<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

// Default locale (English) - no prefix
Route::get('/', [HomeController::class, 'index'])->name('home');

// Pricing routes - default locale (English)
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.default');
Route::get('/pricing/{slug}', [PricingController::class, 'show'])->name('pricing.show.default');

// Routes with explicit locale parameter - WITH SetLocale middleware
Route::prefix('{locale}')->where(['locale' => 'en|id'])->middleware([SetLocale::class])->group(function () {
    // English pricing routes with /en prefix
    Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
    Route::get('/pricing/{slug}', [PricingController::class, 'show'])->name('pricing.show');

    // Indonesian routes with /id prefix
    Route::get('/', [HomeController::class, 'index'])->name('home.id');
    Route::get('/harga', [PricingController::class, 'index'])->name('pricing.id');
    Route::get('/harga/{slug}', [PricingController::class, 'show'])->name('pricing.show.id');
});
