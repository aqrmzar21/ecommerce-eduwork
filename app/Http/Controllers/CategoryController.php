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
        // $kategori = ProductCategories::withCount('products')->paginate(3);
        $kategori = ProductCategories::withCount('products')->paginate(10);
        return view('dashbord.categories.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ammbil semua kategori untuk dropdown
        return view('dashbord.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // cek inputan
        $name_check = ProductCategories::where('name', $request->name)->exists();
        // Jika nama sudah ada, kembalikan dengan pesan error
        // if ($name_check) {
        //     return redirect()->back()->withErrors(['name' => 'Kategori dengan nama tersebut sudah ada.'])->withInput();
        // }
        // // Buat kategori baru 
        // ProductCategories::create([
        //     'name' => $request->name,
        //     // 'description' => $request->description,
        // ]);
        // // Redirect ke halaman kategori dengan pesan sukses
        // return redirect()->route('categories.index')->with('success', 'Kategori berhasil disimpan.');

        if ($name_check) {
            return redirect()->back()->withErrors(['name' => 'Kategori dengan nama tersebut sudah ada.'])->withInput();
        } else {
            // Buat kategori baru 
            $category = new ProductCategories;
            $category->name = $request->name;
            $category->save();
            return redirect()
                ->route('categories.index')
                ->with('success', 'Kategori berhasil disimpan.');
            // Redirect ke halaman kategori dengan pesan sukses
        }
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
    public function edit(ProductCategories $category)
    {
        return view('dashbord.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductCategories $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
