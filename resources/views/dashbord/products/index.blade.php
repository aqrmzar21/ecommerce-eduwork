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
                <table class="min-w-full w-full divide-y divide-gray-200 dark:divide-gray-700">
                        
                    <thead class="bg-gray-900 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">Nama Produk</th>
                            <th class="px-4 py-2 text-left">Stok</th>
                            <th class="px-4 py-2 text-left">Kategori</th>
                            <th class="px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $item)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $item->name }}</td>
                            <td class="px-4 py-2">{{ $item->stock }}</td>
                            <td class="px-4 py-2">{{ $item->category->name }}</td>
                            <td class="px-4 py-2 space-x-2">
                                <button class="text-gray-900 hover:underline" onclick="openModal({{ $item->id }})">Detail</button>
                                {{-- <button command="show-modal" commandfor="dialog" class="text-green-600 hover:underline" onclick="openModal({{ $item->id }})">Show</button> --}}
                                <a href="{{ route('products.edit', $item->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('products.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus produk ini?')">@csrf @method('DELETE')<input type="submit" value="Hapus" class="text-red-600 hover:underline')}}"></form>
                                {{-- <button class="text-red-600 hover:underline" onclick="confirm('Hapus produk ini?')">Hapus</button> --}}
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
</x-app-layout>

<!-- Modal -->
    <el-dialog>
        <div id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent hidden" role="dialog" aria-modal="true">
            {{-- TAB --}}
            <el-dialog-backdrop class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>
                
            <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                    <div class="bg-gray-800">
                        <div class="sm:flex sm:items-start">
                        
                            <div id="modalContent" class="w-full">
                                <!-- Konten akan dimuat via AJAX -->
                            </div>            
                        </div>      
                    {{-- X-planel --}}
                    </div>        
                    <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button onclick="closeModal()" class="inline-flex w-full justify-center rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Tutup</button>
                    </div>
                </el-dialog-panel>
            </div>
            {{-- AKHIR TAB --}}
        </div>
    </el-dialog>
{{-- MODAL DIALOG --}}

