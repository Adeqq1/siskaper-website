<section class="container-xxl py-5 sambutan-section">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      <!-- Logo/Lambang -->
      <div class="col-12 col-lg-5 text-center mb-3 mb-lg-0">
        <div class="logo-circle bg-white rounded-circle shadow">
          <img src="{{ asset('home/img/lambang-Kabupaten-Bungo.png') }}" alt="Lambang Kabupaten Bungo" class="img-fluid logo-img" loading="lazy">
        </div>
      </div>

      <!-- Sambutan & Teks -->
      <div class="col-12 col-lg-7">
        <h1 class="sambutan-title fw-bold mb-1" style="text-align: center;">Sambutan Kepala Desa Sirih Sekapur Perkembangan</h1>
        <div class="sambutan-nama mb-1">DENI</div>
        <div class="sambutan-jabatan mb-4">Kepala Desa Sirih Sekapur Perkembangan</div>

        <div class="sambutan-scroll">
          <p><b>Assalamu Alaikum Warohmatullahi Wabarakatu.</b></p>
          <p class="text-justify">
            Website ini hadir sebagai wujud transformasi desa Kersik menjadi desa yang mampu memanfaatkan teknologi
            informasi dan komunikasi, terintegrasi kedalam sistem online. Keterbukaan informasi publik, pelayanan
            publik dan kegiatan perekonomian di desa, guna mewujudkan desa Kersik sebagai desa wisata yang
            berkelanjutan, adaptasi dan mitigasi terhadap perubahan iklim serta menjadi desa yang mandiri.<br><br>
            Terima kasih kepada semua pihak yang telah banyak memberi dukungan dan kontribusi baik berupa tenaga,
            pikiran dan semangat, terkhusus kepada KKN UMMUBA 2025 yang sangat mendukung kemajuan desa Sirih Sekapur
            Perkembangan.
          </p>
        </div>
      </div>
    </div>
  </div>

  <style>
    :root{ --brand-green:#166138; }
    .sambutan-section{ position:relative; isolation:isolate; }

    .logo-circle{
      width: clamp(180px, 42vw, 340px);
      height: clamp(180px, 42vw, 340px);
      padding: clamp(14px, 3.2vw, 24px);
      display:inline-flex; align-items:center; justify-content:center;
      box-shadow:0 8px 24px rgba(0,0,0,.08);
    }
    .logo-img{ width:70%; max-width:70%; display:block; }

    .sambutan-title{
      color: var(--brand-green);
      line-height:1.2;
      font-size: clamp(1.05rem, 1.8vw, 1.3rem);
    }
    .sambutan-nama{
      font-weight:800; letter-spacing:2px;
      font-size: clamp(1.3rem, 2.6vw, 2.4rem); color:#111;
      text-align: center;
      }
    .sambutan-jabatan{
      font-weight:500; font-size: clamp(.9rem, 1.4vw, 1rem); color:#222;
      text-align: center;

    }

    .sambutan-scroll{
      background:#fff; border-radius:12px; padding:1rem;
      max-height: clamp(180px, 34vh, 320px);
      overflow-y:auto; box-shadow:0 2px 12px rgba(0,0,0,.06);
      -webkit-overflow-scrolling:touch;
    }
    .text-justify{ text-align:justify; }
    .sambutan-scroll p{ color:#000; margin-bottom:.75rem; }
  </style>
</section>
