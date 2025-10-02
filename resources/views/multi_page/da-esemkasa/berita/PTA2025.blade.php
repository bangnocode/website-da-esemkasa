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


    <section class="mt-32 mb-20 px-4 md:px-8">
        <!-- Tanggal -->
        <p class="text-gray-500 text-sm text-center mb-2">
            Rabu, 25 Juli 2025
        </p>

        <!-- Judul -->
        <h1 class="text-2xl md:text-3xl font-bold text-center text-sky-900 mb-6 leading-snug">
            Penerimaan Tamu Ambalan & Diesnatalis SMK Negeri 1 Banyuwangi
        </h1>

        <!-- Gambar -->
        <div class="max-w-4xl mx-auto mb-6">
            <img src="{{ asset('img/da-esemkasa/galeri/bg-banner_11zon.webp') }}" alt="Penerimaan Tamu Ambalan"
                class="rounded-xl w-full h-64 md:h-96 object-cover shadow-lg">
        </div>

        <!-- Isi Berita -->
        <article class="max-w-3xl mx-auto text-justify leading-relaxed text-gray-700 space-y-4 px-2">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium quia cumque
                debitis repellendus recusandae molestiae similique sapiente doloribus ullam, aliquam aspernatur,
                omnis totam adipisci vitae hic modi laborum dicta optio.
            </p>
            <p>
                Molestias repudiandae non alias numquam nam in odio suscipit expedita fugit. Culpa dignissimos,
                sint quasi fugit aliquam ea aliquid accusamus, ex velit sequi, nobis nulla vitae similique
                saepe deleniti sunt.
            </p>
        </article>

        <!-- Tombol Kembali -->
        <div class="text-center mt-12">
            <a href="{{ url('/berita') }}"
                class="inline-block px-6 py-2 bg-yellow-500 text-black font-semibold rounded-lg shadow hover:bg-yellow-400 transition">
                << Berita Lainnya>>
            </a>
        </div>
    </section>


    <x-footer-da-esemkasa></x-footer-da-esemkasa>

    <script src="{{ asset('script.js') }}"></script>
</body>

</html>