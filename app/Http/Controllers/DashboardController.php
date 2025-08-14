<?php

namespace App\Http\Controllers;

use App\Models\StatPenduduk;
use App\Models\Berita; // kalau ada modul berita
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil record terakhir berdasarkan tahun
        $latest = StatPenduduk::select([
                'tahun','kk','laki_laki','perempuan',
                // fallback total: jika kolom virtual belum muncul, hitung manual
                DB::raw('COALESCE(total, (laki_laki + perempuan)) as total_calculated'),
            ])
            ->orderByDesc('tahun')
            ->first();

        $stats = [
            'penduduk_total'   => $latest ? (int) $latest->total_calculated : 0,
            'kk'               => $latest ? (int) $latest->kk : 0,
            'berita_published' => class_exists(Berita::class)
                                  ? (int) Berita::where('status','published')->count()
                                  : 0,
        ];

        // Data chart 5 tahun terakhir (label = tahun, value = total)
        $chartRows = StatPenduduk::select([
                'tahun',
                DB::raw('COALESCE(total, (laki_laki + perempuan)) as total_calculated'),
            ])
            ->orderByDesc('tahun')
            ->limit(5)
            ->get()
            ->sortBy('tahun'); // urut naik buat chart

        $chartLabels = $chartRows->pluck('tahun')->values();
        $chartData   = $chartRows->pluck('total_calculated')->values();

        return view('admin.home', compact('stats','chartLabels','chartData'));
        
    }
}
