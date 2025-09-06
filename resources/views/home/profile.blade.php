<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sirih Sekapur Perkembangan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('home/img/lambang-Kabupaten-Bungo.png')}}" type="image/x-icon" />

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

    <!-- carousel -->
    @include('home.parts.carousel-mobile')

    <section class="container-xxl py-5">

        {{-- inject teks sejarah sekali, dipakai mobile & desktop --}}
        @php
            $sejarah = "Wilayah yang kini bernama Sirih Sekapur Perkembangan dahulu dikenal sebagai Tukum 3. Pada Desember 2011 wilayah ini dimekarkan dari Desa Sirih Sekapur dan resmi berganti nama menjadi Sirih Sekapur Perkembangan. Tokoh yang banyak disebut dalam fase awal adalah Alm. Zulfikar (Pak Icun), sementara Datuk Rio pertama dijabat oleh Deni Nofrizan, S.E.

            Sebelum pemekaran, mata pencaharian warga didominasi oleh petani padi, sesudahnya beralih ke komoditas karet dan kemudian mulai merambah ke pertanian kelapa sawit. Pada masa sebelumnya di Kecamatan Jujuhan, kawasan ini terdiri atas beberapa dusun antara lain Sirih Sekapur dan Rantau Ikil. Hasil pemekaran membuat Sirih Sekapur terbagi menjadi dua desa, yakni Perkembangan dan Ujung Lanjung. Meski bukan daerah transmigrasi, komposisi penduduknya banyak berlatar etnis Jawa, namun tradisi sosial-budaya tetap berpegang pada adat Melayu Jambi.";
          @endphp

        {{-- ========== MOBILE ACCORDION (SHOW ONLY ON MOBILE) ========== --}}
        <div class="d-md-none">
            <div class="mm-accordion" id="profilDesaAcc">

                {{-- VISI --}}
                <button class="mm-item collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accVisi"
                    aria-expanded="false" aria-controls="accVisi">
                    <span class="mm-text">Visi</span>
                    <span class="mm-chevron" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </span>
                </button>
                <div id="accVisi" class="collapse" data-bs-parent="#profilDesaAcc">
                    <div class="mm-body">
                        “Desa Kersik sebagai Desa Wisata yang mampu mengelolah potensi Desa dan pembangunan
                        berkelanjutan untuk mewujudkan masyarakat yang sejahtera”.
                    </div>
                </div>

                {{-- MISI --}}
                <button class="mm-item collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accMisi"
                    aria-expanded="false" aria-controls="accMisi">
                    <span class="mm-text">Misi</span>
                    <span class="mm-chevron" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </span>
                </button>
                <div id="accMisi" class="collapse" data-bs-parent="#profilDesaAcc">
                    <div class="mm-body">
                        <ol class="mm-list">
                            <li>Mewujudkan tata kelola pemerintahan yang baik.</li>
                            <li>Mengembangkan kegiatan keagamaan.</li>
                            <li>Meningkatkan kualitas pendidikan dan sumber daya manusia.</li>
                            <li>Mengembangkan teknologi informasi.</li>
                            <li>Pembangunan infrastruktur, sarana dan prasarana.</li>
                        </ol>
                    </div>
                </div>

                {{-- BAGAN DESA --}}
                <button class="mm-item collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accBagan"
                    aria-expanded="false" aria-controls="accBagan">
                    <span class="mm-text">Bagan Desa</span>
                    <span class="mm-chevron" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </span>
                </button>
                <div id="accBagan" class="collapse" data-bs-parent="#profilDesaAcc">
                    <div class="mm-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="mm-imgwrap">
                                    <img class="img-fluid rounded-3"
                                        src="{{ asset('home/img/bagan-desa/sotk.jpg') }}"
                                        alt="Struktur Organisasi Pemerintahan Desa">
                                </div>
                                <div class="mm-caption">Struktur Organisasi Pemerintahan Desa</div>
                            </div>
                            <div class="col-12">
                                <div class="mm-imgwrap">
                                    <img class="img-fluid rounded-3" src="{{ asset('home/img/bagan-desa/bpd.jpg') }}"
                                        alt="Struktur Organisasi BPD">
                                </div>
                                <div class="mm-caption">Struktur Organisasi Badan Permusyawaratan Desa</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SEJARAH DESA --}}
                <button class="mm-item collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accSejarah"
                    aria-expanded="false" aria-controls="accSejarah">
                    <span class="mm-text">Sejarah Desa</span>
                    <span class="mm-chevron" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </span>
                </button>
                <div id="accSejarah" class="collapse" data-bs-parent="#profilDesaAcc">
                    <div class="mm-body">
                        @if(!empty($sejarah))
                            <p class="mb-0">  {!! nl2br(e($sejarah)) !!}</p>
                        @else
                            <div class="mm-empty">
                                <img src="{{ asset('home/img/placeholder-empty.png') }}" alt="" class="mm-empty-img">
                                <span>Belum ada sejarah Desa</span>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>

        {{-- ========== DESKTOP/TABLET LAYOUT (HIDE ON MOBILE) ========== --}}
        <div class="d-none d-md-block">
            {{-- Visi & Misi --}}
            <div class="row g-4 align-items-start mb-5">
                <div class="col-md-6">
                    <div class="card-soft p-4 h-100">
                        <h2 class="section-title mb-3" style="color:#166138;">Visi</h2>
                        <p class="mb-0">
                            “Desa Kersik sebagai Desa Wisata yang mampu mengelolah potensi Desa dan pembangunan
                            berkelanjutan untuk mewujudkan masyarakat yang sejahtera”.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-soft p-4 h-100">
                        <h2 class="section-title mb-3" style="color:#166138;">Misi</h2>
                        <ol class="mb-0 ps-3">
                            <li class="mb-1">Mewujudkan tata kelola pemerintahan yang baik.</li>
                            <li class="mb-1">Mengembangkan kegiatan keagamaan.</li>
                            <li class="mb-1">Meningkatkan kualitas pendidikan dan sumber daya manusia.</li>
                            <li class="mb-1">Mengembangkan teknologi informasi.</li>
                            <li class="mb-0">Pembangunan infrastruktur, sarana dan prasarana.</li>
                        </ol>
                    </div>
                </div>
            </div>

            {{-- Bagan Desa --}}
            <div class="mb-5">
                <h2 class="section-title mb-3" style="color:#166138;">Bagan Desa</h2>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="card-soft p-3">
                            <div class="fw-semibold mb-2">Struktur Organisasi Pemerintahan Desa</div>
                            <img class="img-fluid rounded-3" src="{{ asset('home/img/bagan-desa/sotk.jpg') }}"
                                alt="Struktur Organisasi Pemerintahan Desa">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-soft p-3">
                            <div class="fw-semibold mb-2">Struktur Organisasi Badan Permusyawaratan Desa</div>
                            <img class="img-fluid rounded-3" src="{{ asset('home/img/bagan-desa/bpd.jpg') }}"
                                alt="Struktur Organisasi BPD">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sejarah Desa --}}
            <div class="mb-5">
                <h2 class="section-title mb-3" style="color:#166138;">Sejarah Desa Kersik</h2>
                @if(!empty($sejarah))
                    <p class="mb-0">{{ $sejarah }}</p>
                @else
                    <div class="mm-empty card-soft p-4">
                        <img src="{{ asset('home/img/placeholder-empty.png') }}" alt="" class="mm-empty-img">
                        <span>Belum ada sejarah Desa</span>
                    </div>
                @endif
            </div>

            {{-- Lokasi Desa --}}
            <div class="mb-4">
                <h2 class="section-title mb-3" style="color:#166138;">Peta Lokasi Desa</h2>
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="card-soft p-4 h-100">
                            <h5 class="mb-3">Batas Desa:</h5>
                            <div class="row">
                                <div class="col-6">
                                    <b>Utara</b>
                                    <p>Dusun Sirih Sekapur</p>
                                    <b>Selatan</b>
                                    <p>Dusun Ujung Tanjung</p>
                                </div>
                                <div class="col-6">
                                    <b>Timur</b>
                                    <p>Dusun Rantau Ikil</p>
                                    <b>Barat</b>
                                    <p>Dusun Rantau Panjang</p>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between"><span><b>Luas Desa:</b></span><span>6,92 km<sup>2</sup></span></div>
                            <hr>
                            <div class="d-flex justify-content-between"><span><b>Jumlah Penduduk:</b></span><span>1.149
                                    Jiwa</span></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-soft p-2">
                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://maps.google.com/maps?q=loc:-1.238648,101.744055&z=16&t=k&hl=id&output=embed"
                                    style="border:0; width:100%; height:100%; border-radius:12px;" loading="lazy"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> {{-- /desktop --}}

        <style>
            :root {
                --brand-green: #166138;
                --card-bg: #ffffff;
                --card-soft: #f7f7f7;
            }

            /* ===== Mobile Accordion styles ===== */
            .mm-accordion {
                display: grid;
                gap: .75rem;
            }

            .mm-item {
                width: 100%;
                border: 0;
                outline: 0;
                background: #fff;
                padding: .95rem 1rem;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                box-shadow: 0 4px 16px rgba(0, 0, 0, .06);
                font-weight: 700;
                color: #111;
                letter-spacing: .2px;
            }

            .mm-item .mm-text {
                font-size: 1rem;
            }

            .mm-item .mm-chevron svg {
                transition: transform .2s ease;
                opacity: .9;
            }

            .mm-item:not(.collapsed) .mm-chevron svg {
                transform: rotate(180deg);
            }

            .mm-body {
                background: #fff;
                margin-top: .5rem;
                border-radius: 12px;
                padding: .95rem 1rem;
                box-shadow: 0 6px 20px rgba(0, 0, 0, .06);
                font-size: .96rem;
                color: #222;
            }

            .mm-list {
                margin: 0;
            }

            .mm-imgwrap {
                background: #fafafa;
                border-radius: 12px;
                padding: 6px;
                border: 1px dashed #e5e5e5;
            }

            .mm-caption {
                font-size: .9rem;
                color: #555;
                margin-top: .35rem;
            }

            .mm-empty {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: .5rem;
                color: #666;
            }

            .mm-empty-img {
                width: 72px;
                opacity: .8;
            }

            /* ===== Desktop cards ===== */
            .card-soft {
                background: var(--card-soft);
                border-radius: 14px;
                box-shadow: 0 4px 18px rgba(0, 0, 0, .06);
            }

            .section-title {
                font-weight: 800;
                letter-spacing: .2px;
            }

            @media (max-width:575.98px) {
                .mm-item {
                    padding: .9rem .9rem;
                }

                .mm-body {
                    padding: .9rem .9rem;
                }
            }
        </style>
    </section>



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