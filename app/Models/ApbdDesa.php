<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApbdDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'pendapatan',
        'belanja',
        'pembiayaan',
        'rincian',
        'lampiran_path'
    ];

    protected $casts = [
        'tahun' => 'integer',
        'rincian' => 'array',
    ];
}
