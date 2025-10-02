<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PradanaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('paslon_pradana')->insert([
            [
                'nama_pradana_pa' => 'Mohammad Al Arthur',
                'nama_pradana_pi' => 'Astrella Ramadhani',
                'visi' => 'Mewujudkan Generasi Pramuka SMKN 1 Banyuwangi yang Progresif, Berkarakter Kuat, dan Berdaya Guna sebagai Teladan melalui Semangat Kolaborasi dan Inovasi Kearifan Lokal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pradana_pa' => 'Kennie Lionel Juano',
                'nama_pradana_pi' => 'Alvy Andini Nayla F',
                'visi' => 'Mewujudkan Dewan Ambalan sebagai wadah pembentukan karakter yang berintegritas, visioner dan menjunjung tinggi solidaritas yang berdasarkan pada Pancasila dan Dasa Dharma.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
