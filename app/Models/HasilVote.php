<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilVote extends Model
{
    use HasFactory;

    protected $table = 'hasil_vote';

    protected $fillable = ['nama_kandidat_pa_id', 'nama_kandidat_pi_id', 'token_peserta'];

    public function kandidatPa()
    {
        return $this->belongsTo(CalonPradana::class, 'nama_kandidat_pa_id');
    }

    public function kandidatPi()
    {
        return $this->belongsTo(CalonPradana::class, 'nama_kandidat_pi_id');
    }
}
