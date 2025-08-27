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
        urls: ["{{ asset('admin/assets/css/fonts.min.css') }}"],
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

      <style>
        /* === MAIN LAYOUT FIX === */
        .table th,
        .table td {
          vertical-align: middle;
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

        /* 'auto' itu invalid */

        @media (min-width: 992px) {
          .sidebar {
            width: 260px;
          }

          .main-panel {
            margin-left: 260px;
          }

          /* ini baru kepakai karena sudah ada .main-panel */
        }

        .wrapper.sidebar_minimize .main-panel {
          margin-left: 80px;
        }

        @media (max-width: 991.98px) {
          .main-panel {
            margin-left: 0;
          }

          /* konten full width di mobile */
        }
      </style>

      <div class="container-fluid py-3">
        <div class="card" style="margin-top: 10vh;">
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                  <h1 style="font-weight: bold; text-align: center;">Susunan Organisasi dan Tata Kerja</h1>
                  <tr>
                    <th class="text-nowrap">Urutan</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th class="text-nowrap">Foto</th>
                    <th class="text-nowrap">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $row)
              <tr>
              <td>{{ $row->urutan }}</td>
              <td>{{ $row->nama }}</td>
              <td>{{ $row->jabatan }}</td>
              <td>
                @php $disk = 'public'; @endphp
                @if ($row->foto_path && Storage::disk($disk)->exists($row->foto_path))
            <img src="{{ Storage::disk($disk)->url($row->foto_path) }}" class="img-thumbnail"
            style="height:40px;width:auto;">
          @else
            <span class="text-muted">—</span>
          @endif
              </td>
              <td class="text-nowrap">
                <a href="{{ route('sotk.edit', $row) }}" class="btn btn-link p-0 me-2 action-edit">Edit</a>
                <form action="{{ route('sotk.destroy', $row) }}" method="POST" class="d-inline"
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
                    <a href="{{ route('sotk.create') }}" class="btn btn-primary btn-sm"><i
                        class="fas fa-user-friends me-1"></i> Tambah SOTK</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-3">{{ $data->links() }}</div>

          </div>
        </div>
      </div>
    </div> <!-- /main-panel -->

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