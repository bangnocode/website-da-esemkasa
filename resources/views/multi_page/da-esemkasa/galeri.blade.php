<!DOCTYPE html>
<html lang="en">

<head>
    <x-tag-head-for-s-e-o></x-tag-head-for-s-e-o>
</head>

<body class="overflow-x-hidden scroll-smooth bg-slate-50 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-sky-950 fixed w-full z-50 top-0 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 md:px-8">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <img src="{{ asset('img/da-esemkasa/dewan-ambalan.png') }}" class="h-10 drop-shadow-md" alt="Logo">
                <span class="text-xl font-semibold text-white tracking-wide">DA ESEMKASA</span>
            </a>

            <!-- Mobile Menu Button -->
            <button data-collapse-toggle="navbar-sticky" type="button"
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
                            class="block py-2 px-3 rounded-md text-white hover:bg-sky-800 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ url('/kegiatan') }}"
                            class="block py-2 px-3 rounded-md text-white hover:bg-sky-800 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0">Kegiatan</a>
                    </li>
                    <li>
                        <a href="{{ url('/galeri') }}"
                            class="block py-2 px-3 text-black bg-yellow-500 rounded-md md:bg-transparent md:text-yellow-400 md:p-0">Galeri</a>
                    </li>
                    <li>
                        <a href="{{ url('/berita') }}"
                            class="block py-2 px-3 rounded-md text-white hover:bg-sky-800 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0">Berita</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <section class="mt-32 flex flex-col items-center px-6 text-center">
        <h1 class="font-bold text-2xl md:text-3xl mb-2 text-yellow-500">Galeri</h1>
        <p class="font-medium md:text-lg text-gray-700 max-w-2xl">
            Kumpulan dokumentasi kegiatan Organisasi Dewan Ambalan SMK Negeri 1 Banyuwangi
        </p>
    </section>

    <main class="py-12 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            <!-- Gambar -->
            <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="{{ asset('img/da-esemkasa/galeri/1bc3c56e-d437-4d18-abed-ef061397e509_4_11zon.webp') }}"
                    alt="Galeri 1" class="h-full w-full object-cover hover:scale-105 transition duration-300">
            </div>
            <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="{{ asset('img/da-esemkasa/galeri/IMG_8105_12_11zon.webp') }}" alt="Galeri 2"
                    class="h-full w-full object-cover hover:scale-105 transition duration-300">
            </div>
            <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="{{ asset('img/da-esemkasa/galeri/IMG_4107_11_11zon.webp') }}" alt="Galeri 3"
                    class="h-full w-full object-cover hover:scale-105 transition duration-300">
            </div>
            <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="{{ asset('img/da-esemkasa/galeri/bg-banner_11zon.webp') }}" alt="Galeri 4"
                    class="h-full w-full object-cover hover:scale-105 transition duration-300">
            </div>
            <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="{{ asset('img/da-esemkasa/galeri/d6e83716-1904-4256-8e2a-465f4ee518b2_5_11zon.webp') }}"
                    alt="Galeri 5" class="h-full w-full object-cover hover:scale-105 transition duration-300">
            </div>
            <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="{{ asset('img/da-esemkasa/galeri/IMG_1659_6_11zon.webp') }}" alt="Galeri 6"
                    class="h-full w-full object-cover hover:scale-105 transition duration-300">
            </div>
            <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="{{ asset('img/da-esemkasa/galeri/IMG_1688_7_11zon.webp') }}" alt="Galeri 7"
                    class="h-full w-full object-cover hover:scale-105 transition duration-300">
            </div>
            <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="{{ asset('img/da-esemkasa/galeri/IMG_1775_10_11zon.webp') }}" alt="Galeri 8"
                    class="h-full w-full object-cover hover:scale-105 transition duration-300">
            </div>
        </div>

    </main>


    <x-footer-da-esemkasa></x-footer-da-esemkasa>

    <script src="{{ asset('script.js') }}"></script>

</body>

</html>
