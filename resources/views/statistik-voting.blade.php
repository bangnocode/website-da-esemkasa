<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Voting</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen flex items-center justify-center p-4">
    <div class="block md:hidden">
        <h1 class="text-center text-red-600 font-semibold">
            Resolusi device Anda tidak support.<br>
            Gunakan perangkat dengan resolusi 1024px ke atas (laptop/tablet).
        </h1>
    </div>

    <div class="hidden md:block max-w-5xl w-full bg-white shadow-xl rounded-3xl p-8 border border-slate-200">
        <!-- Header -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-slate-800 mb-2">Hasil Voting Calon Pradana Periode 2025/2026</h2>
            <p class="text-lg text-slate-600">Dewan Ambalan SMK Negeri 1 Banyuwangi</p>
        </div>

        <!-- Ringkasan -->
        <div class="grid grid-cols-2 gap-6 mb-10">
            <div
                class="bg-gradient-to-br from-blue-50 to-blue-100/50 rounded-xl p-5 border border-blue-200/50 text-center">
                <p class="text-sm font-semibold text-blue-600 uppercase tracking-wide">Total Suara Masuk</p>
                <p class="text-3xl font-bold text-blue-900 mt-1" id="totalVotes">0</p>
            </div>
            <div
                class="bg-gradient-to-br from-emerald-50 to-emerald-100/50 rounded-xl p-5 border border-emerald-200/50 text-center">
                <p class="text-sm font-semibold text-emerald-600 uppercase tracking-wide">Partisipasi</p>
                <p class="text-3xl font-bold text-emerald-900 mt-1" id="partisipasi">0%</p>
                <p class="text-xs text-slate-500 mt-1">Dari {{ $totalPeserta }} peserta</p>
            </div>
        </div>

        <!-- Chart -->
        <div class="bg-gradient-to-br from-slate-50 to-white rounded-2xl p-6 border border-slate-100 shadow-sm">
            <canvas id="voteChart" style="max-height: 400px;"></canvas>
        </div>

        <!-- Hasil Detail -->
        <div class="mt-10 grid md:grid-cols-2 gap-6">
            @foreach ($labels as $i => $label)
                <div class="flex flex-col justify-between bg-slate-50 rounded-xl px-5 py-4 border shadow-sm">
                    <span class="font-semibold text-slate-800 text-lg">{{ $label }}</span>
                    <span class="text-slate-700 font-medium mt-2 text-sm">
                        <span class="text-blue-600">{{ $totals[$i] }} suara</span>
                        — <span class="text-emerald-600">{{ $percentages[$i] }}%</span>
                    </span>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        const labels = @json($labels);
        const totals = @json($totals);
        const totalPeserta = {{ $totalPeserta }};
        const totalVotes = {{ $totalVotes }};

        // Update Ringkasan
        document.getElementById('totalVotes').textContent = totalVotes;
        const partisipasi = totalPeserta > 0 ? ((totalVotes / totalPeserta) * 100).toFixed(1) + "%" : "0%";
        document.getElementById('partisipasi').textContent = partisipasi;

        // Chart
        new Chart(document.getElementById('voteChart'), {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Suara',
                    data: totals,
                    backgroundColor: [
                        'rgba(59,130,246,0.8)', // PA 1
                        'rgba(59,130,246,0.6)', // PA 2
                        'rgba(239,68,68,0.8)', // PI 1
                        'rgba(239,68,68,0.6)', // PI 2
                    ],
                    borderWidth: 2,
                    borderRadius: 10,
                    barThickness: 65
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(ctx) {
                                const percent = ((ctx.raw / totalVotes) * 100).toFixed(1);
                                return `${ctx.raw} suara (${percent}%)`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>
