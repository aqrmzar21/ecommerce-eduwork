<?php

namespace App\Http\Controllers;

use App\Models\Product as Produk;
use App\Models\ProductCategories as KategoriProduk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $jumlahProduk = Produk::count();
        $jumlahKategori = KategoriProduk::count();

        return view('dashboard', compact('jumlahProduk', 'jumlahKategori'));
    }
}
