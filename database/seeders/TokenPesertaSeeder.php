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

        for ($i = 0; $i < 110; $i++) {
            // generate token 6 karakter (A-Z + 0-9)
            $token = strtoupper(Str::random(6));

            $tokens[] = [
                'token_peserta' => $token,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('token_peserta')->insert($tokens);
    }
}
