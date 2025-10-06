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
                'calon_pradana_id' => 1,
                'nama_proker' => '',
                'deskripsi_proker' => 'Mengadakan Eksplorasi Alam Sekitar Agar Lebih Menantang.',
                'manfaat_proker' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Proker Paslon 2
            [
                'calon_pradana_id' => 2,
                'nama_proker' => '',
                'deskripsi_proker' => 'Menjalankan Bakti Sosial Sekitar 3 S/D 6 Bulan Sekali Ke Panti Asuhan Untuk Memberikan Bantuan Dan Juga Mengajari Sedikit Tentang Kepramukaan, Sehingga Mereka Dapat Belajar Kepramukaan Sejak Dini.',
                'manfaat_proker' => 'Mengajarkan Karakter Yang Ada Di Dalam Ke Pramukaan Sehingga Mereka Dapat Mengenal Dan Belajar Tentang Pramuka Sejak Usia Dini.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Proker Paslon 3
            [
                'calon_pradana_id' => 3,
                'nama_proker' => 'Satu Ambalan, Satu Produk',
                'deskripsi_proker' => 'Setiap Regu Atau Sangga Diminta Membuat Satu Produk Khas (Kerajinan, Konten, Makanan Lokal, Dsb) Dalam Satu Periode.',
                'manfaat_proker' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'calon_pradana_id' => 3,
                'nama_proker' => 'Peta Kegiatan Ambalan – Sistem Monitoring Terbuka',
                'deskripsi_proker' => 'Kalender Kegiatan Ambalan Yang Ditempel Di Ruang Sekretariat Dan/Atau Diakses Secara Online Agar Seluruh Anggota Mengetahui Kegiatan Yang Sedang Dan Akan Dijalankan.',
                'manfaat_proker' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'calon_pradana_id' => 3,
                'nama_proker' => 'Ambalanverse – Arsip Digital Dan Dokumentasi Kreatif',
                'deskripsi_proker' => 'Program Digitalisasi Seluruh Kegiatan Ambalan Melalui Platform Media Sosial, Blog, Dan Penyimpanan Cloud (Google Drive) Untuk Membangun Citra, Arsip, Dan Inspirasi Berkelanjutan.',
                'manfaat_proker' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Proker Paslon 4
            [
                'calon_pradana_id' => 4,
                'nama_proker' => '',
                'deskripsi_proker' => 'Proker Yang Akan Saya Lakukan Adalah Mendukung Program Sekolah Seperti Contoh (Pramuka Wajib) Dll. Mendekatkan Hubungan Antar Anggota Pramuka Melalui Happy Camp.',
                'manfaat_proker' => 'Mengajarkan Karakter Yang Ada Di Dalam Ke Pramukaan Sehingga Mereka Dapat Mengenal Dan Belajar Tentang Pramuka Sejak Usia Dini.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
