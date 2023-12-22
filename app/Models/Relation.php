<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;
    protected $table = 'relations';
    protected $fillable = [
        'mahasiswa_npm'=>"2201170008",
        'dosen_nidn'=>'121212',
        'matakuliah_kode'=>'232323',
        'status_aktif'=>'Y',
	];
}