<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Petani Purwodadi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/logo.png" alt="Icon" style="width: 70px; height: 40px;">
                    </div>
                    <h1 class="m-0 text-primary">Petani Purwodadi</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="profile.html" class="nav-item nav-link">Profile</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="terlaris.html" class="dropdown-item">Terlaris</a>
                                <a href="baru.html" class="dropdown-item">Produk Baru</a>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Hubungi Kami</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-xxl">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-8 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Petani <span class="text-primary">Purwodadi</span></h1>
                    <h6 class="animated fadeIn mb-0">Tumbuh dan bergerak bersama solusi pertanian terintegrasi untuk Indonesia.</h6>
                    <br>
                    <p class="animated fadeIn mb-4 pb-2">
                        Petani Purwodadi merujuk kepada para petani yang beraktivitas di wilayah atau desa bernama Purwodadi. Mereka adalah individu atau kelompok yang terlibat dalam kegiatan pertanian di Desa Purwodadi, yang mungkin menanam berbagai jenis tanaman, mengelola kebun, atau terlibat dalam kegiatan pertanian lainnya seperti peternakan.</p>
                    <a href="terlaris.html" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Cari Kebutuhan</a>
                </div>
            </div>
        </div>
        <!-- Header End -->
        
        <!-- About Start -->
        <div class="container-lg py-5 mb-0">
            <div class="container bg-dark py-5 mb-0">
                <div class="row g-5 align-items-center">
                    <div class="wow fadeIn" data-wow-delay="0.5s">
                        <h4 class="mb-4 text-secondary">Wujudkan Pertanian yang Berkelanjutan dan Berdaya Saing Tinggi</h1>
                        <h6 class="mb-0 text-light">Daya saing tinggi akan menjadikan desa purwodadi yang lebih makmur dan menjamin pertanian yang berkelanjutan, dengan ini kami berharap petani dapat bersaing di pasar lokal hingga nasional melalui Petani Purwodadi</h6>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-secondary py-1 px-5 text-dark" href="profile.html">Kunjungi Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Produk Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Produk</h1>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/Tomat Segar.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Tersedia</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Detail</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h4 class="text-primary mb-1">Tomat Segar</h4>
                                        <p class="d-block h6 mb-4">Tomat segar baru panen.</p>
                                        <a href="detail.html" class="btn btn-primary py-1 px-1 me-3 mb-2 animated fadeIn">Selengkapnya</a>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/Tomat Segar.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Tersedia</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Detail</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h4 class="text-primary mb-1">Tomat Segar</h4>
                                        <p class="d-block h6 mb-4">Tomat segar baru panen.</p>
                                        <a href="" class="btn btn-primary py-1 px-1 me-3 mb-2 animated fadeIn">Selengkapnya</a>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/Tomat Segar.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Tersedia</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Detail</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h4 class="text-primary mb-1">Tomat Segar</h4>
                                        <p class="d-block h6 mb-4">Tomat segar baru panen.</p>
                                        <a href="" class="btn btn-primary py-1 px-1 me-3 mb-2 animated fadeIn">Selengkapnya</a>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/Tomat Segar.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Tersedia</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Detail</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h4 class="text-primary mb-1">Tomat Segar</h4>
                                        <p class="d-block h6 mb-4">Tomat segar baru panen.</p>
                                        <a href="" class="btn btn-primary py-1 px-1 me-3 mb-2 animated fadeIn">Selengkapnya</a>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/Tomat Segar.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Tersedia</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Detail</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h4 class="text-primary mb-1">Tomat Segar</h4>
                                        <p class="d-block h6 mb-4">Tomat segar baru panen.</p>
                                        <a href="" class="btn btn-primary py-1 px-1 me-3 mb-2 animated fadeIn">Selengkapnya</a>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/Tomat Segar.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Tersedia</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Detail</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h4 class="text-primary mb-1">Tomat Segar</h4>
                                        <p class="d-block h6 mb-4">Tomat segar baru panen.</p>
                                        <a href="" class="btn btn-primary py-1 px-1 me-3 mb-2 animated fadeIn">Selengkapnya</a>
                                       
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 text-center">
                                <a class="btn btn-primary py-1 px-5" href="terlaris.html">Lebih Banyak Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Produk End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4"></h5>
                        <a class="btn btn-link text-white-50" href="">Profile</a>
                        <a class="btn btn-link text-white-50" href="https://api.whatsapp.com/send?">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, <br> Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>