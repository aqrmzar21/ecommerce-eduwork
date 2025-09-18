<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $kategori = ProductCategories::withCount('products')->paginate(3);
    return view('dashbord.categories.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ammbil semua kategori untuk dropdown
        $categories = ProductCategories::all();
        return view('dashbord.categories.create' , compact('categories'));
    }
    
    /**
     * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        //)
    }
    
    /**
     * Display the specified resource.
    */
    public function show(string $id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
    */
    public function edit(ProductCategories $product_categories)
    {
        // Ammbil semua kategori untuk dropdown
        $categories = ProductCategories::all();
        return view('dashbord.categories.edit', compact('categories', 'product_categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
