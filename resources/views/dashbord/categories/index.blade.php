@section('title', 'Daftar Kategori');
<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Kategori') }}
        </h2>
        {{--  jika bukan admin maka jangan tampilkan tombol  --}}
        @if (auth()->user()->role === 'admin')
        <a href="{{ route('categories.create') }}" class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700 justify-self-end text-sm">
            + Tambah Data
        </a>
        @endif
    </x-slot>

    <div class="py-8">
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <table class="min-w-full bg-dark text-white border border-gray-800 rounded shadow-sm">
                <thead class="bg-gray-900">
                    <tr>
                        <th class="px-4 py-2 text-left">Nama Kategori</th>
                        <th class="px-4 py-2 text-left">Jumlah</th>
                        <th class="px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kategori as $value)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $value->name }}</td>
                        <td class="px-4 py-2">{{ $value->products_count }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('categories.edit', $value->id) }}" class="text-blue-600 hover:underline">Edit</a>
                            <button class="text-red-600 hover:underline" onclick="alert('Hapus kategori ini?')">Hapus</button>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              
            </div>
        </div>
    </div>
</x-app-layout>
