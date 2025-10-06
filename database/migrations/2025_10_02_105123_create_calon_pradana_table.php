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
        Schema::create('calon_pradana', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kandidat');
            $table->enum('jabatan', ['pa', 'pi']); // pa = putra, pi = putri
            $table->text('visi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paslon_pradana');
    }
};
