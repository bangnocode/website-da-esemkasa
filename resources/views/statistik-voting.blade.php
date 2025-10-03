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
        <h1>Resolusi Device Anda Tidak Support, Silahkan Ganti Device Dengan Resolusi 1024px ke atas seperti laptop, tablet, dan lainnnya</h1>
    </div>
    <div class="hidden md:block max-w-4xl w-full bg-white shadow-xl rounded-3xl p-8 border border-slate-200">
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
                <p class="text-2xl font-bold text-blue-900" id="totalVotes">0</p>
            </div>
            <div
                class="bg-gradient-to-br from-emerald-50 to-emerald-100/50 rounded-xl p-4 border border-emerald-200/50">
                <p class="text-xs font-semibold text-emerald-600 uppercase tracking-wide mb-1">Partisipasi</p>
                <p class="text-2xl font-bold text-emerald-900" id="partisipasi">0%</p>
            </div>
        </div>
    </div>

    <script>
        const labels = @json($labels);
        const totals = @json($totals);
        const totalPeserta = {{ $totalPeserta }};

        console.log("Labels:", labels);
        console.log("Totals:", totals);
        console.log("Peserta:", totalPeserta);

        const totalVotes = totals.reduce((a, b) => a + b, 0);
        document.getElementById('totalVotes').textContent = totalVotes;

        const partisipasi = totalPeserta > 0 ?
            ((totalVotes / totalPeserta) * 100).toFixed(1) + "%" :
            "0%";
        document.getElementById('partisipasi').textContent = partisipasi;

        new Chart(document.getElementById('voteChart'), {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Vote',
                    data: totals,
                    backgroundColor: ['rgba(59,130,246,0.8)', 'rgba(239,68,68,0.8)'],
                    borderColor: ['rgb(59,130,246)', 'rgb(239,68,68)'],
                    borderWidth: 2,
                    borderRadius: 12,
                    barThickness: 80
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
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
