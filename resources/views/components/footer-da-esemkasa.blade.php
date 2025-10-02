<!-- FOOTER -->
<footer class="bg-sky-900 text-white py-12">
    <div class="max-w-screen-xl mx-auto text-center flex flex-col items-center gap-6">
        <img src="{{ asset('img/da-esemkasa/dewan-ambalan.png') }}" alt="" class="w-16 drop-shadow-md">
        <h1 class="font-medium">Dewan Ambalan <br> SMK Negeri 1 Banyuwangi</h1>
        <nav class="flex flex-wrap justify-center gap-4 text-sm">
            <a href="{{ url('/') }}" class="hover:underline">Beranda</a>
            <a href="{{ url('/kegiatan') }}" class="hover:underline">Kegiatan</a>
            <a href="{{ url('/galeri') }}" class="hover:underline">Galeri</a>
            <a href="{{ url('/berita') }}" class="hover:underline">Berita</a>
        </nav>
        <p class="text-xs text-gray-300">© 2025 Dewan Ambalan SMKN 1 Banyuwangi. All Rights Reserved.</p>
    </div>
</footer>
