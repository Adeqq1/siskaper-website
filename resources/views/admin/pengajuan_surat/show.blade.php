<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Admin Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="{{ asset('admin/assets/img/')}}" type="image/x-icon" />

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

        <div class="container-fluid py-3">
          <a href="{{ route('pengajuan-surat.index') }}" class="btn btn-outline-secondary mb-3">&larr; Kembali</a>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-3">{{ $pengajuan->jenis_surat }}</h5>

              <dl class="row">
                <dt class="col-sm-3">Nama Pemohon</dt>
                <dd class="col-sm-9">
                  {{ $pengajuan->nama_pemohon }}
                  <button class="btn btn-sm btn-outline-secondary"
                    onclick="copyText('{{ $pengajuan->nama_pemohon }}')">Salin</button>
                </dd>

                <dt class="col-sm-3">Alasan Pemohon</dt>
                <dd class="col-sm-9">{{ $pengajuan->alasan ?? '-' }}</dd>

                <dt class="col-sm-3">Tempat & Tanggal Lahir</dt>
                <dd class="col-sm-9">{{ $pengajuan->tempat_lahir }}, {{ $pengajuan->tanggal_lahir->format('d M Y') }}
                </dd>

                <dt class="col-sm-3">Jenis Kelamin</dt>
                <dd class="col-sm-9">{{ $pengajuan->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}</dd>

                <dt class="col-sm-3">NIK</dt>
                <dd class="col-sm-9">
                  {{ $pengajuan->nik }}
                  <button class="btn btn-sm btn-outline-secondary"
                    onclick="copyText('{{ $pengajuan->nik }}')">Salin</button>
                </dd>

                <dt class="col-sm-3">Alamat</dt>
                <dd class="col-sm-9">
                  {{ $pengajuan->alamat }}
                  <button class="btn btn-sm btn-outline-secondary"
                    onclick="copyText(`{{ $pengajuan->alamat }}`)">Salin</button>
                </dd>

                <dt class="col-sm-3">Status</dt>
                <dd class="col-sm-9">
                  @if(is_null($pengajuan->read_at))
                    <span class="badge bg-warning text-dark">Baru</span>
                  @else
                    <span class="badge bg-success">Dibaca {{ $pengajuan->read_at->format('d M Y H:i') }}</span>
                  @endif
                </dd>
              </dl>

              <div class="d-flex gap-2">
                @if(is_null($pengajuan->read_at))
                  <form method="POST" action="{{ route('pengajuan-surat.read', $pengajuan) }}">
                    @csrf @method('PATCH')
                    <button class="btn btn-success">Tandai Dibaca</button>
                  </form>
                @endif

                <button type="button" class="btn btn-outline-secondary" onclick="copyAll()">Salin Semua</button>

                <form method="POST" action="{{ route('pengajuan-surat.destroy', $pengajuan) }}"
                  onsubmit="return confirm('Hapus data ini?')">
                  @csrf @method('DELETE')
                  <button class="btn btn-outline-danger">Hapus</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <script>
          function copyText(t) { navigator.clipboard.writeText(t).then(() => alert('Disalin')); }
          function copyAll() {
            const lines = [
              '=== PERMOHONAN SURAT ===',
              'Jenis Surat: {{ $pengajuan->jenis_surat }}',
              'Nama: {{ $pengajuan->nama_pemohon }}',
              'Alasan: {{ $pengajuan->alasan ? addslashes($pengajuan->alasan) : '-' }}',
              'TTL: {{ $pengajuan->tempat_lahir }}, {{ $pengajuan->tanggal_lahir->format('d M Y') }}',
              'JK: {{ $pengajuan->jenis_kelamin }}',
              'NIK: {{ $pengajuan->nik }}',
              'Alamat: {{ addslashes($pengajuan->alamat) }}',
              'Diajukan: {{ $pengajuan->created_at->format('d M Y H:i') }}',
            ];
            navigator.clipboard.writeText(lines.join('\n')).then(() => alert('Semua data disalin'));
          }
        </script>
    
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