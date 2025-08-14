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

      @media (max-width: 576px) {
        .card-body {
          padding: 12px;
        }

        .table {
          font-size: .92rem;
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
              <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                  <h1 style="font-weight: bold; text-align: center;">Produk Desa</h1>
                  <tr>
                    <th class="text-nowrap">Nama</th>
                    <th class="text-nowrap">Harga</th>
                    <th class="text-nowrap">Foto</th>
                    <th class="text-nowrap">Status</th>
                    <th class="text-nowrap">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $row)
                @php
            $disk = 'public';
            $raw = $row->gambar_path; // field yang benar
            $url = null;
            if ($raw) {
            if (filter_var($raw, FILTER_VALIDATE_URL)) {
              $url = $raw;
            } else {
              $p = preg_replace('#^(public/|storage/)#', '', $raw);
              if (Storage::disk($disk)->exists($p))
              $url = Storage::disk($disk)->url($p);
              elseif (Storage::disk($disk)->exists($raw))
              $url = Storage::disk($disk)->url($raw);
            }
            }
            @endphp
                <tr>
                <td>{{ $row->nama }}</td>
                <td>{{ number_format($row->harga) }}</td>
                <td>
                  @if ($url)
              <img src="{{ $url }}" class="img-thumbnail" style="height:48px;width:auto"
              alt="foto {{ $row->nama }}">
            @else
              <span class="text-muted">—</span>
            @endif
                </td>
                <td>{{ $row->is_active ? 'Aktif' : 'Nonaktif' }}</td>
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
            </div>

            <div class="mt-3">
              {{ $data->links() }}
            </div>

          </div>
        </div>
      </div>
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