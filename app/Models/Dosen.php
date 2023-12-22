<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'dosens';
    protected $fillable = [
        'nidn'=>"121212",
        'nama'=>'Dosen12',
        'alamat'=>'Padang',
        'no_hp'=>'0812121212',
    ];
}