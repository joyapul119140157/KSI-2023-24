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
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="profile.html" class="nav-item nav-link active">Profile</a>
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
        <div class="container-fluid header mb-0 bg-white p-5">
            <div class="p-4"></div>
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Profile</h1>
                    <h6 class="display-10 animated fadeIn text-secondary mb-1">Tentang Petani Purwodadi</h6>
                    <h3 class="display-10 ani fadeIn mb-">Petani Purwodadi untuk solusi pertanian yang berkelanjutan & daya saing tinggi.</h2>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/Sawah.png" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container bg-primary py-5">
                <div class="row g-5 align-items-center">
                    <div class="wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Tentang Petani Purwodadi</h1>
                        <h6 class="mb-4 text-light">Petani Purwodadi adalah sebuah desa yang terletak di sebuah wilayah tertentu. 
                            Para petani Purwodadi, dengan lengkapnya, merujuk kepada individu-individu yang terlibat dalam aktivitas pertanian di desa tersebut. Mereka menjalankan berbagai kegiatan pertanian, seperti penanaman tanaman pangan, buah-buahan, sayuran, dan mungkin juga peternakan, tergantung pada kondisi geografis dan lingkungan pertanian di wilayah itu.
                        </h6>
                        <h6 class="mb-4 text-light">Pada tingkat yang lebih spesifik, petani Purwodadi bisa terdiri dari beragam lapisan masyarakat lokal. Mereka mungkin memiliki lahan pertanian sendiri atau tergabung dalam kelompok tani atau kooperatif untuk mengelola ladang atau kebun bersama. Mereka bertanggung jawab untuk menanam, merawat, dan memanen hasil pertanian mereka.
                        </h6>
                        <h6 class="mb-4 text-light">
                            Petani Purwodadi memiliki peran vital dalam menyediakan pasokan pangan lokal dan mungkin juga menjadi sumber utama mata pencaharian bagi komunitas desa. Mereka mungkin menghadapi berbagai tantangan seperti kondisi cuaca, akses terhadap teknologi, atau pasokan sumber daya yang terbatas.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Visi&Misi -->
        <div class="container-fluid header bg-white py-5">
            <div class="wow fadeIn" data-wow-delay="0.5s">
                <div class="container bg-transparent py-5">
                    <div class="row g-5 align-items-center">
                        <div class="wow fadeIn" data-wow-delay="0.5s">
                            <h1 class="mb-4 text-primary">Visi & Misi</h1>
                            <div class="container bg-dark border-bottom">
                                <h3 class="text-secondary py-1 mb-0"> Visi</h3>
                                <h6 class="mb-10 text-white py-1">"Mewujudkan Pertanian yang Berkelanjutan dan Berdaya Saing Tinggi bagi Petani Purwodadi"</h6>
                            </div></div></div>
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-0 mt-lg-5 px-3">
                    <h3 class="mb-4 text-dark py-0">Misi</h3>
                    <h6 class="mb-1 text-dark">
                        1. Meningkatkan Produktivitas Pertanian:
                        Mengembangkan teknik pertanian modern dan berkelanjutan untuk meningkatkan hasil produksi secara efisien.
                        <br><br>
                        2. Penguatan Keberlanjutan Lingkungan:
                        Mengimplementasikan praktik pertanian ramah lingkungan guna melestarikan sumber daya alam yang ada.
                        <br><br>
                        3. Peningkatan Akses Teknologi dan Informasi:
                        Memberikan akses yang lebih baik terhadap teknologi pertanian dan informasi terkini untuk mendukung pengembangan pertanian.
                        <br><br>
                        4. Pemberdayaan Petani:
                        Mendorong pemberdayaan petani melalui pelatihan, pendampingan, dan akses ke sumber daya yang diperlukan.
                        <br><br>
                        5. Pengembangan Pasar dan Pemasaran:
                        Membangun strategi pemasaran yang efektif untuk memperluas akses ke pasar yang lebih luas, termasuk pasar lokal maupun internasional.
                        <br><br>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="img-fluid">
                            <img class="img-fluid" src="img/Sawah.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visi&Misi End -->
        
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4"></h5>
                        <a class="btn btn-link text-white-50" href="">Profile</a>
                        <a class="btn btn-link text-white-50" href="">Hubungi Kami</a>
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