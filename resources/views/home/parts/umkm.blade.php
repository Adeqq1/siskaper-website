{{-- ================= MOBILE-ONLY (< lg): slider horizontal ala SOTK ================= --}}
<section class="container-xxl py-5 d-lg-none umkm-section">
  <div class="container">

    <div class="text-center mb-3">
      <h2 class="umkm-title">BELI DARI DESA</h2>
      <p class="umkm-subtitle">
        Promosi produk UMKM desa untuk mendongkrak perekonomian masyarakat.
      </p>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-2 px-1">
      <button class="btn btn-link p-0 umkm-nav" type="button" aria-label="Sebelumnya" onclick="umkmScroll(-1)">
        <i class="bi bi-chevron-left"></i>
        <svg class="bi-fallback" viewBox="0 0 16 16" width="18" height="18"><path d="M10.5 3.5 6 8l4.5 4.5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
      <button class="btn btn-link p-0 umkm-nav" type="button" aria-label="Berikutnya" onclick="umkmScroll(1)">
        <i class="bi bi-chevron-right"></i>
        <svg class="bi-fallback" viewBox="0 0 16 16" width="18" height="18"><path d="M5.5 12.5 10 8 5.5 3.5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>

    <div id="umkmTrack" class="umkm-track" tabindex="0">
      {{-- Produk 1 --}}
      <article class="product-card">
        <img src="{{ asset('home/img/umkm/bayam.jpg')}}" alt="Roti tawar" class="product-img">
        <div class="product-body">
          <h3 class="product-title">Roti tawar</h3>
          <div class="d-flex align-items-center justify-content-between mt-1">
            <div class="product-rating" aria-label="rating 5/5">
              <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
            </div>
            <span class="price-badge">Rp10.000</span>
          </div>
        </div>
      </article>

      {{-- Produk 2 --}}
      <article class="product-card">
        <img src="{{ asset('home/img/umkm/bayam.jpg')}}" alt="Konektor masker" class="product-img">
        <div class="product-body">
          <h3 class="product-title">Konektor masker</h3>
          <div class="d-flex align-items-center justify-content-between mt-1">
            <div class="product-rating" aria-label="rating 5/5">
              <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
            </div>
            <span class="price-badge">Rp10.000</span>
          </div>
        </div>
      </article>

      {{-- Produk 3 --}}
      <article class="product-card">
        <img src="{{ asset('home/img/umkm/bayam.jpg')}}" alt="Untuk snack box" class="product-img">
        <div class="product-body">
          <h3 class="product-title">Untuk snack box</h3>
          <div class="d-flex align-items-center justify-content-between mt-1">
            <div class="product-rating" aria-label="rating 5/5">
              <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
            </div>
            <span class="price-badge">Rp123</span>
          </div>
        </div>
      </article>
      {{-- Tambah item lain → copy <article class="product-card"> --}}
    </div>

    <div class="text-center mt-3">
      <a href="#" class="btn btn-outline-success rounded-pill px-4 fw-bold umkm-more">Lihat Semua Produk</a>
    </div>
  </div>
</section>

{{-- ================= DESKTOP/TABLET (>= lg): pakai grid 3 kolom punyamu ================= --}}
<section class="container-xxl py-5 d-none d-lg-block">
  <div class="container">
    <!-- Judul dan deskripsi -->
    <h1 class="fw-bold mb-1" style="color: #166138; font-size:3rem;">BELI DARI DESA</h1>
    <div class="mb-4" style="font-size:1.30rem; color:#222; font-weight:500;">
      Layanan yang disediakan promosi produk UMKM desa sehingga mampu meningkatkan perekonomian masyarakat desa
    </div>

    <!-- Grid Produk -->
    <div class="row g-4">
      <!-- Produk 1 -->
      <div class="col-md-6 col-lg-4">
        <article class="product-card h-100">
          <img src="{{ asset('home/img/umkm/bayam.jpg')}}" alt="Roti tawar" class="product-img">
          <div class="product-body">
            <h3 class="product-title">Roti tawar</h3>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <div class="product-rating"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
              <span class="price-badge">Rp10.000</span>
            </div>
          </div>
        </article>
      </div>
      <!-- Produk 2 -->
      <div class="col-md-6 col-lg-4">
        <article class="product-card h-100">
          <img src="{{ asset('home/img/umkm/bayam.jpg')}}" alt="konektor masker" class="product-img">
          <div class="product-body">
            <h3 class="product-title">konektor masker</h3>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <div class="product-rating"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
              <span class="price-badge">Rp10.000</span>
            </div>
          </div>
        </article>
      </div>
      <!-- Produk 3 -->
      <div class="col-md-6 col-lg-4">
        <article class="product-card h-100">
          <img src="{{ asset('home/img/umkm/bayam.jpg')}}" alt="Untuk snack box" class="product-img">
          <div class="product-body">
            <h3 class="product-title">Untuk snack box</h3>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <div class="product-rating"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
              <span class="price-badge">Rp123</span>
            </div>
          </div>
        </article>
      </div>
      <div class="text-center mt-3">
        <a href="#" class="btn btn-outline-success rounded-pill px-4 fw-bold berita-more">Lihat Semua</a>
      </div>
    </div>
  </div>
</section>

{{-- ================ Styles + JS mini (boleh pindah ke custom.css/js) ================ --}}
<style>
  :root{
    --brand-green:#166138;
    --star:#FFB400;
  }

  /* Kartu produk (dipakai di mobile & desktop) */
  .product-card{
    background:#fff; border-radius:14px; overflow:hidden;
    box-shadow:0 6px 18px rgba(0,0,0,.10);
    display:flex; flex-direction:column;
  }
  .product-img{
    width:100%; aspect-ratio:4/3; object-fit:cover; display:block; background:#eee;
  }
  .product-body{ padding:12px 14px 14px; }
  .product-title{
    font-weight:800; line-height:1.2; margin-bottom:.25rem;
    font-size: clamp(1rem, 2.4vw, 1.1rem);
    color:#222;
  }
  .product-rating .star{ color:var(--star); margin-right:2px; }
  .price-badge{
    background:#fff; color:var(--brand-green);
    border:2px solid #cfe7db;
    border-radius:10px; padding:.25rem .5rem; font-weight:700; font-size:.9rem;
    white-space:nowrap;
  }

  /* Slider mobile */
  .umkm-track{
    display:grid; grid-auto-flow:column; grid-auto-columns: 82%;
    gap:12px; overflow-x:auto; padding:2px;
    scroll-snap-type:x mandatory; -webkit-overflow-scrolling:touch;
  }
  .umkm-track .product-card{ scroll-snap-align:start; }
  @media (min-width:400px){ .umkm-track{ grid-auto-columns:74%; } }
  @media (min-width:576px){ .umkm-track{ grid-auto-columns:62%; } }

  .umkm-title{
    color: var(--brand-green);
    font-weight: 800;
    letter-spacing: .4px;
    font-size: clamp(1.1rem, 3.5vw, 1.5rem);
  }
  .umkm-subtitle{ color:#555; font-size:.95rem; }

  .umkm-nav{ color:#222; opacity:.85; }
  .umkm-nav:hover{ opacity:1; }
  .bi-fallback{ display:none; } /* tampilkan jika tidak pakai bootstrap-icons */

  /* Desktop polish */
  @media (min-width: 992px){
    .product-card:hover{ transform: translateY(-2px); transition: transform .15s ease; }
  }
</style>

<script>
  function umkmScroll(dir){
    const track = document.getElementById('umkmTrack');
    if(!track) return;
    const card = track.querySelector('.product-card');
    const gap = 12;
    const step = card ? card.offsetWidth + gap : track.clientWidth * 0.8;
    track.scrollBy({ left: dir * step, behavior: 'smooth' });
  }
</script>
