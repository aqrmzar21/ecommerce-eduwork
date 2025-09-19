@section('title', 'Daftar Produk')
    
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Daftar Produk') }}
            </h2>
            <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700 text-sm">
                + Tambah Data
            </a>
        </div>
    </x-slot>

    <div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
            <table class="min-w-full w-full divide-y divide-gray-200 dark:divide-gray-700 text-white">
                    
                <thead class="bg-gray-800">
                    <tr>
                        <th class="px-4 py-2 text-left">Nama Produk</th>
                        <th class="px-4 py-2 text-left">Kategori</th>
                        <th class="px-4 py-2 text-left">Harga</th>
                        <th class="px-4 py-2 text-left">Stok</th>
                        <th class="px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $item->name }}</td>
                        <td class="px-4 py-2">{{ $item->category->name }}</td>
                            <td class="px-4 py-2">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                        <td class="px-4 py-2">{{ $item->stock }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <button class="text-green-600 hover:underline" onclick="openModal({{ $item->id }})"> Detail </button>
                            <a href="{{ route('products.edit', $item->id) }}" class="text-blue-600 hover:underline">Edit</a>
                            <button class="text-red-600 hover:underline" onclick="alert('Hapus produk ini?')">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <div class="mt-4">
        {{ $produk->links() }}
        </div>
    </div>
    </div>
<script>
    function openModal(id) {
        fetch(`/products/${id}`)
            .then(response => response.text())
            .then(html => {
                document.getElementById('modalContent').innerHTML = html;
                document.getElementById('detailModal').classList.remove('hidden');
            });
    }

    function closeModal() {
        document.getElementById('detailModal').classList.add('hidden');
    }
</script>
</x-app-layout>

<!-- Modal -->
<div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden modal-lg">
    <div class="bg-white dark:bg-gray-900 p-6 rounded-lg max-w-md">
        <h2 class="text-xl font-bold mb-4">Detail Produk</h2>
        <div id="modalContent">
            <!-- Konten akan dimuat via AJAX -->
        </div>
        <button onclick="closeModal()" class="mt-4 bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Tutup</button>
    </div>
</div>
