@php use Illuminate\Support\Facades\Storage; @endphp

<section class="container-xxl py-5">
  <div class="container">
    <a href="{{ route('produk.index') }}" class="text-decoration-none">&larr; Kembali</a>
    <h1 class="fw-bold mt-2" style="color:#166138;">{{ $produk->nama }}</h1>
    @php
      $img = ($produk->gambar_path && Storage::disk('public')->exists($produk->gambar_path))
           ? Storage::disk('public')->url($produk->gambar_path)
           : asset('home/img/umkm/bayam.jpg');
    @endphp
    <img src="{{ $img }}" alt="{{ $produk->nama }}" class="img-fluid rounded mb-4"
         style="max-height:420px;object-fit:cover;width:100%;">
    @if(!empty($produk->harga))
      <div class="h5 text-success mb-3">Rp{{ number_format((int)$produk->harga,0,',','.') }}</div>
    @endif
    <div class="content">{!! $produk->deskripsi !!}</div>
  </div>
</section>
