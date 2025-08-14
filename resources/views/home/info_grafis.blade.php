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

    <!-- Icon CDN (bisa lokal juga) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Chart.js Datalabels -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

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

    <!-- ==================== SECTION: DEMOGRAFI HEADER ==================== -->
    <section class="container-utama">
        <div class="header-row">
            <div class="header-left">
                <h1 class="judul-utama">DEMOGRAFI PENDUDUK</h1>
                <p class="subjudul">
                    Memberikan informasi lengkap mengenai karakteristik demografi penduduk suatu wilayah. Mulai dari
                    jumlah penduduk, usia, jenis kelamin, tingkat pendidikan, pekerjaan, agama, dan aspek penting
                    lainnya yang menggambarkan komposisi populasi secara rinci.
                </p>
            </div>
            <div class="header-right">
                <img src="home/img/chart-3d.png" alt="Demografi Ilustrasi" />
            </div>
        </div>
    </section>
    <!-- ==================== END SECTION ==================== -->

    <!-- ==================== SECTION: STATISTIK GRID ==================== -->
    <section class="container-utama">
        <h2 class="judul-section">Jumlah Penduduk dan Kepala Keluarga</h2>
        <div class="stat-grid">
            <div class="stat-card">
                <img src="icon/keluarga.png" alt="Total Penduduk" class="stat-icon">
                <div>
                    <div class="stat-label">TOTAL PENDUDUK</div>
                    <div><span class="stat-jumlah">1.149</span> <span class="stat-unit">Jiwa</span></div>
                </div>
            </div>
            <div class="stat-card">
                <img src="icon/kepala-keluarga.png" alt="Kepala Keluarga" class="stat-icon">
                <div>
                    <div class="stat-label">KEPALA KELUARGA</div>
                    <div><span class="stat-jumlah">304</span> <span class="stat-unit">Jiwa</span></div>
                </div>
            </div>
            <div class="stat-card">
                <img src="icon/perempuan.png" alt="Perempuan" class="stat-icon">
                <div>
                    <div class="stat-label">PEREMPUAN</div>
                    <div><span class="stat-jumlah">543</span> <span class="stat-unit">Jiwa</span></div>
                </div>
            </div>
            <div class="stat-card">
                <img src="icon/laki-laki.png" alt="Laki-laki" class="stat-icon">
                <div>
                    <div class="stat-label">LAKI-LAKI</div>
                    <div><span class="stat-jumlah">606</span> <span class="stat-unit">Jiwa</span></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== END SECTION ==================== -->

    <!-- ==================== SECTION: UMUR BAR CHART ==================== -->
    <section class="container-utama">
        <h2 class="judul-section">Berdasarkan Kelompok Umur</h2>
        <div class="card-flex">
            <div class="card chart-wrap">
                <canvas id="umurChart"></canvas>
            </div>
        </div>
        <div class="info-row">
            <div class="info-card green">
                Laki-laki tertinggi <b>10-14</b>: <b>79 orang</b> (13.04%), terendah <b>85+</b>: <b>4 orang</b> (0.66%)
            </div>
            <div class="info-card pink">
                Perempuan tertinggi <b>10-14</b>: <b>58 orang</b> (10.68%), terendah <b>80-84</b>: <b>2 orang</b>
                (0.37%)
            </div>
        </div>
    </section>
    <!-- ==================== END SECTION ==================== -->

    <!-- ==================== SECTION: DUSUN PIE ==================== -->
    <section class="container-utama">
        <h2 class="judul-section">Berdasarkan Dusun</h2>
        <div class="dusun-row">
            <div class="dusun-pie">
                <canvas id="dusunPie"></canvas>
            </div>
            <div class="dusun-keterangan">
                <b>Keterangan:</b><br>
                Empang : <span class="text-green">302 Jiwa</span><br>
                Padaelo : <span class="text-green">692 Jiwa</span>
            </div>
        </div>
    </section>
    <!-- ==================== END SECTION ==================== -->

    <!-- ==================== SECTION: PENDIDIKAN BAR ==================== -->
    <section class="container-utama">
        <h2 class="judul-section">Berdasarkan Pendidikan</h2>
        <div class="chart-wrap">
            <canvas id="pendidikanChart"></canvas>
        </div>
    </section>
    <!-- ==================== END SECTION ==================== -->

    <!-- ==================== SECTION: PEKERJAAN TABEL + 6 BOX ==================== -->
    <section class="container-utama">
        <h2 class="judul-section">Berdasarkan Pekerjaan</h2>
        <div class="pekerjaan-flex">
            <div class="pekerjaan-tabel">
                <table>
                    <thead>
                        <tr>
                            <th>Jenis Pekerjaan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pelajar/Mahasiswa</td>
                            <td>323</td>
                        </tr>
                        <tr>
                            <td>Mengurus Rumah Tangga</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td>Belum/Tidak Bekerja</td>
                            <td>268</td>
                        </tr>
                        <tr>
                            <td>Karyawan Swasta</td>
                            <td>118</td>
                        </tr>
                        <tr>
                            <td>Nelayan/Perikanan</td>
                            <td>51</td>
                        </tr>
                        <tr>
                            <td>Petani/Pekebun</td>
                            <td>38</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pekerjaan-6box">
                <div class="stat-card pekerjaan">Pelajar/Mahasiswa<div class="stat-jumlah">323</div>
                </div>
                <div class="stat-card pekerjaan">Mengurus Rumah Tangga<div class="stat-jumlah">270</div>
                </div>
                <div class="stat-card pekerjaan">Belum/Tidak Bekerja<div class="stat-jumlah">268</div>
                </div>
                <div class="stat-card pekerjaan">Karyawan Swasta<div class="stat-jumlah">118</div>
                </div>
                <div class="stat-card pekerjaan">Nelayan/Perikanan<div class="stat-jumlah">51</div>
                </div>
                <div class="stat-card pekerjaan">Petani/Pekebun<div class="stat-jumlah">38</div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== END SECTION ==================== -->

    <!-- ==================== SECTION: WAJIB PILIH ==================== -->
    <section class="container-utama">
        <h2 class="judul-section">Berdasarkan Wajib Pilih</h2>
        <div class="chart-wrap">
            <canvas id="chartWajibPilih"></canvas>
        </div>
    </section>
    <!-- ==================== END SECTION ==================== -->

    <!-- ================== SECTION: PERKAWINAN ================== -->
    <section class="container-utama">
        <h2 class="judul-section">Berdasarkan Perkawinan</h2>
        <div class="perkawinan-6box">
            <div class="stat-card perkawinan">Belum Kawin<div class="stat-jumlah">620</div>
            </div>
            <div class="stat-card perkawinan">Kawin<div class="stat-jumlah">454</div>
            </div>
            <div class="stat-card perkawinan">Cerai Mati<div class="stat-jumlah">69</div>
            </div>
            <div class="stat-card perkawinan">Cerai Hidup<div class="stat-jumlah">3</div>
            </div>
            <div class="stat-card perkawinan">Kawin Tercatat<div class="stat-jumlah">2</div>
            </div>
            <div class="stat-card perkawinan">Kawin Tidak Tercatat<div class="stat-jumlah">0</div>
            </div>
        </div>
    </section>
    <!-- =============== END SECTION: PERKAWINAN ================= -->


    <!-- ================== SECTION: AGAMA ================== -->
    <section class="container-utama">
        <h2 class="judul-section">Berdasarkan Agama</h2>
        <div class="agama-7box">
            <div class="stat-card agama">Islam<div class="stat-jumlah">1.149</div>
            </div>
            <div class="stat-card agama">Buddha<div class="stat-jumlah">0</div>
            </div>
            <div class="stat-card agama">Konghucu<div class="stat-jumlah">0</div>
            </div>
            <div class="stat-card agama">Kristen<div class="stat-jumlah">0</div>
            </div>
            <div class="stat-card agama">Katolik<div class="stat-jumlah">0</div>
            </div>
            <div class="stat-card agama">Hindu<div class="stat-jumlah">0</div>
            </div>
        </div>
    </section>
    <!-- =============== END SECTION: AGAMA ================= -->


    <style>
        body {
            background: #fafafa;
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #222;
        }

        .container-utama {
            width: 92vw;
            max-width: 1200px;
            margin: 2.2rem auto 2.5rem auto;
            background: #fff;
            border-radius: 22px;
            padding: 2.3rem 2.6rem 2.6rem 2.6rem;
            box-shadow: 0 3px 26px 0 rgba(32, 64, 32, .10);
        }

        .header-row {
            display: flex;
            align-items: center;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .header-left {
            flex: 1;
        }

        .header-right img {
            width: 360px;
            max-width: 35vw;
            display: block;
        }

        .judul-utama {
            color: #f65555;
            font-family: 'Roboto Slab', serif;
            font-size: 2.6rem;
            margin-bottom: .8rem;
            font-weight: 800;
        }

        .judul-section {
            color: #f65555;
            font-family: 'Roboto Slab', serif;
            font-size: 2rem;
            margin-bottom: 1.2rem;
            font-weight: 800;
        }

        .subjudul {
            font-size: 1.13rem;
            color: #181818;
        }

        .stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2.2rem;
            margin: 1.5rem 0 1.2rem 0;
        }

        .stat-card {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 1.2rem;
            background: #f8faf8;
            border-radius: 16px;
            padding: 1.5rem 1.5rem;
            box-shadow: 0 2px 12px 0 rgba(32, 64, 32, .07);
            font-size: 1.15rem;
            min-width: 170px;
            min-height: 92px;
            justify-content: flex-start;
        }

        .stat-card.pekerjaan,
        .stat-card.perkawinan,
        .stat-card.agama {
            flex-direction: column;
            gap: .5rem;
            text-align: center;
            align-items: center;
            justify-content: center;
            min-width: 120px;
        }

        .stat-label {
            color: #555;
            letter-spacing: 1px;
            font-weight: 500;
            margin-bottom: .18rem;
        }

        .stat-jumlah {
            color: #166138;
            font-family: 'Roboto Slab', serif;
            font-size: 2.15rem;
            font-weight: 800;
        }

        .stat-unit {
            color: #555;
            font-size: 1.06rem;
            margin-left: 3px;
        }

        .stat-icon {
            width: 64px;
            height: 64px;
            object-fit: contain;
        }

        .card-flex {
            display: flex;
            justify-content: center;
        }

        .card.chart-wrap {
            background: #f8faf8;
            padding: 2rem 2rem 1.5rem 2rem;
            border-radius: 16px;
            width: 100%;
            box-shadow: 0 2px 12px 0 rgba(32, 64, 32, .06);
            min-height: 320px;
            max-width: 760px;
        }

        .info-row {
            display: flex;
            gap: 1.2rem;
            margin-top: 1.1rem;
            flex-wrap: wrap;
        }

        .info-card {
            background: #e6f2e6;
            border-radius: 9px;
            padding: .9rem 1.5rem;
            font-size: 1.08rem;
            color: #1b5639;
            font-weight: 500;
            flex: 1;
        }

        .info-card.pink {
            background: #ffe6e2;
            color: #d94300;
        }

        .info-card.green {
            background: #e6f2e6;
            color: #1b5639;
        }

        .dusun-row {
            display: flex;
            align-items: center;
            gap: 2.2rem;
            flex-wrap: wrap;
        }

        .dusun-pie {
            flex: 1 1 320px;
            max-width: 480px;
        }

        .dusun-keterangan {
            flex: 1 1 220px;
            font-size: 1.2rem;
            font-family: 'Roboto', Arial, sans-serif;
            color: #222;
            line-height: 2.1;
        }

        .text-green {
            color: #166138;
            font-weight: 600;
        }

        .chart-wrap {
            width: 100%;
            min-height: 320px;
            background: #f8faf8;
            border-radius: 13px;
            padding: 2rem;
            box-shadow: 0 2px 12px 0 rgba(32, 64, 32, .06);
        }

        .pekerjaan-flex {
            display: flex;
            gap: 2.4rem;
            flex-wrap: wrap;
        }

        .pekerjaan-tabel {
            flex: 1 1 250px;
            min-width: 210px;
        }

        .pekerjaan-tabel table {
            width: 100%;
            border-collapse: collapse;
            font-size: 1.09rem;
            background: #fff;
            border-radius: 13px;
            overflow: hidden;
        }

        .pekerjaan-tabel th {
            background: #f65555;
            color: #fff;
            font-weight: 700;
            text-align: left;
            padding: 1rem .8rem;
        }

        .pekerjaan-tabel td {
            padding: .9rem .8rem;
            border-bottom: 1px solid #f2f2f2;
        }

        .pekerjaan-tabel tr:last-child td {
            border-bottom: none;
        }

        .pekerjaan-6box {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.3rem;
            flex: 2 1 380px;
            min-width: 270px;
        }

        .perkawinan-6box,
        .agama-7box {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1.2rem;
            margin: 1.5rem 0 2.3rem 0;
        }

        .perkawinan-6box .stat-card,
        .agama-7box .stat-card {
            min-width: 120px;
        }

        @media (max-width: 900px) {
            .container-utama {
                padding: 1.5rem 1rem;
            }

            .header-right img {
                width: 210px;
            }

            .stat-grid,
            .perkawinan-6box,
            .agama-7box {
                gap: 1rem;
            }

            .dusun-row,
            .pekerjaan-flex {
                flex-direction: column;
                gap: 1.1rem;
            }

            .dusun-pie {
                max-width: 100%;
            }
        }

        @media (max-width: 600px) {
            .header-row {
                flex-direction: column;
                gap: 1.2rem;
            }

            .judul-utama,
            .judul-section {
                font-size: 1.35rem;
            }

            .stat-card,
            .stat-card.pekerjaan,
            .stat-card.perkawinan,
            .stat-card.agama {
                min-width: 100px;
                font-size: .99rem;
            }
        }
    </style>


    <!-- Tambahkan Chart.js di atas script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('chartWajibPilih').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['2023', '2024', '2025'],
                datasets: [{
                    label: '',
                    data: [784, 808, 831],
                    backgroundColor: '#a80000',
                    borderRadius: 10,
                    barPercentage: 0.5,
                    categoryPercentage: 0.7,
                }]
            },
            options: {
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: true },
                    datalabels: {
                        color: '#222',
                        anchor: 'end',
                        align: 'start',
                        font: { weight: 700, size: 16 }
                    }
                },
                scales: {
                    x: {
                        grid: { display: false },
                        ticks: { font: { size: 17 } }
                    },
                    y: {
                        beginAtZero: true,
                        grid: { color: '#f0f0f0', lineWidth: 2 },
                        ticks: { stepSize: 200, font: { size: 17 } }
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    </script>




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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('umurChart').getContext('2d');
        const umurLabels = [
            "0-4", "5-9", "10-14", "15-19", "20-24", "25-29", "30-34", "35-39",
            "40-44", "45-49", "50-54", "55-59", "60-64", "65-69", "70-74", "75-79", "80-84", "85+"
        ];
        const dataL = [20, 52, 79, 69, 62, 52, 55, 41, 25, 18, 8, 6, 9, 5, 5, 5, 4, 4];
        const dataP = [20, 45, 58, 51, 57, 54, 38, 43, 38, 37, 21, 20, 6, 10, 10, 4, 2, 5];

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: umurLabels,
                datasets: [
                    {
                        label: 'Laki-Laki',
                        data: dataL,
                        backgroundColor: '#166138',
                        borderRadius: 8,
                        borderSkipped: false
                    },
                    {
                        label: 'Perempuan',
                        data: dataP,
                        backgroundColor: '#ffbea9',
                        borderRadius: 8,
                        borderSkipped: false
                    }
                ]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: { font: { size: 13 } }
                    },
                    tooltip: {
                        callbacks: {
                            label: (ctx) => `${ctx.dataset.label}: ${ctx.parsed.x} orang`
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        grid: { color: "#eee" },
                        title: { display: false }
                    },
                    y: {
                        grid: { display: false },
                        title: { display: false }
                    }
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const dusunPie = document.getElementById('dusunPie').getContext('2d');
        new Chart(dusunPie, {
            type: 'pie',
            data: {
                labels: ['Empang', 'Padaelo'],
                datasets: [{
                    data: [302, 692],
                    backgroundColor: [
                        '#5572c9',   // biru empang
                        '#92cd74'    // hijau padaelo (bisa ganti ke #166138 jika ingin hijau tua)
                    ],
                    borderColor: "#fff",
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: ctx => ctx.label + ': ' + ctx.parsed + ' (' + (ctx.parsed * 100 / 994).toFixed(2) + '%)'
                        }
                    }
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script>
        const ctx = document.getElementById('pendidikanChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    'Tidak/Belum Sekolah', 'Belum Tamat SD/Sederajat', 'Tamat SD/Sederajat',
                    'SLTP/Sederajat', 'SLTA/Sederajat', 'Diploma I/II',
                    'Diploma III/Sarjana Muda', 'Diploma IV/Strata I', 'Strata II', 'Strata III'
                ],
                datasets: [{
                    data: [173, 201, 285, 140, 287, 22, 13, 26, 2, 0],
                    backgroundColor: '#a40000', // merah tua
                    borderRadius: 3,
                    maxBarThickness: 70
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    datalabels: {
                        anchor: 'end',
                        align: 'start',
                        color: '#222',
                        font: { weight: 'bold', size: 16 }
                    }
                },
                scales: {
                    x: {
                        ticks: { color: '#555', font: { size: 15 }, maxRotation: 0, minRotation: 0 }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: { color: '#aaa', font: { size: 14 } }
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
    </script>




</body>

</html>