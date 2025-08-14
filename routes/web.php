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
    return view('home.userpage');
})->name('userpage');


Route::get('/profile', function () {
    return view('home.profile');
})->name('profile');

Route::get('/info_grafis', function () {
    return view('home.info_grafis');
})->name('info_grafis');

Route::get('/berita', function () {
    return view('home.berita');
})->name('berita');

Route::get('map', function () {
    return view('home.map');
})->name('map');

Route::get('umkm', function () {
    return view('home.umkm');
})->name('umkm');

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
Route::resource('berita', BeritaController::class);
Route::resource('produk-desa', ProdukDesaController::class);
Route::resource('galeri-desa', GaleriDesaController::class);


