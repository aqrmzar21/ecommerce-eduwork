<div class="flex text-white dark:bg-gray-900 rounded-lg shadow-xl p-6 space-x-6 items-center">
    <!-- Detail Produk -->
    
    <div class="flex-1 mt-2">
        <p class="mb-2"><strong class="flex text-xl">Nama:</strong> {{ $product->name }}</p>
        <p class="mb-2"><strong class="flex text-xl">Kategori:</strong> {{ $product->category->name }}</p>
        <p class="mb-2"><strong class="flex text-xl">Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
        <p class="mb-2"><strong class="flex text-xl">Stok:</strong> {{ $product->stock }}</p>
        <p class="mb-2"><strong class="flex text-xl">Deskripsi:</strong> {{ $product->description ?? '-' }}</p>
    </div>

    <!-- Gambar Produk -->
    @if ($product->image)
        <div class="flex-shrink-0">
            <img src="{{ asset('storage/products/' . $product->image) }}" alt="Gambar Produk" style="width:120px" class="w-40 h-40 object-cover rounded">
        </div>
    @endif
</div>