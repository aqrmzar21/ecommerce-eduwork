@extends('layout')
@section('title', 'Contoh')
@section('content')
  <h1>{{ $judul }}</h1>
  <ul>
    @foreach ($produk as $item)
    <li>{{ $item }}</li>
    @endforeach
  </ul>
@endsection