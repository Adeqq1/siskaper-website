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
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h1 class="h4 mb-0">Permohonan Surat</h1>
              <span class="badge bg-danger-subtle text-danger">
                Baru: <strong>{{ $unreadCount }}</strong>
              </span>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped align-middle">
                    <thead class="table-light">
                      <tr>
                        <th>Tanggal</th>
                        <th>Jenis Surat</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Status</th>
                        <th class="text-nowrap">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $row)
                        <tr @class(['table-warning' => is_null($row->read_at)])>
                          <td>{{ $row->created_at->format('d M Y H:i') }}</td>
                          <td>{{ $row->jenis_surat }}</td>
                          <td>{{ $row->nama_pemohon }}</td>
                          <td>
                            {{ $row->nik }}s
                          </td>
                          <td>
                            @if(is_null($row->read_at))
                              <span class="badge bg-warning text-dark">Baru</span>
                            @else
                              <span class="badge bg-success">Dibaca</span>
                            @endif
                          </td>
                          <td class="text-nowrap">
                            <a href="{{ route('pengajuan-surat.show', $row) }}"
                              class="btn btn-sm btn-primary">Detail</a>
                            @if(is_null($row->read_at))
                              <form class="d-inline" method="POST" action="{{ route('pengajuan-surat.read', $row) }}">
                                @csrf @method('PATCH')
                                <button class="btn btn-sm btn-outline-success">Tandai Dibaca</button>
                              </form>
                            @endif
                            <form class="d-inline" method="POST" action="{{ route('pengajuan-surat.destroy', $row) }}"
                              onsubmit="return confirm('Hapus data ini?')">
                              @csrf @method('DELETE')
                              <button class="btn btn-sm btn-outline-danger">Hapus</button>
                            </form>
                            <button type="button" class="btn btn-sm btn-outline-secondary"
                              onclick="copyRow({{ $row->toJson(JSON_HEX_APOS | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE) }})">
                              Salin Semua
                            </button>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>

                <div class="mt-3">{{ $data->links() }}</div>
              </div>
            </div>
          </div>

          <script>
            function copyText(text) {
              navigator.clipboard.writeText(text).then(() => alert('Disalin'));
            }
            function copyRow(row) {
              // format rapi
              const lines = [
                `Jenis Surat: ${row.jenis_surat}`,
                `Nama: ${row.nama_pemohon}`,
                `Alasan: ${row.alasan ?? '-'}`,
                `Tempat/Tgl Lahir: ${row.tempat_lahir}, ${row.tanggal_lahir}`,
                `Jenis Kelamin: ${row.jenis_kelamin}`,
                `NIK: ${row.nik}`,
                `Alamat: ${row.alamat}`,
                `Diajukan: ${row.created_at}`
              ];
              navigator.clipboard.writeText(lines.join('\n')).then(() => alert('Data baris disalin'));
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