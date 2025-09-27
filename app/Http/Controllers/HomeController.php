<?php

namespace App\Http\Controllers;
use App\Models\Product as Produk;
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
        $text = "Halo, saya ingin memberitahu bahwa produk *" . $product->name . "* telah diklik.\n\n" .
                "Cek produk di sini: " . route('products.show', $product->id);
        // $message = "Produk *" . $product->name . "* telah diklik.\n\n" .
        //            "Cek produk di sini: " . route('products.show', $product->id);   
        $url = "https://api.whatsapp.com/send?phone=" . $no_wa . "&text=" . urlencode($text);
        // return redirect($url);
        return redirect()->away($url);
    
    }
}
