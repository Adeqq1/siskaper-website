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
          <div class="stat-nominal stat-green flex-shrink-0">1.149</div>
          <div class="stat-label flex-grow-1">Penduduk</div>
        </div>
        <div class="stat-row d-flex mb-3">
          <div class="stat-nominal stat-green flex-shrink-0">304</div>
          <div class="stat-label flex-grow-1">Kepala Keluarga</div>
        </div>
        <div class="stat-row d-flex mb-3">
          <div class="stat-nominal stat-green flex-shrink-0">73</div>
          <div class="stat-label flex-grow-1">Penduduk Sementara</div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="stat-row d-flex mb-3">
          <div class="stat-nominal stat-green flex-shrink-0">606</div>
          <div class="stat-label flex-grow-1">Laki-Laki</div>
        </div>
        <div class="stat-row d-flex mb-3">
          <div class="stat-nominal stat-green flex-shrink-0">543</div>
          <div class="stat-label flex-grow-1">Perempuan</div>
        </div>
        <div class="stat-row d-flex mb-3">
          <div class="stat-nominal stat-green flex-shrink-0">37</div>
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
    <p class="admin-desc">
      Efisiensi pengelolaan data dan informasi kependudukan yang lebih efektif.
    </p>

    <div class="row row-cols-3 g-3">
      <div class="col">
        <div class="chip"><i class="bi bi-people-fill"></i></div>
        <div class="num">1.149</div>
        <div class="lbl">Penduduk</div>
      </div>
      <div class="col">
        <div class="chip"><i class="bi bi-gender-male"></i></div>
        <div class="num">606</div>
        <div class="lbl">Laki-Laki</div>
      </div>
      <div class="col">
        <div class="chip"><i class="bi bi-people"></i></div>
        <div class="num">304</div>
        <div class="lbl">Kepala Keluarga</div>
      </div>
      <div class="col">
        <div class="chip"><i class="bi bi-gender-female"></i></div>
        <div class="num">543</div>
        <div class="lbl">Perempuan</div>
      </div>
      <div class="col">
        <div class="chip"><i class="bi bi-house-door"></i></div>
        <div class="num">73</div>
        <div class="lbl">Penduduk Sementara</div>
      </div>
      <div class="col">
        <div class="chip"><i class="bi bi-arrow-left-right"></i></div>
        <div class="num">37</div>
        <div class="lbl">Mutasi Penduduk</div>
      </div>
    </div>
  </div>

  <style>
    :root{
      --brand-green:#166138;
      --title-red:#E53935;     /* opsi judul merah jika mau diganti */
    }

    /* Judul & deskripsi mobile */
    .admin-title{
      color: var(--brand-green);
      font-weight: 800;
      letter-spacing: .3px;
      font-size: clamp(1.05rem, 3.5vw, 1.35rem);
      line-height: 1.15;
    }
    .admin-desc{
      color:#666;
      font-size: .95rem;
      margin-bottom: .75rem;
    }

    /* Chip ikon */
    .chip{
      width: 58px; height: 58px;
      margin: 0 auto 6px;
      border-radius: 16px;
      background:#fff; color:#166138; border:2px solid #2dc472;
      display: grid; place-items: center;
      box-shadow: 0 2px 6px rgba(0,0,0,.08);
    }
    .chip .bi{ font-size: 26px; color: var(--brand-green); }

    /* Angka & label */
    .num{
      color: var(--brand-green);
      font-weight: 800;
      font-size: clamp(1rem, 5vw, 1.35rem);
      line-height: 1;
    }
    .lbl{
      color:#555;
      font-size: .8rem;
      line-height: 1.1;
    }

    /* Sedikit padding agar tidak mepet tepi layar */
    .admin-mobile .container{ padding-left:.5rem; padding-right:.5rem; }
  </style>
</section>
