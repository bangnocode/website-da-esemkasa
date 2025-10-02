<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA Esemkasa</title>
    <link rel="icon" href="{{ asset('img/dewan-ambalan.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-sky-900 to-sky-800 flex items-center justify-center min-h-screen p-6">

    <div
        class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl p-8 w-full max-w-md transition transform hover:-translate-y-1 hover:shadow-2xl">

        <!-- Header -->
        <div class="text-center mb-6">
            <div class="flex justify-center gap-3 mb-4">
                <img src="{{ asset('img/logo_smea.png') }}" alt="Logo SMKN 1 Banyuwangi" class="w-12 drop-shadow">
                <img src="{{ asset('img/dewan-ambalan.png') }}" alt="Logo Dewan Ambalan" class="w-12 drop-shadow">
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Selamat Datang</h1>
            <p class="text-gray-600 text-sm mt-2 leading-relaxed">
                Gunakan hak suara Anda dengan bijak, karena satu suara sangat berarti.
                <br><br> Masukkan token anda untuk memulai pemilihan
            </p>
        </div>

        <form method="POST" action="{{ route('login.process') }}">
            @csrf
            <div class="mb-4">
                <label for="token" class="block text-slate-700 font-medium mb-2">Masukkan Token</label>
                <input type="text" name="token_peserta" id="token" maxlength="6" required
                    class="w-full border border-slate-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-sky-400 focus:outline-none uppercase">
            </div>

            <button type="submit"
                class="block w-full text-center bg-gradient-to-r from-sky-600 to-sky-700 hover:from-sky-700 hover:to-sky-800 text-white font-semibold py-3 rounded-xl shadow-md transition transform hover:-translate-y-0.5">
                Masuk
            </button>
        </form>

        @if (session('error'))
            <div class="my-4 p-3 bg-red-100 text-red-700 rounded-lg text-center">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('landing.page') }}"
            class="inline-block px-6 py-3 mt-4 text-white bg-blue-600 rounded-xl shadow-md hover:bg-blue-700 hover:shadow-lg transition-all duration-300 ease-in-out">
            Ingin Melihat Website Dewan Ambalan SMKN 1 Banyuwangi? <span class="font-semibold">Klik Disini</span>
        </a>


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
