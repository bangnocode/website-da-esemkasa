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
        Schema::create('program_kerja_paslon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('calon_pradana_id')->constrained('calon_pradana')->cascadeOnDelete();
            $table->text('nama_proker')->nullable();
            $table->text('deskripsi_proker')->nullable();
            $table->text('manfaat_proker')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_kerja_paslon');
    }
};
