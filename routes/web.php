<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

// Route untuk Tambah Cart
Route::get('click-produk/{id}', [HomeController::class, 'klikProduk'])->name('products.klikProduk');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route untuk admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    // Route untuk produk
    Route::resource('products', ProductController::class);
    // Route untuk kategori
    Route::resource('categories', CategoryController::class);
    // Route untuk user
    Route::resource('users', UserController::class);
    // Route::get('/users', function () {
    //     return view('dashbord.users.index');
    // })->name('users.index');
});



require __DIR__.'/auth.php';
