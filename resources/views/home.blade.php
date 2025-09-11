@extends('layout')
@section('title', 'Ecommerce Eduwork')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold text-blue-600 mb-4">Selamat Datang di Ecommerce</h1>
  <p class="text-gray-700 mb-6">Temukan produk terbaik dengan harga terbaik di sini.</p>

  <a href="{{ route('products.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Lihat Daftar Produk</a>
</div>
<div class="max-w-7xl mx-auto px-4 py-8">
  <h2 class="text-2xl font-semibold text-gray-800 mb-6">Daftar Produk</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <!-- Produk 1 -->
    <div class="rounded-lg overflow-hidden shadow hover:shadow-md transition">
      <img src="https://th.bing.com/th/id/OIP.g-IXaRH2deMRDkasq9BDFQHaHa?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Produk A" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-bold text-blue-600 mb-1">Produk A</h3>
        <p class="text-gray-600 mb-3">Rp 120.000</p>
        <button class="flex items-center gap-2 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7h11l-1.5-7M7 13h10M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
          </svg>
          Tambah ke Keranjang
        </button>
      </div>
    </div>

    <!-- Produk 2 -->
    <div class="rounded-lg overflow-hidden shadow hover:shadow-md transition">
      <img src="https://tse1.mm.bing.net/th/id/OIP.6RoXBbPCv27HpPh1o4OUfQAAAA?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Produk B" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-bold text-blue-600 mb-1">Produk B</h3>
        <p class="text-gray-600 mb-3">Rp 85.000</p>
        <button class="flex items-center gap-2 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7h11l-1.5-7M7 13h10M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
          </svg>
          Tambah ke Keranjang
        </button>
      </div>
    </div>

    <!-- Produk 3 -->
    <div class="rounded-lg overflow-hidden shadow hover:shadow-md transition">
      <img src="https://www.bhphotovideo.com/images/images2500x2500/logitech_981_000906_g_pro_x_wireless_1578916.jpg" alt="Produk C" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-bold text-blue-600 mb-1">Produk C</h3>
        <p class="text-gray-600 mb-3">Rp 150.000</p>
        <button class="flex items-center gap-2 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7h11l-1.5-7M7 13h10M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
          </svg>
          Tambah ke Keranjang
        </button>
      </div>
    </div>

  </div>
</div>


@endsection