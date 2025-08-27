@php
    use Illuminate\Support\Facades\Storage;

    // koleksi aman walau null
    $galItems = collect($galeri ?? []);
    // berapa yang mau dipajang di homepage
    $galLimitMobile  = 9;
    $galLimitDesktop = 9;
@endphp

{{-- ================= MOBILE-ONLY (< lg): slider ================= --}}
<section class="container-xxl py-5 d-lg-none gallery-section" style="background:#fafafa;">
  <div class="container">

    <div class="text-center mb-3">
      <h2 class="gallery-title">GALERI DESA</h2>
      <p class="gallery-subtitle">Menampilkan kegiatan-kegiatan yang berlangsung di desa</p>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-2 px-1">
      <button class="btn btn-link p-0 gal-nav" type="button" aria-label="Sebelumnya" onclick="galScroll(-1)">
        <i class="bi bi-chevron-left"></i>
      </button>
      <button class="btn btn-link p-0 gal-nav" type="button" aria-label="Berikutnya" onclick="galScroll(1)">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>

    <div id="galleryTrack" class="gal-track" tabindex="0">
      @forelse($galItems->take($galLimitMobile) as $g)
        @php
          $src = ($g->gambar_path && Storage::disk('public')->exists($g->gambar_path))
                ? Storage::disk('public')->url($g->gambar_path)
                : asset('home/img/galeri/download.jpeg');
        @endphp
        <article class="gal-card">
          <img src="{{ $src }}" alt="{{ $g->judul }}" class="gal-img">
        </article>
      @empty
        <article class="gal-card">
          <img src="{{ asset('home/img/galeri/download.jpeg') }}" alt="Galeri" class="gal-img">
        </article>
      @endforelse
    </div>    
  </div>
</section>

{{-- ================= DESKTOP/TABLET (>= lg): grid ================= --}}
<section class="container-xxl py-5 d-none d-lg-block" style="background:#fafafa;">
  <div class="container">
    <h1 class="fw-bold mb-1" style="color: #166138;">Galeri Desa</h1>
    <div class="mb-4" style="font-size:1.30rem; color:#222; font-weight:500;">
      Menampilkan kegiatan-kegiatan yang berlangsung di desa
    </div>

    <div class="row g-4">
      @forelse($galItems->take($galLimitDesktop) as $g)
        @php
          $src = ($g->gambar_path && Storage::disk('public')->exists($g->gambar_path))
                ? Storage::disk('public')->url($g->gambar_path)
                : asset('home/img/galeri/download.jpeg');
        @endphp
        <div class="col-md-4">
          <div class="galeri-img-wrap">
            <img src="{{ $src }}" alt="{{ $g->judul }}" class="galeri-img">
          </div>
        </div>
      @empty
        <div class="col-12">
          <div class="galeri-img-wrap">
            <img src="{{ asset('home/img/galeri/download.jpeg') }}" alt="Galeri" class="galeri-img">
          </div>
        </div>
      @endforelse
    </div>
  </div>
</section>

{{-- ================ Styles + JS mini (boleh pindah ke custom.css/js) ================ --}}
<style>
  .gallery-title{ color: var(--brand-green); font-weight: 800; letter-spacing:.4px; font-size:clamp(1.1rem,3.5vw,1.5rem); }
  .gallery-subtitle{ color:#555; font-size:.95rem; }

  .gal-card{ background:#fff; border-radius:14px; overflow:hidden; box-shadow:0 6px 18px rgba(0,0,0,.10); }
  .gal-img, .galeri-img{ width:100%; display:block; object-fit:cover; background:#eee; aspect-ratio:4/3; }

  .galeri-img-wrap{ border-radius:14px; overflow:hidden; background:#fff; box-shadow:0 6px 18px rgba(0,0,0,.10); }

  .gal-track{ display:grid; grid-auto-flow:column; grid-auto-columns:86%; gap:12px; overflow-x:auto; padding:2px;
              scroll-snap-type:x mandatory; -webkit-overflow-scrolling:touch; }
  .gal-track .gal-card{ scroll-snap-align:start; }
  @media (min-width:400px){ .gal-track{ grid-auto-columns:78%; } }
  @media (min-width:576px){ .gal-track{ grid-auto-columns:66%; } }

  .gal-nav{ color:#222; opacity:.85; }
  .gal-nav:hover{ opacity:1; }
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
