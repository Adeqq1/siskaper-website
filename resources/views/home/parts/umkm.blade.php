@php
    use Illuminate\Support\Facades\Storage;
    $items = collect($produk ?? []);   // aman walau null
    $limit = 3;                        // tampil maksimal di beranda
@endphp

{{-- ================= MOBILE-ONLY (< lg): slider ================= --}}
<section class="container-xxl py-5 d-lg-none umkm-section">
  <div class="container">
    <div class="text-center mb-3">
      <h2 class="umkm-title">BELI DARI DESA</h2>
      <p class="umkm-subtitle">Promosi produk UMKM desa untuk mendongkrak perekonomian masyarakat.</p>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-2 px-1">
      <button class="btn btn-link p-0 umkm-nav" type="button" aria-label="Sebelumnya" onclick="umkmScroll(-1)">
        <i class="bi bi-chevron-left"></i>
      </button>
      <button class="btn btn-link p-0 umkm-nav" type="button" aria-label="Berikutnya" onclick="umkmScroll(1)">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>

    <div id="umkmTrack" class="umkm-track" tabindex="0">
      @forelse($items->take($limit) as $p)
        @php
          $img = ($p->gambar_path && Storage::disk('public')->exists($p->gambar_path))
               ? Storage::disk('public')->url($p->gambar_path)
               : asset('home/img/umkm/bayam.jpg'); // placeholder
          $href = \Illuminate\Support\Facades\Route::has('produk-publik.show')
                ? route('produk-publik.show', $p->id)
                : '#';
        @endphp

        <article class="product-card">
          <a href="{{ route('produk-publik.show', $p->slug) }}" class="text-decoration-none text-reset">
            <img src="{{ $img }}" alt="{{ $p->nama }}" class="product-img">
            <div class="product-body">
              <h3 class="product-title">{{ $p->nama }}</h3>

              <div class="product-footer">
                <div class="product-rating" aria-label="rating">
                  <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                </div>
                <span class="price-badge">
                  Rp{{ number_format((int)($p->harga ?? 0), 0, ',', '.') }}
                </span>
              </div>
            </div>
          </a>
        </article>
      @empty
        <article class="product-card"><div class="product-body"><em>Belum ada produk.</em></div></article>
      @endforelse
    </div>

    <div class="text-center mt-3">
      @php $allProduk = \Illuminate\Support\Facades\Route::has('produk-publik.index') ? route('produk-publik.index') : '#'; @endphp
      <a href="{{ $allProduk }}" class="btn btn-outline-success rounded-pill px-4 fw-bold umkm-more">Lihat Semua Produk</a>
    </div>
  </div>
</section>

{{-- ================= DESKTOP/TABLET (>= lg): grid 3 kolom ================= --}}
<section class="container-xxl py-5 d-none d-lg-block">
  <div class="container">
    <h1 class="fw-bold mb-1" style="color:#166138;">Beli Dari Desa</h1>
    <div class="mb-4" style="font-size:1.30rem; color:#222; font-weight:500;">
      Layanan yang disediakan promosi produk UMKM desa sehingga mampu meningkatkan perekonomian masyarakat desa
    </div>

    <div class="row g-4">
      @forelse($items->take($limit) as $p)
        @php
          $img = ($p->gambar_path && Storage::disk('public')->exists($p->gambar_path))
               ? Storage::disk('public')->url($p->gambar_path)
               : asset('home/img/umkm/bayam.jpg');
          $href = \Illuminate\Support\Facades\Route::has('produk-desa.show')
                ? route('produk-desa.show', $p->id)
                : '#';
        @endphp
        <div class="col-md-6 col-lg-4">
          <article class="product-card h-100">
            <a href="{{ route('produk-publik.show', $p->slug) }}" class="text-decoration-none text-reset">
              <img src="{{ $img }}" alt="{{ $p->nama }}" class="product-img">
              <div class="product-body">
                <h3 class="product-title">{{ $p->nama }}</h3>

                <div class="product-footer">
                  <div class="product-rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                  </div>
                  <span class="price-badge">
                    Rp{{ number_format((int)($p->harga ?? 0), 0, ',', '.') }}
                  </span>
                </div>
              </div>
            </a>
          </article>
        </div>
      @empty
        <div class="col-12"><em>Belum ada produk.</em></div>
      @endforelse

      <div class="text-center mt-3">
        <a href="{{ $allProduk ?? '#' }}" class="btn btn-outline-success rounded-pill px-4 fw-bold berita-more">Lihat Semua</a>
      </div>
    </div>
  </div>
</section>

<style>
  :root{ --brand-green:#166138; --star:#FFB400; }

  /* Kartu universal */
  .product-card{
    background:#fff; border-radius:14px; overflow:hidden;
    box-shadow:0 6px 18px rgba(0,0,0,.10);
    display:flex; flex-direction:column;
  }
  .product-img{
    width:100%; aspect-ratio:4/3; object-fit:cover; display:block; background:#eee;
  }
  .product-body{
    display:flex; flex-direction:column;
    padding:12px 14px 14px; min-height:160px;
  }
  .product-title{
    color:#222; font-weight:800; line-height:1.2; margin-bottom:.4rem;
    font-size:clamp(1rem, 2.4vw, 1.1rem);
  }

  /* Footer ditempel ke bawah kartu */
  .product-footer{
    margin-top:auto; display:flex; align-items:center; justify-content:space-between;
  }
  .product-rating .star{ color:var(--star); margin-right:2px; }
  .price-badge{
    background:#fff; color:var(--brand-green);
    border:2px solid #cfe7db; border-radius:10px;
    padding:.25rem .5rem; font-weight:700; font-size:.9rem; white-space:nowrap;
  }

  /* Slider mobile */
  .umkm-track{
    display:grid; grid-auto-flow:column; grid-auto-columns:82%;
    gap:12px; overflow-x:auto; padding:2px;
    scroll-snap-type:x mandatory; -webkit-overflow-scrolling:touch;
  }
  .umkm-track .product-card{ scroll-snap-align:start; }
  @media (min-width:400px){ .umkm-track{ grid-auto-columns:74%; } }
  @media (min-width:576px){ .umkm-track{ grid-auto-columns:62%; } }

  .umkm-title{ color:var(--brand-green); font-weight:800; letter-spacing:.4px; font-size:clamp(1.1rem,3.5vw,1.5rem); }
  .umkm-subtitle{ color:#555; font-size:.95rem; }
  .umkm-nav{ color:#222; opacity:.85; }
  .umkm-nav:hover{ opacity:1; }

  /* Desktop polish */
  @media (min-width:992px){
    .product-card:hover{ transform:translateY(-2px); transition:transform .15s ease; }
  }
</style>

<script>
  function umkmScroll(dir){
    const track = document.getElementById('umkmTrack');
    if(!track) return;
    const card = track.querySelector('.product-card');
    const gap = 12;
    const step = card ? card.offsetWidth + gap : track.clientWidth * 0.8;
    track.scrollBy({ left: dir * step, behavior: 'smooth' });
  }
</script>
