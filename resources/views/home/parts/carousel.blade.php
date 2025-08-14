<div class="container-fluid p-0 mb-0 carousel-full">
  <div id="header-carousel" class="carousel slide carousel-hero" data-bs-ride="carousel" data-bs-interval="6000" aria-label="Berita Utama">
    <div class="carousel-inner">

      {{-- Slide 1 --}}
      <div class="carousel-item active">
        {{-- 1 gambar untuk semua device (boleh diganti versi mobile kalau ada) --}}
        <img class="w-100 d-block carousel-img" src="{{ asset('home/img/banner-hut-ri 80.jpg') }}" alt="Banner HUT RI">

        {{-- Overlay gelap supaya desktop caption kebaca --}}
        <div class="carousel-overlay"></div>

        {{-- DESKTOP/TABLET caption (md+) --}}
        <div class="carousel-caption h-100 d-none d-md-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 pt-4 pt-md-5 text-start">
                <h1 class="hero-title mb-3 animated slideInDown">
                  Selamat Datang di Website Resmi<br>Sirih Sekapur Perkembangan
                </h1>
                <p class="hero-subtitle mb-0 animated slideInDown">
                  Sumber Informasi Resmi Desa Sirih Sekapur Perkembangan
                </p>
              </div>
            </div>
          </div>
        </div>

        {{-- MOBILE caption (<md) : card rounded ala contoh kamu --}}
        <div class="carousel-caption d-flex d-md-none align-items-end p-2">
          <div class="mobile-card-caption w-100">
            <span class="mobile-badge">DIRGAHAYU REPUBLIK INDONESIA</span>
            <h2 class="mobile-hero-title mt-2 mb-1">
              Selamat Datang<br>
              Website Resmi Desa Kersik
            </h2>
            <p class="mobile-hero-subtitle mb-0">
              Sumber informasi terbaru tentang pemerintahan di Desa Kersik.
            </p>
          </div>
        </div>
      </div>

      {{-- Slide 2 ... (pakai pola yang sama: caption desktop + caption mobile) --}}
      {{-- ... --}}

    </div>

    {{-- controls retain --}}
    <button class="carousel-control-prev custom-carousel-arrow" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" aria-label="Sebelumnya">
      <span class="carousel-arrow-bg">
        <svg width="32" height="32" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="20 8 12 16 20 24"></polyline>
        </svg>
      </span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next custom-carousel-arrow" type="button" data-bs-target="#header-carousel" data-bs-slide="next" aria-label="Berikutnya">
      <span class="carousel-arrow-bg">
        <svg width="32" height="32" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="12 8 20 16 12 24"></polyline>
        </svg>
      </span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <style>

    /* Full height (kalau mau penuh layar) */
    .carousel-full .carousel-item,
    .carousel-full .carousel-img{
      height: 100svh; /* atau 100dvh */
      height: 100vh;
      object-fit: cover; object-position: center;
    }

    /* Overlay desktop */
    .carousel-overlay{
      position: absolute; inset: 0;
      background: linear-gradient(to right, rgba(0,0,0,.55) 0%, rgba(0,0,0,.35) 40%, rgba(0,0,0,.15) 100%);
      pointer-events: none;
    }

    /* Teks desktop */
    .hero-title{
      color:#fff; text-shadow:0 2px 10px rgba(0,0,0,.35);
      font-weight:800; line-height:1.2; font-size:2.4rem;
    }
    .hero-subtitle{
      color:#fff; text-shadow:0 2px 6px rgba(0,0,0,.35);
      font-weight:500; font-size:1.1rem; max-width:820px;
    }

    /* --- MOBILE CARD CAPTION --- */
    .mobile-card-caption{
      background: rgba(255,255,255,.92);
      border-radius: 16px;
      padding: 12px 14px;
      margin: 0 8px 10px; /* kiri-kanan & jarak dari bawah */
      box-shadow: 0 8px 24px rgba(0,0,0,.15);
      color:#222;
    }
    .mobile-badge{
      display:inline-block;
      background:#b71c1c;
      color:#fff; font-weight:700;
      font-size:.72rem; letter-spacing:.2px;
      padding:.35rem .6rem;
      border-radius:.5rem;
    }
    .mobile-hero-title{
      font-weight:800; line-height:1.15;
      font-size:1.25rem; color:#111; /* atau var(--brand-green) kalau mau hijau */
    }
    .mobile-hero-subtitle{
      font-size:.9rem; color:#444;
    }

    /* Panah (biar pas di mobile) */
    .custom-carousel-arrow{ top:50%; width:46px; height:46px; transform:translateY(-50%); border:none; background:transparent; z-index:10; }
    .carousel-arrow-bg{ width:46px; height:46px; background:rgba(44,44,44,.6); border-radius:50%; display:flex; align-items:center; justify-content:center; transition:background .2s; }
    .custom-carousel-arrow:hover .carousel-arrow-bg{ background:var(--brand-green); }
    .carousel-control-prev{ left: 1rem; }
    .carousel-control-next{ right: 1rem; }

    /* Scale up di breakpoint lebih besar */
    @media (min-width: 576px){
      .hero-title{ font-size:1.9rem; } /* dipakai kalau kamu matikan full-height */
    }
    @media (min-width: 992px){
      .hero-title{ font-size:2.6rem; }
    }
  </style>
</div>
