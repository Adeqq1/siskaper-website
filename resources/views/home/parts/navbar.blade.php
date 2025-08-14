<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom px-3 px-lg-5" style="padding: 1rem;">
  <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
    <img class="img-fluid me-3 brand-logo" src="{{ asset('home/img/lambang-Kabupaten-Bungo.png')}}"
      alt="Lambang Kabupaten Bungo">
    <div class="brand-text lh-sm">
      <span class="fw-bold brand-title">Desa Siskaper</span><br>
      <span class="brand-subtitle">Kabupaten Bungo</span>
    </div>
  </a>

  {{-- Tombol menu (mobile) → offcanvas --}}
  <button class="navbar-toggler d-inline d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mNav"
    aria-controls="mNav" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  {{-- Menu desktop/tablet (collapse biasa) --}}
  <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex" id="navbarCollapse">
    <div class="navbar-nav pe-lg-2 py-3 py-lg-0 align-items-lg-center">
      <a href="{{ url('userpage') }}" class="nav-item nav-link fw-semibold">Home</a>
      <a href="{{ url('profile') }}" class="nav-item nav-link fw-semibold">Profil Desa</a>
      <a href="{{ asset('info_grafis') }}" class="nav-item nav-link fw-semibold">Info Grafis</a>
      <a href="{{ asset('berita') }}" class="nav-item nav-link fw-semibold">Berita</a>
      <a href="{{ asset('map') }}" class="nav-item nav-link fw-semibold">Map</a>
      <a href="{{ asset('umkm') }}" class="nav-item nav-link fw-semibold">UMKM</a>
      <a href="{{ asset('informasi') }}" class="nav-item nav-link fw-semibold">Informasi</a>
    </div>
  </div>
</nav>

{{-- Offcanvas menu untuk mobile --}}
<div class="offcanvas offcanvas-start" tabindex="-1" id="mNav" aria-labelledby="mNavLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="mNavLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <nav class="nav flex-column fs-6">
      <a href="{{ url('userpage') }}" class="nav-link py-2" data-bs-dismiss="offcanvas">Home</a>
      <a href="{{ url('profile') }}" class="nav-link py-2" data-bs-dismiss="offcanvas">Profil Desa</a>
      <a href="{{ asset('info_grafis') }}" class="nav-link py-2" data-bs-dismiss="offcanvas">Info Grafis</a>
      <a href="{{ asset('berita') }}" class="nav-link py-2" data-bs-dismiss="offcanvas">Berita</a>
      <a href="{{ asset('map') }}" class="nav-link py-2" data-bs-dismiss="offcanvas">Map</a>
      <a href="{{ asset('umkm') }}" class="nav-link py-2" data-bs-dismiss="offcanvas">UMKM</a>
      <a href="{{ asset('informasi') }}" class="nav-link py-2" data-bs-dismiss="offcanvas">Informasi</a>
    </nav>
  </div>
</div>

{{-- Style khusus navbar (mobile-first) --}}
<style>
  /* Warna/transparansi awal, berubah saat scroll */
  .navbar-custom {
    background: transparent !important;
    box-shadow: none;
    transition: background .5s ease, box-shadow .5s ease, padding .2s ease;
  }

  .navbar-solid {
    background: #166138 !important;
    box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
  }

  /* Branding & tipografi */
  .brand-logo {
    height: 58px;
  }

  .brand-title {
    font-size: 1.15rem;
    color: #fff;
  }

  .brand-subtitle {
    font-size: .95rem;
    color: #fff;
    font-weight: 400;
    letter-spacing: .5px;
  }

  /* Link effect */
  .navbar .nav-link {
    position: relative;
    color: #fff !important;
    transition: color .2s ease;
  }

  .navbar .nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 0%;
    height: 2px;
    background: #ff9800;
    transition: width .2s ease;
  }

  .navbar .nav-link:hover,
  .navbar .nav-link:focus {
    color: #fff !important;
  }

  .navbar .nav-link:hover::after,
  .navbar .nav-link:focus::after {
    width: 100%;
  }



  /* Offcanvas mobile menu */
  .offcanvas .offcanvas-title {
    color: var(--brand-green);
    font-weight: bold;
  }

  .offcanvas .nav-link {
    color: var(--brand-green) !important;
  }

  .offcanvas .nav-link:hover,
  .offcanvas .nav-link:focus {
    color: #0f4a2c !important;
    /* sedikit lebih gelap saat hover/focus */
  }

  .offcanvas .nav-link.active {
    color: var(--brand-green) !important;
    font-weight: 700;
  }

  /* Mobile tweaks */
  @media (max-width: 575.98px) {
    .brand-logo {
      height: 44px;
    }

    .brand-title {
      font-size: 1rem;
    }

    .brand-subtitle {
      font-size: .85rem;
      letter-spacing: .3px;
    }
  }

  /* Tablet+ spacing */
  @media (min-width: 992px) {
    .navbar-nav .nav-link {
      margin-right: 1.1rem;
    }

    .navbar-nav .nav-link:last-child {
      margin-right: 0;
    }
  }
</style>

{{-- JS kecil: ubah navbar jadi solid saat discroll --}}
<script>
  (function () {
    const nav = document.querySelector('.navbar-custom');
    const setSolid = () => {
      if (!nav) return;
      if (window.scrollY > 1) nav.classList.add('navbar-solid');
      else nav.classList.remove('navbar-solid');
    };
    setSolid();
    window.addEventListener('scroll', setSolid, { passive: true });
  })();
</script>