<?php

namespace App\Http\Controllers;

use App\Models\CalonPradana;
use App\Models\HasilVote;
use App\Models\PaslonPradana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class VotingController extends Controller
{
    public function statistik()
    {
        $totalPeserta = 97;

        // Hitung suara PA
        $paVotes = HasilVote::select('nama_kandidat_pa_id as kandidat_id', DB::raw('count(*) as total'))
            ->groupBy('nama_kandidat_pa_id')
            ->get()
            ->toArray();

        // Hitung suara PI
        $piVotes = HasilVote::select('nama_kandidat_pi_id as kandidat_id', DB::raw('count(*) as total'))
            ->groupBy('nama_kandidat_pi_id')
            ->get()
            ->toArray();

        // Label kandidat PA
        $customLabelsPa = [
            1 => 'Mohammad Al Arthur (PA)',
            2 => 'Kennie Lionel Juano (PA)',
        ];

        // Label kandidat PI
        $customLabelsPi = [
            3 => 'Astrella Ramadhani (PI)',
            4 => 'Alvy Andini Nayla F (PI)',
        ];

        $labels = [];
        $totals = [];

        foreach ($paVotes as $row) {
            $labels[] = $customLabelsPa[$row['kandidat_id']] ?? 'PA ' . $row['kandidat_id'];
            $totals[] = (int) $row['total'];
        }

        foreach ($piVotes as $row) {
            $labels[] = $customLabelsPi[$row['kandidat_id']] ?? 'PI ' . $row['kandidat_id'];
            $totals[] = (int) $row['total'];
        }

        // ✅ Total suara masuk = jumlah peserta yang sudah voting
        $totalVotes = HasilVote::count();

        // Hitung persentase per kandidat (dibanding totalVotes peserta)
        $percentages = [];
        foreach ($totals as $i => $count) {
            $percentages[$i] = $totalVotes > 0 ? round(($count / $totalVotes) * 100, 1) : 0;
        }

        return view('statistik-voting', [
            'labels'       => $labels,
            'totals'       => $totals,
            'percentages'  => $percentages,
            'totalPeserta' => $totalPeserta,
            'totalVotes'   => $totalVotes
        ]);
    }

    public function showSession()
    {
        dd(Session::all());
    }

    // 1. Tampilkan semua kandidat pradana (dengan visi, misi, dan proker)
    public function showPradanaPa()
    {
        $candidates = CalonPradana::with(['misi', 'programKerja'])->where('jabatan', 'pa')->get();

        // mapping foto per paslon
        $fotoMapping = [
            1 => [
                'pa' => 'foto_arthur.png'
            ],
            2 => [
                'pa' => 'foto_kenny.png'
            ],
        ];

        // inject foto ke setiap kandidat
        $candidates->transform(function ($c) use ($fotoMapping) {
            $c->foto_pa = isset($fotoMapping[$c->id])
                ? asset('img/' . $fotoMapping[$c->id]['pa'])
                : asset('img/default.png');
            return $c;
        });

        return view('voting-pradana-pa', compact('candidates'));
    }

    public function showPradanaPi()
    {
        $candidates = CalonPradana::with(['misi', 'programKerja'])->where('jabatan', 'pi')->get();

        // mapping foto per paslon
        $fotoMapping = [
            3 => [
                'pi' => 'foto_astrella.png'
            ],
            4 => [
                'pi' => 'foto_nayla.png'
            ],
        ];

        // inject foto ke setiap kandidat
        $candidates->transform(function ($c) use ($fotoMapping) {
            $c->foto_pi = isset($fotoMapping[$c->id])
                ? asset('img/' . $fotoMapping[$c->id]['pi'])
                : asset('img/default.png');
            return $c;
        });

        return view('voting-pradana-pi', compact('candidates'));
    }


    // 2. Simpan pilihan kandidat ke session
    public function votePradanaPa(Request $request)
    {
        $request->validate([
            'calon_pradana_id' => 'required|exists:calon_pradana,id'
        ]);

        Session::put('vote_pa_id', $request->calon_pradana_id);

        return redirect()->route('voting.pradana.pi');
    }

    public function votePradanaPi(Request $request)
    {
        $request->validate([
            'calon_pradana_id' => 'required|exists:calon_pradana,id'
        ]);

        Session::put('vote_pi_id', $request->calon_pradana_id);

        return redirect()->route('voting.confirm');
    }

    // 3. Halaman konfirmasi
    public function confirm()
    {
        $paId = Session::get('vote_pa_id');
        $piId = Session::get('vote_pi_id');

        if (!$paId || !$piId) {
            return redirect()->route('voting.pradana.pa')
                ->with('error', 'Silakan pilih kandidat PA dan PI terlebih dahulu.');
        }

        $pa = CalonPradana::with(['misi', 'programKerja'])->find($paId);
        $pi = CalonPradana::with(['misi', 'programKerja'])->find($piId);

        $fotoMapping = [
            1 => 'foto_arthur.png',
            2 => 'foto_kenny.png',
            3 => 'foto_astrella.png',
            4 => 'foto_nayla.png',
        ];

        if ($pa) {
            $pa->foto = $pa->foto ?? ($fotoMapping[$pa->id] ?? 'default.png');
            $pa->foto = asset('img/' . $pa->foto);
        }
        if ($pi) {
            $pi->foto = $pi->foto ?? ($fotoMapping[$pi->id] ?? 'default.png');
            $pi->foto = asset('img/' . $pi->foto);
        }

        // 🔥 gabungan visi, misi, proker
        $visiGabungan = trim(($pa->visi ?? '') . "\n\n" . ($pi->visi ?? ''));
        $misiGabungan = ($pa->misi ?? collect())->merge($pi->misi ?? collect());
        $prokerGabungan = ($pa->programKerja ?? collect())->merge($pi->programKerja ?? collect());

        return view('confirm', [
            'vote_pa' => $pa,
            'vote_pi' => $pi,
            'visiGabungan' => $visiGabungan,
            'misiGabungan' => $misiGabungan,
            'prokerGabungan' => $prokerGabungan,
        ]);
    }

    // 4. Simpan hasil voting
    public function storeVote(Request $request)
    {
        $request->validate([
            'pa_id' => 'required|exists:calon_pradana,id',
            'pi_id' => 'required|exists:calon_pradana,id',
        ]);

        $paId = $request->post('pa_id');
        $piId = $request->post('pi_id');
        $token = Session::get('token_peserta');

        // jika token wajib ada di session, validasi lagi
        if (!$token) {
            return redirect()->route('login.show')->with('error', 'Token peserta tidak ditemukan.');
        }

        // pastikan token belum pernah dipakai (cek tabel hasil_vote)
        if (HasilVote::where('token_peserta', $token)->exists()) {
            // contoh mengarahkan ke login/show dengan pesan too_many
            return redirect()->route('login.show')->with('too_many', true);
        }

        // simpan hasil voting
        HasilVote::create([
            'nama_kandidat_pa_id' => $paId,
            'nama_kandidat_pi_id' => $piId,
            'token_peserta'       => $token,
        ]);

        // bersihkan session yang berkaitan
        Session::forget(['vote_pa_id', 'vote_pi_id', 'token_peserta']);

        return redirect()->route('login.show')->with('success', 'Terima kasih, suara Anda sudah tersimpan!');
    }
}
