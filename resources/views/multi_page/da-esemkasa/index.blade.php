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
                            class="block py-2 px-3 text-black bg-yellow-500 rounded-md md:bg-transparent md:text-yellow-400 md:p-0"
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
                            class="block py-2 px-3 rounded-md text-white hover:bg-sky-800 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0">Berita</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- HERO -->
    <section class="relative bg-center bg-cover h-screen flex items-center justify-center"
        style="background-image: url('{{ asset('img/da-esemkasa/galeri/IMG_1775_10_11zon.webp') }}');">
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative text-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Selamat Datang!</h1>
            <h2 class="text-lg md:text-2xl font-medium mb-8">Dewan Ambalan <br> SMK Negeri 1 Banyuwangi</h2>
            <a href="#section-activities"
                class="bg-yellow-500 text-black px-6 py-3 rounded-lg font-medium shadow hover:shadow-xl transition">Yuk
                Explore Tentang Kami!</a>
        </div>
    </section>

    <!-- KEGIATAN -->
    <section id="section-activities" class="px-6 py-16 max-w-7xl mx-auto">
        <h1 class="text-center text-3xl font-bold text-yellow-500 mb-2">Kegiatan</h1>
        <p class="text-center text-gray-600 mb-12 text-lg">Kegiatan Organisasi Dewan Ambalan Di SMK Negeri 1 Banyuwangi
        </p>
        <div class="grid gap-8 md:grid-cols-3">
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl hover:-translate-y-1 transition">
                <h2 class="text-2xl font-bold mb-3">PTA <br> (Penerimaan Tamu Ambalan)</h2>
                <p class="mb-4 text-gray-700">PTA adalah kegiatan pramuka untuk menyambut siswa baru dan mengenalkan
                    mereka pada kepramukaan penegak...</p>
                <img src="{{ asset('img/da-esemkasa/galeri/bg-banner_11zon.webp') }}" loading="lazy" alt="" class="w-full rounded-lg shadow">
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl hover:-translate-y-1 transition">
                <h2 class="text-2xl font-bold mb-3">Jumat Rutin</h2>
                <p class="mb-4 text-gray-700">Kegiatan Pramuka yang dilaksanakan setiap hari Jumat, membina
                    kedisiplinan, kerja sama, dan keterampilan...</p>
                <img src="{{ asset('img/da-esemkasa/galeri/IMG_1659_6_11zon.webp') }}" loading="lazy" alt="" class="w-full rounded-lg shadow">
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl hover:-translate-y-1 transition">
                <h2 class="text-2xl font-bold mb-3">Kunjungan SD</h2>
                <p class="mb-4 text-gray-700">Program kerja Dewan Ambalan SMKN 1 Banyuwangi untuk mengajar kepramukaan di SD melalui kegiatan
                    interaktif seperti tali-menali dan permainan edukatif...</p>
                <img src="{{ asset('img/da-esemkasa/galeri/1bc3c56e-d437-4d18-abed-ef061397e509_4_11zon.webp') }}" loading="lazy" alt="" class="w-full rounded-lg shadow">
            </div>
        </div>
        <div class="text-end mt-6">
            <a href="{{ url('/kegiatan') }}" class="text-yellow-600 font-semibold hover:underline">Lainnya >></a>
        </div>
    </section>

    <!-- GALERI -->
    <section class="bg-sky-900 px-6 py-16">
        <h1 class="text-center text-3xl font-bold text-yellow-500 mb-2">Galeri</h1>
        <p class="text-center text-white mb-12 text-lg">Kumpulan Dokumentasi Kegiatan Organisasi Dewan Ambalan</p>
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3">
            <img src="{{ asset('img/da-esemkasa/galeri/IMG_4107_11_11zon.webp') }}" loading="lazy" alt=""
                class="w-full rounded-xl border-yellow-500 border-2 shadow hover:scale-105 transition">
            <img src="{{ asset('img/da-esemkasa/galeri/IMG_1775_10_11zon.webp') }}" loading="lazy" alt=""
                class="w-full rounded-xl border-yellow-500 border-2 shadow hover:scale-105 transition">
            <img src="{{ asset('img/da-esemkasa/galeri/1bc3c56e-d437-4d18-abed-ef061397e509_4_11zon.webp') }}" loading="lazy" alt=""
                class="w-full rounded-xl border-yellow-500 border-2 shadow hover:scale-105 transition">
        </div>
        <div class="text-end mt-6">
            <a href="{{ url('/galeri') }}" class="text-yellow-300 font-semibold hover:underline">Lainnya >></a>
        </div>
    </section>

    <!-- BERITA -->
    <section class="px-6 py-16 max-w-7xl mx-auto">
        <h1 class="text-center text-3xl font-bold text-yellow-500 mb-2">Berita</h1>
        <p class="text-center text-gray-600 mb-12 text-lg">Berita Tentang Informasi Terbaru Dari Organisasi Dewan
            Ambalan</p>
        <div class="grid gap-8 md:grid-cols-3">
            <a href="{{ url('/berita/open-recruitmen-da-2025') }}"
                class="bg-white p-6 rounded-xl shadow hover:shadow-xl hover:-translate-y-1 transition block">
                <img src="{{ asset('img/da-esemkasa/galeri/IMG_1659_6_11zon.webp') }}" loading="lazy" alt="" class="w-full rounded-lg shadow">
                <h2 class="text-lg font-semibold mt-6">Open Recruitment Anggota Dewan Ambalan</h2>
                <p class="text-sm text-gray-700 mt-4">Proses seleksi terbuka bagi Pramuka Penegak di SMKN 1
                    Banyuwangi...</p>
                <span class="block text-sm text-gray-500 mt-4">Rabu, 25 Juli 2025</span>
            </a>
            <a href="{{ url('/berita/PTA2025') }}"
                class="bg-white p-6 rounded-xl shadow hover:shadow-xl hover:-translate-y-1 transition block">
                <img src="{{ asset('img/da-esemkasa/galeri/bg-banner_11zon.webp') }}" loading="lazy" alt="" class="w-full rounded-lg shadow">
                <h2 class="text-lg font-semibold mt-6">Penerimaan Tamu Ambalan & Diesnatalis SMK Negeri 1 Banyuwangi
                </h2>
                <p class="text-sm text-gray-700 mt-4">Kegiatan gabungan antara Penerimaan Tamu Ambalan dan perayaan hari
                    jadi sekolah...</p>
                <span class="block text-sm text-gray-500 mt-4">Rabu, 25 Juli 2025</span>
            </a>
            <a href="{{ url('/berita/PTA2025') }}"
                class="bg-white p-6 rounded-xl shadow hover:shadow-xl hover:-translate-y-1 transition block">
                <img src="{{ asset('img/da-esemkasa/galeri/bg-banner_11zon.webp') }}" loading="lazy" alt="" class="w-full rounded-lg shadow">
                <h2 class="text-lg font-semibold mt-6">Penerimaan Tamu Ambalan & Diesnatalis SMK Negeri 1 Banyuwangi
                </h2>
                <p class="text-sm text-gray-700 mt-4">Kegiatan gabungan antara Penerimaan Tamu Ambalan dan perayaan hari
                    jadi sekolah...</p>
                <span class="block text-sm text-gray-500 mt-4">Rabu, 25 Juli 2025</span>
            </a>
        </div>
        <div class="text-end mt-6">
            <a href="{{ url('/berita') }}" class="text-yellow-600 font-semibold hover:underline">Lainnya >></a>
        </div>
    </section>

    <x-footer-da-esemkasa></x-footer-da-esemkasa>

    <script src="{{ asset('script.js') }}"></script>

</body>

</html>