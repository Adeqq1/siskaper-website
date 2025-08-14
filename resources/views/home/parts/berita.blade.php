{{-- ================= MOBILE-ONLY (< lg): slider horizontal ala SOTK ================= --}}
<section class="container-xxl py-5 d-lg-none news-section">
  <div class="container">

    <div class="text-center mb-3">
      <h2 class="news-title">Berita Desa</h2>
      <p class="news-subtitle">
        Menyajikan informasi terbaru tentang peristiwa dan artikel jurnalistik dari Desa Kersik
      </p>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-2 px-1">
      <button class="btn btn-link p-0 news-nav" type="button" aria-label="Sebelumnya" onclick="newsScroll(-1)">
        <i class="bi bi-chevron-left"></i>
        <svg class="bi-fallback" viewBox="0 0 16 16" width="18" height="18"><path d="M10.5 3.5 6 8l4.5 4.5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
      <button class="btn btn-link p-0 news-nav" type="button" aria-label="Berikutnya" onclick="newsScroll(1)">
        <i class="bi bi-chevron-right"></i>
        <svg class="bi-fallback" viewBox="0 0 16 16" width="18" height="18"><path d="M5.5 12.5 10 8 5.5 3.5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>

    <div id="newsTrack" class="news-track" tabindex="0">
      {{-- Card 1 --}}
      <article class="news-card">
        <img src="{{ asset('home/img/berita/berita1.jpeg')}}" alt="Musdes" class="news-img">
        <div class="news-body">
          <h3 class="news-card-title">MUSDES PERTANGGUNGJAWABAN BUMDESA</h3>
          <p class="news-card-desc">Kersik, 21 Mei 2025 – Pemerintah Desa Kersik menggelar Musyawarah Desa (Musdes) untuk membahas laporan pertanggungjawaban Badan Usaha Milik Desa...</p>
          <div class="news-meta">
            <span><i class="bi bi-person"></i> Administrator</span>
            <span><i class="bi bi-eye"></i> 720x</span>
            <span class="news-date-badge">22 Mei 2025</span>
          </div>
        </div>
      </article>

      {{-- Card 2 --}}
      <article class="news-card">
        <img src="{{ asset('home/img/berita/berita1.jpeg')}}" alt="Makkela Kela" class="news-img">
        <div class="news-body">
          <h3 class="news-card-title">Makkela Kela, Pererat hubungan antar warga</h3>
          <p class="news-card-desc">“Makkela Kela” adalah tradisi makan bersama masyarakat Desa Kersik sebagai perayaan kebersamaan...</p>
          <div class="news-meta">
            <span><i class="bi bi-person"></i> Administrator</span>
            <span><i class="bi bi-eye"></i> 2.010x</span>
            <span class="news-date-badge">05 Sep 2024</span>
          </div>
        </div>
      </article>

      {{-- Card 3 --}}
      <article class="news-card">
        <img src="{{ asset('home/img/berita/berita1.jpeg')}}" alt="Linmas" class="news-img">
        <div class="news-body">
          <h3 class="news-card-title">Pelatihan untuk Anggota Linmas</h3>
          <p class="news-card-desc">Pemerintah Desa Kersik menyelenggarakan pelatihan intensif bagi anggota Perlindungan Masyarakat (Linmas)...</p>
          <div class="news-meta">
            <span><i class="bi bi-person"></i> Administrator</span>
            <span><i class="bi bi-eye"></i> 1.242x</span>
            <span class="news-date-badge">05 Sep 2024</span>
          </div>
        </div>
      </article>
    </div>
    <div class="text-center mt-3">
      <a href="#" class="btn btn-outline-success rounded-pill px-4 fw-bold umkm-more">Lihat Semua Berita</a>
    </div>
  </div>
</section>

{{-- ================= DESKTOP/TABLET (>= lg): pakai grid 3 kolom punyamu ================= --}}
<section class="container-xxl py-5 d-none d-lg-block">
  <div class="container">
    <!-- Judul -->
    <h1 class="fw-bold mb-1" style="color: #166138;">Berita Desa</h1>
    <div class="mb-4" style="font-size:1.2rem; color:black;">
      Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Kersik
    </div>

    <!-- Grid Berita -->
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-6 col-lg-4">
        <article class="news-card h-100">
          <img src="{{ asset('home/img/berita/berita1.jpeg')}}" alt="Musdes" class="news-img">
          <div class="news-body">
            <h3 class="news-card-title">MUSDES PERTANGGUNGJAWABAN BUMDESA</h3>
            <p class="news-card-desc">Kersik, 21 Mei 2025 – Pemerintah Desa Kersik menggelar Musyawarah Desa (Musdes) untuk membahas laporan pertanggungjawaban Badan Usaha Milik Desa...</p>
            <div class="d-flex align-items-center justify-content-between">
              <div class="news-meta">
                <span><i class="bi bi-person"></i> Administrator</span>
                <span class="ms-3"><i class="bi bi-eye"></i> 720x</span>
              </div>
              <div class="news-date-badge">22 Mei 2025</div>
            </div>
          </div>
        </article>
      </div>
      <!-- Card 2 -->
      <div class="col-md-6 col-lg-4">
        <article class="news-card h-100">
          <img src="{{ asset('home/img/berita/berita1.jpeg')}}" alt="Makkela Kela" class="news-img">
          <div class="news-body">
            <h3 class="news-card-title">Makkela Kela, Pererat hubungan antar warga</h3>
            <p class="news-card-desc">“Makkela Kela” adalah sebuah tradisi makan bersama yang dilakukan oleh masyarakat Desa Kersik...</p>
            <div class="d-flex align-items-center justify-content-between">
              <div class="news-meta">
                <span><i class="bi bi-person"></i> Administrator</span>
                <span class="ms-3"><i class="bi bi-eye"></i> 2.010x</span>
              </div>
              <div class="news-date-badge">05 Sep 2024</div>
            </div>
          </div>
        </article>
      </div>
      <!-- Card 3 -->
      <div class="col-md-6 col-lg-4">
        <article class="news-card h-100">
          <img src="{{ asset('home/img/berita/berita1.jpeg')}}" alt="Linmas" class="news-img">
          <div class="news-body">
            <h3 class="news-card-title">Pemerintah Desa Kersik Gelar Pelatihan untuk Anggota Linmas</h3>
            <p class="news-card-desc">Pemerintah Desa Kersik menyelenggarakan pelatihan intensif bagi anggota Perlindungan Masyarakat (Linmas)...</p>
            <div class="d-flex align-items-center justify-content-between">
              <div class="news-meta">
                <span><i class="bi bi-person"></i> Administrator</span>
                <span class="ms-3"><i class="bi bi-eye"></i> 1.242x</span>
              </div>
              <div class="news-date-badge">05 Sep 2024</div>
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
  :root{ --brand-green:#166138; --chip-bg:#F8B2B0; }

  /* Judul mobile */
  .news-title{
    color: var(--brand-green);
    font-weight: 800;
    letter-spacing: .4px;
    font-size: clamp(1.1rem, 3.5vw, 1.4rem);
  }
  .news-subtitle{ color:#555; font-size:.95rem; }

  /* Kartu berita (dipakai di mobile & desktop) */
  .news-card{
    background:#fff; border-radius:14px; overflow:hidden;
    box-shadow:0 6px 18px rgba(0,0,0,.10);
    display:flex; flex-direction:column;
  }
  .news-img{
    width:100%; aspect-ratio: 16/9; object-fit:cover; display:block; background:#eee;
  }
  .news-body{ padding:12px 14px 14px; }

  .news-card-title{
    font-weight:800; line-height:1.2; margin-bottom:.25rem;
    font-size: clamp(1rem, 2.4vw, 1.1rem);
    color:#222;
  }
  .news-card-desc{
    color:#555; font-size:.95rem; margin-bottom:.6rem;
    display:-webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow:hidden; /* clamp 3 baris */
  }
  .news-meta{ display:flex; gap:.75rem; align-items:center; color:#666; font-size:.9rem; }
  .news-meta i{ margin-right:.25rem; }

  .news-date-badge{
    background:#fff; color:#166138; border:2px solid #2dc472;
    border-radius:10px; padding:.25rem .5rem; font-weight:700; font-size:.85rem;
    white-space:nowrap;
  }

  /* Slider mobile */
  .news-track{
    display:grid; grid-auto-flow:column; grid-auto-columns: 86%;
    gap:12px; overflow-x:auto; padding:2px;
    scroll-snap-type:x mandatory; -webkit-overflow-scrolling:touch;
  }
  .news-track .news-card{ scroll-snap-align:start; }
  @media (min-width:400px){ .news-track{ grid-auto-columns:78%; } }
  @media (min-width:576px){ .news-track{ grid-auto-columns:66%; } }

  .news-nav{ color:#222; opacity:.85; }
  .news-nav:hover{ opacity:1; }
  .bi-fallback{ display:none; } /* tampilkan jika tidak pakai bootstrap-icons */

  /* Desktop hover */
  @media (min-width: 992px){
    .news-card:hover{ transform: translateY(-2px); transition: transform .15s ease; }
  }
</style>

<script>
  function newsScroll(dir){
    const track = document.getElementById('newsTrack');
    if(!track) return;
    const card = track.querySelector('.news-card');
    const gap = 12;
    const step = card ? card.offsetWidth + gap : track.clientWidth * 0.8;
    track.scrollBy({ left: dir * step, behavior: 'smooth' });
  }
</script>
