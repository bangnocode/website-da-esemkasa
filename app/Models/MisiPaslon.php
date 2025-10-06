<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MisiPaslon extends Model
{
    use HasFactory;

    protected $table = 'misi_paslon';

    protected $fillable = ['calon_pradana_id', 'misi'];

    public function calonPradana()
    {
        return $this->belongsTo(CalonPradana::class);
    }
}
