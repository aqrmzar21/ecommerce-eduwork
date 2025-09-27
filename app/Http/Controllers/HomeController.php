<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // $products = Product::all();
        $products = Produk::paginate(3);
        return view('home' , compact('products'));
    }

    public function cart()
    {
        return view('page.cart');
    }
}
