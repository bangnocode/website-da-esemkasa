<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PradanaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('calon_pradana')->insert([
            [
                'nama_kandidat' => 'Mohammad Al Arthur',
                'jabatan' => 'pa',
                'visi' => 'Mewujudkan Ambalan Pramuka Yang Berkarakter, Disiplin, Kreatif, Dan Peduli, Sehingga Mampu Menjadi Teladan Bagi Lingkungan Sekolah Maupun Masyarakat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kandidat' => 'Kennie Lionel Juano',
                'jabatan' => 'pa',
                'visi' => 'Menjadikan Dewan Ambalan Yang Berintegritas, Visioner, Dan Berjiwa Pemimpin Yang Berdasarkan Pada Pancasila Dan Dasa Dharma.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kandidat' => 'Astrella Ramadhani',
                'jabatan' => 'pi',
                'visi' => 'Mewujudkan Dewan Ambalan yang Progresif, Berkarakter, dan Berdaya Guna Melalui Kolaborasi, Aksi Nyata, dan Inovasi Kearifan Lokal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kandidat' => 'Alvy Andini Nayla F',
                'jabatan' => 'pi',
                'visi' => 'Mewujudkan Pramuka Sebagai Wadah Pembentukan Generasi Yang Solid, Bertanggung Jawab, Berkarakter, Serta Mampu Menjadi Teladan Positif Di Lingkungan Sekolah Maupun Masyarakat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
