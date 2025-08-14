<div class="container-fluid p-0">
  <div id="header-carousel"
       class="carousel slide carousel-hero"
       data-bs-ride="carousel" data-bs-interval="6000" data-bs-touch="true" aria-label="Berita Utama">

    <div class="carousel-inner">
      {{-- SLIDE 1 --}}
      <div class="carousel-item active">
        <img class="w-100 d-block carousel-img"
             src="{{ asset('home/img/carousel/banner-hut-ri 80.jpg') }}"
             alt="Banner HUT RI">

        {{-- Overlay gelap: rata, tidak bergeser --}}
        <div class="carousel-overlay d-none d-md-block"></div>

        {{-- DESKTOP/TABLET caption --}}
        <div class="carousel-caption h-100 d-none d-md-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 pt-4 pt-md-5 text-start">
                <h1 class="hero-title mb-3">Selamat Datang<br>Website Resmi Desa Siskaper</h1>
                <p class="hero-subtitle">Sumber informasi terbaru tentang pemerintahan di Desa Sirih Sekapur Perkembangan.</p>
              </div>
            </div>
          </div>
        </div>

        {{-- MOBILE caption (opsional) --}}
        <div class="carousel-caption d-md-none mobile-cap-wrap"></div>
      </div>
      {{-- … slide lain --}}
      <div class="carousel-item">
        <img class="w-100 d-block carousel-img"
             src="{{ asset('home/img/carousel/2.png') }}"
             alt="Banner HUT RI">

        {{-- Overlay gelap: rata, tidak bergeser --}}
        <div class="carousel-overlay d-none d-md-block"></div>

        {{-- DESKTOP/TABLET caption --}}
        <div class="carousel-caption h-100 d-none d-md-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 pt-4 pt-md-5 text-start">
                <h1 class="hero-title mb-3">Informasi & Layanan Publik</h1>
                <p class="hero-subtitle">Akses mudah berita, pengumuman, dan pelayanan masyarakat.</p>
              </div>
            </div>
          </div>
        </div>

        {{-- MOBILE caption (opsional) --}}
        <div class="carousel-caption d-md-none mobile-cap-wrap"></div>
      </div>
      <!-- 3 -->
      <div class="carousel-item">
        <img class="w-100 d-block carousel-img"
             src="{{ asset('home/img/carousel/3.png') }}"
             alt="Banner HUT RI">

        {{-- Overlay gelap: rata, tidak bergeser --}}
        <div class="carousel-overlay d-none d-md-block"></div>

        {{-- DESKTOP/TABLET caption --}}
        <div class="carousel-caption h-100 d-none d-md-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 pt-4 pt-md-5 text-start">
                <h1 class="hero-title mb-3">Potensi Alam & Ekonomi</h1>
                <p class="hero-subtitle">Mengembangkan pertanian, pariwisata, dan usaha kreatif warga.</p>
              </div>
            </div>
          </div>
        </div>

        {{-- MOBILE caption (opsional) --}}
        <div class="carousel-caption d-md-none mobile-cap-wrap"></div>
      </div>
      <!-- 4 -->
      <div class="carousel-item">
        <img class="w-100 d-block carousel-img"
             src="{{ asset('home/img/carousel/4.png') }}"
             alt="Banner HUT RI">

        {{-- Overlay gelap: rata, tidak bergeser --}}
        <div class="carousel-overlay d-none d-md-block"></div>

        {{-- DESKTOP/TABLET caption --}}
        <div class="carousel-caption h-100 d-none d-md-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 pt-4 pt-md-5 text-start">
                <h1 class="hero-title mb-3">Gotong Royong Membangun Desa</h1>
                <p class="hero-subtitle">Bersama wujudkan desa yang maju, mandiri, dan sejahtera.</p>
              </div>
            </div>
          </div>
        </div>

        {{-- MOBILE caption (opsional) --}}
        <div class="carousel-caption d-md-none mobile-cap-wrap"></div>
      </div>
      <!-- 5 -->
      <div class="carousel-item">
        <img class="w-100 d-block carousel-img"
             src="{{ asset('home/img/carousel/5.jpg') }}"
             alt="Banner HUT RI">

        {{-- Overlay gelap: rata, tidak bergeser --}}
        <div class="carousel-overlay d-none d-md-block"></div>

        {{-- DESKTOP/TABLET caption --}}
        <div class="carousel-caption h-100 d-none d-md-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 pt-4 pt-md-5 text-start">
                <h2 class="hero-title mb-3">Lestarikan Budaya & Tradisi</h2>
                <p class="hero-subtitle">Menjaga warisan leluhur demi generasi yang akan datang.</p>
              </div>
            </div>
          </div>
        </div>

        {{-- MOBILE caption (opsional) --}}
        <div class="carousel-caption d-md-none mobile-cap-wrap"></div>
      </div>
    </div>

    {{-- ARROWS --}}
    <button class="carousel-control-prev custom-carousel-arrow" type="button"
            data-bs-target="#header-carousel" data-bs-slide="prev" aria-label="Sebelumnya">
      <span class="carousel-arrow-bg">
        <svg width="28" height="28" fill="none" stroke="#fff" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round"><polyline points="18 6 10 14 18 22"/></svg>
      </span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next custom-carousel-arrow" type="button"
            data-bs-target="#header-carousel" data-bs-slide="next" aria-label="Berikutnya">
      <span class="carousel-arrow-bg">
        <svg width="28" height="28" fill="none" stroke="#fff" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round"><polyline points="10 6 18 14 10 22"/></svg>
      </span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <style>
    :root{
      --brand-green:#166138;
      --mob-rect: clamp(200px, 50vw, 260px); /* tinggi kartu mobile */
      --nav-gap-mobile: 80px;                /* jarak dari navbar */
    }

    /* ===== DESKTOP (≥ md) ===== */
    .carousel-hero .carousel-item{ position: relative; } /* penting utk overlay */
    .carousel-hero .carousel-item,
    .carousel-hero .carousel-img{
      height: 100vh; object-fit: cover; object-position: center;
    }
    /* OVERLAY RATA (bukan gradient), tidak bergeser */
    .carousel-overlay{
      position: absolute; inset: 0;
      background: rgba(0,0,0,.40) !important; /* timpa semua gaya lama */
      pointer-events: none;
      transform: none !important;             /* cegah “geser” karena transform */
    }

    .hero-title{
      color:#fff; text-shadow:0 3px 12px rgba(0,0,0,.35);
      font-weight:800; line-height:1.12;
      font-size: clamp(1.5rem, 3vw, 3.5rem);
    }
    .hero-subtitle{
      color:#fff; text-shadow:0 2px 8px rgba(0,0,0,.35);
      font-weight:600; 
      font-size: clamp(1rem, 1.6vw, 1.25rem);
      max-width: 900px;
    }

    /* ===== MOBILE (< md) ===== */
    @media (max-width: 767.98px){
      .carousel-hero{
        margin: calc(var(--nav-gap-mobile)) 12px 12px;
        border-radius: 18px; overflow: hidden;
        box-shadow: 0 10px 26px rgba(0,0,0,.18);
        height: var(--mob-rect) !important; position: relative;
      }
      .carousel-hero .carousel-inner,
      .carousel-hero .carousel-item{
        height: var(--mob-rect) !important; position: relative;
      }
      .carousel-hero .carousel-img{
        position: absolute; inset: 0;
        width: 100% !important; height: 100% !important;
        object-fit: cover; object-position: center;
      }
      /* matikan overlay di mobile */
      .carousel-overlay{ display: none !important; }

      .mobile-cap-wrap{ bottom:.5rem; left:0; right:0; padding:0 !important; }
      /* … caption mobile jika dipakai */
      .custom-carousel-arrow{ top:50%; transform:translateY(-50%); border:0; background:transparent; z-index:10; }
      .carousel-arrow-bg{ width:36px; height:36px; border-radius:50%; background:rgba(44,44,44,.55); display:flex; align-items:center; justify-content:center; }
      .carousel-control-prev{ left:.65rem; } .carousel-control-next{ right:.65rem; }
    }

    .custom-carousel-arrow:hover .carousel-arrow-bg{ background: var(--brand-green); }
  </style>
</div>
