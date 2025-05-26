<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    // Siswa cari ke table siswas
    // User cari ke table users
    protected $table = 'siswa';
    protected $fillable = ['nama','tanggal_lahir','jurusan', 'nilai'];
}
