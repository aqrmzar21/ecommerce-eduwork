<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $produk = Product::with('category')->paginate(10);
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
        return view('dashbord.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input
        // $validated = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'image' => 'nullable|image|max:2048',
        //     'price' => ['required','numeric'],
        //     'stock' => 'required|integer|min:0',
        //     'product_categories_id' => 'required|exists:product_categories,id',
        // ]);
        // // Handle file upload jika ada
        // if ($request->hasFile('image')) {
        //     $path = $request->file('image')->store('public/images');
        //     $validated['image'] = basename($path);
        // }
        // Simpan produk ke database
        // Product::create($validated);
        // // Redirect ke halaman produk dengan pesan sukses
        // return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');

        // Versi 2
        // $validated = $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'description' => ['nullable', 'string'],
        //     'image' => ['required', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
        //     'price' => ['required', 'numeric'],
        //     'stock' => ['required', 'integer', 'min:0'],
        //     'product_categories_id' => ['required', 'exists:product_categories,id'],
        // ]);
        // $category = ProductCategories::find($request->input('product_categories_id'));
        // $product = new Product($validated);
        // $product->name = $request->input('name');
        // $product->description = $request->input('description');
        // $product->image = $request->input('image');
        // $product->price = $request->input('price');
        // $product->stock = $request->input('stock');
        // $product->product_categories_id = $category->id;
        // // Simpan produk melalui relasi kategori
        // // Handle file upload jika ada
        // if ($request->hasFile('image')) {
        //     // $product->image = $request->file('image')->store('products');
        //     $product->image = $request->file('image')->store('products', 'public');

        // }
        // $category->products()->save($product);
        // return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');

        // Versi 3
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'integer', 'min:0'],
            'product_categories_id' => ['required', 'exists:product_categories,id'],
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $validated['image'] = basename($path);
        }

        // Simpan produk ke database
        Product::create($validated);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Product $product)
    // {
    //     // info detail produk menggunakan modal
    //     return view('dashbord.products.show', compact('product'));

    // }
    public function show(Product $product)
    {
        return view('dashbord.products.detail', compact('product'));
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
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'integer', 'min:0'],
            'product_categories_id' => ['required', 'exists:product_categories,id'],
        ]);

        // Handle file upload jika ada gambar baru
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Simpan file ke folder 'products' di storage/app/public
            $path = $file->store('products', 'public');

            // Ambil hanya nama file-nya
            $validated['image'] = basename($path); // hasil: eQ3PBCSPlN1lZUjwdGRbkVfoqzAEMPlAN1d4vl6O.jpg
        }

        // Update data produk
        $product->update($validated);
        // dd($validated);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // hapus produk serta imagenya dari storage
        if ($product->image) {
            Storage::disk('public')->delete('products/' . $product->image);
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
    }
}