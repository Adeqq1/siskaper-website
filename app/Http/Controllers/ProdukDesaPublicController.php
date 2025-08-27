<?php

namespace App\Http\Controllers;

use App\Models\ProdukDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ProdukDesaPublicController extends Controller
{
    public function index(Request $request)
    {
        $query = ProdukDesa::query();

        // Kalau tabel punya kolom 'status', filter published
        if (Schema::hasColumn('produk_desas', 'status')) {
            $query->where('status', 'published');
        }

        // Urutan terbaru (kalau published_at ada, pakai itu dulu)
        if (Schema::hasColumn('produk_desas', 'published_at')) {
            $query->orderByDesc('published_at');
        }
        $query->orderByDesc('created_at');

        $produk = $query->paginate(6)->withQueryString();

        return view('home.produk_publik', compact('produk'));
    }

    public function show(ProdukDesa $produk) // <-- {produk:slug} dari route
    {
        return view('home.produk_show', compact('produk'));
    }
}
