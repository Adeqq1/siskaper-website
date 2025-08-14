<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="{{ asset('admin/assets/img/kaiadmin/favicon.ico')}}" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="{{ asset('admin/assets/js/plugin/webfont/webfont.min.js')}}"></script>
  <script>
    WebFont.load({
      google: { families: ["Public Sans:300,400,500,600,700"] },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["{{ asset('admin/assets/css/fonts.min.css')}}"],
      },
      active: function () {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/css/plugins.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/css/kaiadmin.min.css')}}" />

  <!-- CSS Just for demo purpose, don't include it in your project -->

</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
      <div class="sidebar-logo">
        <!-- Logo Header -->
        @include ('admin.parts.head')
        <!-- End Logo Header -->
      </div>

      <!-- sidebar -->
      @include ('admin.parts.side_nav')
    </div>
    <!-- End Sidebar -->

    <div class="main-panel">
      <div class="main-header">
        <div class="main-header-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img src="{{ asset('admin/assets/img/kaiadmin/logo_light.svg')}}" alt="navbar brand" class="navbar-brand"
                height="20" />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>

        <!-- navbar -->
        @include ('admin.parts.navbar')

        <!-- end navbar -->

        {{-- === DASHBOARD CONTENT (place inside <div class="main-panel">) === --}}
          @php
      // fallback kalau tidak dipassing dari controller
      $stats = $stats ?? [
        'penduduk_total' => 0,
        'kk' => 0,
        'apbd_pendapatan' => 0,
        'berita_published' => 0,
      ];
      $trend = $trend ?? [
        'labels' => ['2019', '2020', '2021', '2022', '2023'],
        'data' => [1200, 1275, 1330, 1410, 1505],
      ];
      $queue = $queue ?? [
        ['label' => '2 draft berita menunggu publikasi', 'route' => route('berita.index')],
        ['label' => 'Lengkapi data Statistik tahun berjalan', 'route' => route('stat-penduduk.index')],
      ];
    @endphp

          <style>
            .stat-card {
              border-radius: 14px;
              box-shadow: 0 10px 24px rgba(17, 24, 39, .06);
              overflow: hidden;
              /* biar radius tidak “pecah” */
            }

            .stat-card .card-body {
              display: flex;
              align-items: center;
              gap: .75rem;
              padding: 14px 16px;
              /* konsisten */
              min-height: 84px;
              /* tinggi minimum sama */
            }

            .stat-card .icon {
              width: 42px;
              height: 42px;
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 12px;
              background: rgba(99, 102, 241, .12);
            }

            @media (max-width: 576px) {
              .row.stat-row {
                --bs-gutter-x: .75rem;
                --bs-gutter-y: .75rem;
              }
            }
          </style>

          <div class="container-fluid py-3" style="margin-top: 13vh;">

            @php
        use App\Models\StatPenduduk;
        use App\Models\Berita;

        $latest = StatPenduduk::orderByDesc('tahun')->first();
        $stats = [
          'penduduk_total' => $latest ? (int) (($latest->total ?? ($latest->laki_laki + $latest->perempuan))) : 0,
          'kk' => $latest->kk ?? 0,
          'berita_published' => Berita::where('status', 'published')->count(),
        ];
      @endphp

            {{-- Stat cards --}}
            <div class="row stat-row row-cols-2 row-cols-md-3 g-3 justify-content-center">
              <div class="col">
                <div class="card stat-card h-100">
                  <div class="card-body">
                    <div class="icon"><i class="fas fa-users"></i></div>
                    <div>
                      <div class="text-muted small">Total Penduduk</div>
                      <div class="h5 mb-0">{{ number_format($stats['penduduk_total']) }}</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card stat-card h-100">
                  <div class="card-body">
                    <div class="icon"><i class="fas fa-home"></i></div>
                    <div>
                      <div class="text-muted small">Jumlah KK</div>
                      <div class="h5 mb-0">{{ number_format($stats['kk']) }}</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card stat-card h-100">
                  <div class="card-body">
                    <div class="icon"><i class="fas fa-newspaper"></i></div>
                    <div>
                      <div class="text-muted small">Berita Published</div>
                      <div class="h5 mb-0">{{ number_format($stats['berita_published']) }}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{-- Grafik + To-do --}}
            <div class="row g-3 mt-1">
              <div class="col-lg-8 chart-lg">
                <div class="card">
                  <div class="card-body">
                    <h6 class="mb-3">Tren Penduduk 5 Tahun</h6>
                    <div style="height:320px">
                      <canvas id="trendChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header py-3">
                    <span class="fw-semibold">Butuh Tindakan</span>
                  </div>
                  <div class="card-body">
                    @if(count($queue))
                <ul class="list-group list-group-flush">
                  @foreach($queue as $q)
              <li class="list-group-item px-0 d-flex justify-content-between align-items-center">
              <span>{{ $q['label'] }}</span>
              <a href="{{ $q['route'] ?? '#' }}" class="btn btn-sm btn-outline-primary">Buka</a>
              </li>
            @endforeach
                </ul>
          @else
            <div class="text-muted">Semua beres. Mantap. 🎉</div>
          @endif
                  </div>
                </div>
              </div>
            </div>

            {{-- Aksi cepat --}}
            <div class="card mt-3">
              <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                  <a href="{{ route('berita.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus me-1"></i>
                    Tambah Berita</a>
                  <a href="{{ route('galeri-desa.create') }}" class="btn btn-primary btn-sm"><i
                      class="fas fa-image me-1"></i> Unggah Galeri</a>
                  <a href="{{ route('stat-penduduk.create') }}" class="btn btn-primary btn-sm"><i
                      class="fas fa-chart-bar me-1"></i> Update Statistik</a>
                  <a href="{{ route('sotk.create') }}" class="btn btn-primary btn-sm"><i
                      class="fas fa-user-friends me-1"></i> Tambah SOTK</a>
                </div>
              </div>
            </div>

          </div>

          {{-- Chart init (Chart.js sudah dimuat dari Kaiadmin plugin) --}}
          <script>
            (function () {
              const el = document.getElementById('chartPenduduk');
              if (!el || typeof Chart === 'undefined') return;
              const labels = JSON.parse(el.dataset.labels || '[]');
              const values = JSON.parse(el.dataset.values || '[]');

              new Chart(el, {
                type: 'line',
                data: {
                  labels,
                  datasets: [{
                    label: 'Penduduk',
                    data: values,
                    tension: 0.35,
                    fill: false,
                    borderWidth: 2,
                    pointRadius: 3,
                  }]
                },
                options: {
                  responsive: true,
                  maintainAspectRatio: false,
                  plugins: { legend: { display: false } },
                  scales: {
                    y: { ticks: { callback: v => new Intl.NumberFormat('id-ID').format(v) } }
                  }
                }
              });
            })();
          </script>


          
        </div>
      </div>
      <!--   Core JS Files   -->
      <script src="{{ asset('admin/assets/js/core/jquery-3.7.1.min.js')}}"></script>
      <script src="{{ asset('admin/assets/js/core/popper.min.js')}}"></script>
      <script src="{{ asset('admin/assets/js/core/bootstrap.min.js')}}"></script>

      <!-- jQuery Scrollbar -->
      <script src="{{ asset('admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

      <!-- Chart JS -->
      <script src="{{ asset('admin/assets/js/plugin/chart.js/chart.min.js') }}"></script>

      <script>
        window.addEventListener('load', function () {
          const labels = @json($trend['labels'] ?? []);
          const data = @json($trend['data'] ?? []);

          const el = document.getElementById('trendChart');
          if (!el) return;

          new Chart(el.getContext('2d'), {
            type: 'line',
            data: { labels, datasets: [{ label: 'Total Penduduk', data, borderWidth: 2, tension: .3, fill: false }] },
            options: {
              responsive: true, maintainAspectRatio: false,
              plugins: { legend: { display: false } },
              scales: { y: { beginAtZero: true, ticks: { precision: 0 } } }
            }
          });
        });
      </script>


      <!-- jQuery Sparkline -->
      <script src="{{ asset('admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

      <!-- Chart Circle -->
      <script src="{{ asset('admin/assets/js/plugin/chart-circle/circles.min.js')}}"></script>

      <!-- Datatables -->
      <script src="{{ asset('admin/assets/js/plugin/datatables/datatables.min.js')}}"></script>

      <!-- Bootstrap Notify -->
      <script src="{{ asset('admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

      <!-- jQuery Vector Maps -->
      <script src="{{ asset('admin/assets/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
      <script src="{{ asset('admin/assets/js/plugin/jsvectormap/world.js')}}"></script>

      <!-- Google Maps Plugin -->
      <script src="{{ asset('admin/assets/js/plugin/gmaps/gmaps.js')}}"></script>

      <!-- Sweet Alert -->
      <script src="{{ asset('admin/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

      <!-- Kaiadmin JS -->
      <script src="{{ asset('admin/assets/js/kaiadmin.min.js')}}"></script>
</body>

</html>