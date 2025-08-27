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
        urls: ["{{ asset('admin/assets/css/fonts.min.css')}}"], // perbaiki path
      },
      active: function () { sessionStorage.fonts = true; },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/css/plugins.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/css/kaiadmin.min.css')}}" />
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

    <style>
      .table th,
      .table td {
        vertical-align: middle;
      }

      .table thead th {
        letter-spacing: .03em;
        font-weight: 600;
      }

      /* Hover Edit jadi merah seperti 'Hapus' */
      .btn-link.action-edit {
        color: inherit;
        text-decoration: none;
        transition: color .15s, text-decoration-color .15s;
      }

      .btn-link.action-edit:hover,
      .btn-link.action-edit:focus {
        color: var(--bs-danger) !important;
        text-decoration: underline;
        text-decoration-thickness: .06em;
      }

      /* Konten aman dari sidebar di desktop */
      @media (min-width: 992px) {
        .sidebar {
          width: 260px;
        }

        .main-panel {
          margin-left: 260px;
        }
      }

      .wrapper.sidebar_minimize .main-panel {
        margin-left: 80px;
      }

      /* Mobile polish */
      @media (max-width: 576px) {
        .card-body {
          padding: 12px;
        }

        .table {
          font-size: .92rem;
        }

        .table th,
        .table td {
          white-space: nowrap;
        }

        .table td .btn,
        .table td .btn-link {
          padding-inline: .25rem;
        }

        .table td img {
          height: 40px;
        }
      }
    </style>

    <div class="main-panel">
      <!-- TOPBAR WAJIB utk mobile toggle -->
      <div class="main-header">
        <div class="main-header-logo">
          <div class="logo-header" data-background-color="dark">
            <a href="#" class="logo">
              <img src="{{ asset('admin/assets/img/kaiadmin/logo_light.svg') }}" height="20" class="navbar-brand"
                alt="">
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar"><i class="gg-menu-right"></i></button>
              <button class="btn btn-toggle sidenav-toggler"><i class="gg-menu-left"></i></button>
            </div>
            <button class="topbar-toggler more"><i class="gg-more-vertical-alt"></i></button>
          </div>
        </div>
      </div>
      <!-- /TOPBAR -->

      <div class="container-fluid py-3">
        <div class="card" style="margin-top: 10vh;">
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-striped table-hover align-middle"  style="text-align: center;">
                <thead class="table-light">
                <h1 style="font-weight: bold; text-align: center;">Statistik Penduduk</h1>
                  <tr>
                    <th class="text-nowrap">Tahun</th>
                    <th class="text-nowrap">KK</th>
                    <th class="text-nowrap">Laki</th>
                    <th class="text-nowrap">Perempuan</th>
                    <th class="text-nowrap">Penduduk Sementara</th>
                    <th class="text-nowrap">Mutasi Penduduk</th>
                    <th class="text-nowrap">Total</th>
                    <th class="text-nowrap">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $row)
            <tr>
            <td>{{ $row->tahun }}</td>
            <td>{{ number_format($row->kk) }}</td>
            <td>{{ number_format($row->laki_laki) }}</td>
            <td>{{ number_format($row->perempuan) }}</td>
            <td>{{ number_format($row->penduduk_sementara) }}</td>
            <td>{{ number_format($row->mutasi_penduduk) }}</td>
            <td>{{ number_format($row->total) }}</td>
            <td class="text-nowrap">
              <a href="{{ route('stat-penduduk.edit', $row) }}"
              class="btn btn-link p-0 me-2 action-edit">Edit</a>
              <form action="{{ route('stat-penduduk.destroy', $row) }}" method="POST" class="d-inline"
              onsubmit="return confirm('Hapus?')">
              @csrf @method('DELETE')
              <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
              </form>
            </td>
            </tr>
          @endforeach
                </tbody>
              </table>
              <div class="card mt-3">
                <div class="card-body">
                  <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('stat-penduduk.create') }}" class="btn btn-primary btn-sm"><i
                        class="fas fa-user-friends me-1"></i> Tambah Statistik Penduduk</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-3">
              {{ $data->links() }}
            </div>

          </div>
        </div>
      </div>

      
    </div>
  </div>

  <!-- Core JS -->
  <script src="{{ asset('admin/assets/js/core/jquery-3.7.1.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/plugin/chart.js/chart.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/plugin/chart-circle/circles.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/plugin/datatables/datatables.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/plugin/jsvectormap/world.js')}}"></script>
  <script src="{{ asset('admin/assets/js/plugin/gmaps/gmaps.js')}}"></script>
  <script src="{{ asset('admin/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/kaiadmin.min.js')}}"></script>
</body>

</html>