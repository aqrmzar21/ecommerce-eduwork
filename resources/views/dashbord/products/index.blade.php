<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Produk') }}
          <a href="#" class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700 float-right text-sm">
              + Tambah Data
          </a>
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <table class="min-w-full bg-dark text-white border border-gray-800 rounded shadow-sm">
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
                            <a href="#" class="text-blue-600 hover:underline">Edit</a>
                            <button class="text-red-600 hover:underline" onclick="alert('Hapus produk ini?')">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

              </table>
          </div>

        </div>
    </div>
</x-app-layout>
