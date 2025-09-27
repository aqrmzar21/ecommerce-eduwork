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
          {{-- @if (Route::has('register'))
            <a href="{{ route('register') }}" class="hover:text-bold text-blue-600 font-medium">Daftar</a>
          @endif
          @if (Auth::check())
            <a href="/logout" class="text-gray-700 hover:text-blue-600 font-medium">Logout</a>
          @endif --}}
      </div>
      <div class="hidden sm:flex sm:items-center sm:ms-6">
        @if(Route::has('login'))
          @auth
            @if (auth()->user()->role === 'admin')
              <a href="{{ route('dashboard') }}" class="text-black-700 hover:text-blue-600 font-medium">Dashboard</a>
            @endif
            @else 
              <a href="{{ route('login') }}" class="hover:text-black-700 text-violet-600 font-medium">Masuk</a> 
          @endauth
        @endif
          <x-dropdown align="right" width="48">
              <x-slot name="trigger">
                  <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                  @if(Auth::check())
                      <div>{{ Auth::user()->name }}</div>
                      <div class="ms-1">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                      </div>
                  @endif
                  </button>
              </x-slot>

              <x-slot name="content">
                  <x-dropdown-link :href="route('profile.edit')">
                      {{ __('Profile') }}
                  </x-dropdown-link>

                  <!-- Authentication -->
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf

                      <x-dropdown-link :href="route('logout')"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </x-dropdown-link>
                  </form>
              </x-slot>
          </x-dropdown>
      </div>

</nav>
