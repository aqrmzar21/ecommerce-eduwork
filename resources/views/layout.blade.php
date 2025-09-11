<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="app.css">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
</head>
<body>
@include('layout.header')
@yield('content')
@include('layout.footer')
</body>
</html>