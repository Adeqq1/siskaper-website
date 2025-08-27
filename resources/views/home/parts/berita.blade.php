@php
  // tetap: koleksi aman & limit
  $items = collect($berita ?? []);
  $limit = 6;
  // href "lihat semua"
  $allHref = \Illuminate\Support\Facades\Route::has('berita.publik') ? route('berita.publik') : '#';
@endphp

{{-- ================= MOBILE-ONLY (< lg): slider ala UMKM ================= --}}
<section class="container-xxl py-5 d-lg-none news-section">
  <div class="container">

    <div class="text-center mb-3">
      <h2 class="news-title">Berita Desa</h2>
      <p class="news-subtitle">Menyajikan informasi terbaru tentang peristiwa dan artikel jurnalistik dari Desa Kersik</p>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-2 px-1">
      <button class="btn btn-link p-0 news-nav" type="button" aria-label="Sebelumnya" onclick="newsScroll(-1)">
        <i class="bi bi-chevron-left"></i>
      </button>
      <button class="btn btn-link p-0 news-nav" type="button" aria-label="Berikutnya" onclick="newsScroll(1)">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>

    <div id="newsTrack" class="news-track" tabindex="0">
      @forelse($items->take($limit) as $row)
        @php
          $hasStored = $row->gambar_path && \Illuminate\Support\Facades\Storage::disk('public')->exists($row->gambar_path);
          $img  = $hasStored ? \Illuminate\Support\Facades\Storage::disk('public')->url($row->gambar_path)
                             : asset('home/img/berita/berita1.jpeg');
          $carbon = $row->published_at ? \Illuminate\Support\Carbon::parse($row->published_at) : $row->created_at;
          $date   = $carbon?->format('d M Y');
          $href = \Illuminate\Support\Facades\Route::has('berita.show')
                ? route('berita.show', $row->slug)
                : (\Illuminate\Support\Facades\Route::has('berita.publik') ? route('berita.publik') : '#');
        @endphp

        <article class="news-card">
          <a href="{{ $href }}" class="text-decoration-none text-reset">
            <img src="{{ $img }}" alt="{{ $row->judul }}" class="news-img">
            <div class="news-body">
              <h3 class="news-card-title">{{ $row->judul }}</h3>
              <p class="news-card-desc">{{ \Illuminate\Support\Str::limit(strip_tags($row->excerpt ?: $row->konten), 120) }}</p>
              <div class="news-meta">
                @if(isset($row->views))<span><i class="bi bi-eye"></i> {{ number_format($row->views) }}</span>@endif
                <span class="news-date-badge">{{ $date }}</span>
              </div>
            </div>
          </a>
        </article>
      @empty
        <article class="news-card"><div class="news-body"><em>Belum ada berita dipublikasikan.</em></div></article>
      @endforelse
    </div>

    <div class="text-center mt-3">
      <a href="{{ $allHref }}" class="btn btn-outline-success rounded-pill px-4 fw-bold berita-more">Lihat Semua</a>
    </div>
  </div>
</section>

{{-- ================= DESKTOP/TABLET (>= lg): grid 3 kolom ala UMKM ================= --}}
<section class="container-xxl py-5 d-none d-lg-block">
  <div class="container">
    <h1 class="fw-bold mb-1" style="color:#166138;">Berita Desa</h1>
    <div class="mb-4" style="font-size:1.2rem; color:#000;">
      Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Kersik
    </div>

    <div class="row g-4">
      @forelse($items->take($limit) as $row)
        @php
          $hasStored = $row->gambar_path && \Illuminate\Support\Facades\Storage::disk('public')->exists($row->gambar_path);
          $img  = $hasStored ? \Illuminate\Support\Facades\Storage::disk('public')->url($row->gambar_path)
                             : asset('home/img/berita/berita1.jpeg');
          $carbon = $row->published_at ? \Illuminate\Support\Carbon::parse($row->published_at) : $row->created_at;
          $date   = $carbon?->format('d M Y');
          $href = \Illuminate\Support\Facades\Route::has('berita.show')
                ? route('berita.show', $row->slug)
                : (\Illuminate\Support\Facades\Route::has('berita.publik') ? route('berita.publik') : '#');
        @endphp
        <div class="col-md-6 col-lg-4">
          <article class="news-card h-100">
            <a href="{{ $href }}" class="text-decoration-none text-reset">
              <img src="{{ $img }}" alt="{{ $row->judul }}" class="news-img">
              <div class="news-body">
                <h3 class="news-card-title">{{ $row->judul }}</h3>
                <p class="news-card-desc">{{ \Illuminate\Support\Str::limit(strip_tags($row->excerpt ?: $row->konten), 140) }}</p>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="news-meta">
                    @if(isset($row->views))<span class="ms-3"><i class="bi bi-eye"></i> {{ number_format($row->views) }}</span>@endif
                  </div>
                  <div class="news-date-badge">{{ $date }}</div>
                </div>
              </div>
            </a>
          </article>
        </div>
      @empty
        <div class="col-12"><em>Belum ada berita dipublikasikan.</em></div>
      @endforelse
    </div>

    <div class="text-center mt-3">
      <a href="{{ $allHref }}" class="btn btn-outline-success rounded-pill px-4 fw-bold berita-more">Lihat Semua</a>
    </div>
  </div>
</section>

<style>
  :root{ --brand-green:#166138; }

  /* Judul */
  .news-title{ color:var(--brand-green); font-weight:800; letter-spacing:.4px;
               font-size:clamp(1.1rem,3.5vw,1.5rem); }
  .news-subtitle{ color:#555; font-size:.95rem; }

  /* Kartu (dipakai mobile & desktop) */
  .news-card{ background:#fff; border-radius:14px; overflow:hidden;
              box-shadow:0 6px 18px rgba(0,0,0,.10); display:flex; flex-direction:column; }
  .news-img{ width:100%; aspect-ratio:16/9; object-fit:cover; background:#eee; display:block; }
  .news-body{ padding:12px 14px 14px; }
  .news-card-title{ font-weight:800; line-height:1.2; margin-bottom:.25rem;
                    font-size:clamp(1rem,2.4vw,1.1rem); color:#222; }
  .news-card-desc{ color:#555; font-size:.95rem; margin-bottom:.6rem;
                   display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical; overflow:hidden; }
  .news-meta{ display:flex; gap:.75rem; align-items:center; color:#666; font-size:.9rem; }
  .news-date-badge{ background:#fff; color:#166138; border:2px solid #2dc472;
                    border-radius:10px; padding:.25rem .5rem; font-weight:700; font-size:.85rem; white-space:nowrap; }

  /* MOBILE slider seperti UMKM */
  .news-track{ display:grid; grid-auto-flow:column; grid-auto-columns:86%;
               gap:12px; overflow-x:auto; padding:2px; scroll-snap-type:x mandatory; -webkit-overflow-scrolling:touch; }
  .news-track .news-card{ scroll-snap-align:start; }
  @media (min-width:400px){ .news-track{ grid-auto-columns:78%; } }
  @media (min-width:576px){ .news-track{ grid-auto-columns:66%; } }

  .news-nav{ color:#222; opacity:.85; } .news-nav:hover{ opacity:1; }

  /* DESKTOP grid 3 kolom seperti UMKM */
  @media (min-width:992px){
    .news-card:hover{ transform:translateY(-2px); transition:transform .15s ease; }
  }
</style>

<script>
  // fungsi tetap (dipakai di mobile)
  function newsScroll(dir){
    const track = document.getElementById('newsTrack');
    if(!track) return;
    const card = track.querySelector('.news-card');
    const gap = 12;
    const step = card ? card.offsetWidth + gap : track.clientWidth * 0.8;
    track.scrollBy({ left: dir * step, behavior: 'smooth' });
  }
</script>
