<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route untuk admin
Route::middleware(['admin'])->group(function () {
    // Route untuk produk
    Route::resource('products', ProductController::class);
    // Route untuk kategori
    Route::resource('categories', CategoryController::class);
    // Route untuk user
    // Route::resource('user', UserController::class);
    Route::get('/user', function () {
        return view('dashbord.users.index');
    })->name('users.index');
});



require __DIR__.'/auth.php';
