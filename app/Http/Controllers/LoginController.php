<?php

namespace App\Http\Controllers;

use App\Models\HasilVote;
use App\Models\TokenPeserta;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'token_peserta' => 'required',
        ]);

        // Cari token di tabel token_peserta
        $peserta = TokenPeserta::where('token_peserta', $request->token_peserta)->first();

        if (!$peserta) {
            return back()->with('error', 'Token tidak terdaftar!');
        }

        // Cek apakah token sudah pernah dipakai voting
        $sudahVote = HasilVote::where('token_peserta', $peserta->token_peserta)->exists();

        if ($sudahVote) {
            return back()->with('error', 'Token ini sudah digunakan untuk voting!');
        }

        // Jika aman, simpan ke session
        $request->session()->put('token_peserta', $peserta->token_peserta);

        return redirect()->route('tutorial.voting');
    }


    // Logout
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login')->with('success', 'Logout Berhasil !');
    }
}
