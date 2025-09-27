@section('title', 'Daftar Kategori')
<x-app-layout>
    <x-slot name="header" >
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Daftar Kategori') }}
            </h2>
            <a href="{{ route('categories.create') }}" class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700 justify-self-end text-sm">
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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <table class="min-w-full w-full divide-y divide-gray-200 dark:divide-gray-700 text-white">
                    
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
                        {{-- <td class="px-4 py-2">{{ $value->products->count() }}</td> --}}
                        <td class="px-4 py-2">{{ $value->products_count }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('categories.edit', $value->id) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('categories.destroy', $value->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus kategori ini?')">@csrf @method('DELETE')<input type="submit" value="Hapus" class="text-red-600 hover:underline')}}"></form>
                            {{-- <button class="text-red-600 hover:underline" onclick="alert('Hapus kategori ini?')">Hapus</button> --}}
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              
            </div>
            <div class="py-2 mb-8">
            {{ $kategori->links() }}
            {{-- tampilkan pagination --}}
            @if ($kategori->isEmpty())
                <p class="text-center text-gray-500 mt-4">Tidak ada data kategori.</p>
            @endif
            </div>
        </div>
    </div>
</x-app-layout>
