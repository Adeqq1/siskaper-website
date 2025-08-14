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

  <!-- Carousel Start -->
  @include('home.parts.carousel')
  <!-- Carousel End -->

  <!-- About Start -->
  @include('home.parts.about')
  <!-- About End -->

  <!-- Sambutan Start -->
  @include('home.parts.sambutan')
  <!-- Sambutan End -->

  <!-- Map Section Start -->
  @include ('home.parts.map')
  <!-- Map Section End -->

  <!-- struktur desa -->
  @include ('home.parts.struktur_desa')
  <!-- struktur desa end -->

  <!-- Statistik Penduduk Start -->
  @include ('home.parts.statistik_penduduk')
  <!-- Statistik Penduduk End -->

  <!-- Apbd Desa Start -->
  
  <!-- Apbs Desa End -->

  <!-- berita start -->
  @include ('home.parts.berita')
  <!-- berita end -->

  <!-- umkm start -->
  @include ('home.parts.umkm')
  <!-- umkm end -->

  <!-- galeri start -->
  @include ('home.parts.galeri')
  <!-- galeri end -->

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