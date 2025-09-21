@section('title', 'Daftar Pengguna')
    
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Daftar Pengguna') }}
            </h2>
            {{-- <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700 text-sm">+ Tambah Data</a> --}}
        </div>
    </x-slot>
</x-app-layout>