<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sirih Sekapur Perkembangan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('home/img/lambang-Kabupaten-Bungo.png')}}" type="image/x-icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('home/lib/animate/animate.min.css') }}" rel="stylesheet">
  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  @include('home.parts.spinner')
  <!-- Spinner End -->

  <!-- Navbar Start -->
  @include('home.parts.navbar')
  <!-- Navbar End -->

  @php
    use Illuminate\Support\Facades\Storage;
  @endphp

  <section class="container-xxl py-5">
    <div class="container">
      {{-- Kembali ke daftar publik --}}
      <a href="{{ route('produk-publik.index') }}" class="text-decoration-none">&larr; Kembali</a>

      {{-- Nama Produk --}}
      <h1 class="fw-bold mt-2" style="color:#166138;">{{ $produk->nama }}</h1>

      {{-- Gambar --}}
      @php
        $img = ($produk->gambar_path && Storage::disk('public')->exists($produk->gambar_path))
          ? Storage::disk('public')->url($produk->gambar_path)
          : asset('home/img/umkm/bayam.jpg');
      @endphp
      <img src="{{ $img }}" alt="{{ $produk->nama }}" class="img-fluid rounded mb-4"
        style="max-height:420px;object-fit:cover;width:100%;">

      {{-- Harga --}}
      @php
        $harga = (int) ($produk->harga ?? 0);
      @endphp
      @if($harga > 0)
        <div class="h5 text-success mb-3">Rp{{ number_format($harga, 0, ',', '.') }}</div>
      @endif

      {{-- Deskripsi --}}
      <div class="content mb-4">{!! $produk->deskripsi !!}</div>

      {{-- Kontak Penjual --}}
      @php
        // Ambil nomor penjual jika sudah ada di kolom (nullable)
        $nomorPenjual = trim($produk->nomor_penjual ?? '');

        // Normalisasi untuk tel: dan wa.me (hapus non-digit)
        $nomorDigits = preg_replace('/\D+/', '', $nomorPenjual);
        // Format ke 62xxxx jika dimulai dengan 0 (untuk wa.me)
        $waNumber = $nomorDigits ? ('62' . ltrim($nomorDigits, '0')) : null;

        $telHref = $nomorDigits ? 'tel:' . $nomorDigits : null;
        $waHref = $nomorDigits ? 'https://wa.me/' . $waNumber : null;
      @endphp

      <div class="card border-0 shadow-sm">
        <div class="card-body d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
          <div>
            <div class="fw-bold mb-1" style="color:#166138;">Kontak Penjual</div>
            @if($nomorDigits)
              <div class="text-muted">Nomor: {{ $nomorPenjual }}</div>
            @else
              <div class="badge bg-secondary-subtle text-secondary fw-normal">
                Nomor penjual belum tersedia
              </div>
            @endif
          </div>

          <div class="d-flex gap-2">
            @if($nomorDigits)
              <a href="{{ $telHref }}" class="btn btn-outline-success">
                <i class="bi bi-telephone"></i> Telepon
              </a>
              <a href="{{ $waHref }}" target="_blank" rel="noopener" class="btn btn-success">
                <i class="bi bi-whatsapp"></i> WhatsApp
              </a>
            @else
              <button type="button" class="btn btn-outline-secondary" disabled>
                <i class="bi bi-telephone"></i> Telepon
              </button>
              <button type="button" class="btn btn-secondary" disabled>
                <i class="bi bi-whatsapp"></i> WhatsApp
              </button>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer Start -->
  @include ('home.parts.footer')
  <!-- Footer End -->





  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('home/lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('home/lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('home/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('home/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('home/lib/parallax/parallax.min.js')}}"></script>

  <!-- Template Javascript -->
  <script src="{{ asset('home/js/main.js')}}"></script>

  <script>
    window.addEventListener("scroll", function () {
      var navbar = document.querySelector('.navbar-custom');
      if (window.scrollY > 50) {
        navbar.classList.add('navbar-solid');
      } else {
        navbar.classList.remove('navbar-solid');
      }
    });
  </script>

</body>

</html>