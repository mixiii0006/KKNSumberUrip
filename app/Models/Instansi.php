<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $fillable = [
        'name',
        'description',
        'photo',
    ];

    public function organisasis()
    {
        return $this->hasMany(Organisasi::class);
    }
}