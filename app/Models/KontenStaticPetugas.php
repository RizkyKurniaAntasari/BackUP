<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontenStaticPetugas extends Model
{
    protected $table = 'konten_dinas';
    protected $fillable = [
        'tipe', 'konten',
    ];
}
