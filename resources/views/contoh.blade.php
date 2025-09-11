<!DOCTYPE html>
<head>
  <title>Contoh</title>
</head>
<body>
  <h1>{{ $judul }}</h1>
  <ul>
    @foreach ($produk as $item)
    <li>{{ $item }}</li>
    @endforeach
  </ul>
</body>
</html>