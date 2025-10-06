<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA Esemkasa</title>
    <link rel="icon" href="{{ asset('img/dewan-ambalan.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gradient-to-br from-slate-50 via-sky-50 to-blue-100 min-h-screen py-8 px-4">
    <div class="w-full max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-10">
            <div class="logo-form flex justify-center items-center gap-4 mb-6">
                <img src="{{ asset('img/logo_smea.png') }}" alt="Logo SMKN 1 Banyuwangi"
                    class="w-16 h-16 object-contain drop-shadow-lg">
                <div class="h-12 w-px bg-gradient-to-b from-transparent via-slate-300 to-transparent"></div>
                <img src="{{ asset('img/dewan-ambalan.png') }}" alt="Logo Dewan Ambalan SMKN 1 Banyuwangi"
                    class="w-16 h-16 object-contain drop-shadow-lg">
            </div>
            <h1
                class="text-3xl sm:text-4xl lg:text-5xl font-bold bg-gradient-to-r from-pink-600 via-pink-700 to-pink-800 bg-clip-text text-transparent mb-4">
                Pemilihan Pradana PI
            </h1>
            <p class="text-slate-600 text-base sm:text-lg max-w-2xl mx-auto">
                Silakan pilih salah satu kandidat PI yang menurut Anda layak memimpin
            </p>
        </div>

        <!-- Form -->
        <form id="voteForm" method="POST" action="{{ route('voting.pradana.pi') }}">
            @csrf
            <div class="grid gap-6 sm:grid-cols-2 lg:gap-8">
                @foreach ($candidates as $c)
                    <!-- Candidate Card -->
                    <label class="candidate-card group relative block cursor-pointer">
                        <!-- Radio Input -->
                        <input type="radio" name="calon_pradana_id" value="{{ $c->id }}"
                            class="absolute opacity-0 peer">

                        <!-- Card Container -->
                        <div
                            class="relative bg-white rounded-2xl border-2 border-slate-200 p-6 sm:p-8 shadow-xl hover:shadow-2xl peer-checked:bg-pink-100 peer-checked:border-pink-500 peer-checked:ring-4 peer-checked:ring-pink-200/50 peer-checked:bg-gradient-to-br peer-checked:from-pink-50/50 peer-checked:to-rose-50/50 transition-all duration-300 hover:-translate-y-1">

                            <!-- FOTO PI -->
                            <div class="flex flex-col items-center mb-6">
                                <img src="{{ $c->foto_pi }}" alt="{{ $c->nama_kandidat }}"
                                    class="w-28 h-28 sm:w-32 sm:h-32 rounded-full object-cover shadow-md border-2 border-pink-500 group-hover:scale-105 transition-transform duration-300">
                                <span class="mt-3 text-base font-medium text-slate-700">{{ $c->nama_kandidat }}</span>
                                <span class="text-xs text-slate-500">(PI)</span>
                            </div>

                            <!-- GARIS PEMISAH -->
                            <div class="mb-5 h-px bg-gradient-to-r from-pink-300 via-slate-200 to-pink-300"></div>

                            <!-- Vision Section -->
                            <div class="mb-5">
                                <div
                                    class="relative bg-gradient-to-br from-pink-50 to-rose-50 rounded-xl p-4 border border-pink-100 overflow-hidden">
                                    <div
                                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-pink-500 via-pink-600 to-pink-700">
                                    </div>
                                    <div class="relative">
                                        <span
                                            class="inline-block text-xs font-bold text-pink-700 uppercase tracking-wider mb-2">Visi</span>
                                        <p class="text-sm text-slate-700 leading-relaxed">{{ $c->visi }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Mission Section -->
                            @if ($c->misi->count())
                                <div class="mb-5">
                                    <h4
                                        class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3 flex items-center">
                                        <span
                                            class="w-1.5 h-4 bg-gradient-to-b from-slate-400 to-slate-600 rounded-full mr-2"></span>
                                        Misi
                                    </h4>
                                    <ul class="space-y-2">
                                        @foreach ($c->misi as $m)
                                            <li class="flex items-start text-sm text-slate-600">
                                                <span
                                                    class="w-1.5 h-1.5 bg-pink-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                                <span class="leading-relaxed">{{ $m->misi }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Work Programs Section -->
                            @if ($c->programKerja->count())
                                <div>
                                    <h4
                                        class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3 flex items-center">
                                        <span
                                            class="w-1.5 h-4 bg-gradient-to-b from-slate-400 to-slate-600 rounded-full mr-2"></span>
                                        Program Kerja
                                    </h4>
                                    <ul class="space-y-2.5">
                                        @foreach ($c->programKerja as $proker)
                                            <li class="flex items-start text-sm">
                                                <span
                                                    class="w-1.5 h-1.5 bg-pink-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                                <div>
                                                    <span
                                                        class="font-semibold text-slate-800">{{ $proker->nama_proker }}</span>
                                                    <span class="text-slate-600"> —
                                                        {{ $proker->deskripsi_proker }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </label>
                @endforeach
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center mt-10">
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 w-full max-w-xl">
                    <!-- Back Button -->
                    <button type="button" onclick="window.history.back()"
                        class="group w-full sm:w-auto px-6 py-3.5 bg-white border-2 border-slate-300 text-slate-700 font-semibold rounded-xl shadow-sm hover:bg-slate-50 hover:border-slate-400 hover:shadow-md transition-all duration-300 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                        </svg>
                        Kembali
                    </button>

                    <!-- Submit Button -->
                    <button type="button" id="submitBtn"
                        class="group relative w-full sm:flex-1 px-10 py-4 bg-gradient-to-r from-pink-600 via-pink-700 to-pink-800 text-white text-lg font-semibold rounded-xl shadow-xl hover:shadow-2xl hover:from-pink-700 hover:via-pink-800 hover:to-pink-900 transform hover:scale-105 transition-all duration-300 overflow-hidden">
                        <span class="relative z-10 flex items-center justify-center">
                            Lanjutkan
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/20 to-white/0 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700">
                        </div>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.getElementById("submitBtn").addEventListener("click", function() {
            const selected = document.querySelector('input[name="calon_pradana_id"]:checked');

            if (!selected) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Belum Memilih',
                    text: 'Silakan pilih salah satu kandidat PI terlebih dahulu!',
                    confirmButtonText: 'Mengerti',
                    confirmButtonColor: '#db2777',
                    customClass: {
                        popup: 'rounded-2xl',
                        confirmButton: 'rounded-lg px-6 py-2.5'
                    }
                });
            } else {
                document.getElementById("voteForm").submit(); // ini akan POST ke votePradanaPi
            }
        });

        // Add smooth animation on radio change
        document.querySelectorAll('input[name="calon_pradana_id"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('.candidate-card').forEach(card => {
                    card.classList.remove('selected');
                });
                if (this.checked) {
                    this.closest('.candidate-card').classList.add('selected');
                }
            });
        });
    </script>
</body>

</html>
