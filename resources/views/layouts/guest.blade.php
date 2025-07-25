<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Desa Wisata Sumber Urip</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light sticky-top p-0">
        <div class="container-fluid px-4 d-flex justify-content-between align-items-center">
            <!-- Logo dan Judul -->
            <a href="/" class="navbar-brand d-flex align-items-center m-0">
                <img src="{{ asset('assets/img/about.jpg') }}" alt="Logo"
                    style="width: 50px; height: 50px; margin-right: 10px; border-radius: 50%; object-fit: cover;">
                <h1 class="m-0 text-white" style="font-size: 1.75rem;">
                    Desa Wisata Sumber Urip
                </h1>
            </a>

            <!-- Toggler diletakkan di kanan -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/" class="nav-link active">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a href="/sejarah" class="nav-link">Sejarah</a>
                    </li>
                    <li class="nav-item">
                        <a href="/organisasi" class="nav-link">Organisasi</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="nav-link btn" style="text-decoration: none;">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Optional Responsive Styling -->
    <style>
        @media (max-width: 576px) {
            .navbar-brand h1 {
                font-size: 1rem !important;
            }
        }
    </style>

    <div>
        {{ $slot }}
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-3 py-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Kantor Desa</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Dusun IV Desa Sumber Urip</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+736 123456</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>desasumberurip@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2"
                            href="https://www.youtube.com/@desasumberurip6899" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2"
                            href="https://www.instagram.com/bukit_kaba_gunungkaba?utm_source=ig_web_button_share_sheet&igsh=ZWFmYWFzZHBva2w0"
                            target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Pelayanan</h4>
                    <a class="btn btn-link">Posyandu Balita dan Batita</a>
                    <a class="btn btn-link">Pelayanan Kesehatan Lansia</a>
                    <a class="btn btn-link">Pelayanan Kesehatan Anak</a>
                    <a class="btn btn-link">Hari Anak Nasional</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    {{-- <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-light border-light w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Sumber Urip</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    KKN 249 PERIODE 105 UNIB
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/navbar-active.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
