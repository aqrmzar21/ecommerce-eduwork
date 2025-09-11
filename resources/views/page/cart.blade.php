@extends('layout')
@section('title', 'Keranjang Belanja')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
  <h2 class="text-2xl font-semibold text-gray-800 mb-6">Keranjang Belanja</h2>

  @if ($keranjang->isEmpty())
    <p class="text-gray-600">Keranjang kamu masih kosong.</p>
  @else
    <table class="w-full table-auto border-collapse">
      <thead>
        <tr class="bg-gray-200 text-left">
          <th class="p-2">Produk</th>
          <th class="p-2">Harga</th>
          <th class="p-2">Jumlah</th>
          <th class="p-2">Total</th>
          <th class="p-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($keranjang as $item)
          <tr class="border-b">
            <td class="p-2">{{ $item->produk->nama }}</td>
            <td class="p-2">Rp {{ number_format($item->produk->harga, 0, ',', '.') }}</td>
            <td class="p-2">{{ $item->jumlah }}</td>
            <td class="p-2">Rp {{ number_format($item->produk->harga * $item->jumlah, 0, ',', '.') }}</td>
            <td class="p-2">
              <form action="{{ route('keranjang.hapus', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-red-500 hover:text-red-700">Hapus</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="mt-6 text-right">
      <a href="{{ route('page.checkout') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Checkout Sekarang
      </a>
    </div>
  @endif
</div>
@endsection