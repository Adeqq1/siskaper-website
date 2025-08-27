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
        <div class="sambutan-nama mb-1">DENI NORIZAN, S. E.	</div>
        <div class="sambutan-jabatan mb-4">Kepala Desa Sirih Sekapur Perkembangan</div>

        <div class="sambutan-scroll">
          <p><b>Assalamu Alaikum Warohmatullahi Wabarakatu.</b></p>
          <p class="text-justify">
          Website ini menjadi wujud langkah nyata Desa Sirih Sekapur Perkembangan dalam mempercepat transformasi digital. Melalui sistem layanan yang terintegrasi daring, kami memperkuat keterbukaan informasi publik, memudahkan pelayanan kepada warga, dan mendorong aktivitas perekonomian lokal. Inisiatif ini sejalan dengan visi desa wisata yang berkelanjutan, adaptif terhadap perubahan iklim, serta berdaya mandiri. <br> <br>
          Kami menyampaikan terima kasih kepada seluruh pihak atas dukungan tenaga, pemikiran, dan semangatnya terutama kepada KKN UMMUBA 2025 yang telah menjadi mitra penting dalam kemajuan Desa Sirih Sekapur Perkembangan.
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
