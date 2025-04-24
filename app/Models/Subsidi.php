<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subsidi extends Model
{
    protected $table = 'subsidi';

    protected $fillable = ['username', 'jenis', 'tanggal', 'status'];
}
