@section('title', 'Halaman Utama')
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
                    {{-- {{ __("You're logged in!") }} --}}
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
                                    <i class="fas fa-box text-indigo-500 text-4xl"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Card: Jumlah Klik Produk -->
                        <div class="bg-white shadow-md rounded-lg p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                <h2 class="text-lg font-semibold text-gray-700">Jumlah Klik Produk</h2>
                                <p class="text-3xl font-bold text-green-600 mt-2">{{ $jumlahklikProduk }}</p>
                                </div>
                                <div class="text-red-500">
                                    <i class="fas fa-eye text-red-500 text-4xl"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Card: Jumlah Kategori Produk -->
                        <div class="bg-white shadow-md rounded-lg p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                <h2 class="text-lg font-semibold text-gray-700">Kategori Produk</h2>
                                <p class="text-3xl font-bold text-yellow-500 mt-2">{{ $jumlahKategori }}</p>
                                </div>
                                <div class="text-yellow-500">
                                    <i class="fas fa-tags text-yellow-500 text-4xl"></i>
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
