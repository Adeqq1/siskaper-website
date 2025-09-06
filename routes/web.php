<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SotkController;
use App\Http\Controllers\StatPendudukController;
use App\Http\Controllers\ApbdDesaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukDesaController;
use App\Http\Controllers\GaleriDesaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaPublicController;
use App\Http\Controllers\ProdukDesaPublicController;
use App\Http\Controllers\SotkPublicController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\PengajuanSuratAdminController;


route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



route::get('redirect', [HomeController::class, 'redirect']);

Route::get('/dashboardAdmin', function () {
    return view('admin.home');
})->name('home');

Route::get('/userpage', function () {
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
})->name('userpage');


Route::get('/profile', function () {
    return view('home.profile');
})->name('profile');

Route::get('/info_grafis', function () {
    return view('home.info_grafis');
})->name('info_grafis');




Route::get('/ppid/ajukan', [PengajuanSuratController::class, 'create'])->name('ppid.ajukan');
Route::post('/ppid/ajukan', [PengajuanSuratController::class, 'store'])->name('ppid.ajukan.store');


    Route::get('pengajuan-surat', [PengajuanSuratAdminController::class, 'index'])->name('pengajuan-surat.index');
    Route::get('pengajuan-surat/{pengajuan}', [PengajuanSuratAdminController::class, 'show'])->name('pengajuan-surat.show');
    Route::patch('pengajuan-surat/{pengajuan}/read', [PengajuanSuratAdminController::class, 'markAsRead'])->name('pengajuan-surat.read');
    Route::delete('pengajuan-surat/{pengajuan}', [PengajuanSuratAdminController::class, 'destroy'])->name('pengajuan-surat.destroy');


// Route::get('/berita', [HomeController::class, 'beritaPublik'])->name('berita');
Route::get('/berita', [BeritaPublicController::class, 'index'])->name('berita.publik');
Route::get('/berita/{berita:slug}', [BeritaPublicController::class, 'show'])->name('berita.show');

Route::get('map', function () {
    return view('home.map');
})->name('map');

// Route::get('umkm', function () {
//     return view('home.umkm');
// })->name('umkm');

// Listing publik + paginate
Route::get('/produk', [ProdukDesaPublicController::class, 'index'])->name('produk-publik.index');
// Halaman detail per-produk (pakai slug kalau ada, fallback ke id)
Route::get('/produk/{produk:slug}', [ProdukDesaPublicController::class, 'show'])->name('produk-publik.show');


Route::get('/struktur-desa', [SotkPublicController::class, 'index'])->name('sotks.index');

Route::get('informasi', function () {
    return view('home.informasi');
})->name('informasi');


Route::resource('sotk', SotkController::class);
Route::resource('stat-penduduk', StatPendudukController::class);
Route::resource('apbd-desa', ApbdDesaController::class);
Route::resource('berita_admin', BeritaController::class);
Route::resource('produk-desa', ProdukDesaController::class);
Route::resource('galeri-desa', GaleriDesaController::class);
Route::get('/parts/struktur_desa', [SotkController::class, 'publik'])->name('sotk.publik');

