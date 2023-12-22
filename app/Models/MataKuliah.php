<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_mk'=>"232323",
        'nama_mk'=>'Mobile Computing',
        'sks'=>'3',
        'semester'=>'ganjil',
	];
}
