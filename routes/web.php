<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\Admin\ProductController;

// ==================== PUBLIC ROUTES ====================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('about');
Route::get('/panduan-sol-ukuran', [HomeController::class, 'guide'])->name('guide');
Route::get('/katalog', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/produk/{slug}', [CatalogController::class, 'show'])->name('catalog.show');

// ==================== ADMIN ROUTES ====================
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', fn() => redirect()->route('admin.products.index'));
    Route::resource('products', ProductController::class)->except(['show']);
});
