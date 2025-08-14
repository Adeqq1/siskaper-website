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

    <!-- STYLE: disamakan dengan index -->
    <style>
      .table th, .table td { vertical-align: middle; }
      .table thead th { letter-spacing: .03em; font-weight: 600; }

      /* Desktop: konten tidak ketimpa sidebar */
      @media (min-width: 992px){
        .sidebar{ width:260px; }
        .main-panel{ margin-left:260px; }
      }
      /* Saat sidebar minimize (kelas bawaan Kaiadmin) */
      .wrapper.sidebar_minimize .main-panel{ margin-left:80px; }

      /* Mobile: sidebar overlay, konten full width */
      @media (max-width: 991.98px){
        .main-panel{ margin-left:0; }
      }

      /* Mobile polish tambahan */
      @media (max-width: 576px){
        .card-body{ padding:12px; }
        .table{ font-size:.92rem; }
        .table td .btn, .table td .btn-link{ padding-inline:.25rem; }
      }
    </style>

    <div class="main-panel">
      <div class="main-header">
        <div class="main-header-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img src="{{ asset('admin/assets/img/kaiadmin/logo_light.svg')}}" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar"><i class="gg-menu-right"></i></button>
              <button class="btn btn-toggle sidenav-toggler"><i class="gg-menu-left"></i></button>
            </div>
            <button class="topbar-toggler more"><i class="gg-more-vertical-alt"></i></button>
          </div>
          <!-- End Logo Header -->
        </div>

        <!-- navbar -->
        @include ('admin.parts.navbar')
        <!-- end navbar -->
      </div>

      <div class="container-fluid py-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="mb-0">APBD Desa</h5>
              <a href="{{ route('apbd-desa.create') }}" class="btn btn-primary btn-sm">Tambah</a>
            </div>

            <div class="table-responsive">
              <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                  <tr>
                    <th class="text-nowrap">Tahun</th>
                    <th class="text-nowrap text-end">Pendapatan</th>
                    <th class="text-nowrap text-end">Belanja</th>
                    <th class="text-nowrap text-end">Pembiayaan</th>
                    <th class="text-nowrap">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $row)
                  <tr>
                    <td>{{ $row->tahun }}</td>
                    <td class="text-end">{{ number_format($row->pendapatan, 0, ',', '.') }}</td>
                    <td class="text-end">{{ number_format($row->belanja, 0, ',', '.') }}</td>
                    <td class="text-end">{{ number_format($row->pembiayaan, 0, ',', '.') }}</td>
                    <td class="text-nowrap">
                      <a href="{{ route('apbd-desa.edit', $row) }}" class="btn btn-link p-0 me-2">Edit</a>
                      <form action="{{ route('apbd-desa.destroy', $row) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Hapus?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="mt-3">
              {{ $data->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /main-panel -->
  </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('admin/assets/js/core/jquery-3.7.1.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('admin/assets/js/core/bootstrap.min.js')}}"></script>

  <!-- jQuery Scrollbar -->
  <script src="{{ asset('admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

  <!-- Chart JS -->
  <script src="{{ asset('admin/assets/js/plugin/chart.js/chart.min.js')}}"></script>

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
