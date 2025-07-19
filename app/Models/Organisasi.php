<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    protected $fillable = [
        'nama',
        'instansi_id',
        'jabatan',
        'nip',
        'photo',
    ];

    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }
}