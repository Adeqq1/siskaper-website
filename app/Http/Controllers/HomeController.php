<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use app\Models\User;
use App\Models\Berita;


class HomeController extends Controller
{

    public function index()
    {
        $stat = \App\Models\StatPenduduk::orderByDesc('tahun')->first();
        $sotkData = \App\Models\Sotk::orderBy('urutan')->limit(4)->get();
        $berita = \App\Models\Berita::where('status', 'published')
            ->orderByDesc('published_at')->orderByDesc('created_at')
            ->limit(3)->get();
        $produk = \App\Models\ProdukDesa::where('is_active', true)
            ->latest()
            ->get();
        $galeri = \App\Models\GaleriDesa::orderByDesc('tanggal')
            ->orderByDesc('created_at')
            ->take(12)            // ambil secukupnya untuk homepage
            ->get();

        return view('home.userpage', compact('sotkData', 'stat', 'berita', 'produk', 'galeri'));
    }

    public function beritaPublik()
    {
        $berita = Berita::where('status', 'published')
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->paginate(6); // sesuaikan per page

        return view('home.berita', compact('berita'));
    }


    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        } else {
            return view('home.userpage');
        }

    }
}
