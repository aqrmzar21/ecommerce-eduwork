@extends('layout')
@section('title', 'Home')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold text-blue-600 mb-4">Selamat Datang di Ecommerce</h1>
  <p class="text-gray-700 mb-6">Temukan produk terbaik dengan harga terbaik di sini.</p>

  <a href="{{ route('products.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Lihat Daftar Produk</a>
</div>
@endsection