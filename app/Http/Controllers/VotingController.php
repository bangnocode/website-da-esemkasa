<?php

namespace App\Http\Controllers;

use App\Models\HasilVote;
use App\Models\PaslonPradana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class VotingController extends Controller
{
    public function statistik()
    {
        $data = HasilVote::select('paslon_pradana_id', DB::raw('count(*) as total'))
            ->groupBy('paslon_pradana_id')
            ->pluck('total', 'paslon_pradana_id');

        $totalPeserta = 97;

        $customLabels = [
            1 => 'Mohammad Al Arthur (PA) & Astrella Ramadhani (PI)',
            2 => 'Kennie Lionel Juano (PA) & Alvy Andini Nayla F (PI)',
        ];

        // ubah jadi array biasa
        $labels = $data->keys()->map(function ($id) use ($customLabels) {
            return $customLabels[$id] ?? 'Kandidat ' . $id;
        })->values()->all();

        $totals = $data->values()->all();

        return view('statistik-voting', [
            'labels'       => $labels,
            'totals'       => $totals,
            'totalPeserta' => $totalPeserta
        ]);
    }


    public function showSession()
    {
        dd(Session::all());
    }

    // 1. Tampilkan semua kandidat pradana (dengan visi, misi, dan proker)
    public function showPradana()
    {
        $candidates = PaslonPradana::with(['misi', 'programKerja'])->get();

        // mapping foto per paslon
        $fotoMapping = [
            1 => [
                'pa' => 'foto_arthur.png',
                'pi' => 'foto_astrella.png'
            ],
            2 => [
                'pa' => 'foto_kenny.png',
                'pi' => 'foto_nayla.png'
            ],
        ];

        // inject foto ke setiap kandidat
        $candidates->transform(function ($c) use ($fotoMapping) {
            $c->foto_pa = isset($fotoMapping[$c->id])
                ? asset('img/' . $fotoMapping[$c->id]['pa'])
                : asset('img/default.png');
            $c->foto_pi = isset($fotoMapping[$c->id])
                ? asset('img/' . $fotoMapping[$c->id]['pi'])
                : asset('img/default.png');
            return $c;
        });

        return view('voting-pradana', compact('candidates'));
    }


    // 2. Simpan pilihan kandidat ke session
    public function votePradana(Request $request)
    {
        $request->validate([
            'paslon' => 'required|exists:paslon_pradana,id'
        ]);

        Session::put('vote_pradana', $request->paslon);

        // redirect ke halaman konfirmasi
        return redirect()->route('voting.confirm');
    }

    // 3. Halaman konfirmasi
    public function confirm()
    {
        $vote_pradana_id = Session::get('vote_pradana');

        $vote_pradana = PaslonPradana::with(['misi', 'programKerja'])
            ->find($vote_pradana_id);

        // mapping foto per paslon (sama persis dengan showPradana)
        $fotoMapping = [
            1 => [
                'pa' => 'foto_arthur.png',
                'pi' => 'foto_astrella.png'
            ],
            2 => [
                'pa' => 'foto_kenny.png',
                'pi' => 'foto_nayla.png'
            ],
        ];

        // inject foto ke objek yang dipilih
        if ($vote_pradana) {
            $vote_pradana->foto_pa = isset($fotoMapping[$vote_pradana->id])
                ? asset('img/' . $fotoMapping[$vote_pradana->id]['pa'])
                : asset('img/default.png');

            $vote_pradana->foto_pi = isset($fotoMapping[$vote_pradana->id])
                ? asset('img/' . $fotoMapping[$vote_pradana->id]['pi'])
                : asset('img/default.png');
        }

        return view('confirm', compact('vote_pradana'));
    }


    // 4. Simpan hasil voting
    public function storeVote()
    {
        $vote_pradana_id = Session::get('vote_pradana');
        $token_peserta = Session::get('token_peserta');

        if (!$vote_pradana_id) {
            return redirect()->route('voting.pradana')
                ->with('error', 'Silakan pilih kandidat terlebih dahulu.');
        }

        HasilVote::create([
            'paslon_pradana_id' => $vote_pradana_id,
            'token_peserta' => $token_peserta,
        ]);

        Session::flush();

        return redirect()->route('login.show')
            ->with('success', 'Terima kasih, suara Anda sudah tersimpan!');
    }
}
