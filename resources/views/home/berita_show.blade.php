<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sirih Sekapur Perkembangan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="home/img/favicon.ico" rel="icon">

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
        $img = ($berita->gambar_path && Storage::disk('public')->exists($berita->gambar_path))
            ? Storage::disk('public')->url($berita->gambar_path)
            : asset('home/img/berita/berita1.jpeg');
        $date = ($berita->published_at ?? $berita->created_at)->translatedFormat('d M Y');
        
    @endphp

    <section class="container-xxl py-5">
        <div class="container">
            <a href="{{ route('berita.publik') }}" class="text-decoration-none">&larr; Kembali</a>
            <h1 class="fw-bold mt-2" style="color:#166138;">{{ $berita->judul }}</h1>
            <div class="text-muted mb-3">{{ $date }}</div>

            <img src="{{ $img }}" alt="{{ $berita->judul }}" class="img-fluid rounded mb-4"
                style="max-height:480px;object-fit:cover;width:100%;">

            <article class="content">
                {!! $berita->konten = nl2br($berita->konten);!!}
            </article>
        </div>
    </section>

    <style>

.content p {
    margin-bottom: 1.5rem !important; /* jarak antar paragraf */
  }
  /* Bata batas lebar & tipografi dasar konten */
  .content {
    font-size: 1.05rem;
    line-height: 1.8;
    color: #222;
    max-width: 1100px;
    margin: 0 auto;
  }
  .content br+br {
    display: block;
    margin-bottom: 1.5rem;
    content: "";
  }

  /* Jarak antar elemen blok langsung di dalam .content */
  .content > * + * { margin-top: 1.25rem !important; }

  /* Kalau memang ada <p>, kasih bottom margin juga */
  .content p {
    margin-bottom: 1.5rem !important; /* jarak antar paragraf */
  }

  /* Elemen umum dari editor */
  .content :is(ul,ol,blockquote,pre,table){ margin: 1.25rem 0 !important; }
  .content :is(h2,h3,h4,h5){ margin: 1.5rem 0 .75rem !important; color:#166138; }

  /* Jika editor menyimpan paragraf sebagai <br><br>, beri jarak visual */
  .content br + br { display:block; content:""; margin-bottom: 1rem; }
  .content br + br + br { display:none; } /* cegah jeda dobel berlebihan */

  
  /* Header image di atas konten */
  .container img.img-fluid {
    border-radius: 1rem !important; /* 16px radius */
  }
  
  /* Media responsif di dalam konten */
  .content img,
  .content iframe{
    max-width:100%;
    height:auto;
    display:block;
    margin: 1rem auto;
    border-radius: .5rem;
  }
</style>









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