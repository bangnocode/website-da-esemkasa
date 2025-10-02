<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilVote extends Model
{
    use HasFactory;

    protected $table = 'hasil_vote';

    protected $fillable = [
        'paslon_pradana_id',
        'token_peserta'
    ];

    // Relasi ke peserta
    // public function peserta()
    // {
    //     return $this->belongsTo(Peserta::class, 'peserta_id');
    // }

    // Relasi ke paslon pradana
    public function paslonPradana()
    {
        return $this->belongsTo(PaslonPradana::class, 'paslon_pradana_id');
    }
}
