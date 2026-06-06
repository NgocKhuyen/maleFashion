<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Home
Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
});
// Product
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('shop');
    Route::get('/{slug}', [ProductController::class, 'show']);
});
