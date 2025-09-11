<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // $produk = [ 'Laptop', 'Handphone', 'Tablet' ];
        // $products = Product::all();
        $products = Product::paginate(3);
        return view('home' , compact('products'));
    }

    public function cart()
    {
        return view('page.cart');
    }
}
