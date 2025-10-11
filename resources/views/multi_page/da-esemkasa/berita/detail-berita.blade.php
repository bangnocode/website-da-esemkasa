@php
    use App\Models\ModelBerita;
    use Carbon\Carbon;
    Carbon::setLocale('id');
    $slug = request()->segment(2);
    $berita = ModelBerita::where('slug', $slug)->firstOrFail();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta dasar -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA ESEMKASA - Dewan Ambalan SMKN 1 Banyuwangi</title>
    <meta name="description"
        content="{{ $berita->judul }}">
    <meta name="keywords"
        content="{{ $berita->keywords }}">
    <meta name="author" content="Dewan Ambalan SMKN 1 Banyuwangi">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $berita->judul }}">
    <meta property="og:description"
        content="{{ $berita->judul }}">
    <meta property="og:image" content="{{ asset('storage/' . $berita->thumbnail) }}">
    <meta property="og:url" content="{{ url('/berita/' . $berita->slug) }}">
    <meta property="og:site_name" content="Dewan Ambalan SMKN 1 Banyuwangi">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $berita->judul }}">
    <meta name="twitter:description"
        content="{{ $berita->judul }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $berita->thumbnail) }}">

    <!-- Canonical -->
    <link rel="canonical"
        href="{{ url('/berita/' . $berita->slug) }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/da-esemkasa/dewan-ambalan.png') }}">

    <!-- Tailwind + Flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</head>

<body class="overflow-x-hidden scroll-smooth bg-slate-50 text-gray-800">

    <x-navbar active="berita" />

    <section class="mt-32 mb-20 px-4 md:px-8">
        <!-- Tanggal -->
        <p class="text-gray-500 text-base text-center mb-3">
            {{ Carbon::parse($berita->tanggal)->translatedFormat('l, d F Y') }}
        </p>

        <!-- Judul -->
        <h1 class="text-2xl md:text-3xl font-bold text-center mx-auto max-w-2xl text-sky-900 leading-snug mb-6">
            {{ $berita->judul }}
        </h1>

        <!-- Gambar -->
        <div class="max-w-xl mx-auto mb-6">
            <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="{{ $berita->judul }}"
                class="rounded-lg w-full h-48 md:h-64 object-cover shadow-lg">
        </div>

        <!-- Isi Berita -->
        <article class="max-w-3xl mx-auto text-justify leading-relaxed text-gray-700 space-y-4 px-2 break-words">
            {!! $berita->isi_berita !!}
        </article>

        @if ($berita->dokumentasi_kegiatan)
            <!-- Gambar -->
            <div class="max-w-3xl mx-auto mb-6 grid grid-cols-1 gap-3 mt-4 lg:grid-cols-2">
                <img src="{{ asset('img/da-esemkasa/galeri/da-piggi-1.webp') }}" alt="Open Recruitment 2025"
                    class="rounded-lg w-full h-48 md:h-64 object-cover shadow-lg">
                <img src="{{ asset('img/da-esemkasa/galeri/da-piggi-3.webp') }}" alt="Open Recruitment 2025"
                    class="rounded-lg w-full h-48 md:h-64 object-cover shadow-lg">
            </div>
        @endif

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
