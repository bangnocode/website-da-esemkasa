<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Voting - DA ESEMKASA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-sky-900 to-sky-700 min-h-screen">

    <!-- Container -->
    <div class="min-h-screen py-6 px-4">
        <div class="max-w-2xl mx-auto">

            <!-- Header Card -->
            <div class="bg-white rounded-2xl shadow-lg p-6 mb-6">
                <div class="text-center">
                    <div class="logo-form flex justify-center items-center gap-4 mb-6">
                        <img src="{{ asset('img/logo_smea.png') }}" alt="Logo SMKN 1 Banyuwangi"
                            class="w-16 h-16 object-contain drop-shadow-lg">
                        <div class="h-12 w-px bg-gradient-to-b from-transparent via-slate-300 to-transparent"></div>
                        <img src="{{ asset('img/dewan-ambalan.png') }}" alt="Logo Dewan Ambalan"
                            class="w-16 h-16 object-contain drop-shadow-lg">
                    </div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Tutorial Voting Pradana</h1>
                    <p class="text-gray-600 text-sm md:text-base">Ikuti 6 langkah mudah untuk memilih Pradana</p>
                </div>
            </div>

            <!-- Steps -->
            <div class="space-y-4">

                <!-- Step 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-blue-600 px-4 py-3 flex items-center">
                        <div
                            class="w-8 h-8 bg-white text-blue-600 rounded-full flex items-center justify-center font-bold mr-3">
                            1</div>
                        <h3 class="text-white font-semibold text-base md:text-lg">Pilih Pradana PA</h3>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                            Baca <strong>visi & misi</strong> kandidat Pradana PA, lalu <strong>klik</strong> kandidat
                            pilihanmu.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-blue-600 px-4 py-3 flex items-center">
                        <div
                            class="w-8 h-8 bg-white text-blue-600 rounded-full flex items-center justify-center font-bold mr-3">
                            2</div>
                        <h3 class="text-white font-semibold text-base md:text-lg">Klik "Pilih & Lanjutkan"</h3>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                            Scroll ke bawah dan klik tombol <strong>"Pilih & Lanjutkan"</strong> untuk lanjut ke tahap
                            berikutnya.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-blue-600 px-4 py-3 flex items-center">
                        <div
                            class="w-8 h-8 bg-white text-blue-600 rounded-full flex items-center justify-center font-bold mr-3">
                            3</div>
                        <h3 class="text-white font-semibold text-base md:text-lg">Pilih Pradana PI</h3>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                            Baca <strong>visi & misi</strong> kandidat Pradana PI, lalu <strong>klik</strong> kandidat
                            pilihanmu.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-blue-600 px-4 py-3 flex items-center">
                        <div
                            class="w-8 h-8 bg-white text-blue-600 rounded-full flex items-center justify-center font-bold mr-3">
                            4</div>
                        <h3 class="text-white font-semibold text-base md:text-lg">Klik "Pilih & Lanjutkan"</h3>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                            Scroll ke bawah dan klik tombol <strong>"Pilih & Lanjutkan"</strong> untuk lanjut ke tahap
                            berikutnya.
                        </p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-blue-600 px-4 py-3 flex items-center">
                        <div
                            class="w-8 h-8 bg-white text-blue-600 rounded-full flex items-center justify-center font-bold mr-3">
                            5</div>
                        <h3 class="text-white font-semibold text-base md:text-lg">Konfirmasi Pilihan</h3>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed mb-3">
                            Periksa kembali pilihanmu. Kamu bisa:
                        </p>
                        <div class="bg-gray-50 rounded-lg p-3 space-y-2 text-sm md:text-base">
                            <div class="flex items-start">
                                <span class="text-blue-600 mr-2">✓</span>
                                <span class="text-gray-700">Kembali untuk mengganti pilihan</span>
                            </div>
                            <div class="flex items-start">
                                <span class="text-blue-600 mr-2">✓</span>
                                <span class="text-gray-700">Lanjut ke tahap akhir</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 6 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-green-600 px-4 py-3 flex items-center">
                        <div
                            class="w-8 h-8 bg-white text-green-600 rounded-full flex items-center justify-center font-bold mr-3">
                            6</div>
                        <h3 class="text-white font-semibold text-base md:text-lg">Kirim Voting</h3>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed mb-3">
                            Lihat <strong>visi, misi & program kerja gabungan</strong> pasangan pilihanmu. Jika yakin,
                            klik <strong>"Kirim Voting"</strong>.
                        </p>
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-3 rounded">
                            <p class="text-yellow-800 text-xs md:text-sm font-medium">
                                ⚠️ Voting hanya bisa dilakukan 1 kali. Pastikan pilihanmu sudah benar!
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CTA Button -->
            <div class="mt-6 bg-white rounded-2xl shadow-lg p-6 flex justify-center">
                <a href="{{ route('voting.pradana.pa') }}"
                    class="w-full bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-semibold py-4 px-6 rounded-xl transition-all transform hover:scale-[1.02] active:scale-[0.98] shadow-md text-base text-center md:text-lg">
                    Mulai Voting Sekarang
                </a>
            </div>

        </div>
    </div>

</body>

</html>
