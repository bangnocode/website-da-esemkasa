<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta dasar -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunjungan Edukatif Dewan Ambalan SMKN 1 Banyuwangi ke PIGGI Banyuwangi</title>
    <meta name="description"
        content="Dewan Ambalan SMK Negeri 1 Banyuwangi melakukan kunjungan edukatif ke PIGGI Banyuwangi untuk menambah wawasan tentang geologi dan potensi alam Banyuwangi.">
    <meta name="keywords"
        content="Dewan Ambalan, SMKN 1 Banyuwangi, PIGGI Banyuwangi, Geopark Ijen, Pramuka Banyuwangi, kegiatan pramuka, kunjungan edukatif">
    <meta name="author" content="Dewan Ambalan SMKN 1 Banyuwangi">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Kunjungan Edukatif Dewan Ambalan SMKN 1 Banyuwangi ke PIGGI Banyuwangi">
    <meta property="og:description"
        content="Dewan Ambalan SMKN 1 Banyuwangi melaksanakan kunjungan edukatif ke PIGGI Banyuwangi untuk menambah wawasan tentang geologi dan potensi alam daerah.">
    <meta property="og:image" content="{{ asset('img/da-esemkasa/galeri/da-piggi-2.webp') }}">
    <meta property="og:url"
        content="{{ url('/berita/kunjungan-edukatif-dewan-ambalan-smkn-1-banyuwangi-ke-piggi-banyuwangi') }}">
    <meta property="og:site_name" content="Dewan Ambalan SMKN 1 Banyuwangi">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Kunjungan Edukatif Dewan Ambalan SMKN 1 Banyuwangi ke PIGGI Banyuwangi">
    <meta name="twitter:description"
        content="Kegiatan belajar luar sekolah: kunjungan Dewan Ambalan SMKN 1 Banyuwangi ke PIGGI Banyuwangi.">
    <meta name="twitter:image" content="{{ asset('img/da-esemkasa/galeri/da-piggi-2.webp') }}">

    <!-- Canonical -->
    <link rel="canonical"
        href="{{ url('/berita/kunjungan-edukatif-dewan-ambalan-smkn-1-banyuwangi-ke-piggi-banyuwangi') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/da-esemkasa/dewan-ambalan.png') }}">

    <!-- Tailwind + Flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
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
        <p class="text-gray-500 text-base text-center mb-3">
            Jum'at, 10 Oktober 2025
        </p>

        <!-- Judul -->
        <h1 class="text-2xl md:text-3xl font-bold text-center mx-auto max-w-2xl text-sky-900 leading-snug mb-6">
            Kunjungan Edukatif Dewan Ambalan SMKN 1 Banyuwangi ke PIGGI Banyuwangi
        </h1>

        <!-- Gambar -->
        <div class="max-w-xl mx-auto mb-6">
            <img src="{{ asset('img/da-esemkasa/galeri/da-piggi-2.webp') }}" alt="Open Recruitment 2025"
                class="rounded-lg w-full h-48 md:h-64 object-cover shadow-lg">
        </div>

        <!-- Isi Berita -->
        <article class="max-w-3xl mx-auto text-justify leading-relaxed text-gray-700 space-y-4 px-2">
            <p>
                Hari ini, Dewan Ambalan SMK Negeri 1 Banyuwangi melaksanakan kunjungan ke Pusat Informasi Geologi
                Geopark Ijen (PIGGI). Kegiatan ini menjadi bagian dari agenda pembelajaran luar sekolah yang bertujuan
                menambah wawasan anggota tentang potensi alam dan geologi di kawasan Banyuwangi.
            </p>
            <p>
                Dalam kunjungan tersebut, para anggota disambut hangat oleh tim PIGGI dan mendapatkan banyak penjelasan
                menarik mengenai Geopark Ijen, mulai dari sejarah terbentuknya gunung dan kawah, fenomena api biru,
                hingga pentingnya menjaga kelestarian lingkungan.
            </p>
            <p>
                Selain menambah pengetahuan, kegiatan ini juga menjadi sarana untuk mempererat kebersamaan antaranggota.
                Dengan suasana santai dan penuh semangat, para peserta tampak antusias mengikuti sesi penjelasan dan
                berkeliling melihat koleksi edukatif yang ada.
            </p>
            <p>
                Melalui kunjungan ini, Dewan Ambalan berharap anggotanya dapat belajar langsung dari lingkungan sekitar
                serta menumbuhkan rasa peduli terhadap alam dan budaya lokal Banyuwangi.
            </p>
        </article>

        <!-- Gambar -->
        <div class="max-w-3xl mx-auto mb-6 grid grid-cols-1 gap-3 mt-4 lg:grid-cols-2">
            <img src="{{ asset('img/da-esemkasa/galeri/da-piggi-1.webp') }}" alt="Open Recruitment 2025"
                class="rounded-lg w-full h-48 md:h-64 object-cover shadow-lg">
            <img src="{{ asset('img/da-esemkasa/galeri/da-piggi-3.webp') }}" alt="Open Recruitment 2025"
                class="rounded-lg w-full h-48 md:h-64 object-cover shadow-lg">
        </div>

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
