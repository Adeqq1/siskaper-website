<?php

namespace App\Http\Controllers;

use App\Models\Sotk;

class SotkPublicController extends Controller
{
    public function index()
    {
        // tampilkan semua SOTK terurut (bisa diubah ke paginate kalau perlu)
        $data = Sotk::orderBy('urutan')->get();

        // pakai halaman penuh di folder resource/home seperti contohmu
        return view('home.sotk_publik', compact('data'));
    }
}
