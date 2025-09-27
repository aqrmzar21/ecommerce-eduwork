@section('title', 'Daftar Pengguna')
    
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            {{-- <a href="{{ url()->previous() }}" class="bg-white-500 text-white px-2 py-1 rounded text-sm hover:bg-gray-200">
                <i class="fas fa-arrow-left text-indigo-500 text-xl"></i>
            </a> --}}
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Daftar Pengguna') }}
            </h2>
            {{-- <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700 text-sm">+ Tambah Data</a> --}}
        </div>
    </x-slot>

     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full w-full divide-y divide-gray-200 dark:divide-gray-700">
                        
                    <thead class="bg-gray-900 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">Nama Pengguna</th>
                            <th class="px-4 py-2 text-left">Email</th>
                            <th class="px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $u)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $u->name }}</td>
                            <td class="px-4 py-2">{{ $u->email }}</td> 
                            <td class="px-4 py-2 space-x-2">Coba
                                {{-- <button class="text-violet-900 hover:underline" onclick="openModal({{ $item->id }})">Detail</button> --}}
                                {{-- <a href="{{ route('products.edit', $item->id) }}" class="text-blue-600 hover:underline">Edit</a> --}}
                                {{-- <form action="{{ route('users.destroy', $u->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus pengguna ini?')">@csrf @method('DELETE')<input type="submit" value="Hapus" class="text-red-600 hover:underline')}}"></form> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>


</x-app-layout>