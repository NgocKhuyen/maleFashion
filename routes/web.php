<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
// About
Route::get('/about', [PageController::class, 'about'])->name('about');
// Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
// Blog
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('blog-detail');
});
// Product
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('shop');
    Route::get('/{slug}', [ProductController::class, 'show']);
});
