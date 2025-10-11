<!DOCTYPE html>
<html lang="en">

<head>
    <x-tag-head-for-s-e-o></x-tag-head-for-s-e-o>
</head>

<body class="overflow-x-hidden scroll-smooth bg-slate-50 text-gray-800">

    <x-navbar active="home" />

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
                <img src="{{ asset('img/da-esemkasa/galeri/bg-banner_11zon.webp') }}" loading="lazy" alt=""
                    class="w-full rounded-lg shadow">
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl hover:-translate-y-1 transition">
                <h2 class="text-2xl font-bold mb-3">Jumat Rutin</h2>
                <p class="mb-4 text-gray-700">Kegiatan Pramuka yang dilaksanakan setiap hari Jumat, membina
                    kedisiplinan, kerja sama, dan keterampilan...</p>
                <img src="{{ asset('img/da-esemkasa/galeri/IMG_1659_6_11zon.webp') }}" loading="lazy" alt=""
                    class="w-full rounded-lg shadow">
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl hover:-translate-y-1 transition">
                <h2 class="text-2xl font-bold mb-3">Kunjungan SD</h2>
                <p class="mb-4 text-gray-700">Program kerja Dewan Ambalan SMKN 1 Banyuwangi untuk mengajar kepramukaan
                    di SD melalui kegiatan
                    interaktif seperti tali-menali dan permainan edukatif...</p>
                <img src="{{ asset('img/da-esemkasa/galeri/1bc3c56e-d437-4d18-abed-ef061397e509_4_11zon.webp') }}"
                    loading="lazy" alt="" class="w-full rounded-lg shadow">
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
            <img src="{{ asset('img/da-esemkasa/galeri/1bc3c56e-d437-4d18-abed-ef061397e509_4_11zon.webp') }}"
                loading="lazy" alt=""
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
            @php
                use App\Models\ModelBerita;
                use Illuminate\Support\Str;
                use Carbon\Carbon;
                Carbon::setLocale('id');
                $beritas = ModelBerita::latest()->get();
            @endphp

            @forelse ($beritas as $berita)
                <a href="{{ url('/berita/' . $berita->slug) }}" class="block">
                    <article
                        class="bg-white border rounded-lg shadow-md overflow-hidden hover:shadow-xl hover:scale-[1.02] transition-all duration-300">

                        {{-- Thumbnail --}}
                        <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="{{ $berita->judul }}"
                            class="w-full h-48 object-cover">

                        {{-- Isi Card --}}
                        <div class="p-6 space-y-3">
                            <h2 class="font-bold text-lg text-sky-900">
                                {{ $berita->judul }}
                            </h2>

                            <p class="text-gray-700 text-sm leading-relaxed line-clamp-3">
                                {!! Str::limit(strip_tags($berita->isi_berita), 80) !!}
                            </p>

                            <span class="block text-sm text-gray-500">
                                {{ Carbon::parse($berita->tanggal)->translatedFormat('l, d F Y') }}
                            </span>
                        </div>
                    </article>
                </a>
            @empty
                <p class="text-gray-600">Belum ada berita.</p>
            @endforelse
        </div>
        <div class="text-end mt-6">
            <a href="{{ url('/berita') }}" class="text-yellow-600 font-semibold hover:underline">Lainnya >></a>
        </div>
    </section>

    <x-footer-da-esemkasa></x-footer-da-esemkasa>

    <script src="{{ asset('script.js') }}"></script>

</body>

</html>
