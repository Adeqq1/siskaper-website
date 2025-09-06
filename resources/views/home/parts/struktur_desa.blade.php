@php
    use Illuminate\Support\Facades\Storage;
    $rows = isset($data) ? $data : collect(); // fallback ke koleksi kosong
@endphp


<section class="container-xxl py-5 sotk-section">
  <div class="container">

    <div class="text-center mb-3">
      <div class="sotk-title">SOTK</div>
      <div class="sotk-subtitle">Struktur Organisasi dan Tata Kerja Desa Sirih Sekapur Perkembangan</div>
    </div>

    {{-- MOBILE: slider --}}
    <div class="d-lg-none position-relative">
      <div class="d-flex justify-content-between align-items-center mb-2 px-1">
        <button class="btn btn-link p-0 sotk-nav" type="button" onclick="sotkScroll(-1)"
          aria-label="Sebelumnya">‹</button>
        <button class="btn btn-link p-0 sotk-nav" type="button" onclick="sotkScroll(1)"
          aria-label="Berikutnya">›</button>
      </div>
      <div id="sotkTrack" class="sotk-track" tabindex="0">
        {{-- ulangi kartu sesuai data --}}
        @foreach($rows as $row)
        <article class="sotk-card">
          @php $disk = 'public'; @endphp
          @if ($row->foto_path && Storage::disk($disk)->exists($row->foto_path))
        <img src="{{ Storage::disk($disk)->url($row->foto_path) }}" alt="{{ $row->nama }}" class="sotk-img">
        @else
        <img src="{{ asset('home/img/strukturDesa/60111.jpg') }}" alt="{{ $row->nama }}" class="sotk-img">
        @endif

          <div class="sotk-caption">
          <div class="sotk-nama">{{ $row->nama }}</div>
          <div class="sotk-jabatan">{{ $row->jabatan }}</div>
          </div>
        </article>
    @endforeach

      </div>
      <div class="text-center mt-3">
        <a href="{{ route('sotks.index') }}" class="btn btn-outline-success rounded-pill px-4 fw-bold sotk-more">Lihat Semua</a>
      </div>
    </div>
   
    {{-- DESKTOP/TABLET: grid --}}
    <div class="d-none d-lg-block">
      <div class="row g-4">
        @foreach ($rows as $row)
        <div class="col-lg-3">
          <article class="sotk-card h-100">
          @php $disk = 'public'; @endphp
          @if ($row->foto_path && Storage::disk($disk)->exists($row->foto_path))
        <img src="{{ Storage::disk($disk)->url($row->foto_path) }}" alt="{{ $row->nama }}" class="sotk-img">
        @else
        <img src="{{ asset('home/img/strukturDesa/60111.jpg') }}" alt="{{ $row->nama }}" class="sotk-img">
        @endif

          <div class="sotk-caption">
            <div class="sotk-nama">{{ $row->nama }}</div>
            <div class="sotk-jabatan">{{ $row->jabatan }}</div>
          </div>
          </article>
        </div>
    @endforeach
      </div>

      <div class="text-center mt-4">
        <a href="{{ route('sotks.index') }}" class="btn btn-outline-success rounded-pill px-4 fw-bold sotk-more">Lihat
          Semua</a>
      </div>
    </div>

  </div>
  </div>

  <style>
    :root {
      --sotk-red: #166138;
      --sotk-red-dark: #D32F2F;
    }

    .sotk-section {
      position: relative;
      isolation: isolate;
    }

    .sotk-title {
      color: #166138;
      font-weight: 800;
      letter-spacing: .6px;
      font-size: clamp(1.05rem, 2.4vw, 1.35rem);
    }

    .sotk-subtitle {
      color: #4c4c4c;
      font-size: clamp(.95rem, 1.8vw, 1.15rem);
      margin-top: .15rem;
    }

    .sotk-card {
      background: var(--sotk-red);
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 6px 18px rgba(0, 0, 0, .12);
      display: flex;
      flex-direction: column;
    }

    .sotk-img {
      width: 100%;
      aspect-ratio: 3/4;
      object-fit: cover;
      display: block;
      background: #f2f2f2;
    }

    .sotk-caption {
      padding: .9rem .8rem 1rem;
      text-align: center;
      color: #fff;
    }

    .sotk-nama {
      font-weight: 800;
      letter-spacing: .6px;
      font-size: .95rem;
      line-height: 1.2;
    }

    .sotk-jabatan {
      margin-top: .25rem;
      font-size: .82rem;
      line-height: 1.25;
      color: #fff;
    }

    .sotk-track {
      display: grid;
      grid-auto-flow: column;
      grid-auto-columns: 78%;
      gap: 12px;
      overflow-x: auto;
      padding: 2px;
      scroll-snap-type: x mandatory;
      -webkit-overflow-scrolling: touch;
    }

    .sotk-track .sotk-card {
      scroll-snap-align: start;
    }

    @media (min-width: 400px) {
      .sotk-track {
        grid-auto-columns: 68%;
      }
    }

    @media (min-width: 576px) {
      .sotk-track {
        grid-auto-columns: 56%;
      }
    }

    .sotk-nav {
      color: #222;
      opacity: .85;
      font-size: 1.4rem;
      line-height: 1;
    }

    .sotk-nav:hover {
      opacity: 1;
    }

    .sotk-more {
      border-width: 2px;
    }

    @media (min-width: 992px) {
      .sotk-card:hover {
        transform: translateY(-2px);
        transition: transform .15s ease;
      }
    }
  </style>

  <script>
    function sotkScroll(dir) {
      const track = document.getElementById('sotkTrack');
      if (!track) return;
      const card = track.querySelector('.sotk-card');
      const gap = 12;
      const step = card ? card.offsetWidth + gap : track.clientWidth * 0.8;
      track.scrollBy({ left: dir * step, behavior: 'smooth' });
    }
  </script>
</section>