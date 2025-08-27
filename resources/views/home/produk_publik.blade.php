@php use Illuminate\Support\Facades\Storage; @endphp



@section('content')
<div class="container" style="max-width:1200px;padding:32px 16px 64px;">
  <h1 class="headline" style="color:#166138;font-weight:800;font-size:2.5rem;letter-spacing:-1px;">Beli Dari Desa</h1>
  <p class="subtitle" style="font-size:1.08rem;line-height:1.5;margin-bottom:32px;">
    Layanan promosi produk UMKM desa untuk mendongkrak perekonomian masyarakat.
  </p>

  <div class="product-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:32px 24px;margin-bottom:36px;">
    @forelse($produk as $p)
      @php
        $img = ($p->gambar_path && Storage::disk('public')->exists($p->gambar_path))
              ? Storage::disk('public')->url($p->gambar_path)
              : asset('home/img/umkm/bayam.jpg');
      @endphp

      <a href="{{ route('produk.show', $p->slug) }}" class="product-card text-decoration-none" style="background:#fff;border-radius:15px;box-shadow:0 4px 16px rgba(28,28,28,.07);overflow:hidden;display:flex;flex-direction:column;transition:box-shadow .18s;">
        <img src="{{ $img }}" alt="{{ $p->nama }}" style="width:100%;height:180px;object-fit:cover;object-position:center;background:#eaeaea;">
        <div class="product-info" style="padding:16px 18px 18px;">
          <div class="product-title" style="font-size:1.13rem;font-weight:600;color:#222;margin-bottom:14px;">{{ $p->nama }}</div>
          <div class="product-meta d-flex justify-content-between align-items-center">
            <span class="stars" style="color:#166138;font-size:1.05rem;letter-spacing:2px;">★★★★★</span>
            <span class="product-price" style="color:#166138;font-weight:700;">
              Rp{{ number_format((int)($p->harga ?? 0), 0, ',', '.') }}
            </span>
          </div>
        </div>
      </a>
    @empty
      <div class="col-12"><em>Belum ada produk.</em></div>
    @endforelse
  </div>

  {{-- Laravel pagination (Bootstrap 5) --}}
  <div>
    {!! $produk->withQueryString()->links('pagination::bootstrap-5') !!}
  </div>
</div>
@endsection
