<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Produk') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype=multipart/form-data>
                    @csrf
                    @method('PUT') <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Produk</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('name')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="product_categories_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kategori</label>
                        <select name="product_categories_id" id="product_categories_id" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ (old('product_categories_id', $product->product_categories_id) == $category->id) ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('product_categories_id')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Harga</label>
                        <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('price')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="stock" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Stok</label>
                        <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('stock')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Deskripsi</label>
                        <textarea name="description" id="description" rows="4" required
                                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Upload Gambar Produk</label>

                        <div class="flex items-center space-x-4">
                            <!-- Tombol custom upload -->
                            <label for="image" class="cursor-pointer inline-block bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 text-sm">
                                Pilih File
                            </label>

                            <!-- Nama file yang dipilih -->
                            <span id="file-name-display" class="text-sm text-gray-600 dark:text-gray-300">Belum ada file yang dipilih</span>
                        </div>

                        <!-- Input file tersembunyi -->
                        <input type="file" id="image" name="image" class="hidden" onchange="previewImage(this)">

                        <!-- Preview gambar -->
                        <div class="mt-4">
                            <img id="image-preview" src="{{ $product->image ? asset('storage/products/' . $product->image) : '' }}" alt="Preview Gambar" class="w-40 h-40 object-cover rounded-md border border-gray-300 dark:border-gray-600">
                        </div>

                        <!-- Hidden input untuk gambar lama (optional, jika edit) -->
                        <input type="hidden" name="gambar_lama" value="{{ old('gambar_lama') }}">
                        
                        @error('image')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <script>
                        function previewImage(input) {
                            const file = input.files[0];
                            const fileNameDisplay = document.getElementById('file-name-display');
                            const imagePreview = document.getElementById('image-preview');
                            const gambarLamaInput = document.querySelector('input[name="gambar_lama"]');

                            if (file) {
                                fileNameDisplay.textContent = file.name;
                                const reader = new FileReader();
                                reader.onload = function (e) {
                                    imagePreview.src = e.target.result;
                                    gambarLamaInput.value = ''; // Kosongkan gambar lama
                                };
                                reader.readAsDataURL(file);
                            } else {
                                fileNameDisplay.textContent = 'Belum ada file yang dipilih';
                                // Kembalikan ke gambar lama jika ada
                                const oldImage = gambarLamaInput.value;
                                if (oldImage) {
                                    imagePreview.src = `/storage/products/${oldImage}`;
                                } else {
                                    imagePreview.src = '';
                                }
                            }
                        }
                    </script>
                    <div class="flex items-center justify-end">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>