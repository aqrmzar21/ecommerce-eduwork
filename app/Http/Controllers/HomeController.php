<?php

namespace App\Http\Controllers;
use App\Models\Product as Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        $perPage = Auth::check() && Auth::user()->role === 'admin' ? 3 : 6;

        $products = Produk::paginate($perPage);

        return view('page.home', compact('products'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $perPage = Auth::check() && Auth::user()->role === 'admin' ? 3 : 6;

        $products = Produk::where('name', 'like', '%' . $keyword . '%')
            ->orWhere('description', 'like', '%' . $keyword . '%')
            ->paginate($perPage);

        // agar keyword tetap di form setelah pencarian
        return view('page.home', compact('products', 'keyword'));
    }

    // buat fungsi klik produk
    public function klikProduk($id)
    {   
        // cari produk berdasarkan id
        $product = Produk::findOrFail($id);
        // tambahkan 1 ke kolom click
        $product->click = $product->click + 1;
        // simpan perubahan
        $product->save();

        // sekarang kita akan beri ntif ke user bahwa produk telah di klik
        $no_wa = '6282290316560'; // ganti dengan nomor WhatsApp tujuan
        $text = "Halo, saya ingin memberitahu bahwa produk *" . $product->name . "* ingin dibeli.";
        
        // $message = "Produk *" . $product->name . "* telah diklik.\n\n" .
        //            "Cek produk di sini: " . route('products.show', $product->id);   
        
        $url = "https://api.whatsapp.com/send?phone=" . $no_wa . "&text=" . urlencode($text);
        // return redirect($url);
        return redirect()->away($url);
    
    }
}