<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaPublicController extends Controller
{
    // Halaman daftar berita
    public function index()
    {
        $berita = Berita::where('status', 'published')
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->paginate(6);

        return view('home.berita_publik', compact('berita'));
    }

    // Halaman detail berita (otomatis pakai slug karena di Model ada getRouteKeyName)
    public function show(Berita $berita)
    {
        // kalau mau tambahkan counter view:
        // $berita->increment('views');
        
        return view('home.berita_show', compact('berita'));
    }   
}
