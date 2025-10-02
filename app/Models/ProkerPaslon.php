<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProkerPaslon extends Model
{
    use HasFactory;

    protected $table = 'program_kerja_paslon';

    protected $fillable = [
        'paslon_pradana_id',
        'nama_proker',
        'deskripsi_proker',
        'manfaat_proker',
    ];

    // Relasi ke PaslonPradana
    public function paslonPradana()
    {
        return $this->belongsTo(PaslonPradana::class, 'paslon_pradana_id');
    }
}
