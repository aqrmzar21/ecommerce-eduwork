<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contoh extends Controller
{
    //
    public function index()
    {
        // coba buat array
        $judul = 'ini adalah judul dari contoh pakai blade';
        $produk = [ 'Laptop', 'Handphone', 'Tablet' ];

        // kembalikan ke view dari array $produk
        // return view('contoh', compact('produk'));
 
        // CARA 1 | jika pakai compact
        return view('contoh', compact('produk', 'judul'));
        // CARA 2 | bisa kembbalikan data tanpa compact jika lebih dari satu data
        // return view('contoh', ['produk' => $produk, 'judul' => $judul]);
        

        // return "ini adalah contoh";
        // return view('contoh');
    }
    
    public function coba()
    {
        $judul = 'My Activity';
        $kegiatan = [ 'Makan', 'Minum', 'Mandi', 'Masak' ];
        $ifLogin = true;
        return view('contoh', compact('judul', 'kegiatan', 'ifLogin'));
    }
}
