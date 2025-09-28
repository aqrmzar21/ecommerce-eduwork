@extends('page.layout')
@section('title', 'Ecommerce Eduwork')

@section('content')
<div class="max-w-7xl mx-auto px-8 py-8">
  @if (Auth::check())
    <span class="text-3xl font-bold text-gray-600 mb-4">
    <h1 id="ketik">Halo, {{ Auth::user()->name }}! </h1>
    <span class="text-blue-600">Selamat datang kembali di Ecommerce.</span>
    </span>
  <p class="text-gray-700 mb-6">Ayo Mulai berlanja dengan harga terbaik di sini.</p>
  <!-- Form Pencarian Produk -->
  <form method="POST" action="{{ route('home.search') }}" class="mb-6 flex gap-2">
    @csrf
    <input type="search" name="keyword" class="border rounded px-4 py-2 w-full" placeholder="Cari produk...">
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-gray-700">Cari</button>
  </form>
  @else
    <h1 class="text-3xl font-bold text-indigo-600 mb-2">Selamat Datang di Ecommerce</h1>
  <p class="text-gray-700 mb-6">Temukan produk terbaik dengan harga terbaik di sini.</p>
  <a href="#" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded hover:bg-blue-700">Lihat Daftar Produk</a>
  @endif

</div>
<div class="max-w-7xl mx-auto p-8">
  <h2 class="text-2xl font-semibold text-gray-800 mb-6">Daftar Produk</h2>

   @if ($products->isEmpty())
    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 rounded mb-6" role="alert">
      <p class="font-bold">Pencarian tidak tersedia</p>
      <p>Produk yang Anda cari tidak ditemukan.</p>
    </div>
  @else
    @if (Auth::check())
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @else
    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 gap-2">
    @endif
      <!-- Daftar Produk -->
      @foreach ($products as $item)
      <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-md transition">
        <img src="{{ 'storage/products/' . $item->image }}" alt="Produk C" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
          <h3 class="text-lg font-bold text-blue-600 mb-1">{{ $item->name }}</h3>
          <p class="text-gray-600 mb-3">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
          <a href="{{ route('products.klikProduk', $item->id) }}" class="inline-flex justify-center items-center gap-2 bg-gray-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7h11l-1.5-7M7 13h10M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
            </svg>
            Beli
          </a>
        </div>
      </div>
      @endforeach 
    </div>
    <div class="max-w mt-2 py-4">
    {{ $products->links() }}
    </div>
  @endif
</div>
@endsection