<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA ESEMKASA</title>
    <link rel="icon" href="{{ asset('img/da-esemkasa/dewan-ambalan.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
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
                            class="block py-2 px-3 rounded-md text-white hover:bg-sky-800 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0">Galeri</a>
                    </li>
                    <li>
                        <a href="{{ url('/berita') }}"
                            class="block py-2 px-3 text-black bg-yellow-500 rounded-md md:bg-transparent md:text-yellow-400 md:p-0">Berita</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section class="mt-32 flex flex-col items-center px-6">
        <h1 class="font-bold text-center text-2xl mb-2 text-yellow-500 md:text-3xl">
            Berita
        </h1>
        <p class="text-center font-medium md:text-lg text-gray-700 max-w-2xl">
            Berita Organisasi Dewan Ambalan di SMK Negeri 1 Banyuwangi
        </p>
    </section>

    <main class="py-12 px-6">
        <section class="section-news grid gap-8 sm:grid-cols-2 lg:grid-cols-3 md:max-w-7xl mx-auto">

            <a href="{{ url('/berita/PTA2025') }}" class="block">
                <article
                    class="bg-white border rounded-lg shadow-md overflow-hidden hover:shadow-xl hover:scale-[1.02] transition-all duration-300">
                    <img src="{{ asset('img/da-esemkasa/galeri/bg-banner_11zon.webp') }}" alt="PTA" class="w-full h-48 object-cover">
                    <div class="p-6 space-y-3">
                        <h2 class="font-bold text-lg text-sky-900">
                            Penerimaan Tamu Ambalan & Diesnatalis SMK Negeri 1 Banyuwangi
                        </h2>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Merupakan kegiatan gabungan antara Penerimaan Tamu Ambalan dan perayaan hari jadi sekolah
                            yang dilaksanakan pada 18 Juli 2025. Kegiatan ini bertujuan ...
                        </p>
                        <span class="block text-sm text-gray-500">Rabu, 25 Juli 2025</span>
                    </div>
                </article>
            </a>

            <!-- Card lainnya -->
            <a href="{{ url('/berita/open-recruitmen-da-2025') }}" class="block">
                <article
                    class="bg-white border rounded-lg shadow-md overflow-hidden hover:shadow-xl hover:scale-[1.02] transition-all duration-300">
                    <img src="{{ asset('img/da-esemkasa/galeri/IMG_1659_6_11zon.webp') }}" alt="Open Recruitment" class="w-full h-48 object-cover">
                    <div class="p-6 space-y-3">
                        <h2 class="font-bold text-lg text-sky-900">
                            Open Recruitment Anggota Dewan Ambalan
                        </h2>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Adalah proses seleksi terbuka bagi Pramuka Penegak di SMKN 1 Banyuwangi yang ingin bergabung
                            dalam kepengurusan Ambalan. Kegiatan ini bertujuan ...
                        </p>
                        <span class="block text-sm text-gray-500">Rabu, 25 Juli 2025</span>
                    </div>
                </article>
            </a>

        </section>
    </main>


    <x-footer-da-esemkasa></x-footer-da-esemkasa>

</body>

</html>