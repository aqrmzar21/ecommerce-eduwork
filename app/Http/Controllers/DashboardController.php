<?php

namespace App\Http\Controllers;

use App\Models\Product as Produk;
use App\Models\ProductCategories as KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        // memberikan info vard terkait info yang ada di B
        $jumlahProduk = Produk::count();
        $jumlahKategori = KategoriProduk::count();
        $jumlahklikProduk = Produk::sum('click');
        return view('dashboard', compact('jumlahProduk', 'jumlahKategori', 'jumlahklikProduk'));
    }
}
