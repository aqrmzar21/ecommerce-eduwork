<nav class="bg-white border-b border-gray-200 shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <!-- Logo / Brand -->
      <div class="flex-shrink-0">
        <a href="/" class="text-xl font-bold text-blue-600">Ecommerce</a>
      </div>

      <!-- Navigation Links -->
      <div class="hidden md:flex space-x-6">
        
        {{-- // pengecekaan login --}}
        @if(Route::has('login'))
        @auth
        <a href="{{ url('/dashboard') }}" class="text-black-700 hover:text-blue-600 font-medium">Dashboard</a>
        @else 
        <a href="/" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
        <a href="{{ route('login') }}" class="hover:text-black-700 text-blue-600 font-medium">Masuk</a> 
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="hover:text-bold text-blue-600 font-medium">Daftar</a>
        
        @endif
        @endauth
        @endif
        
        @if (Auth::check())
          <a href="/logout" class="text-gray-700 hover:text-blue-600 font-medium">Logout</a>
        @endif
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button id="menu-toggle" class="text-gray-600 hover:text-blue-600 focus:outline-none">
          ☰
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2">
    <a href="/" class="block text-gray-700 hover:text-blue-600 font-medium">Home</a>
    <a href="/daftar-produk" class="block text-gray-700 hover:text-blue-600 font-medium">Daftar Produk</a>
    <a href="/keranjang" class="block text-gray-700 hover:text-blue-600 font-medium">Keranjang</a>
  </div>
</nav>

<script>
  // Toggle mobile menu
  document.getElementById('menu-toggle').addEventListener('click', function () {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  });
</script>