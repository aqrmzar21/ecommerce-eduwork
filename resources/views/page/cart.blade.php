@extends('layout')
@section('title', 'Keranjang Belanja')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
  <h2 class="text-2xl font-semibold text-gray-800 mb-6">Keranjang Belanja</h2>

    <div class="mt-6 text-right">
      <a href="#" class="bg-blue-600 text-white px-2 py-2 rounded hover:bg-blue-700">Checkout Now</a>
      {{-- <a href="{{ route('page.checkout') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Checkout Sekarang
      </a> --}}
    </div>
</div>
@endsection