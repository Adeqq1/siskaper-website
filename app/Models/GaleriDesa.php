<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul','gambar_path','caption','tanggal'
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}
