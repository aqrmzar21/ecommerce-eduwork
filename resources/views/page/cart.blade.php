@extends('layout')
@section('title', 'Keranjang Belanja')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
  <h2 class="text-2xl font-semibold text-gray-800 mb-6">Keranjang Belanja</h2>

    <div class="space-y-6">
    
    <!-- Item 1 -->
    <div class="flex items-center rounded-lg p-4 shadow-sm hover:shadow-md transition">
      <img src="https://via.placeholder.com/100x100?text=Produk+A" alt="Produk A" class="w-24 h-24 object-cover rounded">
      <div class="ml-4 flex-1">
        <h3 class="text-lg font-semibold text-blue-600">Produk A</h3>
        <p class="text-gray-600">Rp 120.000</p>
        <span class="text-sm text-gray-500">Jumlah:
        <input type="number" class="border-gray-300 rounded px-2 py-1" value="2" min="1">
        </span>
      </div>
      <button class="text-red-500 hover:text-red-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <!-- Item 2 -->
    <div class="flex items-center rounded-lg p-4 shadow-sm hover:shadow-md transition">
      <img src="https://via.placeholder.com/100x100?text=Produk+B" alt="Produk B" class="w-24 h-24 object-cover rounded">
      <div class="ml-4 flex-1">
        <h3 class="text-lg font-semibold text-blue-600">Produk B</h3>
        <p class="text-gray-600">Rp 85.000</p>
        <span class="text-sm text-gray-500">Jumlah:
        <input type="number" class="border-gray-300 rounded px-2 py-1" value="1" min="1">
        </span>
      </div>
      <button class="text-red-500 hover:text-red-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

  </div>

  <!-- Total & Checkout -->
  <div class="mt-8 text-right">
    <p class="text-lg font-semibold text-gray-800 mb-2">Total: Rp 325.000</p>
    <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
      Checkout Sekarang
    </button>
  </div>

</div>
@endsection