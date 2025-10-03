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

    Route::get('/voting/pradana', [VotingController::class, 'showPradana'])->name('voting.pradana');
    Route::post('/voting/pradana', [VotingController::class, 'votePradana']);

    Route::get('/voting/confirm', [VotingController::class, 'confirm'])->name('voting.confirm');
    Route::post('/voting/confirm', [VotingController::class, 'storeVote'])->name('voting.store');
});
