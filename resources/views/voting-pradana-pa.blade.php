<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Pradana PA</title>
    <link rel="icon" href="{{ asset('img/dewan-ambalan.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gradient-to-br from-slate-50 via-sky-50 to-blue-100 min-h-screen py-8 px-4">
    <div class="w-full max-w-5xl mx-auto">
        <!-- Error -->
        @if (session('error'))
            <div class="mt-5 p-3 bg-red-100 text-red-700 rounded-lg text-center text-sm">
                {{ session('error') }}
            </div>
        @endif
        <!-- Header -->
        <div class="text-center mb-10">
            <div class="logo-form flex justify-center items-center gap-4 mb-6">
                <img src="{{ asset('img/logo_smea.png') }}" alt="Logo SMKN 1 Banyuwangi"
                    class="w-16 h-16 object-contain drop-shadow-lg">
                <div class="h-12 w-px bg-gradient-to-b from-transparent via-slate-300 to-transparent"></div>
                <img src="{{ asset('img/dewan-ambalan.png') }}" alt="Logo Dewan Ambalan"
                    class="w-16 h-16 object-contain drop-shadow-lg">
            </div>
            <h1
                class="text-3xl sm:text-4xl font-bold bg-gradient-to-r from-sky-600 via-sky-700 to-sky-800 bg-clip-text text-transparent mb-4">
                Pemilihan Pradana PA
            </h1>
            <p class="text-slate-600 text-base sm:text-lg max-w-2xl mx-auto">
                Silakan pilih salah satu calon <strong>Pradana PA (Putra)</strong> di bawah ini
            </p>
        </div>

        <!-- Form -->
        <form id="voteForm" method="POST" action="{{ route('voting.pradana.pa.vote') }}">
            @csrf
            <div class="grid gap-6 sm:grid-cols-2 lg:gap-8">
                @foreach ($candidates as $c)
                    <!-- Candidate Card -->
                    <label class="candidate-card group relative block cursor-pointer">
                        <!-- Radio Input -->
                        <input type="radio" name="calon_pradana_id" value="{{ $c->id }}"
                            class="absolute opacity-0 peer">

                        <!-- Card -->
                        <div
                            class="relative bg-white rounded-2xl border-2 border-slate-200 p-6 shadow-xl hover:shadow-2xl peer-checked:border-sky-500 peer-checked:ring-4 peer-checked:ring-sky-200/50 transition-all duration-300">

                            <!-- Foto -->
                            <div class="flex flex-col items-center mb-6">
                                <img src="{{ $c->foto_pa ?? asset('img/default.png') }}" alt="{{ $c->nama_kandidat }}"
                                    class="w-28 h-28 rounded-full object-cover shadow-md border-2 border-sky-200 group-hover:scale-105 transition-transform duration-300">
                                <span class="mt-3 text-lg font-semibold text-slate-700">{{ $c->nama_kandidat }}</span>
                                <span class="text-sm text-slate-500">(PA)</span>
                            </div>

                            <!-- Visi -->
                            <div class="mb-5">
                                <div
                                    class="relative bg-gradient-to-br from-sky-50 to-blue-50 rounded-xl p-4 border border-sky-100">
                                    <div
                                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-sky-500 via-sky-600 to-sky-700">
                                    </div>
                                    <div class="relative">
                                        <span
                                            class="inline-block text-xs font-bold text-sky-700 uppercase tracking-wider mb-2">Visi</span>
                                        <p class="text-sm text-slate-700 leading-relaxed">{{ $c->visi ?? '-' }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Misi -->
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
                                                <span>{{ $m->misi }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Proker -->
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
                    class="group relative px-10 py-4 bg-gradient-to-r from-sky-600 via-sky-700 to-sky-800 text-white text-lg font-semibold rounded-xl shadow-xl hover:shadow-2xl hover:from-sky-700 hover:via-sky-800 hover:to-sky-900 transform hover:scale-105 transition-all duration-300">
                    Pilih & Lanjutkan
                </button>
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
                    text: 'Silakan pilih salah satu kandidat PA terlebih dahulu!',
                    confirmButtonText: 'Mengerti',
                    confirmButtonColor: '#0284c7',
                    customClass: {
                        popup: 'rounded-2xl',
                        confirmButton: 'rounded-lg px-6 py-2.5'
                    }
                });
            } else {
                document.getElementById("voteForm").submit();
            }
        });
    </script>
</body>

</html>
