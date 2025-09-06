<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <title>Struktur Organisasi Desa</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicon -->
  <link href="{{ asset('home/img/lambang-Kabupaten-Bungo.png')}}" rel="icon">

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
  <link href="{{ asset('home/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

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
    use Illuminate\Support\Str;
    $fallbackFoto = asset('home/img/sotk/placeholder.jpg'); // siapkan placeholder
  @endphp

  <section class="container-xxl py-5">
    <div class="container">
      <h1 class="fw-bold mb-3" style="color:#166138;">Struktur Organisasi</h1>
      <p class="subtitle">
        Susunan perangkat desa beserta jabatan dan keterangan singkatnya.
      </p>

      <div class="row g-4">
        @forelse($data as $row)
          @php
            $img = (!empty($row->foto_path) && Storage::disk('public')->exists($row->foto_path))
                ? Storage::disk('public')->url($row->foto_path)
                : asset('home/img/strukturDesa/60111.jpg');
                
          @endphp

          <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <article class="news-card h-100 d-flex flex-column text-center">
              <img src="{{ $img }}" alt="{{ $row->nama }}" class="news-img" style="height:240px;object-fit:cover;">
              <div class="news-body d-flex flex-column flex-grow-1">
                <h3 class="news-card-title mb-1">{{ $row->nama }}</h3>

                {{-- pakai style badge tanggal dari halaman berita untuk menampilkan jabatan --}}
                <div class="news-date-badge" style="margin-left:auto;margin-right:auto;">
                  {{ $row->jabatan }}
                </div>

                @if(!empty($desk))
                  <p class="news-card-desc mt-2 mb-0">
                    {{ $desk }}
                  </p>
                @endif
              </div>

            </article>
          </div>
        @empty
          <div class="col-12"><em>Belum ada data struktur.</em></div>
        @endforelse
        <a href="{{ route('userpage') }}" class="text-decoration-none">&larr; Kembali</a>

      </div>
    </div>
  </section>

  <!-- Footer Start -->
  @include ('home.parts.footer')
  <!-- Footer End -->

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('home/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('home/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('home/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('home/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('home/lib/parallax/parallax.min.js') }}"></script>

  <!-- Template Javascript -->
  <script src="{{ asset('home/js/main.js') }}"></script>

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
