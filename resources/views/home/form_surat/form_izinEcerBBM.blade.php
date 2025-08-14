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
        body {
            font-family: 'Inter', Arial, sans-serif;
            background: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 520px;
            margin: 0 auto;
            padding: 32px 14px 64px 14px;
        }

        .headline {
            color: #fc5652;
            font-family: 'Montserrat', Arial, sans-serif;
            font-weight: 800;
            font-size: 2.2rem;
            margin-top: 9rem;
            margin-bottom: 0.3em;
            letter-spacing: -1px;
            text-align: center;
        }

        .subtitle {
            color: #222;
            font-size: 1.04rem;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(44, 44, 44, 0.10);
            padding: 30px 22px 24px 22px;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 6px;
            gap: 6px;
        }

        .form-group label {
            font-weight: 600;
            color: #222;
            margin-bottom: 2px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            border: 1.7px solid #e3e3e3;
            border-radius: 7px;
            padding: 10px 13px;
            font-size: 1rem;
            font-family: 'Inter', Arial, sans-serif;
            outline: none;
            transition: border 0.14s;
            background: #fafbfc;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border: 1.7px solid #fc5652;
            background: #fff;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 56px;
            max-height: 140px;
        }

        .form-row {
            display: flex;
            gap: 18px;
        }

        .flex-1 {
            flex: 1;
        }

        .btn-primary {
            background: #fc5652;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 13px 0;
            font-size: 1.14rem;
            font-family: 'Montserrat', Arial, sans-serif;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-top: 10px;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(252, 86, 82, 0.08);
            transition: background 0.15s;
        }

        .btn-primary:hover {
            background: #ff1f13;
        }

        @media (max-width: 600px) {
            .container {
                padding: 11px 2vw 24px 2vw;
            }

            .headline {
                font-size: 1.35rem;
            }

            .form-card {
                padding: 16px 4px 15px 4px;
            }

            .form-row {
                flex-direction: column;
                gap: 8px;
            }
        }
    </style>

    <div class="container">
        <h1 class="headline">Formulir Data Diri</h1>
        <p class="subtitle">Silakan isi data diri Anda dengan benar. Data ini digunakan untuk keperluan administrasi
            Desa Kersik.</p>
        <form class="form-card" autocomplete="off">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" id="nik" name="nik" placeholder="Nomor Induk Kependudukan" maxlength="16" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Lengkap</label>
                <textarea id="alamat" name="alamat" placeholder="Masukkan alamat lengkap" required></textarea>
            </div>
            <div class="form-group">
                <label for="nohp">Nomor HP</label>
                <input type="tel" id="nohp" name="nohp" placeholder="08xxxxxxxxxx" required>
            </div>
            <div class="form-group">
                <label for="email">Email Aktif</label>
                <input type="email" id="email" name="email" placeholder="contoh@email.com">
            </div>
            <div class="form-group">
                <label for="ttl">Tempat, Tanggal Lahir</label>
                <input type="text" id="ttl" name="ttl" placeholder="Misal: Gresik, 12 April 2001" required>
            </div>
            <div class="form-row">
                <div class="form-group flex-1">
                    <label for="jk">Jenis Kelamin</label>
                    <select id="jk" name="jk" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group flex-1">
                    <label for="agama">Agama</label>
                    <select id="agama" name="agama" required>
                        <option value="">Pilih Agama</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Buddha</option>
                        <option>Konghucu</option>
                        <option>Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Misal: Petani, Guru, Karyawan, dst"
                    required>
            </div>
            <div class="form-group">
                <label for="foto">Upload Foto Diri (opsional)</label>
                <input type="file" id="foto" name="foto" accept="image/*">
            </div>
            <button type="submit" class="btn-primary">Kirim Data</button>
        </form>
    </div>

    <!-- Footer Start -->
    @include ('home.parts.footer')
    <!-- Footer End -->





    <!-- JavaScript Libraries -->
    <script src="{{ asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}"></script>
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