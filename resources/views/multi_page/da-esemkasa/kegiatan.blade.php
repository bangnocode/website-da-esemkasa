<!DOCTYPE html>
<html lang="en">

<head>
    <x-tag-head-for-s-e-o></x-tag-head-for-s-e-o>
</head>

<body class="overflow-x-hidden scroll-smooth bg-slate-50 text-gray-800">

    <x-navbar active="kegiatan" />

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
            <img src="{{ asset('img/da-esemkasa/galeri/bg-banner_11zon.webp') }}" alt="PTA"
                class="w-full h-48 object-cover">
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
            <img src="{{ asset('img/da-esemkasa/galeri/IMG_1659_6_11zon.webp') }}" alt="Jum'at Rutin"
                class="w-full h-48 object-cover">
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
            <img src="{{ asset('img/da-esemkasa/galeri/1bc3c56e-d437-4d18-abed-ef061397e509_4_11zon.webp') }}"
                alt="Kunjungan SD" class="w-full h-48 object-cover">
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
            <img src="{{ asset('img/da-esemkasa/galeri/_SON0751_2_11zon.webp') }}" alt="Bantara"
                class="w-full h-48 object-cover">
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
            <img src="{{ asset('img/da-esemkasa/galeri/laksana.webp') }}" alt="Laksana"
                class="w-full h-48 object-cover">
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
            <img src="{{ asset('img/da-esemkasa/galeri/muspa.webp') }}" alt="Muspanegak"
                class="w-full h-48 object-cover">
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

    <script src="{{ asset('script.js') }}"></script>

</body>

</html>
