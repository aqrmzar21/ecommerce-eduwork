<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="app.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
</head>
<body>
@include('page.header') 
{{-- // opsi 1 --}}
{{-- <x-navbar></x-navbar>  --}}
{{-- // opsi 2 --}}
@yield('content')
@include('page.footer')
<script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>