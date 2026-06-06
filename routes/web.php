<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Home
Route::get("/", [HomeController::class, 'index'])->name('home');
// Product
Route::prefix("products")->group(function () {
    Route::get("/", [ProductController::class, "index"]);
    Route::get("/{slug}", [ProductController::class, "show"]);
});