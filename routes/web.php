<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    // $nama = 'Ranggo Pato';
    $data = 'Ranggo Pato';
    $umur = 15;
    return view('about', ['data' => $data, 'umur' => $umur]);
    // return view('about', compact('data', 'umur'));
    // return view('about')
    //                 ->with('data', 'Ranggo Pato')
    //                 ->with('umur', 19);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/siswa', function () {
    $data = Siswa::orderBy('nilai', 'desc')->get();
    return view('siswa.index',['data'=>$data]);
});

Route::get('/siswa/{id}', function ($id) {
    $siswa = Siswa::findOrFail($id);
    return view('siswa.show', ['siswa' => $siswa]);
});
