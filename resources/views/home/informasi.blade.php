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

    <style>
        .form-format-surat {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 9px;
        }

        .form-format-surat label {
            font-size: 1.07rem;
            margin-bottom: 4px;
            color: #232323;
            font-weight: 600;
        }

        .form-format-surat select {
            border: 1.5px solid #e4e4e4;
            border-radius: 7px;
            padding: 9px 18px;
            font-size: 1.07rem;
            width: 100%;
            max-width: 300px;
            outline: none;
            background: #f9f9f9;
            transition: border 0.15s;
        }

        .form-format-surat select:focus {
            border-color: #fc5652;
            background: #fff;
        }
    </style>
    <div class="container">
        <!-- Section: PPID -->
        <section class="ppid-section">
            <div class="ppid-content">
                <h1 class="ppid-title">PPID</h1>
                <p class="ppid-desc">
                    Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang
                    penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan publik.
                </p>
                <a href="#" class="btn-outline">Dasar Hukum PPID</a>
            </div>
            <div class="ppid-cards">
                <div class="ppid-card">
                    <img src="icon-berkala.png" alt="Informasi Berkala">
                    <span>INFORMASI SECARA<br>BERKALA</span>
                </div>
                <div class="ppid-card">
                    <img src="icon-serta-merta.png" alt="Informasi Serta Merta">
                    <span>INFORMASI SERTA<br>MERTA</span>
                </div>
                <div class="ppid-card">
                    <img src="icon-setiap-saat.png" alt="Informasi Setiap Saat">
                    <span>INFORMASI SETIAP<br>SAAT</span>
                </div>
            </div>
        </section>

        <!-- Section: Informasi Publik Terbaru -->
        <section class="info-publik-section">
            <h2 class="info-publik-title">INFORMASI PUBLIK TERBARU</h2>
            <p class="info-publik-sub">Update terakhir 2 tahun yang lalu</p>
            <div class="info-card">
                <div class="info-left">
                    <div class="info-doc-title">
                        <b>SK Desa ProKlim Utama Tahun 2022</b>
                    </div>
                    <div class="info-meta">
                        <span class="icon-file"></span> Daftar Informasi Publik <br>
                        <span class="icon-clock"></span> Kamis, 9 November 2023
                    </div>
                </div>
                <div class="info-right">
                    <a href="#" class="info-btn"><span class="icon-pdf"></span>Lihat Berkas</a>
                    <a href="#" class="info-btn"><span class="icon-download"></span>Unduh (428x)</a>
                </div>
            </div>
            <div class="info-request-box">
                <div class="info-request-text">
                    <b>Ingin mengajukan permohonan surat?</b>
                </div>
                <form id="formPilihSurat" class="form-format-surat">
                    <label for="formatSurat"><b>Pilih Format Surat yang Ingin Dibuat</b></label>
                    <select id="formatSurat" name="format_surat" required>
                        <option value="">-- Pilih Format Surat --</option>
                        <option value="{{ route('bbm') }}">Surat Izin Ecer BBM</option>
                        <option value="{{ route('tanah') }}">Surat Jual Beli Tanah</option>
                        <option value="{{ route('domisili') }}">Surat Keterangan Domisili</option>
                        <option value="{{ route('kematian') }}">Surat Keterangan Kematian</option>
                        <option value="{{ route('usaha') }}">Surat Keterangan Usaha</option>
                        <option value="{{ route('skck') }}">Surat Pengantar SKCK</option>
                        <option value="{{ route('sproadik') }}">Surat SPROADIK</option>
                        <!-- tambah sesuai kebutuhan -->
                    </select>
                    <button type="submit" class="btn-outline" style="margin-top:14px;">Ajukan Permohonan</button>
                </form>
            </div>



        </section>
    </div>

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
        document.getElementById('formPilihSurat').addEventListener('submit', function (e) {
            e.preventDefault();
            var select = document.getElementById('formatSurat');
            var url = select.value;
            if (url) {
                window.location.href = url;
            } else {
                select.focus();
            }
        });
    </script>


</body>

</html>
