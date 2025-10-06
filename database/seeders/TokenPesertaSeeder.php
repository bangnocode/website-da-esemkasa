<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TokenPesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tokens = [];

        // Helper untuk membuat token acak dengan awalan tertentu
        $generateTokens = function (string $prefix, int $count) {
            $list = [];
            for ($i = 0; $i < $count; $i++) {
                // Generate 3 karakter acak (huruf besar atau angka)
                $random = strtoupper(Str::random(4));
                $list[] = [
                    'token_peserta' => $prefix . $random,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            return $list;
        };

        // Tambahkan token berdasarkan kelompok
        $tokens = array_merge(
            $generateTokens('14_', 22),
            $generateTokens('15_', 30),
            $generateTokens('16_', 43),
            $generateTokens('PB_', 2),
            $generateTokens('test_', 2)
        );

        DB::table('token_peserta')->insert($tokens);
    }
}
