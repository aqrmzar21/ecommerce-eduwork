<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $produk = Product::with('category')->get();
        // $produk = Product::paginate(3);
        // $produk = Product::all();
        $produk = Product::with('category')->paginate(3);
        return view('dashbord.products.index', compact('produk'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // Ambil semua kategori untuk dropdown
        $categories = ProductCategories::all();
        return view('dashbord.products.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = ProductCategories::all();
        return view('dashbord.products.edit ', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
