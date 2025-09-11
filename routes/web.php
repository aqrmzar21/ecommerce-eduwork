<?php

use Illuminate\Support\Facades\Route;
// use Inertia\Inertia;
use App\Http\Controllers\Contoh;

// Route::get('/', function () {
//     return Inertia::render('welcome');
// })->name('home');

Route::get('/', function () {
    return "ini adalah route web";
});
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
Route::get('/contoh', [Contoh::class, 'index']);