@extends('layout')
@section('title', 'Home | Ecommerce Eduwork')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold text-blue-600 mb-4">Selamat Datang di Ecommerce</h1>
  <p class="text-gray-700 mb-6">Temukan produk terbaik dengan harga terbaik di sini.</p>

  <a href="{{ route('products.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Lihat Daftar Produk</a>
</div>
<div class="max-w-7xl mx-auto px-4 py-8">
  <h2 class="text-2xl font-semibold text-gray-800 mb-6">Daftar Produk</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    {{-- @foreach ($produk as $item)
      <div class="border rounded-lg p-4 shadow hover:shadow-md transition">
        <h3 class="text-lg font-bold text-blue-600">{{ $item->nama }}</h3>
        <p class="text-gray-600 mb-2">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
        <a href="{{ route('keranjang.tambah', $item->id) }}" class="text-sm bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
          Tambah ke Keranjang
        </a>
      </div>
    @endforeach --}}

    <!-- Produk 1 -->
    <div class="border rounded-lg p-4 shadow hover:shadow-md transition">
      <h3 class="text-lg font-bold text-blue-600">Produk A</h3>
      <p class="text-gray-600 mb-2">Rp 120.000</p>
      <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
        Tambah ke Keranjang
      </button>
    </div>

    <!-- Produk 2 -->
    <div class="border rounded-lg p-4 shadow hover:shadow-md transition">
      <h3 class="text-lg font-bold text-blue-600">Produk B</h3>
      <p class="text-gray-600 mb-2">Rp 85.000</p>
      <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
        Tambah ke Keranjang
      </button>
    </div>

    <!-- Produk 3 -->
    <div class="border rounded-lg p-4 shadow hover:shadow-md transition">
      <h3 class="text-lg font-bold text-blue-600">Produk C</h3>
      <p class="text-gray-600 mb-2">Rp 150.000</p>
      <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
        Tambah ke Keranjang
      </button>
    </div>

  </div>
</div>


@endsection