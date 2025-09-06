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

    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            background: #f6f6f6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 32px 16px 64px 16px;
        }

        .headline {
            color: #166138;
            font-family: 'Montserrat', Arial, sans-serif;
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 0.3em;
            letter-spacing: -1px;
        }

        .subtitle {
            color: #;
            font-size: 1.08rem;
            margin-bottom: 32px;
            line-height: 1.5;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 32px 24px;
            margin-bottom: 36px;
        }

        .product-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 16px rgba(28, 28, 28, 0.07);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: box-shadow 0.18s;
            position: relative;
        }

        .product-card:hover {
            box-shadow: 0 8px 32px rgba(250, 86, 82, 0.12);
        }

        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            object-position: center;
            background: #eaeaea;
            display: block;
        }

        .product-info {
            padding: 16px 18px 18px 18px;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 1.13rem;
            font-weight: 600;
            color: #;
            margin-bottom: 14px;
            font-family: 'Montserrat', Arial, sans-serif;
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stars {
            color: #166138;
            font-size: 1.15rem;
            letter-spacing: 2px;
            /* Untuk bintang gold bisa pakai color: #ffb400; */
        }

        .product-price {
            color: #166138;
            font-size: 1.11rem;
            font-weight: 700;
            font-family: 'Inter', Arial, sans-serif;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 6px;
            margin-top: 12px;
            flex-wrap: wrap;
        }

        .pagination-btn {
            background: #fff;
            color: #;
            border: none;
            padding: 9px 16px;
            margin: 0 2px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 1rem;
            box-shadow: 0 2px 8px rgba(28, 28, 28, 0.05);
            text-decoration: none;
            transition: background 0.13s, color 0.13s;
            outline: none;
        }

        .pagination-btn.active,
        .pagination-btn:hover {
            background: # color: #166138;
            ;
            color: #;
        }

        /* Responsive tweaks */
        @media (max-width: 600px) {
            .headline {
                font-size: 2rem;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .product-card img {
                height: 120px;
            }

            .container {
                padding: 12px 4px 24px 4px;
            }
        }
    </style>

    <div class="container">
        <h1 class="headline">Beli Dari Desa</h1>
        <p class="subtitle">
            Layanan yang disediakan promosi produk UMKM desa sehingga mampu meningkatkan perekonomian masyarakat desa
        </p>
        <div class="product-grid">
            <!-- Produk 1 -->
            <div class="product-card">
                <img src="roti-tawar.jpg" alt="Roti tawar">
                <div class="product-info">
                    <div class="product-title">Roti tawar</div>
                    <div class="product-meta">
                        <span class="stars">★★★★★</span>
                        <span class="product-price">Rp10.000</span>
                    </div>
                </div>
            </div>
            <!-- Produk 2 -->
            <div class="product-card">
                <img src="konektor-masker.jpg" alt="konektor masker">
                <div class="product-info">
                    <div class="product-title">konektor masker</div>
                    <div class="product-meta">
                        <span class="stars">★★★★★</span>
                        <span class="product-price">Rp10.000</span>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="product-card">
                <img src="snack-box.jpg" alt="Untuk snack box">
                <div class="product-info">
                    <div class="product-title">Untuk snack box</div>
                    <div class="product-meta">
                        <span class="stars">★★★★★</span>
                        <span class="product-price">Rp123</span>
                    </div>
                </div>
            </div>
            <!-- Produk 4 -->
            <div class="product-card">
                <img src="talam-susu.jpg" alt="Talam susu">
                <div class="product-info">
                    <div class="product-title">Talam susu</div>
                    <div class="product-meta">
                        <span class="stars">★★★★★</span>
                        <span class="product-price">Rp123</span>
                    </div>
                </div>
            </div>
            <!-- Produk 5 -->
            <div class="product-card">
                <img src="souvenir.jpg" alt="Souvenir">
                <div class="product-info">
                    <div class="product-title">Souvenir</div>
                    <div class="product-meta">
                        <span class="stars">★★★★★</span>
                        <span class="product-price">Rp150.000</span>
                    </div>
                </div>
            </div>
            <!-- Produk 6 -->
            <div class="product-card">
                <img src="micropay.jpg" alt="MICROPAY">
                <div class="product-info">
                    <div class="product-title">MICROPAY</div>
                    <div class="product-meta">
                        <span class="stars">★★★★★</span>
                        <span class="product-price">Rp123</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination">
            <a href="#" class="pagination-btn active">1</a>
            <a href="#" class="pagination-btn">2</a>
            <a href="#" class="pagination-btn">3</a>
        </div>
    </div>

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

</body>

</html>