<?php

// app/Models/StatPenduduk.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatPenduduk extends Model
{
    // eksplisit saja biar nggak ambigu
    protected $table = 'stat_penduduks';

    protected $fillable = ['tahun', 'kk', 'laki_laki', 'perempuan', 'penduduk_sementara', 'mutasi_penduduk'];

    protected $casts = ['tahun' => 'integer'];

    // kalau kolom 'total' tidak ada/gagal generated column, hitung manual:
    public function getTotalAttribute()
    {
        return (int)($this->attributes['laki_laki'] ?? 0)
             + (int)($this->attributes['perempuan'] ?? 0);
    }
}