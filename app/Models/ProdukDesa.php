<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProdukDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'slug', 'gambar_path', 'harga', 'deskripsi', 'nomor_penjual', 'status', 'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Biar {produk:slug} di route bekerja
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function booted()
    {
        static::creating(function ($m) {
            if (empty($m->slug)) {
                $m->slug = Str::slug($m->nama) . '-' . substr(Str::uuid(), 0, 8);
            }
            if ($m->status === 'published' && empty($m->published_at)) {
                $m->published_at = now();
            }
        });

        static::updating(function ($m) {
            if ($m->isDirty('nama') && empty($m->slug)) {
                $m->slug = Str::slug($m->nama) . '-' . substr(Str::uuid(), 0, 8);
            }
            if ($m->status === 'published' && empty($m->published_at)) {
                $m->published_at = now();
            }
        });
    }
}
