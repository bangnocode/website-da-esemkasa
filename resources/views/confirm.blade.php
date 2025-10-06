<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA Esemkasa - Konfirmasi</title>
    <link rel="icon" href="{{ asset('img/dewan-ambalan.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body
    class="bg-gradient-to-br from-slate-50 via-sky-50 to-blue-100 min-h-screen flex items-center justify-center py-8 px-4">
    <div class="w-full max-w-4xl">
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="flex justify-center items-center gap-4 mb-6">
                <img src="{{ asset('img/logo_smea.png') }}" class="w-16 h-16 object-contain drop-shadow-lg"
                    alt="Logo SMKN 1 Banyuwangi">
                <div class="h-12 w-px bg-gradient-to-b from-transparent via-slate-300 to-transparent"></div>
                <img src="{{ asset('img/dewan-ambalan.png') }}" class="w-16 h-16 object-contain drop-shadow-lg"
                    alt="Logo Dewan Ambalan">
            </div>
            <h1
                class="text-3xl sm:text-4xl font-bold bg-gradient-to-r from-sky-600 via-sky-700 to-sky-800 bg-clip-text text-transparent mb-2">
                Konfirmasi Pilihan Anda
            </h1>
            <p class="text-slate-600 text-sm sm:text-base">Pastikan pilihan Anda sudah benar sebelum mengirimkan voting
            </p>
        </div>

        <!-- Main Card -->
        <div class="bg-white rounded-2xl shadow-2xl border border-slate-200 overflow-hidden">
            <!-- Info Banner -->
            <div class="bg-gradient-to-r from-sky-500 to-sky-600 px-6 py-3">
                <p class="text-white text-sm font-medium flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Pilihan Anda tidak dapat diubah setelah dikonfirmasi
                </p>
            </div>

            @if ($vote_pa && $vote_pi)
                <div class="p-6 sm:p-8">
                    <!-- Kandidat -->
                    <div class="text-center mb-6">
                        <p class="text-xs font-semibold text-sky-600 uppercase tracking-wider mb-2">Pasangan Terpilih
                        </p>

                        <div class="flex flex-col sm:flex-row items-center justify-center gap-8">
                            <!-- PA -->
                            <div class="flex flex-col items-center">
                                <img src="{{ $vote_pa->foto }}" alt="{{ $vote_pa->nama_kandidat }}"
                                    class="w-24 h-24 rounded-full object-cover shadow-md border-2 border-sky-200">
                                <h2 class="mt-2 text-lg font-bold text-slate-800">
                                    {{ $vote_pa->nama_kandidat }}
                                    <span class="text-slate-500">(PA)</span>
                                </h2>
                            </div>

                            <span class="text-2xl font-bold text-sky-700">&</span>

                            <!-- PI -->
                            <div class="flex flex-col items-center">
                                <img src="{{ $vote_pi->foto }}" alt="{{ $vote_pi->nama_kandidat }}"
                                    class="w-24 h-24 rounded-full object-cover shadow-md border-2 border-pink-200">
                                <h2 class="mt-2 text-lg font-bold text-slate-800">
                                    {{ $vote_pi->nama_kandidat }}
                                    <span class="text-slate-500">(PI)</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!-- Visi -->
                    @if (!empty($visiGabungan))
                        <div class="mb-6 px-6">
                            <div class="bg-sky-50 border border-sky-100 rounded-xl p-5">
                                <span class="block text-xs font-bold text-sky-700 uppercase mb-2">Visi Gabungan</span>
                                <p class="text-sm text-slate-700 leading-relaxed whitespace-pre-line">
                                    {{ $visiGabungan }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Misi -->
                    @if ($misiGabungan->count())
                        <div class="mb-6 px-6">
                            <h4 class="text-xs font-bold text-slate-700 uppercase mb-3">Misi Gabungan</h4>
                            <ul class="list-disc list-inside text-sm text-slate-600 space-y-1">
                                @foreach ($misiGabungan as $m)
                                    <li>{{ $m->misi }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Program Kerja -->
                    @if ($prokerGabungan->count())
                        <div class="mb-6 px-6">
                            <h4 class="text-xs font-bold text-slate-700 uppercase mb-3">Program Kerja Gabungan</h4>
                            <ul class="space-y-2 text-sm text-slate-700">
                                @foreach ($prokerGabungan as $proker)
                                    <li class="flex items-start">
                                        <span
                                            class="w-1.5 h-1.5 bg-sky-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <div>
                                            <span class="font-semibold">{{ $proker->nama_proker }}</span>
                                            <span class="text-slate-600"> — {{ $proker->deskripsi_proker }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
            @endif

            <!-- Buttons -->
            <div class="bg-slate-50 px-6 py-4 border-t border-slate-200 flex flex-col sm:flex-row gap-3">
                <button type="button" onclick="window.history.back()"
                    class="w-full sm:w-1/2 px-6 py-3 bg-white border border-slate-300 text-slate-700 font-semibold rounded-xl hover:bg-slate-50 transition">
                    Kembali
                </button>

                <form method="POST" action="{{ route('voting.store') }}" class="w-full sm:w-1/2">
                    @csrf
                    <input type="hidden" name="pa_id" value="{{ $vote_pa->id }}">
                    <input type="hidden" name="pi_id" value="{{ $vote_pi->id }}">
                    <button type="submit"
                        class="w-full px-6 py-3 bg-gradient-to-r from-sky-600 to-sky-800 text-white font-semibold rounded-xl shadow hover:from-sky-700 hover:to-sky-900 transition">
                        Konfirmasi Pilihan
                    </button>
                </form>
            </div>
        </div>
    </div>

    @if (session('too_many'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Sudah Pernah Voting',
                text: 'Anda hanya bisa voting satu kali.',
                confirmButtonText: 'Mengerti',
                confirmButtonColor: '#0284c7'
            });
        </script>
    @endif
</body>

</html>
