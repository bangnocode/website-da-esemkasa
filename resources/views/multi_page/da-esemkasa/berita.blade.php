<!DOCTYPE html>
<html lang="en">

<head>
    <x-tag-head-for-s-e-o></x-tag-head-for-s-e-o>
</head>

<body class="overflow-x-hidden scroll-smooth bg-slate-50 text-gray-800">

    <x-navbar active="berita" />

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

        </section>
    </main>


    <x-footer-da-esemkasa></x-footer-da-esemkasa>

    <script src="{{ asset('script.js') }}"></script>

</body>

</html>
