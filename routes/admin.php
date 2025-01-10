<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('dashboard')->name('dashboard.')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/categories', [AdminController::class, 'categories'])->name('categories');
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
});
