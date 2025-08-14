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

    <!-- Sambutan Start -->
    <div class="visi-misi-section">
        <div class="visi-card">
            <h1 class="visi-misi-title">Visi</h1>
            <p class="visi-misi-desc">
                “Desa Kersik sebagai Desa Wisata yang mampu mengelolah potensi Desa dan pembangunan berkelanjutan untuk
                mewujudkan masyarakat yang sejahtera”
            </p>
        </div>
        <div class="misi-card">
            <h1 class="visi-misi-title">Misi</h1>
            <ol class="misi-list">
                <li>Mewujudkan tata kelola pemerintahan yang baik</li>
                <li>Mengembangkan kegiatan keagamaan</li>
                <li>Meningkatkan kualitas pendidikan dan sumber daya manusia</li>
                <span class="misi-more">
                    <li>Mengembangkan teknologi informasi</li>
                    <li>Pembangunan infrastruktur, sarana dan prasarana</li>
                </span>
            </ol>
            <button class="misi-toggle-btn" type="button">
                Baca Selengkapnya <span class="misi-chevron">&#x25BC;</span>
            </button>
        </div>
    </div>

    <!-- Sambutan End -->

    <!-- Bagan Struktur Start -->
    <div class="bagan-desa-section">
        <h1 class="bagan-desa-title">Bagan Desa</h1>
        <div class="bagan-desa-cards">
            <div class="bagan-desa-card">
                <div class="bagan-desa-card-title">Struktur Organisasi Pemerintahan Desa</div>
                <img src="home/img/struktur-pemerintahan.png" alt="Struktur Pemerintahan Desa" class="bagan-img">
            </div>
            <div class="bagan-desa-card">
                <div class="bagan-desa-card-title">Struktur Organisasi Badan Permusyawaratan Desa</div>
                <img src="home/img/struktur-bpd.png" alt="Struktur BPD" class="bagan-img">
            </div>
        </div>
    </div>
    <!-- Bagan Struktur End -->

    <!-- Sejarah Start -->
    <section class="sejarah-desa-section">
        <h1 class="sejarah-title">Sejarah Desa Kersik</h1>
        <div class="sejarah-content">
            <!-- Jika sudah ada sejarah, isi di sini -->
            <p class="sejarah-text">
                <!-- Contoh isi:
      Desa Kersik berdiri pada tahun XXXX sebagai ... -->
            </p>

            <!-- Placeholder jika belum ada data -->
            <div class="sejarah-placeholder">
                <img src="home/img/placeholder-empty.png" alt="" class="placeholder-img" />
                <span>Belum ada sejarah Desa</span>
            </div>
        </div>
    </section>
    <!-- Sejarah End -->

    <!-- Map Start -->
    <section class="lokasi-desa-section">
        <h1 class="lokasi-title">Peta Lokasi Desa</h1>
        <div class="lokasi-row">
            <!-- Field info -->
            <div class="lokasi-info">
                <h2>Batas Desa:</h2>
                <div class="batas-flex">
                    <div>
                        <b>Utara</b>
                        <p>Desa Santan Ulu dan Desa Santan Ilir</p>
                        <b>Selatan</b>
                        <p>Selat Makassar dan Desa Semangko</p>
                    </div>
                    <div>
                        <b>Timur</b>
                        <p>Selat Makassar</p>
                        <b>Barat</b>
                        <p>Desa Santan Ulu</p>
                    </div>
                </div>
                <hr>
                <div class="lokasi-detail">
                    <span><b>Luas Desa:</b></span>
                    <span>421.000 m<sup>2</sup></span>
                </div>
                <hr>
                <div class="lokasi-detail">
                    <span><b>Jumlah Penduduk</b></span>
                    <span>1.149 Jiwa</span>
                </div>
            </div>
            <!-- Field map -->
            <div class="lokasi-map">
                <!-- Pakai iframe, Leaflet, Google Maps, atau gambar statis -->
                <div class="map-placeholder">
                    <!-- Ganti dengan embed peta asli -->
                    <iframe
                        src="https://www.openstreetmap.org/export/embed.html?bbox=117.3767,0.703,117.3901,0.715&layer=mapnik"
                        style="border:0; width:100%; height:100%; min-height:340px; border-radius:18px;" allowfullscreen
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Map End -->

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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const btn = document.querySelector('.misi-toggle-btn');
            const more = document.querySelector('.misi-more');
            btn.addEventListener('click', function () {
                if (more.style.display === "inline" || more.style.display === "block") {
                    more.style.display = "none";
                    btn.innerHTML = 'Baca Selengkapnya <span class="misi-chevron">&#x25BC;</span>';
                    btn.classList.remove('open');
                } else {
                    more.style.display = "inline";
                    btn.innerHTML = 'Tutup <span class="misi-chevron">&#x25BC;</span>';
                    btn.classList.add('open');
                }
            });
        });
    </script>


</body>

</html>