<!DOCTYPE html>
<html lang="en">

<head>
    <x-tag-head-for-s-e-o></x-tag-head-for-s-e-o>
</head>

<body class="overflow-x-hidden scroll-smooth bg-slate-50 text-gray-800">

    <x-navbar active="galeri" />

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
