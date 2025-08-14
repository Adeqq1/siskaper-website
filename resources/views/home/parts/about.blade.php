{{-- ================= DESKTOP / TABLET (>= lg) ================= --}}
<div class="container-xxl py-0 d-none d-lg-block">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="h-100">
          <h1 class="display-6 mb-5" style="color: #166138;">FITUR TERKINI</h1>

          <div class="row g-4 mb-4">
            <div class="col-sm-6">
              <div class="d-flex align-items-center">
                <img class="flex-shrink-0 me-3" src="{{ asset('home/img/icon/icon-07-primary.png')}}" alt="">
                <h5 class="mb-0" style="color: #166138;">Informasi Terbaru</h5>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center">
                <img class="flex-shrink-0 me-3" src="{{ asset('home/img/icon/icon-09-primary.png')}}" alt="">
                <h5 class="mb-0" style="color: #166138;">Pelayan Berkelanjutan</h5>
              </div>
            </div>
          </div>

          <p class="mb-4"></p>
          Fitur desa ini merupakan bagian dari upaya untuk memberikan informasi terkini dan relevan kepada masyarakat,
          serta mendukung perkembangan desa melalui teknologi dan inovasi.
        </div>
      </div>

      <div class="col-lg-6 px-3">
        <div class="row g-3">
          <div class="col-6 text-center">
            <div class="bg-white rounded p-3 shadow-sm w-500">
              <img src="{{ asset('home/img/home.png')}}" alt="Profil Desa Icon" class="mb-2" style="width: 75px;">
              <div class="fw-bold text-dark">PROFIL DESA</div>
            </div>
          </div>

          <div class="col-6 text-center">
            <div class="bg-white rounded p-3 shadow-sm w-500">
              <img src="{{ asset('home/img/map.png')}}" alt="Infografis Icon" class="mb-2" style="width: 75px;">
              <div class="fw-bold text-dark">INFOGRAFIS</div>
            </div>
          </div>

          <div class="col-6 text-center">
            <div class="bg-white rounded p-3 shadow-sm w-500">
              <img src="{{ asset('home/img/news.png')}}" alt="Berita Icon" class="mb-2" style="width: 75px;">
              <div class="fw-bold text-dark">BERITA</div>
            </div>
          </div>

          <div class="col-6 text-center">
            <div class="bg-white rounded p-3 shadow-sm w-500">
              <img src="{{ asset('home/img/information.png')}}" alt="PPID Icon" class="mb-2" style="width: 75px;">
              <div class="fw-bold text-dark">PPID</div>
            </div>
          </div>
        </div>
      </div>
    </div> {{-- row --}}
  </div>   {{-- container --}}
</div>     {{-- container-xxl --}}

{{-- ================= MOBILE-ONLY (< lg) ================= --}}
<section class="features-mobile d-lg-none py-4">
  <div class="container">
    <h2 class="mb-3 mobile-section-title">FITUR TERKINI</h2>

    <div class="row row-cols-4 g-3 text-center">
      {{-- 1 --}}
      <div class="col">
        <a href="{{ url('profile') }}" class="feature-link">
          <span class="feature-chip"><img src="{{ asset('home/img/home.png') }}" alt="Profil Desa"></span>
          <span class="feature-label">Profil<br>Desa</span>
        </a>
      </div>
      {{-- 2 --}}
      <div class="col">
        <a href="{{ url('info_grafis') }}" class="feature-link">
          <span class="feature-chip"><img src="{{ asset('home/img/map.png') }}" alt="Infografis"></span>
          <span class="feature-label">Infografis</span>
        </a>
      </div>
      {{-- 3 --}}
      <div class="col">
        <a href="{{ url('idm') }}" class="feature-link">
          <span class="feature-chip"><img src="{{ asset('home/img/star.png') }}" alt="IDM"></span>
          <span class="feature-label">IDM</span>
        </a>
      </div>
      {{-- 4 --}}
      <div class="col">
        <a href="{{ url('informasi') }}" class="feature-link">
          <span class="feature-chip"><img src="{{ asset('home/img/information.png') }}" alt="PPID"></span>
          <span class="feature-label">PPID</span>
        </a>
      </div>
      {{-- 5 --}}
      <div class="col">
        <a href="{{ url('berita') }}" class="feature-link">
          <span class="feature-chip"><img src="{{ asset('home/img/news.png') }}" alt="Berita"></span>
          <span class="feature-label">Berita</span>
        </a>
      </div>
      {{-- 6 --}}
      <div class="col">
        <a href="{{ url('belanja') }}" class="feature-link">
          <span class="feature-chip"><img src="{{ asset('home/img/cart.png') }}" alt="Belanja"></span>
          <span class="feature-label">Belanja</span>
        </a>
      </div>
      {{-- 7 --}}
      <div class="col">
        <a href="{{ url('bansos') }}" class="feature-link">
          <span class="feature-chip"><img src="{{ asset('home/img/hand.png') }}" alt="Bansos"></span>
          <span class="feature-label">Bansos</span>
        </a>
      </div>
      {{-- 8 --}}
      <div class="col">
        <a href="{{ url('galeri') }}" class="feature-link">
          <span class="feature-chip"><img src="{{ asset('home/img/gallery.png') }}" alt="Galeri"></span>
          <span class="feature-label">Galeri</span>
        </a>
      </div>
    </div>
  </div>
</section>

{{-- ===== CSS (pindahkan ke custom.css kalau mau rapi) ===== --}}
<style>
    /* Judul di mobile */
  .mobile-section-title{
    color: var(--brand-green);
    font-weight: 800;
    letter-spacing: .5px;
    font-size: 1.15rem;
  }

  /* Link kartu icon */
  .feature-link{
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
  }

  .feature-chip{
    width: 64px; height: 64px;
    border-radius: 18px;
    background: var(--chip-bg);
    display: grid; place-items: center;
    margin: 0 auto 6px;
    box-shadow: 0 2px 6px rgba(0,0,0,.08);
  }
  .feature-chip img{
    width: 28px; height: 28px;
    object-fit: contain; display: block;
  }

  .feature-label{
    color: var(--brand-green);
    font-weight: 700;
    font-size: .85rem;
    line-height: 1.1;
  }

  /* Tambahan kecil agar grid tidak mepet pinggir layar kecil */
  .features-mobile .container{ padding-left: .5rem; padding-right: .5rem; }
</style>
