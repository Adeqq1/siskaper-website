
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
  <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('home/lib/animate/animate.min.css') }}" rel="stylesheet">
  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  @include('home.parts.spinner')
  <!-- Spinner End -->

  <!-- Navbar Start -->
  @include('home.parts.navbar')
  <!-- Navbar End -->
  <style>
    :root{--brand:#166138;}
    .page-card{background:#fff;border-radius:18px;box-shadow:0 6px 24px rgba(22,97,56,.08);padding:1.25rem 1.25rem;}
    .page-title{color:var(--brand);font-family:"Roboto Slab",serif;font-weight:800;}
    .req{color:#dc3545}
    .opt-green .form-check-input:checked{
    background-color:#166138; border-color:#166138;
  }
  .opt-green .form-check-input:focus{
    box-shadow:0 0 0 .25rem rgba(22,97,56,.15);
    border-color:#166138;
  }
  .opt-green .form-check-input:checked + .form-check-label{
    color:#166138; font-weight:700;
  }
  </style>

  <section class="container my-4 my-md-5">
    <div class="page-card">
      <h1 class="page-title h3 mb-3">Formulir Pengajuan Surat</h1>

      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      @if ($errors->any())
        <div class="alert alert-danger">
          <div class="fw-bold mb-1">Periksa kembali isian:</div>
          <ul class="mb-0">
            @foreach ($errors->all() as $e) <li>{{ $e }}</li> @endforeach
          </ul>
        </div>
      @endif

      <form method="POST" action="{{ route('ppid.ajukan.store') }}" novalidate>
        @csrf

        {{-- 1. Jenis Surat --}}
        <div class="mb-3 opt-green">
        <label class="form-label">Jenis Surat <span class="req">*</span></label>
        <div class="d-flex flex-column gap-2">
        @foreach($jenisOptions as $opt)
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_surat" id="js-{{ $loop->index }}"
               value="{{ $opt }}" {{ old('jenis_surat')===$opt ? 'checked' : '' }}>
        <label class="form-check-label" for="js-{{ $loop->index }}">{{ $opt }}</label>
      </div>
    @endforeach
  </div>
  @error('jenis_surat')<div class="text-danger small">{{ $message }}</div>@enderror
</div>


        {{-- 2. Nama Pemohon --}}
        <div class="mb-3">
          <label for="nama_pemohon" class="form-label">Nama Pemohon <span class="req">*</span></label>
          <input type="text" class="form-control @error('nama_pemohon') is-invalid @enderror"
                 id="nama_pemohon" name="nama_pemohon" value="{{ old('nama_pemohon') }}" required>
          @error('nama_pemohon')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- 3. Alasan Pemohon --}}
        <div class="mb-3">
          <label for="alasan" class="form-label">Alasan Pemohon</label>
          <textarea class="form-control @error('alasan') is-invalid @enderror" rows="3"
                    id="alasan" name="alasan" placeholder="Jelaskan keperluan...">{{ old('alasan') }}</textarea>
          @error('alasan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- 4. Tempat & Tanggal Lahir --}}
        <div class="row g-3">
          <div class="col-md-6">
            <label for="tempat_lahir" class="form-label">Tempat Lahir <span class="req">*</span></label>
            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                   id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
            @error('tempat_lahir')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="col-md-6">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir <span class="req">*</span></label>
            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                   id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
            @error('tanggal_lahir')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
        </div>

        {{-- 5. Jenis Kelamin --}}
        <div class="mb-3 mt-3">
          <label class="form-label">Jenis Kelamin <span class="req">*</span></label>
          <div class="d-flex gap-3">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkL"
                     value="L" {{ old('jenis_kelamin')==='L'?'checked':'' }}>
              <label for="jkL" class="form-check-label">Laki-laki</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkP"
                     value="P" {{ old('jenis_kelamin')==='P'?'checked':'' }}>
              <label for="jkP" class="form-check-label">Perempuan</label>
            </div>
          </div>
          @error('jenis_kelamin')<div class="text-danger small">{{ $message }}</div>@enderror
        </div>

        {{-- 6. NIK --}}
        <div class="mb-3">
          <label for="nik" class="form-label">NIK (16 digit) <span class="req">*</span></label>
          <input type="text" inputmode="numeric" pattern="\d{16}"
                 class="form-control @error('nik') is-invalid @enderror"
                 id="nik" name="nik" value="{{ old('nik') }}" required>
          @error('nik')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- 7. Alamat --}}
        <div class="mb-4">
          <label for="alamat" class="form-label">Alamat <span class="req">*</span></label>
          <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3"
                    id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
          @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="d-flex gap-2">
          <button class="btn btn-success"><i class="bi bi-send"></i> Kirim Permohonan</button>
          <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Batal</a>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer Start -->
  @include ('home.parts.footer')
  <!-- Footer End -->





    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('home/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('home/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('home/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('home/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('home/lib/parallax/parallax.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('home/js/main.js')}}"></script>

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

</body>

</html>










  