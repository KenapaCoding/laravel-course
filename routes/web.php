<?php

use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kenapacoding/about', function () {
    // $nama = 'Ranggo Pato';
    $data = 'Ranggo Pato';
    $umur = 15;
    return view('about', ['data' => $data, 'umur' => $umur]);
    // return view('about', compact('data', 'umur'));
    // return view('about')
    //                 ->with('data', 'Ranggo Pato')
    //                 ->with('umur', 19);
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
