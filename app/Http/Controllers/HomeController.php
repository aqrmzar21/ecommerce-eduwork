<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $produk = [ 'Laptop', 'Handphone', 'Tablet' ];
        return view('home' , compact('produk'));
    }

    public function cart()
    {
        return view('page.cart');
    }
}
