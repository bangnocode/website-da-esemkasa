<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProkerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('program_kerja_paslon')->insert([
            // Proker Paslon 1
            [
                'paslon_pradana_id' => 1,
                'nama_proker' => 'Nature Care Camp',
                'deskripsi_proker' => 'Kegiatan perkemahan yang menggabungkan keceriaan jelajah alam dengan pengabdian kepada masyarakat. Peserta diajak menikmati petualangan di alam terbuka melalui kegiatan tracking, permainan outbound, dan edukasi lingkungan, sekaligus menumbuhkan rasa kepedulian sosial lewat kerja bakti bersama warga, mengajar anak-anak desa, serta bakti sosial sederhana.',
                'manfaat_proker' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paslon_pradana_id' => 1,
                'nama_proker' => 'Satu Ambalan, Satu Produk',
                'deskripsi_proker' => 'Setiap regu atau sangga diminta membuat satu produk khas (kerajinan, konten, makanan lokal, dsb) dalam satu periode.',
                'manfaat_proker' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paslon_pradana_id' => 1,
                'nama_proker' => 'Peta Kegiatan Ambalan – Sistem Monitoring Terbuka',
                'deskripsi_proker' => 'Kalender kegiatan ambalan yang ditempel atau diakses online, agar semua tahu apa yang sedang dikerjakan.',
                'manfaat_proker' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Proker Paslon 2
            [
                'paslon_pradana_id' => 2,
                'nama_proker' => 'Bakti Sosial',
                'deskripsi_proker' => 'Mengadakan Bakti Sosial (Panti Asuhan) Yang Bersifat 3 Bulan Sekali, Yang Di Dalam Bakti Sosial Tersebut Kami Menyalurkan Sedikit Bantuan Dan Pembelajaran Yang Inovatif Dan Kreatif Tentang Karakter Dalam Kepramukaan.',
                'manfaat_proker' => 'Mengajarkan Karakter Yang Ada Di Dalam Ke Pramukaan Sehingga Mereka Dapat Mengenal Dan Belajar Tentang Pramuka Sejak Usia Dini.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paslon_pradana_id' => 2,
                'nama_proker' => 'Bakti Sosial',
                'deskripsi_proker' => 'Mengadakan Lan Setiap 6 Bulan S/D 12 Bulan Sekali Yang Dimana Kita Kemah Selama 2 Hari 1 Malam Dan Hanya Dibekali Sedikit Alat Untuk Menguji Skill Yang Diajarkan Di Dalam Pramuka.',
                'manfaat_proker' => 'Bertujuan Untuk Meningkatkan Skill, Pengetahuan Dan Rasa Solidaritas Yang Dapat Menyatukan Perasaan Solidaritas Dan Rasa Saling Percaya Terhadap Sesama Anggota DA.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
