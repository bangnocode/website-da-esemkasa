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
            $table->foreignId('paslon_pradana_id')->nullable()->constrained('paslon_pradana')->nullOnDelete();
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
