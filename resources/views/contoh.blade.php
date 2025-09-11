@extends('layout')
@section('title', 'Contoh')
@section('content')
  <h1>{{ $judul }}</h1>
  <x-alert>
    {{-- Anda berhasil masuk --}}
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
      <span class="font-medium">Berhasil!</span> Data telah disimpan.
    </div>
  </x-alert>
  <ul>
    @foreach ($produk as $item)
    <li>{{ $item }}</li>
    @endforeach
  </ul>
@endsection