{{-- ====================== FOOTER: MOBILE-ONLY (< lg) ====================== --}}
<footer class="footer-green d-lg-none">
  <div class="container py-4">

    {{-- Header brand --}}
    <div class="d-flex align-items-start mb-3">
      <img src="{{ asset('home/img/lambang-Kabupaten-Bungo.png') }}" alt="Lambang" class="fm-logo me-3" loading="lazy">
      <div>
        <div class="fm-title">Desa Siskaper</div>
        <div class="fm-sub">Kecamatan Jujuhan<br>Kabupaten Bungo<br>Provinsi Jambi</div>
      </div>
    </div>

    {{-- Accordion --}}
    <div id="footerAcc">

      {{-- Kontak Desa --}}
      <button class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#accContact" aria-expanded="false">
        <span class="ico"><i class="fa fa-phone"></i></span>
        <span class="txt">Kontak Desa</span>
        <span class="chev"><i class="fa fa-chevron-down"></i></span>
      </button>
      <div id="accContact" class="collapse" data-bs-parent="#footerAcc">
        <ul class="acc-body">
          <li><a href="tel:082150208664">082150208664</a></li>
          <li><a href="mailto:sirihsekapurperkembangan@mail.go.id">sirihsekapurperkembangan@mail.go.id</a></li>
        </ul>
      </div>

      {{-- Nomor Telepon Penting --}}
      <button class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#accImportant" aria-expanded="false">
        <span class="ico"><i class="fa fa-ambulance"></i></span>
        <span class="txt">Nomor Telepon Penting</span>
        <span class="chev"><i class="fa fa-chevron-down"></i></span>
      </button>
      <div id="accImportant" class="collapse" data-bs-parent="#footerAcc">
        <ul class="acc-body">
          <li>Deni — Kades Kersik</li>
          <li>Suhendro — Ambulance Kersik</li>
        </ul>
      </div>

      {{-- Sosial Media --}}
      <button class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#accSoc" aria-expanded="false">
        <span class="ico"><i class="fa fa-hashtag"></i></span>
        <span class="txt">Sosial Media</span>
        <span class="chev"><i class="fa fa-chevron-down"></i></span>
      </button>
      <div id="accSoc" class="collapse" data-bs-parent="#footerAcc">
        <ul class="acc-body">
          <li><a href="#" target="_blank">Facebook</a></li>
          <li><a href="#" target="_blank">Instagram</a></li>
          <li><a href="#" target="_blank">YouTube</a></li>
        </ul>
      </div>

      {{-- Jelajahi --}}
      <button class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#accNav" aria-expanded="false">
        <span class="ico"><i class="fa fa-compass"></i></span>
        <span class="txt">Jelajahi</span>
        <span class="chev"><i class="fa fa-chevron-down"></i></span>
      </button>
      <div id="accNav" class="collapse" data-bs-parent="#footerAcc">
        <ul class="acc-body">
          <li><a href="{{ url('profile') }}">Profil Desa</a></li>
          <li><a href="{{ url('berita') }}">Berita</a></li>
          <li><a href="{{ url('informasi') }}">PPID</a></li>
          <li><a href="{{ url('map') }}">Peta</a></li>
        </ul>
      </div>
    </div>

    <div class="powered text-center mt-3">© 2025 Powered by PT Digital Desa Indonesia</div>
  </div>
</footer>

{{-- ====================== FOOTER: DESKTOP/TABLET (≥ lg) ====================== --}}
<footer class="footer-green d-none d-lg-block">
  <div class="container py-5">
    <div class="row g-4 align-items-start">
      {{-- Kolom 1: Logo + alamat --}}
      <div class="col-lg-4">
        <div class="d-flex align-items-start">
          <img src="{{ asset('home/img/lambang-Kabupaten-Bungo.png') }}" alt="Lambang" class="footer-logo me-3" loading="lazy">
          <div>
            <h3 class="desk-heading mb-2">Pemerintah Desa Siskaper</h3>
            <address class="footer-text mb-0">
              Jalan Datuk Rio hbn, RT.11<br>
              Desa Sirih Sekapur Perkemabangan, Kec. Jujuhan, Kab. Bungo<br>
              Provinsi Jambi, 37256
            </address>
          </div>
        </div>
      </div>

      {{-- Kolom 2: Hubungi Kami --}}
      <div class="col-lg-3">
        <h4 class="desk-heading mb-3">Hubungi Kami</h4>
        <div class="footer-text mb-2 display-3"><a class="fa fa-phone me-2 footer-link" href="tel:082316032698"> 082316032698</a></div>
        <div class="footer-text mb-3"><a class="fa fa-envelope me-2 footer-link" href="mailto:sirihsekapurperkembangan@mail.go.id"> siskaper.go.id</a></div>
        <div class="socials d-flex gap-3">
          <a href="#" class="footer-icon" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="footer-icon" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" class="footer-icon" aria-label="X"><i class="fa fa-twitter"></i></a>
          <a href="#" class="footer-icon" aria-label="YouTube"><i class="fa fa-youtube-play"></i></a>
          
        </div>
      </div>

      {{-- Kolom 3: Nomor penting --}}
      <div class="col-lg-3">
        <h4 class="desk-heading mb-3">Nomor Telepon Penting</h4>
        <ul class="footer-list">
          <li><a class="footer-link" href="tel:082316032698">Deni Noprizan, S. E. / Kades Siskaper</a></li>
          <li><a class="footer-link" href="tel:082316032698">Hendro / Ambulan Kersik</a></li>
        </ul>
      </div>

      {{-- Kolom 4: Jelajahi --}}
      <div class="col-lg-2">
        <h4 class="desk-heading mb-3">Jelajahi</h4>
        <ul class="footer-list">
          <li><a class="footer-link" href="https://www.bungokab.go.id/">Website Kabupaten Bungo</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="footer-bar py-0">
    <div class="container">
      <div class="text-center small fw-semibold">POWERED BY &copy; <a href="#" class="footer-bar-link">KKN SIRIH SEKAPUR PERKEMBANGAN 2025 UMMUBA.</a></div>
    </div>
  </div>
</footer>

<style>
  :root{
    --brand-green: #166138;          /* warna utama */
    --brand-green-dk: #11532f;       /* variasi gelap */
    --text: #ffffff;
    --muted: #e8f2ec;
  }

  .container {
  max-width: 1180px;
  margin: 0 auto;
  padding: 38px 18px 30px 18px;
}

  /* ========== umum ========== */
  .footer-green{
    background: var(--brand-green);
    color: var(--text);
    isolation: isolate;
  }
  .footer-link{
    color: var(--text); text-decoration: none;
  }
  .footer-link:hover{ text-decoration: underline; }
  .footer-list{ list-style: none; padding-left: 0; margin: 0; }
  .footer-list li + li{ margin-top: .4rem; }

  /* logo */
  .footer-logo{ width: clamp(64px, 7vw, 90px); height:auto; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,.18); }
  .fm-logo{ width: 56px; height:auto; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,.18); }

  /* TYPO desktop */
  .desk-heading{ font-weight:800; color:#fff; letter-spacing:.3px; font-size: clamp(1.1rem, 1.6vw, 1.5rem); }
  .footer-text{ color:#f5fffa; opacity:.95; font-size: clamp(.95rem, 1.1vw, 1.05rem); line-height:1.55; }

  /* bar bawah */
  .footer-bar{ background: var(--brand-green-dk); color:#fff; }
  .footer-bar-link{ color:#ffd54f; text-decoration:none; }
  .footer-bar-link:hover{ text-decoration: underline; }

  /* ikon medsos */
  .footer-icon{ color:#fff; opacity:.9; font-size:1.1rem; }
  .footer-icon:hover{ opacity:1; }

  /* ========== MOBILE accordion ========== */
  .fm-title{ font-weight:800; font-size:1.05rem; line-height:1.1; }
  .fm-sub{ opacity:.95; font-size:.9rem; line-height:1.15; }

  .acc-btn{
    width:100%; background:transparent; border:0; outline:0; color:#fff;
    padding:.85rem .25rem; display:flex; align-items:center; gap:.75rem;
    border-bottom:1px solid rgba(0,0,0,.12);
  }
  .acc-btn .ico{
    width:36px; height:36px; border-radius:50%; display:grid; place-items:center;
    background: rgba(0,0,0,.12); flex:0 0 36px;
  }
  .acc-btn .txt{ font-weight:700; font-size:.98rem; letter-spacing:.2px; }
  .acc-btn .chev{ margin-left:auto; opacity:.9; transition: transform .2s; }
  .acc-btn:not(.collapsed) .chev{ transform: rotate(180deg); }

  .acc-body{ list-style:none; padding:.6rem 0 .9rem 3rem; margin:0; display:grid; gap:.4rem; }
  .acc-body a{ color:#fff; text-decoration:none; }
  .acc-body a:hover{ text-decoration: underline; }

  .powered{
    opacity:.95; font-size:.85rem; border-top:1px solid rgba(0,0,0,.12);
    padding-top:.75rem;
  }

  /* spacing kecil di HP */
  @media (max-width: 575.98px){
    .footer-green .container{ padding-left:.75rem; padding-right:.75rem; }
  }
</style>
