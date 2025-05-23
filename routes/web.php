<?php

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
    $data = [
        ['nama'=>'Budi', 'nilai' => 80, 'id'=>'001'],
        ['nama'=>'Intan', 'nilai' => 83, 'id'=>'002'],
        ['nama'=>'Citra', 'nilai' => 92, 'id'=>'003']
    ];
    return view('siswa.index',['data'=>$data]);
});

Route::get('/siswa/{id}', function ($id) {
    // dd($id);
    return view('siswa.show', ['id' => $id]);
});
