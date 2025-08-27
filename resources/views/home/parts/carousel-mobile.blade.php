{{-- MOBILE-ONLY --}}
<div class="d-block d-md-none">
  <div class="container-fluid p-0">
    <div id="header-carousel"
         class="carousel slide carousel-hero"
         data-bs-ride="carousel" data-bs-interval="6000" data-bs-touch="true"
         aria-label="Berita Utama">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100 d-block carousel-img"
               src="{{ asset('home/img/carousel/5.jpg') }}"
               alt="Banner HUT RI">

          <div class="carousel-caption d-md-none mobile-cap-wrap"></div>
        </div>
        {{-- … slide lain --}}
      </div>

      {{-- … arrows kalau perlu --}}
    </div>

    <style>
      :root{
        --brand-green:#166138;
        --mob-rect: clamp(200px, 50vw, 260px);
        --nav-gap-mobile: 80px;
      }
      /* desktop rules boleh tetap ada; elemen disembunyikan oleh d-md-none */
      .carousel-hero .carousel-item,
      .carousel-hero .carousel-img{ height:100vh; object-fit:cover; object-position:center; }

      @media (max-width: 767.98px){
        .carousel-hero{
          margin: calc(var(--nav-gap-mobile)) 12px 12px;
          border-radius: 18px; overflow:hidden;
          box-shadow: 0 10px 26px rgba(0,0,0,.18);
          height: var(--mob-rect) !important; position: relative;
        }
        .carousel-hero .carousel-inner,
        .carousel-hero .carousel-item{ height: var(--mob-rect) !important; }
        .carousel-hero .carousel-img{
          position:absolute; inset:0; width:100% !important; height:100% !important;
          object-fit: cover; object-position: center;
        }
      }
    </style>
  </div>
</div>
