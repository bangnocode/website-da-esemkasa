<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBerita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fillable = ['tanggal', 'judul', 'thumbnail', 'isi_berita', 'dokumentasi_kegiatan', 'keywords', 'slug'];
    protected $casts = ['dokumentasi_kegiatan' => 'array'];
}
