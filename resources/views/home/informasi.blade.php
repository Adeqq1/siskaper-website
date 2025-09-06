<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <title>Sirih Sekapur Perkembangan — PPID</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description"
    content="PPID Desa Sirih Sekapur Perkembangan: layanan resmi informasi publik & pengelolaan administrasi desa." />

  <!-- Favicon -->
  <link href="{{ asset('home/img/lambang-Kabupaten-Bungo.png')}}" rel="icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet" />

  <!-- Icons & Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="home/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Site stylesheet (jika dibutuhkan global) -->
  <link href="home/css/style.css" rel="stylesheet" />

  <style>
    :root {
      --brand: #166138;
      --ink: #222;
      --muted: #5b5b5b;
      --card: #ffffff;
      --soft: #f7faf7;
      --line: #e9ecef;
      --shadow: 0 6px 24px rgba(22, 97, 56, 0.08);
      --radius: 16px;
    }

    /* ===== UTIL ===== */
    .btn-outline {
      --btnpad: 0.65rem 1rem;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: var(--btnpad);
      border: 2px solid var(--brand);
      color: var(--brand);
      font-weight: 700;
      text-decoration: none;
      border-radius: 12px;
      transition: 0.18s ease;
      background: #fff;
      cursor: pointer;
    }

    .btn-outline:hover,
    .btn-outline:focus {
      background: var(--brand);
      color: #fff;
      text-decoration: none;
      transform: translateY(-1px);
    }

    /* ===== SECTION: PPID ===== */
    .ppid-section {
      margin: clamp(32px, 7vh, 72px) 0 22px;
      background: var(--card);
      border-radius: 22px;
      box-shadow: var(--shadow);
      padding: clamp(1rem, 2.5vw, 2rem);
      display: grid;
      gap: clamp(1rem, 2.5vw, 2rem);
    }

    .ppid-title {
      font-family: "Roboto Slab", serif;
      font-weight: 800;
      letter-spacing: 0.2px;
      color: var(--brand);
      font-size: clamp(1.6rem, 2.8vw, 2.2rem);
      margin: 0;
    }

    .ppid-desc {
      color: var(--ink);
      font-size: clamp(0.98rem, 1.1vw, 1.08rem);
      margin: 0 0 0.8rem;
      text-align: justify;
    }

    /* ===== SECTION: INFORMASI PUBLIK ===== */
    .info-publik-section {
      margin: 28px 0 36px;
    }

    .info-publik-title {
      font-family: "Roboto Slab", serif;
      font-weight: 800;
      color: var(--brand);
      letter-spacing: 0.3px;
      font-size: clamp(1.3rem, 2.4vw, 1.8rem);
      margin: 0 0 0.5rem;
      text-align: center;
    }

    /* ===== BOX AJUKAN SURAT ===== */
    .info-request-box {
      background: var(--soft);
      border: 1px dashed var(--line);
      border-radius: 22px;
      padding: clamp(1rem, 2.5vw, 1.4rem);
      display: grid;
      gap: clamp(0.8rem, 2vw, 1rem);
      grid-template-columns: 1fr auto;
      align-items: center;
      justify-items: center;
      /* center align children horizontally */
      text-align: center;
      /* center text */
    }

    .info-request-text {
      font-size: 1.05rem;
      color: var(--ink);
      font-weight: 700;
      text-align: center;
      align-items: center;
      justify-items: center;
    }

    /* ====== FORM pilihan surat ====== */
    .form-format-surat {
      margin-top: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.5rem;
    }

    .form-format-surat label {
      font-size: 0.98rem;
      margin: 0;
      color: #232;
      font-weight: 700;
    }

    .form-format-surat select {
      border: 1.6px solid var(--line);
      border-radius: 10px;
      padding: 0.65rem 0.9rem;
      font-size: 1rem;
      width: min(320px, 74vw);
      outline: none;
      background: #fff;
      transition: border 0.15s, box-shadow 0.15s;
    }

    .form-format-surat select:focus {
      border-color: var(--brand);
      box-shadow: 0 0 0 0.2rem rgba(22, 97, 56, 0.08);
    }

    .form-format-surat .btn-outline {
      margin-left: auto;
      margin-right: auto;
      display: block;
    }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 767.98px) {
      .info-request-box {
        grid-template-columns: 1fr;
        align-items: start;
      }

      .ppid-desc {
        max-height: clamp(12rem, 45vh, 20rem);
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        overscroll-behavior: contain;
        padding-right: 0.25rem;
      }

      .ppid-desc::-webkit-scrollbar {
        width: 6px;
      }

      .ppid-desc::-webkit-scrollbar-thumb {
        background: #cfd8cf;
        border-radius: 8px;
      }

      .ppid-desc::-webkit-scrollbar-track {
        background: transparent;
      }

      .btn-outline {
        --btnpad: 0.6rem 0.9rem;
      }
    }

    @media (max-width: 479.98px) {
      .info-publik-title {
        font-size: 1.25rem;
      }
    }
  </style>
</head>

<body>
  <!-- Spinner -->
  @include('home.parts.spinner')

  <!-- Navbar -->
  @include('home.parts.navbar')

  <div class="container">
    <!-- Section: PPID -->
    <section class="ppid-section">
      <div class="ppid-content">
        <h1 class="ppid-title">Pelayanan Surat Desa Sirih Sekapur Perkembangan</h1><br>

        <p class="ppid-desc">
          Layanan surat Desa Sirih Sekapur Perkembangan merupakan bentuk pelayanan administrasi publik yang diberikan
          pemerintah desa kepada masyarakat dalam pemenuhan kebutuhan dokumen resmi. Melalui layanan ini, warga dapat
          mengajukan dan memperoleh berbagai jenis surat keterangan maupun dokumen administrasi yang sah, sesuai dengan
          aturan yang berlaku.
        </p>
        <p class="ppid-desc">
          Pelayanan surat dirancang untuk mempermudah masyarakat dalam mengurus keperluan sehari-hari, baik yang
          berhubungan
          dengan kependudukan, keperluan pendidikan, pekerjaan, usaha, maupun keperluan hukum. Dengan adanya layanan
          ini,
          masyarakat tidak perlu mengalami kerumitan karena semua proses dapat dilakukan di tingkat desa dengan prosedur
          yang jelas, transparan, dan cepat.
        </p>

        <p class="ppid-desc mb-2">Layanan ini terdiri dari:</p>
        <ul class="ppid-desc" style="margin-left:1.25rem;">
          <li>Surat Keterangan Domisili Usaha</li>
          <li>Surat Keterangan Usaha</li>
          <li>Surat Keterangan Tidak Mampu (Jamkesda/PIP/KIP)</li>
          <li>Surat Keterangan Nikah</li>
          <li>Surat Keterangan Janda/Duda</li>
          <li>Surat Jual Beli Tanah</li>
          <li>Surat Pengantar Permohonan SKCK</li>
          <li>Surat Izin Keramaian</li>
          <li>Surat Permohonan Nikah/Kawin</li>
          <li>Surat Izin Ecer BBM</li>
          <li>Surat Keterangan Kematian</li>
          <li>Surat Keterangan Domisili</li>
          <li>Sporadik</li>
          <li>Layanan Jasa Hukum</li>
          <li>Surat Lainnya</li>
        </ul>
      </div>
    </section>


    <section class="info-request-box" aria-label="Ajukan Surat">
      <div class="info-request-text">Siap mengajukan permohonan surat?</div>
      {{-- ganti URL/route sesuai rute pengajuanmu --}}
      <a href="{{ route('ppid.ajukan') }}" class="btn-outline">
        <i class="bi bi-send"></i> Ajukan Surat
      </a>
    </section>

  </div>

  <!-- Footer -->
  @include('home.parts.footer')

  <!-- JS (pertahankan seperlunya agar bagian lain situs tetap berjalan) -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="home/lib/wow/wow.min.js"></script>
  <script src="home/lib/easing/easing.min.js"></script>
  <script src="home/lib/waypoints/waypoints.min.js"></script>
  <script src="home/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="home/lib/counterup/counterup.min.js"></script>
  <script src="home/lib/parallax/parallax.min.js"></script>
  <script src="home/js/main.js"></script>

  <script>
    // Solid navbar on scroll (aman jika elemen tidak ada)
    window.addEventListener("scroll", function () {
      var navbar = document.querySelector(".navbar-custom");
      if (!navbar) return;
      if (window.scrollY > 50) {
        navbar.classList.add("navbar-solid");
      } else {
        navbar.classList.remove("navbar-solid");
      }
    });

    // Redirect ke route pilihan surat
    document.getElementById("formPilihSurat").addEventListener("submit", function (e) {
      e.preventDefault();
      var select = document.getElementById("formatSurat");
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