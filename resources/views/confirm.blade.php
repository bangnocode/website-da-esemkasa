<!DOCTYPE html>
<html lang="id">

<head>
    <x-tag-head-for-s-e-o></x-tag-head-for-s-e-o>
</head>

<body
    class="bg-gradient-to-br from-slate-50 via-sky-50 to-blue-100 min-h-screen flex items-center justify-center py-8 px-4 ">
    <div class="w-full max-w-4xl">
        <!-- Logo Header -->
        <div class="text-center mb-8">
            <div class="logo-form flex justify-center items-center gap-4 mb-6">
                <img src="{{ asset('img/logo_smea.png') }}" alt="Logo SMKN 1 Banyuwangi"
                    class="w-16 h-16 object-contain drop-shadow-lg">
                <div class="h-12 w-px bg-gradient-to-b from-transparent via-slate-300 to-transparent"></div>
                <img src="{{ asset('img/dewan-ambalan.png') }}" alt="Logo Dewan Ambalan SMKN 1 Banyuwangi"
                    class="w-16 h-16 object-contain drop-shadow-lg">
            </div>
            <h1
                class="text-3xl sm:text-4xl font-bold bg-gradient-to-r from-sky-600 via-sky-700 to-sky-800 bg-clip-text text-transparent mb-3">
                Konfirmasi Pilihan Anda
            </h1>
            <p class="text-slate-600 text-sm sm:text-base">
                Pastikan pilihan Anda sudah benar sebelum mengirimkan voting
            </p>
        </div>

        <!-- Main Card -->
        <div class="bg-white rounded-2xl shadow-2xl border-2 border-slate-200 overflow-hidden">
            <!-- Alert Info -->
            <div class="bg-gradient-to-r from-sky-500 to-sky-600 px-6 py-4">
                <div class="flex items-center text-white">
                    <svg class="w-6 h-6 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-sm font-medium">Pilihan Anda tidak dapat diubah setelah dikonfirmasi</p>
                </div>
            </div>

            <!-- Candidate Details -->
            @if ($vote_pradana)
                <div class="p-6 sm:p-8">
                    <!-- Candidate Names -->
                    <div class="text-center mb-6 pb-6 border-b border-slate-200">
                        <p class="text-xs font-semibold text-sky-600 uppercase tracking-wider mb-2">Pilihan Anda</p>
                        <!-- Foto PA -->
                        <div class="flex flex-col items-center">
                            <img src="{{ $vote_pradana->foto_pa }}" alt="{{ $vote_pradana->nama_pradana_pa }}"
                                class="w-24 h-24 sm:w-28 sm:h-28 rounded-full object-cover shadow-md border-2 border-sky-200">
                        </div>
                        <h2 class="text-xl sm:text-3xl font-bold text-slate-800 leading-tight">
                            {{ $vote_pradana->nama_pradana_pa }} (PA)
                        </h2>

                        <div class="flex items-center justify-center my-2">
                            <div class="h-px w-12 bg-slate-300"></div>
                            <span class="mx-3 text-sky-600 font-bold text-xl">&</span>
                            <div class="h-px w-12 bg-slate-300"></div>
                        </div>

                        <!-- Foto PI -->
                        <div class="flex flex-col items-center">
                            <img src="{{ $vote_pradana->foto_pi }}" alt="{{ $vote_pradana->nama_pradana_pi }}"
                                class="w-24 h-24 sm:w-28 sm:h-28 rounded-full object-cover shadow-md border-2 border-sky-200">
                        </div>
                        <h2 class="text-xl sm:text-3xl font-bold text-slate-800 leading-tight">
                            {{ $vote_pradana->nama_pradana_pi }} (PI)
                        </h2>
                        <div class="mt-4 h-1 w-24 bg-gradient-to-r from-sky-500 to-sky-700 rounded-full mx-auto"></div>
                    </div>

                    <!-- Vision Section -->
                    <div class="mb-6">
                        <div
                            class="relative bg-gradient-to-br from-sky-50 to-blue-50 rounded-xl p-5 border border-sky-100 overflow-hidden">
                            <div
                                class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-sky-500 via-sky-600 to-sky-700">
                            </div>
                            <div class="relative">
                                <span
                                    class="inline-block text-xs font-bold text-sky-700 uppercase tracking-wider mb-2">Visi</span>
                                <p class="text-sm text-slate-700 leading-relaxed">{{ $vote_pradana->visi }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mission Section -->
                    @if ($vote_pradana->misi->count())
                        <div class="mb-6">
                            <h4
                                class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3 flex items-center">
                                <span
                                    class="w-1.5 h-4 bg-gradient-to-b from-slate-400 to-slate-600 rounded-full mr-2"></span>
                                Misi
                            </h4>
                            <ul class="space-y-2">
                                @foreach ($vote_pradana->misi as $m)
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
                    @if ($vote_pradana->programKerja->count())
                        <div>
                            <h4
                                class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-3 flex items-center">
                                <span
                                    class="w-1.5 h-4 bg-gradient-to-b from-slate-400 to-slate-600 rounded-full mr-2"></span>
                                Program Kerja
                            </h4>
                            <ul class="space-y-2.5">
                                @foreach ($vote_pradana->programKerja as $proker)
                                    <li class="flex items-start text-sm">
                                        <span
                                            class="w-1.5 h-1.5 bg-sky-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <div>
                                            <span
                                                class="font-semibold text-slate-800">{{ $proker->nama_proker }}</span>
                                            <span class="text-slate-600"> — {{ $proker->deskripsi_proker }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            @endif

            <!-- Action Buttons -->
            <div class="bg-slate-50 px-6 sm:px-8 py-6 border-t border-slate-200">
                <form method="POST" action="{{ route('voting.store') }}">
                    @csrf
                    <input type="hidden" name="paslon_id" value="{{ $vote_pradana->id ?? '' }}">

                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                        <!-- Back Button -->
                        <button type="button" onclick="window.history.back()"
                            class="group w-full sm:w-1/2 px-6 py-3.5 bg-white border-2 border-slate-300 text-slate-700 font-semibold rounded-xl shadow-sm hover:bg-slate-50 hover:border-slate-400 hover:shadow-md transition-all duration-300 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                            </svg>
                            Kembali
                        </button>

                        <!-- Confirm Button -->
                        <button type="submit"
                            class="group relative w-full sm:w-1/2 px-6 py-3.5 bg-gradient-to-r from-sky-600 via-sky-700 to-sky-800 text-white font-semibold rounded-xl shadow-xl hover:shadow-2xl hover:from-sky-700 hover:via-sky-800 hover:to-sky-900 transition-all duration-300 overflow-hidden flex items-center justify-center">
                            <span class="relative z-10 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Konfirmasi Pilihan
                            </span>
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/20 to-white/0 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700">
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (session('too_many'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Sudah Pernah Voting',
                text: 'Anda sudah pernah melakukan voting sebelumnya. Setiap user hanya dapat voting satu kali.',
                confirmButtonText: 'Mengerti',
                confirmButtonColor: '#0284c7',
                customClass: {
                    popup: 'rounded-2xl',
                    confirmButton: 'rounded-lg px-6 py-2.5'
                }
            });
        </script>
    @endif
</body>

</html>
