<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA Esemkasa</title>
    <link rel="icon" href="{{ asset('img/dewan-ambalan.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>

<body class="bg-gradient-to-br from-sky-900 to-sky-800 flex items-center justify-center min-h-screen px-4 pb-8 pt-24">

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

    <!-- CARD LOGIN -->
    <div
        class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl p-8 w-full max-w-md mt-4 transition transform hover:-translate-y-1 hover:shadow-2xl">

        <!-- Header -->
        <div class="text-center mb-6">
            <div class="flex justify-center gap-4 mb-4">
                <img src="{{ asset('img/logo_smea.png') }}" alt="Logo SMKN 1 Banyuwangi" class="w-12 drop-shadow">
                <img src="{{ asset('img/dewan-ambalan.png') }}" alt="Logo Dewan Ambalan" class="w-12 drop-shadow">
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Selamat Datang</h1>
            <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                Gunakan hak suara Anda dengan bijak, karena satu suara sangat berarti.
                <br>Masukkan token anda untuk memulai pemilihan.
            </p>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('login.process') }}" class="space-y-5">
            @csrf
            <div>
                <label for="token" class="block text-slate-700 font-medium mb-2">Masukkan Token</label>
                <input type="text" name="token_peserta" id="token" maxlength="6" required
                    class="w-full border border-slate-300 px-4 py-3 rounded-lg focus:ring-2 focus:ring-sky-400 focus:outline-none uppercase">
            </div>

            <button type="submit"
                class="w-full text-center bg-gradient-to-r from-sky-600 to-sky-700 hover:from-sky-700 hover:to-sky-800 text-white font-semibold py-3 rounded-xl shadow-md transition transform hover:-translate-y-0.5">
                Masuk
            </button>
        </form>

        <!-- Error -->
        @if (session('error'))
            <div class="mt-5 p-3 bg-red-100 text-red-700 rounded-lg text-center text-sm">
                {{ session('error') }}
            </div>
        @endif

        <!-- Footer -->
        <div class="text-center mt-8 pt-4 border-t border-gray-200">
            <p class="text-xs text-gray-500">© 2025 Dewan Ambalan SMKN 1 Banyuwangi</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "Suara Anda Sudah Tersimpan!",
                icon: "success",
                confirmButtonColor: "#0ea5e9"
            });
        </script>
    @endif

</body>

</html>
