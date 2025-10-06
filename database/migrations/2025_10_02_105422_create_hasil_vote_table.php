<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('hasil_vote', function (Blueprint $table) {
                $table->id();
                $table->foreignId('nama_kandidat_pa_id')->constrained('calon_pradana');
                $table->foreignId('nama_kandidat_pi_id')->constrained('calon_pradana');
                $table->text('token_peserta');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_vote');
    }
};
