@section('title', 'Halaman Utama');
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    {{-- Content Crad Bagde --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Card: Jumlah Produk -->
                        <div class="bg-white shadow-md rounded-lg p-6">
                        <div class="flex items-center justify-between">
                            <div>
                            <h2 class="text-lg font-semibold text-gray-700">Jumlah Produk</h2>
                            <p class="text-3xl font-bold text-indigo-600 mt-2">{{ $jumlahProduk }}</p>
                            </div>
                            <div class="text-indigo-500">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 3h18v18H3V3z"></path>
                            </svg>
                            </div>
                        </div>
                        </div>

                        <!-- Card: Jumlah Pengunjung -->
                        <div class="bg-white shadow-md rounded-lg p-6">
                        <div class="flex items-center justify-between">
                            <div>
                            <h2 class="text-lg font-semibold text-gray-700">Jumlah Pengunjung</h2>
                            {{-- <p class="text-3xl font-bold text-green-600 mt-2">{{ $jumlahPengunjung }}</p> --}}
                            {{-- <p class="text-3xl font-bold text-green-600 mt-2">2,345</p> --}}
                            <p class="text-3xl font-bold text-green-600 mt-2"><?= date("is"); ?></p>
                            </div>
                            <div class="text-green-500">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m0-4a4 4 0 100-8 4 4 0 000 8zm6 0a4 4 0 100-8 4 4 0 000 8z"></path>
                            </svg>
                            </div>
                        </div>
                        </div>

                        <!-- Card: Jumlah Kategori Produk -->
                        <div class="bg-white shadow-md rounded-lg p-6">
                        <div class="flex items-center justify-between">
                            <div>
                            <h2 class="text-lg font-semibold text-gray-700">Kategori Produk</h2>
                            <p class="text-3xl font-bold text-red-600 mt-2">{{ $jumlahKategori }}</p>
                            </div>
                            <div class="text-yellow-500">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            </div>
                        </div>
                        </div>
                    </div>
                    {{-- Content Crad Bagde --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
