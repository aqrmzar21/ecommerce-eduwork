<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
            <a href="#" class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700 float-right text-sm">
              + Tambah Data
          </a>
        </h2>
    </x-slot>

    <div class="py-8">
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <table class="min-w-full bg-dark text-white border border-gray-800 rounded shadow-sm">
                <thead class="bg-gray-900">
                    <tr>
                        <th class="px-4 py-2 text-left">Nama Kategori</th>
                        <th class="px-4 py-2 text-left">Junlah</th>
                        <th class="px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="px-4 py-2">Elektronik</td>
                        <td class="px-4 py-2">23</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="#" class="text-blue-600 hover:underline">Edit</a>
                            <button class="text-red-600 hover:underline" onclick="alert('Hapus kategori ini?')">Hapus</button>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">Fashion</td>
                        <td class="px-4 py-2">13</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="#" class="text-blue-600 hover:underline">Edit</a>
                            <button class="text-red-600 hover:underline" onclick="alert('Hapus kategori ini?')">Hapus</button>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">Makanan</td>
                        <td class="px-4 py-2">44</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="#" class="text-blue-600 hover:underline">Edit</a>
                            <button class="text-red-600 hover:underline" onclick="alert('Hapus kategori ini?')">Hapus</button>
                        </td>
                    </tr>
                </tbody>
              </table>
              
            </div>
        </div>
    </div>
</x-app-layout>
