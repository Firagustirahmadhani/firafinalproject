<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Nama Anda Sendiri",
            'email' => 'namaanda@namaanda.com',
            'password' => Hash::make('12345678'),
            // 'level' => 'admin',
			]);

            
        DB::table('users')->insert([
            'name' => "Administrator",
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            // 'level' => 'admin',
        ]);
    }
}
