@php
    // guard: kalau $stat belum dikirim, bikin objek kosong biar blade nggak error
    $stat = $stat ?? null;
    $kk   = $stat->kk           ?? 0;
    $lk   = $stat->laki_laki    ?? 0;
    $pr   = $stat->perempuan    ?? 0;
    $tot  = ($stat ? (int)$lk + (int)$pr : 0);

    // kalau kamu punya kolom tambahan seperti 'sementara' & 'mutasi', isi dari DB.
    $sementara = $stat->penduduk_sementara ?? 0;   // kalau nggak ada kolomnya, biarkan 0 atau hapus kartu-nya
    $mutasi    = $stat->mutasi_penduduk    ?? 0;
@endphp

{{-- ================= DESKTOP/TABLET (>= md) — TETAP PAKAI LAYOUT LAMA ================= --}}
<section class="container-xxl py-5 container-16x9 d-none d-md-block">
  <div class="container">
    <!-- Judul dan deskripsi -->
    <h1 class="fw-bold mb-2" style="color: #166138; font-size:2.8rem;">Administrasi Penduduk</h1>
    <div class="mb-5" style="font-size:1.2rem; color: #000;">
      Sistem digital yang berfungsi mempermudah pengelolaan data dan informasi terkait dengan kependudukan dan
      pendayagunaannya untuk pelayanan publik yang efektif dan efisien
    </div>

    <!-- Grid Data (layout lama) -->
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="stat-row d-flex mb-3">
          <div class="stat-nominal stat-green flex-shrink-0">{{ number_format($tot) }}</div>
          <div class="stat-label flex-grow-1">Penduduk</div>
        </div>
        <div class="stat-row d-flex mb-3">
          <div class="stat-nominal stat-green flex-shrink-0">{{ number_format($kk) }}</div>
          <div class="stat-label flex-grow-1">Kepala Keluarga</div>
        </div>
        <div class="stat-row d-flex mb-3">
          <div class="stat-nominal stat-green flex-shrink-0">{{ number_format($sementara) }}</div>
          <div class="stat-label flex-grow-1">Penduduk Sementara</div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="stat-row d-flex mb-3">
          <div class="stat-nominal stat-green flex-shrink-0">{{ number_format($lk) }}</div>
          <div class="stat-label flex-grow-1">Laki-Laki</div>
        </div>
        <div class="stat-row d-flex mb-3">
          <div class="stat-nominal stat-green flex-shrink-0">{{ number_format($pr) }}</div>
          <div class="stat-label flex-grow-1">Perempuan</div>
        </div>
        <div class="stat-row d-flex mb-3">
          <div class="stat-nominal stat-green flex-shrink-0">{{ number_format($mutasi) }}</div>
          <div class="stat-label flex-grow-1">Mutasi Penduduk</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ================= MOBILE-ONLY (< md) — GRID MINIMAL ALA CONTOH ================= --}}
<section class="container-xxl py-5 d-md-none admin-mobile">
  <div class="container text-center">
    <h2 class="mb-1 admin-title">Administrasi Penduduk</h2>
    <p class="admin-desc">Efisiensi pengelolaan data dan informasi kependudukan yang lebih efektif.</p>

    <div class="row row-cols-3 g-3">
      <div class="col">
        <div class="chip"><i class="bi bi-people-fill"></i></div>
        <div class="num">{{ number_format($tot) }}</div>
        <div class="lbl">Penduduk</div>
      </div>
      <div class="col">
        <div class="chip"><i class="bi bi-people"></i></div>
        <div class="num">{{ number_format($lk) }}</div>
        <div class="lbl">Laki-Laki</div>
      </div>
      <div class="col">
        <div class="chip"><i class="bi bi-people"></i></div>
        <div class="num">{{ number_format($kk) }}</div>
        <div class="lbl">Kepala Keluarga</div>
      </div>
      <div class="col">
        <div class="chip"><i class="bi bi-people"></i></div>
        <div class="num">{{ number_format($pr) }}</div>
        <div class="lbl">Perempuan</div>
      </div>
      <div class="col">
        <div class="chip"><i class="bi bi-house-door"></i></div>
        <div class="num">{{ number_format($sementara) }}</div>
        <div class="lbl">Penduduk Sementara</div>
      </div>
      <div class="col">
        <div class="chip"><i class="bi bi-arrow-left-right"></i></div>
        <div class="num">{{ number_format($mutasi) }}</div>
        <div class="lbl">Mutasi Penduduk</div>
      </div>
    </div>
  </div>

  <style>
    :root{ --brand-green:#166138; --title-red:#E53935; }
    .admin-title{ color: var(--brand-green); font-weight: 800; letter-spacing: .3px; font-size: clamp(1.05rem, 3.5vw, 1.35rem); line-height: 1.15; }
    .admin-desc{ color:#666; font-size: .95rem; margin-bottom: .75rem; }
    .chip{ width: 58px; height: 58px; margin: 0 auto 6px; border-radius: 16px; background:#fff; color:#166138; border:2px solid #2dc472; display: grid; place-items: center; box-shadow: 0 2px 6px rgba(0,0,0,.08); }
    .chip .bi{ font-size: 26px; color: var(--brand-green); }
    .num{ color: var(--brand-green); font-weight: 800; font-size: clamp(1rem, 5vw, 1.35rem); line-height: 1; }
    .lbl{ color:#555; font-size: .8rem; line-height: 1.1; }
    .admin-mobile .container{ padding-left:.5rem; padding-right:.5rem; }
  </style>
</section>
