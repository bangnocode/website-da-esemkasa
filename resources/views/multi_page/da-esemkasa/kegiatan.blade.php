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
                            class="block py-2 px-3 text-black bg-yellow-500 rounded-md md:bg-transparent md:text-yellow-400 md:p-0">Kegiatan</a>
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


    <section class="mt-32 flex flex-col items-center px-6">
        <h1 class="font-bold text-center text-2xl mb-2 text-yellow-500 md:text-3xl">
            Kegiatan
        </h1>
        <p class="text-center font-medium md:text-lg text-gray-700 max-w-2xl">
            Kegiatan Organisasi Dewan Ambalan di SMK Negeri 1 Banyuwangi
        </p>
    </section>

    <main class="px-6 py-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3 md:max-w-7xl mx-auto">

        <!-- Card -->
        <div
            class="bg-white border rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="{{ asset('img/da-esemkasa/galeri/bg-banner_11zon.webp') }}" alt="PTA" class="w-full h-48 object-cover">
            <div class="p-6 flex flex-col gap-3">
                <h2 class="font-bold text-xl text-sky-900">PTA (Penerimaan Tamu Ambalan)</h2>
                <p class="text-gray-700 text-sm leading-relaxed">
                    PTA di SMK Negeri 1 Banyuwangi adalah kegiatan pramuka untuk menyambut siswa baru dan mengenalkan
                    mereka pada kepramukaan penegak. Kegiatan ini melatih kedisiplinan, kebersamaan, dan kepemimpinan.
                </p>
            </div>
        </div>

        <!-- Card -->
        <div
            class="bg-white border rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="{{ asset('img/da-esemkasa/galeri/IMG_1659_6_11zon.webp') }}" alt="Jum'at Rutin" class="w-full h-48 object-cover">
            <div class="p-6 flex flex-col gap-3">
                <h2 class="font-bold text-xl text-sky-900">Jum'at Rutin</h2>
                <p class="text-gray-700 text-sm leading-relaxed">
                    Kegiatan Pramuka yang dilaksanakan setiap Jum'at, melatih kedisiplinan, kerja sama, dan keterampilan
                    kepramukaan melalui PBB, materi, permainan edukatif, dan latihan lapangan.
                </p>
            </div>
        </div>

        <!-- Card -->
        <div
            class="bg-white border rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="{{ asset('img/da-esemkasa/galeri/1bc3c56e-d437-4d18-abed-ef061397e509_4_11zon.webp') }}" alt="Kunjungan SD" class="w-full h-48 object-cover">
            <div class="p-6 flex flex-col gap-3">
                <h2 class="font-bold text-xl text-sky-900">Kunjungan SD</h2>
                <p class="text-gray-700 text-sm leading-relaxed">
                    Program kerja Dewan Ambalan SMKN 1 Banyuwangi untuk mengajar kepramukaan di SD melalui kegiatan
                    interaktif seperti tali-menali dan permainan edukatif.
                </p>
            </div>
        </div>

        <!-- Card -->
        <div
            class="bg-white border rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="{{ asset('img/da-esemkasa/galeri/_SON0751_2_11zon.webp') }}" alt="Bantara" class="w-full h-48 object-cover">
            <div class="p-6 flex flex-col gap-3">
                <h2 class="font-bold text-xl text-sky-900">Bantara</h2>
                <p class="text-gray-700 text-sm leading-relaxed">
                    Pengukuhan anggota baru jenjang Bantara di Pramuka SMKN 1 Banyuwangi melalui latihan kepemimpinan
                    dan pemasangan atribut resmi.
                </p>
            </div>
        </div>

        <!-- Card -->
        <div
            class="bg-white border rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="{{ asset('img/da-esemkasa/galeri/_SON0751_2_11zon.webp') }}" alt="Laksana" class="w-full h-48 object-cover">
            <div class="p-6 flex flex-col gap-3">
                <h2 class="font-bold text-xl text-sky-900">Laksana</h2>
                <p class="text-gray-700 text-sm leading-relaxed">
                    Pengukuhan anggota Dewan Ambalan di SMKN 1 Banyuwangi melalui pelatihan kepemimpinan dan pemasangan
                    atribut resmi Laksana.
                </p>
            </div>
        </div>

        <!-- Card -->
        <div
            class="bg-white border rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="{{ asset('img/da-esemkasa/galeri/bg-banner_11zon.webp') }}" alt="Muspanegak" class="w-full h-48 object-cover">
            <div class="p-6 flex flex-col gap-3">
                <h2 class="font-bold text-xl text-sky-900">Muspanegak</h2>
                <p class="text-gray-700 text-sm leading-relaxed">
                    Pelantikan dan pergantian jabatan anggota Penegak di SMKN 1 Banyuwangi disertai penyerahan tanggung
                    jawab dan atribut resmi.
                </p>
            </div>
        </div>

    </main>


    <x-footer-da-esemkasa></x-footer-da-esemkasa>

</body>

</html>