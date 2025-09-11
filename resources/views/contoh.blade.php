@extends('layout')
@section('title', 'Contoh')
@section('content')
  <h1>{{ $judul }}</h1>
    {{-- Coba kompoenen alert --}}
  <x-alert>
    {{-- Coba kondisional if-else --}}
    <div class="p-4 mb-4 text-sm text-gray-800 rounded-lg bg-green-50" role="alert">
      @if($ifLogin)
      <span class="font-medium text-green-500">Berhasil!</span> Data telah disimpan.
      @else
      <span class="font-medium text-red-500">Gagal!</span> menyimpan data.
      @endif
    </div>
  </x-alert>


  {{-- INI class INDEX --}}
  {{-- <ul class="list">
    @foreach ($produk as $item)
    <li>{{ $item }}</li>
    @endforeach
  </ul> --}}

  {{-- INI class COBA --}}
  <ol class="list-decimal list-inside space-y-2 text-gray-700">
    @foreach ($kegiatan as $item)
    <li>{{ $item }}</li>
    @endforeach
  </ol>
@endsection