<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function(){
    Route::get('/auth/login', 'showLogin')->name('auth.login');

    Route::get('/auth/register',  'showRegister')->name('auth.register');

    Route::post('/auth/login', 'login')->name('login');

    Route::post('/auth/register', 'register')->name('register');
});

// Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create')->middleware(['auth', 'can:create-delete-siswa']);

Route::middleware('auth')->controller(SiswaController::class)->group(function(){
    Route::get('/siswa', 'index')->name('siswa.index');

    Route::post('/siswa','store')->name('siswa.store')->can('create', \App\Models\Siswa::class);

    Route::get('/siswa/create','create')->name('siswa.create')->can('create', \App\Models\Siswa::class);

    Route::get('/siswa/{siswa}','show')->name('siswa.show');

    Route::delete('/siswa/{siswa}','destroy')->name('siswa.destroy')->can('create','siswa');
});


// Route::middleware('auth')->group(function(){
//     Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

//     Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');

//     Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

//     Route::get('/siswa/{siswa}', [SiswaController::class, 'show'])->name('siswa.show');

//     Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
// });

// Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

// Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');

// Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

// Route::get('/siswa/{siswa}', [SiswaController::class, 'show'])->name('siswa.show');

// Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
