<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\VotingController;
use Illuminate\Support\Facades\Route;

// DA-Essemkasa
Route::get('/', fn() => view('multi_page.da-esemkasa.index'))->name('landing.page');
Route::get('/kegiatan', fn() => view('multi_page.da-esemkasa.kegiatan'));
Route::get('/berita', fn() => view('multi_page.da-esemkasa.berita'));
Route::get('/galeri', fn() => view('multi_page.da-esemkasa.galeri'));
Route::get('/berita/open-recruitmen-da-2025', fn() => view('multi_page.da-esemkasa.berita.open_recruitment_da_2025'));
Route::get('/berita/PTA2025', fn() => view('multi_page.da-esemkasa.berita.PTA2025'));

Route::get('/login-voting', [LoginController::class, 'showLogin'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.process')->middleware('throttle:5,1');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/show-session', [VotingController::class, 'showSession'])->name('session.show');

Route::get('/get-statistik-data-hasil-voting-pradana', [VotingController::class, 'statistik'])->name('statistik.show');

Route::middleware('checkPeserta')->group(function () {

    Route::get('/voting/pradana/tutorial', fn() => view('tutorial'))->name('tutorial.voting');

    // Pilih calon pradana cowo (PA)
    Route::get('/voting/pradana/pa', [VotingController::class, 'showPradanaPa'])
        ->name('voting.pradana.pa');
    Route::post('/voting/pradana/pa', [VotingController::class, 'votePradanaPa'])
        ->name('voting.pradana.pa.vote');

    // Pilih calon pradana cewe (PI)
    Route::get('/voting/pradana/pi', [VotingController::class, 'showPradanaPi'])
        ->name('voting.pradana.pi');
    Route::post('/voting/pradana/pi', [VotingController::class, 'votePradanaPi'])
        ->name('voting.pradana.pi.vote');

    // Konfirmasi pilihan
    Route::get('/voting/confirm', [VotingController::class, 'confirm'])
        ->name('voting.confirm');

    // Simpan hasil voting
    Route::post('/voting/store', [VotingController::class, 'storeVote'])
        ->name('voting.store');
});
