<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA Esemkasa</title>
    <link rel="icon" href="{{ asset('img/dewan-ambalan.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen flex items-center justify-center p-4">
    <h1 class="block lg:hidden font-bold">PAGE TIDAK SUPPORT DI UKURAN LAYAR ANDA</h1>
    <div class="hidden lg:block max-w-4xl w-full bg-white shadow-xl rounded-3xl p-8 border border-slate-200">
        <!-- Header -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-slate-800 mb-2">Hasil Voting Pradana Periode 2025/2026</h2>
        </div>

        <!-- Chart Container -->
        <div class="bg-gradient-to-br from-slate-50 to-white rounded-2xl p-6 border border-slate-100">
            <canvas id="voteChart" style="max-height: 400px;"></canvas>
        </div>

        <!-- Stats Summary -->
        <div class="grid grid-cols-2 gap-4 mt-6">
            <div class="bg-gradient-to-br from-blue-50 to-blue-100/50 rounded-xl p-4 border border-blue-200/50">
                <p class="text-xs font-semibold text-blue-600 uppercase tracking-wide mb-1">Total Suara</p>
                <p class="text-2xl font-bold text-blue-900" id="totalVotes">-</p>
            </div>
            <div class="bg-gradient-to-br from-emerald-50 to-emerald-100/50 rounded-xl p-4 border border-emerald-200/50">
                <p class="text-xs font-semibold text-emerald-600 uppercase tracking-wide mb-1">Partisipasi</p>
                <p class="text-2xl font-bold text-emerald-900" id="partisipasi">-</p>
            </div>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('voteChart').getContext('2d');
        
        // ===== Data dari backend (Blade) =====
        const labels = {!! json_encode($labels) !!};   // contoh: ["Kandidat 1", "Kandidat 2"]
        const totals = {!! json_encode($totals) !!};   // contoh: [45, 52]
        const totalPeserta = {{ $totalPeserta ?? 97 }}; // default 97 kalau belum ada
        
        // ===== Hitung total suara =====
        const totalVotes = totals.reduce((a, b) => a + b, 0);
        document.getElementById('totalVotes').textContent = totalVotes;
        
        // ===== Hitung partisipasi =====
        const partisipasi = ((totalVotes / totalPeserta) * 100).toFixed(1) + "%";
        document.getElementById('partisipasi').textContent = partisipasi;
        
        // ===== ChartJS =====
        const voteChart = new Chart(ctx, {
            type: 'bar', 
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Vote',
                    data: totals,
                    backgroundColor: [
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(239, 68, 68, 0.8)'
                    ],
                    borderColor: [
                        'rgb(59, 130, 246)',
                        'rgb(239, 68, 68)'
                    ],
                    borderWidth: 2,
                    borderRadius: 12,
                    barThickness: 80
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        padding: 12,
                        cornerRadius: 8,
                        titleFont: { size: 14, weight: 'bold' },
                        bodyFont: { size: 13 },
                        callbacks: {
                            label: function(context) {
                                const percentage = ((context.raw / totalVotes) * 100).toFixed(1);
                                return context.raw + " suara (" + percentage + "%)";
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        border: { display: false },
                        grid: { color: 'rgba(148, 163, 184, 0.1)', drawTicks: false },
                        ticks: {
                            stepSize: 10,
                            color: '#64748b',
                            font: { size: 12, weight: '500' },
                            padding: 8
                        }
                    },
                    x: {
                        border: { display: false },
                        grid: { display: false },
                        ticks: {
                            color: '#1e293b',
                            font: { size: 14, weight: '600' },
                            padding: 8
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
