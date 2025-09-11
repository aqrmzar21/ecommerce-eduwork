<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use Inertia\Inertia;
use App\Http\Controllers\Contoh;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return Inertia::render('welcome');
// })->name('home');

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', function () {
    return "ini adalah route produts";
});
Route::get('/cart', function () {
    return "ini adalah route cart";
});
Route::get('/checkout', function () {
    return "ini adalah route checkout";
});

// perccobaan aksese dari controller
// Route::get('/contoh', [Contoh::class, 'index']);
Route::get('/contoh', [Contoh::class, 'coba']);

// langsung pakai resource karena sudah ada controller dari perintah -r
Route::resource('products', ProductController::class);