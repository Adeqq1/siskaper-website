<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class ProdukDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama','slug','harga','deskripsi','gambar_path','is_active'
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->nama) . '-' . substr(Str::uuid(), 0, 8);
            }
        });
    }
}
