<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MisiPaslon extends Model
{
    use HasFactory;

    protected $table = 'misi_paslon';

    protected $fillable = [
        'paslon_pradana_id',
        'misi',
    ];

    // Relasi ke PaslonPradana
    public function paslonPradana()
    {
        return $this->belongsTo(PaslonPradana::class, 'paslon_pradana_id');
    }
}
