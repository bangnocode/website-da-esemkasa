<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonPradana extends Model
{
    use HasFactory;
    
    protected $table = 'calon_pradana';

    protected $fillable = [
        'nama_kandidat',
        'jabatan',
        'visi',
    ];

    // Relasi ke tabel misi
    public function misi()
    {
        return $this->hasMany(MisiPaslon::class);
    }

    // Relasi ke tabel program kerja
    public function programKerja()
    {
        return $this->hasMany(ProkerPaslon::class);
    }

    // Relasi ke hasil vote
    public function hasilVotes()
    {
        return $this->hasMany(HasilVote::class);
    }
}
