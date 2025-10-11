@props(['active' => ''])

<nav class="bg-sky-950 fixed w-full z-50 top-0 shadow-md">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 md:px-8">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center gap-3">
            <img src="{{ asset('img/da-esemkasa/dewan-ambalan.png') }}" class="h-10 drop-shadow-md" alt="Logo">
            <span class="text-xl font-semibold text-white tracking-wide">DA ESEMKASA</span>
        </a>

        <!-- Mobile Menu Button -->
        <button id="navbar-toggle" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <!-- Menu Links -->
        <div class="hidden w-full md:flex md:w-auto" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg bg-sky-950 md:flex-row md:space-x-6 md:mt-0 md:border-0">
                <li>
                    <a href="{{ url('/') }}"
                        class="block py-2 px-3 rounded-md md:p-0 
                        {{ $active === 'home' ? 'text-black bg-yellow-500 md:bg-transparent md:text-yellow-400' : 'text-white hover:bg-sky-800 md:hover:bg-transparent md:hover:text-yellow-400' }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ url('/kegiatan') }}"
                        class="block py-2 px-3 rounded-md md:p-0 
                        {{ $active === 'kegiatan' ? 'text-black bg-yellow-500 md:bg-transparent md:text-yellow-400' : 'text-white hover:bg-sky-800 md:hover:bg-transparent md:hover:text-yellow-400' }}">
                        Kegiatan
                    </a>
                </li>
                <li>
                    <a href="{{ url('/galeri') }}"
                        class="block py-2 px-3 rounded-md md:p-0 
                        {{ $active === 'galeri' ? 'text-black bg-yellow-500 md:bg-transparent md:text-yellow-400' : 'text-white hover:bg-sky-800 md:hover:bg-transparent md:hover:text-yellow-400' }}">
                        Galeri
                    </a>
                </li>
                <li>
                    <a href="{{ url('/berita') }}"
                        class="block py-2 px-3 rounded-md md:p-0 
                        {{ $active === 'berita' ? 'text-black bg-yellow-500 md:bg-transparent md:text-yellow-400' : 'text-white hover:bg-sky-800 md:hover:bg-transparent md:hover:text-yellow-400' }}">
                        Berita
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
