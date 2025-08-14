{{-- ================= MOBILE-ONLY (< lg): slider horizontal ala SOTK ================= --}}
<section class="container-xxl py-5 d-lg-none gallery-section" style="background:#fafafa;">
  <div class="container">

    <div class="text-center mb-3">
      <h2 class="gallery-title">GALERI DESA</h2>
      <p class="gallery-subtitle">Menampilkan kegiatan-kegiatan yang berlangsung di desa</p>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-2 px-1">
      <button class="btn btn-link p-0 gal-nav" type="button" aria-label="Sebelumnya" onclick="galScroll(-1)">
        <i class="bi bi-chevron-left"></i>
        <svg class="bi-fallback" viewBox="0 0 16 16" width="18" height="18"><path d="M10.5 3.5 6 8l4.5 4.5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
      <button class="btn btn-link p-0 gal-nav" type="button" aria-label="Berikutnya" onclick="galScroll(1)">
        <i class="bi bi-chevron-right"></i>
        <svg class="bi-fallback" viewBox="0 0 16 16" width="18" height="18"><path d="M5.5 12.5 10 8 5.5 3.5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>

    <div id="galleryTrack" class="gal-track" tabindex="0">
      {{-- Item 1 --}}
      <article class="gal-card">
        <img src="{{ asset('home/img/galeri/download.jpeg')}}" alt="Galeri 1" class="gal-img">
      </article>
      {{-- Item 2 --}}
      <article class="gal-card">
        <img src="{{ asset('home/img/galeri/download.jpeg')}}" alt="Galeri 2" class="gal-img">
      </article>
      {{-- Item 3 --}}
      <article class="gal-card">
        <img src="{{ asset('home/img/galeri/download.jpeg')}}" alt="Galeri 3" class="gal-img">
      </article>
      {{-- Tambah item lain → copy <article class="gal-card"> --}}
    </div>
    <div class="text-center mt-3">
      <a href="#" class="btn btn-outline-success rounded-pill px-4 fw-bold galeri-more">Lihat Semua Foto</a>
    </div>
  </div>
</section>

{{-- ================= DESKTOP/TABLET (>= lg): tetap grid 3 kolom ================= --}}
<section class="container-xxl py-5 d-none d-lg-block" style="background:#fafafa;">
  <div class="container">
    <h1 class="fw-bold mb-1" style="color: #166138; font-size:3rem;">GALERI DESA</h1>
    <div class="mb-4" style="font-size:1.30rem; color:#222; font-weight:500;">
      Menampilkan kegiatan-kegiatan yang berlangsung di desa
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="galeri-img-wrap">
          <img src="{{ asset('home/img/galeri/download.jpeg')}}" alt="Galeri 1" class="galeri-img">
        </div>
      </div>
      <div class="col-md-4">
        <div class="galeri-img-wrap">
          <img src="{{ asset('home/img/galeri/download.jpeg')}}" alt="Galeri 2" class="galeri-img">
        </div>
      </div>
      <div class="col-md-4">
        <div class="galeri-img-wrap">
          <img src="{{ asset('home/img/galeri/download.jpeg')}}" alt="Galeri 3" class="galeri-img">
        </div>
      </div>
    </div>
    <div class="text-center mt-3">
        <a href="#" class="btn btn-outline-success rounded-pill px-4 fw-bold galeri-more">Lihat Semua</a>
      </div>
  </div>
  
</section>

{{-- ================ Styles + JS mini (boleh pindah ke custom.css/js) ================ --}}
<style>
  

  /* Judul mobile */
  .gallery-title{
    color: var(--brand-green);
    font-weight: 800;
    letter-spacing: .4px;
    font-size: clamp(1.1rem, 3.5vw, 1.5rem);
  }
  .gallery-subtitle{ color:#555; font-size:.95rem; }

  /* Kartu galeri (dipakai di mobile & desktop) */
  .gal-card{
    background:#fff; border-radius:14px; overflow:hidden;
    box-shadow:0 6px 18px rgba(0,0,0,.10);
  }
  .gal-img,
  .galeri-img{
    width:100%; display:block; object-fit:cover; background:#eee;
    aspect-ratio: 4/3; /* rasio konsisten biar tidak “loncat-loncat” */
  }

  /* Grid desktop: bungkus gambar dengan radius & bayangan */
  .galeri-img-wrap{
    border-radius:14px; overflow:hidden; background:#fff;
    box-shadow:0 6px 18px rgba(0,0,0,.10);
  }

  /* Slider mobile */
  .gal-track{
    display:grid; grid-auto-flow:column; grid-auto-columns: 86%;
    gap:12px; overflow-x:auto; padding:2px;
    scroll-snap-type:x mandatory; -webkit-overflow-scrolling:touch;
  }
  .gal-track .gal-card{ scroll-snap-align:start; }
  @media (min-width:400px){ .gal-track{ grid-auto-columns:78%; } }
  @media (min-width:576px){ .gal-track{ grid-auto-columns:66%; } }

  .gal-nav{ color:#222; opacity:.85; }
  .gal-nav:hover{ opacity:1; }
  .bi-fallback{ display:none; } /* tampilkan jika tidak pakai bootstrap-icons */

  /* Desktop hover */
  @media (min-width: 992px){
    .galeri-img-wrap:hover{ transform: translateY(-2px); transition: transform .15s ease; }
  }
</style>

<script>
  function galScroll(dir){
    const track = document.getElementById('galleryTrack');
    if(!track) return;
    const card = track.querySelector('.gal-card');
    const gap = 12;
    const step = card ? card.offsetWidth + gap : track.clientWidth * 0.8;
    track.scrollBy({ left: dir * step, behavior: 'smooth' });
  }
</script>
