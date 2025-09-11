<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk produk
Route::get('/products', [ProductController::class, 'index'])->name('products');
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::resource('products', ProductController::class);
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Route::get('/categories', function () {
//     return view('dashbord.categories.index'); 
// })->name('categories');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [ CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{product_categories}/edit', [ CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{product_categories}', [ CategoryController::class, 'update'])->name('categories.update');


require __DIR__.'/auth.php';
