<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sirih Sekapur Perkembangan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <link href="home/lib/animate/animate.min.css" rel="stylesheet">
    <link href="home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="home/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    @include('home.parts.spinner')
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('home.parts.navbar')
    <!-- Navbar End -->


    @php use Illuminate\Support\Facades\Storage; @endphp

    <section class="container-xxl py-5">
        <div class="container">
            <h1 class="fw-bold mb-3" style="color:#166138;">Berita Desa</h1>
            <p class="subtitle">
                Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari
                Desa
                Sirih Sekapur Perkembangan
            </p>

            <div class="row g-4">
                @forelse($berita as $row)
                    @php
                        $img = ($row->gambar_path && Storage::disk('public')->exists($row->gambar_path))
                            ? Storage::disk('public')->url($row->gambar_path)
                            : asset('home/img/berita/berita1.jpeg');
                        $date = ($row->published_at ?? $row->created_at)->translatedFormat('d M Y');
                    @endphp
                    <div class="col-md-6 col-lg-4">
                        <article class="news-card h-100 d-flex flex-column">
                            <a href="{{ route('berita.show', $row) }}"
                                class="text-decoration-none text-reset d-flex flex-column h-100">
                                <img src="{{ $img }}" alt="{{ $row->judul }}" class="news-img">
                                <div class="news-body d-flex flex-column flex-grow-1">
                                    <h3 class="news-card-title">{{ $row->judul }}</h3>
                                    <p class="news-card-desc flex-grow-1">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($row->excerpt ?: $row->konten), 140) }}
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between mt-auto">
                                        <div class="news-meta"><i class=""></i> </div>
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

            <div class="mt-4">
                {{ $berita->links() }}
            </div>
        </div>
    </section>


    <!-- Footer Start -->
    @include ('home.parts.footer')
    <!-- Footer End -->





    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="home/lib/wow/wow.min.js"></script>
    <script src="home/lib/easing/easing.min.js"></script>
    <script src="home/lib/waypoints/waypoints.min.js"></script>
    <script src="home/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="home/lib/counterup/counterup.min.js"></script>
    <script src="home/lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="home/js/main.js"></script>

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