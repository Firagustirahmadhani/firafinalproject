<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'npm'=> "2201170008",
        'nama' => 'fira gusti rahmadhani',
        'alamat'=>'Sijunjung',
        'no_hp'=>'082318065417',
    ];
}
