<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaslonPradana extends Model
{
    use HasFactory;
    
    protected $table = 'paslon_pradana';

    protected $fillable = [
        'nama_pradana_pa',
        'nama_pradana_pi',
        'visi',
    ];

    // Relasi ke tabel misi
    public function misi()
    {
        return $this->hasMany(MisiPaslon::class, 'paslon_pradana_id');
    }

    // Relasi ke tabel program kerja
    public function programKerja()
    {
        return $this->hasMany(ProkerPaslon::class, 'paslon_pradana_id');
    }

    // Relasi ke hasil vote
    public function hasilVotes()
    {
        return $this->hasMany(HasilVote::class, 'paslon_pradana_id');
    }
}
