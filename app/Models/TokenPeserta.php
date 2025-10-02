<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenPeserta extends Model
{
    use HasFactory;
    protected $table = 'token_peserta';
    protected $fillable = ['token_peserta'];
}
