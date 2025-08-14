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
  :root{
    --brand:#166138;
    --ink:#222;
    --muted:#5b5b5b;
    --card:#ffffff;
    --soft:#f7faf7;
    --line:#e9ecef;
    --shadow:0 6px 24px rgba(22,97,56,.08);
    --radius:16px;
  }

  /* ===== UTIL ===== */
  .btn-outline{
    --btnpad: .65rem 1rem;
    display:inline-flex; align-items:center; gap:.5rem;
    padding:var(--btnpad);
    border:2px solid var(--brand);
    color:var(--brand);
    font-weight:700; text-decoration:none;
    border-radius:12px; transition:.18s ease;
    background:#fff;
  }
  .btn-outline:hover,
  .btn-outline:focus{
    background:var(--brand); color:#fff; text-decoration:none;
    transform:translateY(-1px);
  }

  /* ===== SECTION: PPID ===== */
  .ppid-section{
    margin: 36px 0 22px;
    background:var(--card);
    border-radius:22px;
    box-shadow:var(--shadow);
    padding: clamp(1rem, 2.5vw, 2rem);
    display:grid; gap:clamp(1rem,2.5vw,2rem);
    grid-template-columns: 1.1fr 1.2fr;   /* desktop 2 kolom */
  }
  .ppid-content{display:flex; flex-direction:column; gap: .75rem;}
  .ppid-title{
    font-family:"Roboto Slab",serif;
    font-weight:800; letter-spacing:.2px;
    color:var(--brand);
    font-size: clamp(1.6rem, 2.8vw, 2.2rem);
    margin:0;
  }
  .ppid-desc{color:var(--ink); font-size:clamp(.98rem,1.1vw,1.08rem); margin:0 0 .4rem;}
  .ppid-cards{
    display:grid; gap:clamp(.8rem,1.8vw,1rem);
    grid-template-columns: repeat(3, 1fr);
    align-content:start;
  }
  .ppid-card{
    background:var(--soft);
    border:1px solid var(--line);
    border-radius:var(--radius);
    padding: clamp(.9rem, 1.8vw, 1.1rem);
    display:flex; flex-direction:column; align-items:center; text-align:center; gap:.6rem;
    transition:.18s ease; height:100%;
  }
  .ppid-card img{width:56px; height:56px; object-fit:contain}
  .ppid-card span{
    font-weight:800; font-size:.92rem; color:var(--ink); line-height:1.25;
  }
  .ppid-card:hover{transform:translateY(-3px); box-shadow:var(--shadow);}

  /* ===== SECTION: INFORMASI PUBLIK ===== */
  .info-publik-section{
    margin: 28px 0 36px;
  }
  .info-publik-title{
    font-family:"Roboto Slab",serif; font-weight:800;
    color:var(--brand); letter-spacing:.3px;
    font-size: clamp(1.3rem, 2.4vw, 1.8rem);
    margin:0 0 .25rem;
  }
  .info-publik-sub{color:var(--muted); margin:0 0 1rem; font-size:.98rem;}

  .info-card{
    background:#fff; border:1px solid var(--line);
    border-radius:var(--radius); box-shadow:var(--shadow);
    padding: clamp(1rem,2.2vw,1.25rem);
    display:grid; gap:1rem;
    grid-template-columns: 1fr auto;       /* desktop: kiri-kanan */
    align-items:center; margin-bottom:12px;
  }
  .info-left{min-width:0}
  .info-doc-title{font-size:1.05rem; color:var(--ink);}
  .info-meta{color:#666; font-size:.95rem; margin-top:.35rem; line-height:1.45;}
  .info-right{display:flex; gap:.6rem; flex-wrap:wrap; justify-content:flex-end}
  .info-btn{ @apply .btn-outline; } /* jika pakai Tailwind – kalau tidak, biarkan default .btn-outline */
  .info-btn{ padding:.55rem .9rem; display:inline-flex; align-items:center; gap:.5rem; border-radius:10px; }

  /* ===== BOX AJUKAN SURAT ===== */
  .info-request-box{
    background:var(--soft); border:1px dashed var(--line);
    border-radius:22px; padding: clamp(1rem,2.5vw,1.4rem);
    display:grid; gap:clamp(.8rem,2vw,1rem);
    grid-template-columns: 1fr auto; align-items:center;
    justify-items: center;          /* semua anak di tengah secara horizontal */
    text-align: center;             /* teks di tengah */
  }
  .info-request-text{font-size:1.05rem; color:var(--ink); font-weight:700;}

  /* ====== FORM pilihan surat ====== */
  .form-format-surat{
    margin-top:0; display:flex; flex-direction:column; align-items:flex-start; gap:.5rem;
    align-items: center; 
}
  
  .form-format-surat label{
    font-size:.98rem; margin:0; color:#232; font-weight:700;
  }
  .form-format-surat select{
    border:1.6px solid var(--line); border-radius:10px;
    padding:.65rem .9rem; font-size:1rem; width: min(320px, 74vw);
    outline:none; background:#fff; transition:border .15s, box-shadow .15s;
  }
  .form-format-surat select:focus{
    border-color:var(--brand);
    box-shadow:0 0 0 .2rem rgba(22,97,56,.08);
  }
  .form-format-surat .btn-outline{
  margin-left: auto;
  margin-right: auto;
  display: block;                 /* biar margin auto bekerja */
}

  /* ====== RESPONSIVE ====== */
  @media (max-width: 991.98px){ /* tablet */
    .ppid-section{grid-template-columns:1fr;}
    .ppid-cards{grid-template-columns: repeat(3, 1fr);}
  }
  @media (max-width: 767.98px){ /* mobile */
    .ppid-cards{grid-template-columns: repeat(2, 1fr);}
    .info-card{grid-template-columns:1fr; text-align:left;}
    .info-right{justify-content:flex-start}
    .info-request-box{grid-template-columns:1fr; align-items:start}
    .btn-outline{--btnpad:.6rem .9rem}
  }
  @media (max-width: 479.98px){ /* small phones */
    .ppid-cards{grid-template-columns:1fr;}
    .ppid-card img{width:52px; height:52px}
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
                    <button type="submit" class="btn-outline">Ajukan Permohonan</button>
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
