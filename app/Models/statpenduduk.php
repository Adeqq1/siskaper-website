<?php

// app/Models/StatPenduduk.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatPenduduk extends Model
{
    // eksplisit saja biar nggak ambigu
    protected $table = 'stat_penduduks';

    protected $fillable = ['tahun', 'kk', 'laki_laki', 'perempuan'];

    protected $casts = [
        'tahun' => 'integer',
        'kk' => 'integer',
        'laki_laki' => 'integer',
        'perempuan' => 'integer',
        // 'total' adalah kolom virtual di DB, tidak perlu di-fill
    ];
}