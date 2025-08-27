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
Route::get('/produk', [ProdukDesaPublicController::class, 'index'])->name('produk.index');

// Halaman detail per-produk (pakai slug kalau ada, fallback ke id)
Route::get('/produk/{produk:slug}', [ProdukDesaPublicController::class, 'show'])->name('produk.show');

Route::get('informasi', function () {
    return view('home.informasi');
})->name('informasi');


// Route untuk Surat Keterangan bbm
Route::get('/form-surat/bbm', function () {
    return view('home.form_surat.form_izinEcerBBM');
})->name('bbm');

// Route untuk form Surat Keterangan JBT
Route::get('/form-surat/jual-beli-tanah', function () {
    return view('home.form_surat.form_jualBelitanah');
})->name('tanah');

// Route untuk form Surat Keterangan domisili
Route::get('/form-surat/domisili', function () {
    return view('home.form_surat.form_keteranganDomisili');
})->name('domisili');

// Route untuk form Surat Keterangan kematian
Route::get('/form-surat/surat-keterangan-kematian', function () {
    return view('home.form_surat.form_keteranganKematian');
})->name('kematian');

// Route untuk form Surat Keterangan Usaha
Route::get('/form-surat/usaha', function () {
    return view('home.form_surat.form_usaha');
})->name('usaha');

// Route untuk form Surat Keterangan skck
Route::get('/form-surat/skck', function () {
    return view('home.form_surat.form_pengantarSKCK');
})->name('skck');

// Route untuk form Surat Keterangan sproadik
Route::get('/form-surat/sproadik', function () {
    return view('home.form_surat.form_SPROADIK');
})->name('sproadik');



Route::resource('sotk', SotkController::class);
Route::resource('stat-penduduk', StatPendudukController::class);
Route::resource('apbd-desa', ApbdDesaController::class);
Route::resource('berita_admin', BeritaController::class);
Route::resource('produk-desa', ProdukDesaController::class);
Route::resource('galeri-desa', GaleriDesaController::class);
Route::get('/parts/struktur_desa', [SotkController::class, 'publik'])->name('sotk.publik');

