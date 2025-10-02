<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MisiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('misi_paslon')->insert([
            // Misi Paslon 1
            [
                'paslon_pradana_id' => 1,
                'misi' => 'Penguatan Karakter dan Kepemimpinan: Menanamkan dan mengamalkan nilai-nilai Tri Satya dan Dasa Darma dalam setiap program kerja, serta mengoptimalkan kegiatan rutin untuk melatih kedisiplinan, tanggung jawab, dan keterampilan kepemimpinan anggota.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paslon_pradana_id' => 1,
                'misi' => 'Inovasi dan Identitas Program: Merancang dan melaksanakan program kreatif, inovatif, dan berkelanjutan dengan mengintegrasikan unsur kearifan lokal (budaya daerah) untuk meningkatkan eksistensi dan memberi ciri khas ambalan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paslon_pradana_id' => 1,
                'misi' => 'Membangun budaya kolaborasi yang solid dan terbuka, serta menjalin kemitraan aktif dengan gugus depan lain, organisasi sekolah, dan organisasi di luar sekolah untuk memperluas dampak positif dan kebermanfaatan kegiatan ambalan bagi masyarakat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paslon_pradana_id' => 1,
                'misi' => 'Mengembangkan sistem komunikasi, dokumentasi, dan publikasi digital yang adaptif dan inspiratif untuk mendukung transparansi kegiatan dan membangun citra positif Dewan Ambalan di era digital.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paslon_pradana_id' => 1,
                'misi' => 'Menjaga dan meningkatkan komunikasi aktif serta jalinan silaturahmi yang erat antara anggota aktif dan purna ambalan sebagai upaya menjaga keberlanjutan tradisi dan transfer pengetahuan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Misi Paslon 2
            [
                'paslon_pradana_id' => 2,
                'misi' => 'Menguatkan keimanan, ketakwaan dan kejujuran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paslon_pradana_id' => 2,
                'misi' => 'Menjunjung tinggi nilai kemanusiaan yang adil dan beradab melalui sikap tolong menolong, solidaritas dan juga kedisiplinan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paslon_pradana_id' => 2,
                'misi' => 'Mempererat persatuan dan kesatuan Dewan Ambalan dengan menciptakan lingkungan pramuka yang aktif dan selalu mengutamakan kerja sama tim.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paslon_pradana_id' => 2,
                'misi' => 'Mengembangkan kepemimpinan yang demokratis melalui musyawarah mufakat, bertanggung jawab dan membangun solidaritas tinggi melalui kegiatan kebersamaan yang kreatif, inovatif dan menyenangkan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paslon_pradana_id' => 2,
                'misi' => 'Mewujudkan keadilan sosial dalam Dewan Ambalan dengan menjunjung keteladanan dan mendukung program sekolah dengan kegiatan pramuka yang positif, mendidik dan sesuai nilai nilai kepramukaan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
