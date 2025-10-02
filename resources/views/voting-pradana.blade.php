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
                class="text-3xl sm:text-4xl lg:text-5xl font-bold bg-gradient-to-r from-sky-600 via-sky-700 to-sky-800 bg-clip-text text-transparent mb-4">
                Pemilihan Pasangan Pradana
            </h1>
            <p class="text-slate-600 text-base sm:text-lg max-w-2xl mx-auto">
                Silakan pilih salah satu pasangan Pradana PA & PI yang menurut Anda layak memimpin
            </p>
        </div>

        <!-- Form -->
        <form id="voteForm" method="POST" action="{{ route('voting.pradana') }}">
            @csrf
            <div class="grid gap-6 sm:grid-cols-2 lg:gap-8">
                @foreach ($candidates as $c)
                    <!-- Candidate Card -->
                    <label class="candidate-card group relative block cursor-pointer">
                        <!-- Radio Input -->
                        <input type="radio" name="paslon" value="{{ $c->id }}"
                            class="absolute opacity-0 peer">

                        <!-- Card Container -->
                        <div
                            class="relative bg-white rounded-2xl border-2 border-slate-200 p-6 sm:p-8 shadow-xl hover:shadow-2xl peer-checked:border-sky-500 peer-checked:ring-4 peer-checked:ring-sky-200/50 peer-checked:bg-gradient-to-br peer-checked:from-sky-50/50 peer-checked:to-blue-50/50 transition-all duration-300 hover:-translate-y-1">

                            <!-- FOTO PASANGAN (Responsive) -->
                            <div class="flex flex-col sm:flex-row items-center justify-center gap-6 mb-6">
                                <!-- Foto PA -->
                                <div class="flex flex-col items-center">
                                    <img src="{{ $c->foto_pa }}" alt="{{ $c->nama_pradana_pa }}"
                                        class="w-24 h-24 sm:w-28 sm:h-28 rounded-full object-cover shadow-md border-2 border-sky-200 group-hover:scale-105 transition-transform duration-300">
                                    <span
                                        class="mt-2 text-sm font-medium text-slate-700">{{ $c->nama_pradana_pa }}</span>
                                    <span class="text-xs text-slate-500">(PA)</span>
                                </div>

                                <!-- Foto PI -->
                                <div class="flex flex-col items-center">
                                    <img src="{{ $c->foto_pi }}" alt="{{ $c->nama_pradana_pi }}"
                                        class="w-24 h-24 sm:w-28 sm:h-28 rounded-full object-cover shadow-md border-2 border-sky-200 group-hover:scale-105 transition-transform duration-300">
                                    <span
                                        class="mt-2 text-sm font-medium text-slate-700">{{ $c->nama_pradana_pi }}</span>
                                    <span class="text-xs text-slate-500">(PI)</span>
                                </div>
                            </div>


                            <!-- GARIS PEMISAH -->
                            <div class="mb-5 h-px bg-gradient-to-r from-sky-300 via-slate-200 to-sky-300"></div>

                            <!-- Vision Section -->
                            <div class="mb-5">
                                <div
                                    class="relative bg-gradient-to-br from-sky-50 to-blue-50 rounded-xl p-4 border border-sky-100 overflow-hidden">
                                    <div
                                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-sky-500 via-sky-600 to-sky-700">
                                    </div>
                                    <div class="relative">
                                        <span
                                            class="inline-block text-xs font-bold text-sky-700 uppercase tracking-wider mb-2">Visi</span>
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
                                                    class="w-1.5 h-1.5 bg-sky-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
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
                                                    class="w-1.5 h-1.5 bg-sky-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
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
                <button type="button" id="submitBtn"
                    class="group relative px-10 py-4 bg-gradient-to-r from-sky-600 via-sky-700 to-sky-800 text-white text-lg font-semibold rounded-xl shadow-xl hover:shadow-2xl hover:from-sky-700 hover:via-sky-800 hover:to-sky-900 transform hover:scale-105 transition-all duration-300 overflow-hidden">
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
        </form>
    </div>

    <script>
        document.getElementById("submitBtn").addEventListener("click", function() {
            const selected = document.querySelector('input[name="paslon"]:checked');

            if (!selected) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Belum Memilih',
                    text: 'Silakan pilih salah satu pasangan kandidat terlebih dahulu!',
                    confirmButtonText: 'Mengerti',
                    confirmButtonColor: '#0284c7',
                    customClass: {
                        popup: 'rounded-2xl',
                        confirmButton: 'rounded-lg px-6 py-2.5'
                    }
                });
            } else {
                // Redirect to voting.confirm route with selected candidate
                document.getElementById("voteForm").submit();
            }
        });

        // Add smooth animation on radio change
        document.querySelectorAll('input[name="paslon"]').forEach(radio => {
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
