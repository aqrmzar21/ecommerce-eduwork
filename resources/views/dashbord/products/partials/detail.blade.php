<div class="flex text-white dark:bg-gray-900 rounded-lg shadow-xl p-6 space-x-6">
    <!-- Detail Produk -->
    <div class="flex-1">
        <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-100">Detail Produk</h3>
        <p class="mb-2"><strong>Nama:</strong> {{ $product->name }}</p>
        <p class="mb-2"><strong>Kategori:</strong> {{ $product->category->name }}</p>
        <p class="mb-2"><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
        <p class="mb-2"><strong>Stok:</strong> {{ $product->stock }}</p>
        <p class="mb-2"><strong>Deskripsi:</strong> {{ $product->description ?? '-' }}</p>
    </div>

    <!-- Gambar Produk -->
    @if ($product->image)
        <div class="flex-shrink-0">
            <img src="{{ asset('storage/products/' . $product->image) }}" alt="Gambar Produk" style="width:120px" class="w-40 h-40 object-cover rounded">
        </div>
    @endif
</div>