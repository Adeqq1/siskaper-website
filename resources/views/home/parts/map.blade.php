<section class="container-xxl py-5 container-16x9 map-section">
  <div class="container-fluid px-0">
    <!-- Judul & Deskripsi -->
    <div class="mb-3 px-3 px-md-0">
      <h1 class="fw-bold map-title">PETA DESA</h1>
      <div class="map-desc">
        Menampilkan Peta Desa Dengan <i>Interest Point</i> Desa Sirih Sekapur Perkembangan
      </div>
    </div>

    <!-- Map -->
    <div class="map-container">
      <!-- Google Maps embed (boleh diganti Leaflet/div#map) -->
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5641.1367051983825!2d101.74405505226925!3d-1.2386481291611138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2c0bdf0b75fa6b%3A0x22ffade240cf5ec5!2sSirih%20Sekapur%20Perkembangan!5e0!3m2!1sen!2sid!4v1754287509569!5m2!1sen!2sid"
        loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>

  {{-- ===== Styles (pindahkan ke custom.css jika mau rapi) ===== --}}
  <style>
    :root{ --brand-green:#166138; }

    /* Netralisir helper lama agar section tidak memaksa rasio */
    .container-16x9{ padding-top:0 !important; aspect-ratio:auto; }

    /* Tipografi responsif */
    .map-title{
      color: var(--brand-green);
      letter-spacing: .5px;
      /* 1.6rem di HP — 2.7rem di desktop */
      font-size: clamp(1.6rem, 3.2vw, 2.7rem);
      margin-bottom: .25rem;
      line-height: 1.15;
    }
    .map-desc{
      font-size: clamp(1rem, 1.5vw, 1.25rem);
      color: #333;
    }

    /* Kontainer peta responsif */
    .map-container{
      width: 100%;
      /* tinggi adaptif: min 320px, normal 58vh, max 720px */
      height: clamp(320px, 58vh, 720px);
      border-radius: 12px;
      overflow: hidden;
      border: 3px solid #fff;
      box-shadow: 0 3px 24px rgba(60,60,60,0.13);
    }
    /* Desktop sedikit lebih tinggi biar lega */
    @media (min-width: 992px){
      .map-container{ height: clamp(420px, 64vh, 820px); }
    }

    /* Pastikan iframe mengisi penuh tanpa celah baseline */
    .map-container iframe{
      display: block;
      width: 100%;
      height: 100%;
      border: 0;
    }

    /* Padding horizontal kecil di HP agar tidak mepet tepi layar */
    @media (max-width: 575.98px){
      .map-section .container-fluid{ padding-left:.75rem; padding-right:.75rem; }
    }
  </style>
</section>
