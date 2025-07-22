<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'isi',
        'penulis',
        'tanggal_publish',
        'gambar',
    ];

    protected $casts = [
        'tanggal_publish' => 'datetime',
    ];
}