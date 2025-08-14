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
   
    <!-- ==================== HEADER / HERO ==================== -->
<section class="container-utama">
  <div class="header-row">
    <div class="header-left">
      <h1 class="judul-utama">DEMOGRAFI PENDUDUK</h1>
      <p class="subjudul">
        Memberikan informasi lengkap mengenai karakteristik demografi penduduk: jumlah penduduk, usia, jenis
        kelamin, pendidikan, pekerjaan, agama, dan aspek penting lain yang menggambarkan komposisi populasi.
      </p>
    </div>
    <div class="header-right">
      <img src="{{ asset('home/img/chart-3d.png') }}" alt="Demografi Ilustrasi">
    </div>
  </div>
</section>

<!-- ==================== STAT KARTU 2x2 ==================== -->
<section class="container-utama">
  <h2 class="judul-section">Jumlah Penduduk dan Kepala Keluarga</h2>

  <div class="stat-grid">
    <div class="stat-card">
      <img src="{{ asset('home/icon/keluarga.png') }}" class="stat-icon" alt="">
      <div>
        <div class="stat-label">TOTAL PENDUDUK</div>
        <div><span class="stat-jumlah">1.149</span> <span class="stat-unit">Jiwa</span></div>
      </div>
    </div>

    <div class="stat-card">
      <img src="{{ asset('home/icon/kepala-keluarga.png') }}" class="stat-icon" alt="">
      <div>
        <div class="stat-label">KEPALA KELUARGA</div>
        <div><span class="stat-jumlah">304</span> <span class="stat-unit">KK</span></div>
      </div>
    </div>

    <div class="stat-card">
      <img src="{{ asset('home/icon/laki-laki.png') }}" class="stat-icon" alt="">
      <div>
        <div class="stat-label">LAKI-LAKI</div>
        <div><span class="stat-jumlah">606</span> <span class="stat-unit">Jiwa</span></div>
      </div>
    </div>

    <div class="stat-card">
      <img src="{{ asset('home/icon/perempuan.png') }}" class="stat-icon" alt="">
      <div>
        <div class="stat-label">PEREMPUAN</div>
        <div><span class="stat-jumlah">543</span> <span class="stat-unit">Jiwa</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== BAR: KELOMPOK UMUR ==================== -->
<section class="container-utama">
  <h2 class="judul-section">Berdasarkan Kelompok Umur</h2>

  <div class="card chart-wrap">
    <canvas id="umurChart" height="360"></canvas>
  </div>

  <div class="info-row">
    <div class="info-card green">
      Laki-laki tertinggi <b>10–14</b>: <b>81 orang</b> (≈13.4%), terendah <b>85+</b>: <b>4 orang</b> (≈0.66%).
    </div>
    <div class="info-card green-ghost">
      Perempuan tertinggi <b>10–14</b>: <b>58 orang</b> (≈10.7%), terendah <b>80–84</b>: <b>2 orang</b> (≈0.37%).
    </div>
  </div>
</section>

<!-- ==================== PIE: DUSUN ==================== -->
<section class="container-utama">
  <h2 class="judul-section">Berdasarkan Dusun</h2>

  <div class="dusun-row">
    <div class="dusun-pie">
      <canvas id="dusunPie" height="300"></canvas>
    </div>
    <div class="dusun-keterangan">
      <b>Keterangan:</b><br>
      Padaelo : <span class="text-green">692 Jiwa</span> (≈69.6%)<br>
      Empang  : <span class="text-green">302 Jiwa</span> (≈30.4%)
    </div>
  </div>
</section>

<!-- ==================== BAR: PENDIDIKAN ==================== -->
<section class="container-utama">
  <h2 class="judul-section">Berdasarkan Pendidikan</h2>
  <div class="chart-wrap">
    <canvas id="pendidikanChart" height="360"></canvas>
  </div>
</section>

<!-- ==================== PEKERJAAN: TABEL + 6 KARTU ==================== -->
<section class="container-utama">
  <h2 class="judul-section">Berdasarkan Pekerjaan</h2>

  <div class="pekerjaan-flex">
    <div class="pekerjaan-tabel">
      <table>
        <thead>
          <tr>
            <th>Jenis Pekerjaan</th>
            <th class="text-end">Jumlah</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Pelajar/Mahasiswa</td><td class="text-end">323</td></tr>
          <tr><td>Mengurus Rumah Tangga</td><td class="text-end">270</td></tr>
          <tr><td>Belum/Tidak Bekerja</td><td class="text-end">268</td></tr>
          <tr><td>Karyawan Swasta</td><td class="text-end">118</td></tr>
          <tr><td>Nelayan/Perikanan</td><td class="text-end">51</td></tr>
          <tr><td>Petani/Pekebun</td><td class="text-end">38</td></tr>
        </tbody>
      </table>
    </div>

    <div class="pekerjaan-6box">
      <div class="stat-card pekerjaan">Pelajar/Mahasiswa<div class="stat-jumlah">323</div></div>
      <div class="stat-card pekerjaan">Mengurus Rumah Tangga<div class="stat-jumlah">270</div></div>
      <div class="stat-card pekerjaan">Belum/Tidak Bekerja<div class="stat-jumlah">268</div></div>
      <div class="stat-card pekerjaan">Karyawan Swasta<div class="stat-jumlah">118</div></div>
      <div class="stat-card pekerjaan">Nelayan/Perikanan<div class="stat-jumlah">51</div></div>
      <div class="stat-card pekerjaan">Petani/Pekebun<div class="stat-jumlah">38</div></div>
    </div>
  </div>
</section>

<!-- ==================== BAR: WAJIB PILIH ==================== -->
<section class="container-utama">
  <h2 class="judul-section">Berdasarkan Wajib Pilih</h2>
  <div class="chart-wrap">
    <canvas id="chartWajibPilih" height="320"></canvas>
  </div>
</section>

<!-- ==================== 6 BOX: PERKAWINAN ==================== -->
<section class="container-utama">
  <h2 class="judul-section">Berdasarkan Perkawinan</h2>

  <div class="perkawinan-6box">
    <div class="stat-card perkawinan">Belum Kawin<div class="stat-jumlah">620</div></div>
    <div class="stat-card perkawinan">Kawin<div class="stat-jumlah">454</div></div>
    <div class="stat-card perkawinan">Cerai Mati<div class="stat-jumlah">69</div></div>
    <div class="stat-card perkawinan">Cerai Hidup<div class="stat-jumlah">3</div></div>
    <div class="stat-card perkawinan">Kawin Tercatat<div class="stat-jumlah">2</div></div>
    <div class="stat-card perkawinan">Kawin Tidak Tercatat<div class="stat-jumlah">0</div></div>
  </div>
</section>

<!-- ==================== 6–7 BOX: AGAMA ==================== -->
<section class="container-utama">
  <h2 class="judul-section">Berdasarkan Agama</h2>

  <div class="agama-7box">
    <div class="stat-card agama">Islam<div class="stat-jumlah">1.149</div></div>
    <div class="stat-card agama">Kristen<div class="stat-jumlah">0</div></div>
    <div class="stat-card agama">Katolik<div class="stat-jumlah">0</div></div>
    <div class="stat-card agama">Hindu<div class="stat-jumlah">0</div></div>
    <div class="stat-card agama">Buddha<div class="stat-jumlah">0</div></div>
    <div class="stat-card agama">Konghucu<div class="stat-jumlah">0</div></div>
  </div>
</section>

<style>
  :root{
    --brand:#166138;
    --brand-700:#0f4a2c;
    --brand-200:#e8f3ec;
    --ink:#222;
    --muted:#555;
    --card:#ffffff;
    --card-soft:#f7faf7;
    --shadow:0 3px 26px rgba(32,64,32,.10);
  }

  body{background:#fafafa;color:var(--ink);font-family:Roboto,Arial,sans-serif;margin:0}

  .container-utama{
    width:min(1200px, 92vw);
    margin:2.2rem auto;
    background:var(--card);
    border-radius:22px;
    padding:2.3rem 2.6rem;
    box-shadow:var(--shadow);
  }

  .header-row{display:flex;align-items:center;gap:3rem;flex-wrap:wrap}
  .header-left{flex:1}
  .header-right img{width:360px;max-width:35vw;display:block}

  .judul-utama{
    color:var(--brand);font-family:"Roboto Slab",serif;
    font-weight:800;font-size:2.6rem;margin:.2rem 0 .8rem
  }
  .judul-section{
    color:var(--brand);font-family:"Roboto Slab",serif;
    font-weight:800;font-size:2rem;margin:0 0 1.2rem
  }
  .subjudul{font-size:1.08rem;color:#181818}

  .stat-grid{
    display:grid;gap:1.4rem;margin-top:1.2rem;
    grid-template-columns:repeat( auto-fit, minmax(220px,1fr) );
  }
  .stat-card{
    display:flex;align-items:center;gap:1rem;justify-content:flex-start;
    background:var(--card-soft);border-radius:16px;padding:1.1rem 1.3rem;
    box-shadow:0 2px 12px rgba(32,64,32,.07);min-height:92px
  }
  .stat-card.pekerjaan,.stat-card.perkawinan,.stat-card.agama{
    flex-direction:column;text-align:center;gap:.45rem;min-height:120px
  }
  .stat-label{color:var(--muted);letter-spacing:.5px;font-weight:500}
  .stat-jumlah{color:var(--brand);font-family:"Roboto Slab",serif;font-weight:800;font-size:2rem}
  .stat-unit{color:var(--muted);margin-left:4px}
  .stat-icon{width:60px;height:60px;object-fit:contain}

  .card{background:var(--card-soft);border-radius:16px;padding:1.4rem 1.4rem 1.1rem;box-shadow:0 2px 12px rgba(32,64,32,.06)}
  .chart-wrap{width:100%;min-height:320px}

  .info-row{display:flex;gap:1rem;margin-top:1rem;flex-wrap:wrap}
  .info-card{border-radius:10px;padding:.8rem 1rem;font-size:1rem;font-weight:500}
  .info-card.green{background:var(--brand-200);color:var(--brand-700)}
  .info-card.green-ghost{background:#f1f7f3;color:#2b5b3f}

  .dusun-row{display:flex;align-items:center;gap:2rem;flex-wrap:wrap}
  .dusun-pie{flex:1 1 320px;max-width:520px}
  .dusun-keterangan{flex:1 1 220px;font-size:1.06rem;line-height:2;color:var(--ink)}
  .text-green{color:var(--brand);font-weight:700}

  .pekerjaan-flex{display:flex;gap:2rem;flex-wrap:wrap}
  .pekerjaan-tabel{flex:1 1 280px;min-width:240px}
  .pekerjaan-tabel table{width:100%;border-collapse:collapse;font-size:1rem;background:#fff;border-radius:13px;overflow:hidden}
  .pekerjaan-tabel th{background:var(--brand);color:#fff;font-weight:700;text-align:left;padding:1rem .9rem}
  .pekerjaan-tabel td{padding:.85rem .9rem;border-bottom:1px solid #f0f0f0}
  .pekerjaan-tabel tr:last-child td{border-bottom:0}
  .pekerjaan-6box{
    flex:2 1 380px;display:grid;gap:1rem;
    grid-template-columns:repeat(3, 1fr);min-width:270px
  }
  .text-end{text-align:right}

  .perkawinan-6box,.agama-7box{
    display:grid;gap:1rem;margin:1.2rem 0 2.2rem;
    grid-template-columns:repeat( auto-fit, minmax(150px,1fr) );
  }

  /* ====== Responsive ====== */
  @media (max-width:900px){
    .container-utama{padding:1.5rem 1rem}
    .header-right img{width:220px;max-width:48vw}
    .pekerjaan-6box{grid-template-columns:repeat(2, 1fr)}
  }
  @media (max-width:600px){
    .header-row{flex-direction:column;gap:1rem}
    .judul-utama,.judul-section{font-size:1.35rem}
    .stat-card{min-height:86px}
    .stat-jumlah{font-size:1.6rem}
  }
</style>

<!-- ==================== SCRIPTS: CHART.JS ==================== -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Palet hijau
  const C_PRIMARY = '#166138';
  const C_PRIMARY_SOFT = 'rgba(22, 97, 56, .25)';
  const C_SECONDARY = '#6fb18f'; // nuansa hijau muda

  // ------- Umur (horizontal stacked) -------
  const umurLabels = ['85+','80-84','75-79','70-74','65-69','60-64','55-59','50-54','45-49','40-44','35-39','30-34','25-29','20-24','15-19','10-14','5-9','0-4'];
  const laki =  [4,2,5,8,10,12,18,25,37,55,44,43,49,53,57,81,44,20];
  const pr   =  [5,2,4,8,10,20,18,25,34,41,43,39,49,53,67,58,50,20];

  new Chart(document.getElementById('umurChart'), {
    type: 'bar',
    data: {
      labels: umurLabels,
      datasets: [
        { label: 'Laki-Laki', data: laki, backgroundColor: C_PRIMARY, borderRadius: 6, barThickness: 10 },
        { label: 'Perempuan', data: pr, backgroundColor: C_SECONDARY, borderRadius: 6, barThickness: 10 }
      ]
    },
    options: {
      indexAxis: 'y',
      plugins: {
        legend: { position: 'bottom', labels:{ usePointStyle:true } },
        tooltip: { enabled:true }
      },
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        x: { stacked:true, grid:{ color:'#f0f0f0' } },
        y: { stacked:true, grid:{ display:false } }
      }
    }
  });

  // ------- Dusun (pie) -------
  new Chart(document.getElementById('dusunPie'), {
    type: 'pie',
    data: {
      labels: ['Padaelo','Empang'],
      datasets: [ { data: [692, 302], backgroundColor: [C_PRIMARY, C_SECONDARY], borderWidth: 0 } ]
    },
    options: {
      plugins:{ legend:{ position:'bottom', labels:{ usePointStyle:true } } }
    }
  });

  // ------- Pendidikan (vertical bar) -------
  new Chart(document.getElementById('pendidikanChart'), {
    type: 'bar',
    data: {
      labels: ['Belum Tamat','SD/Setara','SMP/Setara','SMA/Setara','SMK/Setara','Diploma I/II','Diploma III','Diploma IV/S1','S2','S3'],
      datasets: [{
        data: [173,201,285,140,287,22,13,26,2,0],
        backgroundColor: C_PRIMARY, borderRadius: 8, barPercentage:.6, categoryPercentage:.75
      }]
    },
    options: {
      plugins:{ legend:{ display:false } },
      scales:{
        x:{ grid:{ display:false } },
        y:{ beginAtZero:true, grid:{ color:'#f0f0f0' } }
      },
      responsive:true, maintainAspectRatio:false
    }
  });

  // ------- Wajib Pilih (bar) -------
  new Chart(document.getElementById('chartWajibPilih'), {
    type: 'bar',
    data: {
      labels: ['2023','2024','2025'],
      datasets: [{ data:[784,808,831], backgroundColor:C_PRIMARY, borderRadius:10, barPercentage:.5, categoryPercentage:.7 }]
    },
    options: {
      plugins:{ legend:{ display:false } },
      scales:{
        x:{ grid:{ display:false } },
        y:{ beginAtZero:true, grid:{ color:'#f0f0f0' }, ticks:{ stepSize:200 } }
      },
      responsive:true, maintainAspectRatio:false
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