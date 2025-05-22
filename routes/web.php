<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    // $nama = 'Ranggo Pato';
    $data = 'Ranggo Pato';
    $umur = 19;
    return view('about', ['data' => $data, 'umur' => 19]);
    // return view('about', compact('data', 'umur'));
    // return view('about')
    //                 ->with('data', 'Ranggo Pato')
    //                 ->with('umur', 19);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/siswa', function () {
    return view('siswa.index');
});

Route::get('/siswa/{id}', function ($id) {
    // dd($id);
    return view('siswa.show', ['id' => $id]);
});
