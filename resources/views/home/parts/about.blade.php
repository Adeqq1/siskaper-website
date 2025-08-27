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
            <a href="{{ route('profile') }}" class="card-link d-block">
              <div class="bg-white rounded p-3 shadow-sm w-500 h-100">
                <img src="{{ asset('home/img/home.png') }}" alt="Profil Desa Icon" class="mb-2" style="width:75px;">
                <div class="fw-bold text-dark m-0">PROFIL DESA</div>
              </div>
            </a>
          </div>

          <div class="col-6 text-center">
            <a href="{{ route('map') }}" class="card-link d-block">
              <div class="bg-white rounded p-3 shadow-sm w-500 h-100">
                <img src="{{ asset('home/img/map.png') }}" alt="Infografis Icon" class="mb-2" style="width:75px;">
                <div class="fw-bold text-dark m-0">MAP DESA</div>
              </div>
            </a>
          </div>

          <div class="col-6 text-center">
            <a href="{{ route('berita.publik') }}" class="card-link d-block">
              <div class="bg-white rounded p-3 shadow-sm w-500 h-100">
                <img src="{{ asset('home/img/news.png') }}" alt="Berita Icon" class="mb-2" style="width:75px;">
                <div class="fw-bold text-dark m-0">BERITA</div>
              </div>
            </a>
          </div>

          <div class="col-6 text-center">
            <a href="{{ route('informasi') }}" class="card-link d-block">
              <div class="bg-white rounded p-3 shadow-sm w-500 h-100">
                <img src="{{ asset('home/img/information.png') }}" alt="Surat Icon" class="mb-2" style="width:75px;">
                <div class="fw-bold text-dark m-0">PENGAJUAN SURAT</div>
              </div>
            </a>
          </div>

        </div>
      </div>
    </div> {{-- row --}}
  </div> {{-- container --}}
</div> {{-- container-xxl --}}

{{-- ================= MOBILE-ONLY (< lg)=================--}} <section class="features-mobile d-lg-none py-4">
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
        <a href="{{ url('map') }}" class="feature-link">
          <span class="feature-chip"><img src="{{ asset('home/img/map.png') }}" alt="Infografis"></span>
          <span class="feature-label">Map Desa</span>
        </a>
      </div>
      {{-- 3 --}}
        <div class="col">
        <a href="{{ url('berita') }}" class="feature-link">
          <span class="feature-chip"><img src="{{ asset('home/img/news.png') }}" alt="Berita"></span>
          <span class="feature-label">Berita</span>
        </a>
      </div>
      {{-- 4 --}}
      <div class="col">
        <a href="{{ url('informasi') }}" class="feature-link">
          <span class="feature-chip"><img src="{{ asset('home/img/information.png') }}" alt="Belanja"></span>
          <span class="feature-label">Pengajuan Surat</span>
        </a>
      </div>
    </div>
  </div>
  </section>

  {{-- ===== CSS (pindahkan ke custom.css kalau mau rapi) ===== --}}
  <style>
    /* bikin <a> tampil seperti card tanpa underline/warna biru */
  .card-link{ text-decoration:none; color:inherit; }
  .card-link:focus-visible{ outline: 2px solid #166138; outline-offset: 3px; }

  /* efek hover kecil (opsional) */
  .card-link .shadow-sm{ transition: transform .15s ease, box-shadow .15s ease; }
  .card-link:hover .shadow-sm{ transform: translateY(-2px); box-shadow: 0 .5rem 1rem rgba(0,0,0,.08)!important; }


    /* Judul di mobile */
    .mobile-section-title {
      color: var(--brand-green);
      font-weight: 800;
      letter-spacing: .5px;
      font-size: 1.15rem;
    }

    /* Link kartu icon */
    .feature-link {
      display: inline-flex;
      flex-direction: column;
      align-items: center;
      text-decoration: none;
    }

    .feature-chip {
      width: 64px;
      height: 64px;
      border-radius: 18px;
      background: #fff;
      color: #166138;
      border: 2px solid #2dc472;
      display: grid;
      place-items: center;
      margin: 0 auto 6px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, .08);
    }

    .feature-chip img {
      width: 28px;
      height: 28px;
      object-fit: contain;
      display: block;
    }

    .feature-label {
      color: var(--brand-green);
      font-weight: 700;
      font-size: .85rem;
      line-height: 1.1;
    }

    /* Tambahan kecil agar grid tidak mepet pinggir layar kecil */
    .features-mobile .container {
      padding-left: .5rem;
      padding-right: .5rem;
    }
  </style>