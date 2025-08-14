<section class="container-xxl py-5 map-section">
  <div class="container px-3 px-md-0">
    <!-- Judul & Deskripsi -->
    <div class="mb-3">
      <h1 class="fw-bold map-title">PETA DESA</h1>
      <div class="map-desc">
        Menampilkan Peta Desa Dengan <i>Interest Point</i> Desa Sirih Sekapur Perkembangan
      </div>
    </div>

    <!-- Map -->
    <div class="map-container">
      {{-- Opsi A: Embed API (stabil, dukung maptype=satellite) --}}
      {{-- <iframe src="https://www.google.com/maps/embed/v1/view?key={{ env('GOOGLE_MAPS_API_KEY') }}&center=-1.238648,101.744055&zoom=15&maptype=satellite"
              loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

      {{-- Opsi B: Embed biasa (darurat). Bisa coba t=k (kadang diabaikan oleh Google). --}}
      <iframe
        src="https://maps.google.com/maps?q=loc:-1.238648,101.744055&z=16&t=k&hl=id&output=embed"
        loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <style>
    :root{ --brand-green:#166138; }

    /* Bersihkan rasio palsu global yang mungkin masih terpasang di theme lama */
    .container-16x9{ padding-top:0 !important; aspect-ratio:auto !important; }

    .map-section{ position:relative; isolation:isolate; }
    .map-title{
      color: var(--brand-green);
      letter-spacing:.5px;
      font-size: clamp(1.4rem, 3.2vw, 2.2rem);
      line-height:1.2;
      margin-bottom:.25rem;
    }
    .map-desc{ font-size: clamp(1rem, 1.5vw, 1.15rem); color:#333; }

    .map-container{
      width:100%;
      height: clamp(320px, 58vh, 720px);
      border-radius:12px; overflow:hidden;
      border:3px solid #fff;
      box-shadow:0 3px 24px rgba(60,60,60,.13);
    }
    @media (min-width: 992px){
      .map-container{ height: clamp(420px, 64vh, 820px); }
    }
    .map-container iframe{
      display:block; width:100%; height:100%; border:0;
    }

    /* Sedikit padding kiri/kanan di HP */
    @media (max-width: 575.98px){
      .map-section .container{ padding-left:.75rem; padding-right:.75rem; }
    }
  </style>
</section>
