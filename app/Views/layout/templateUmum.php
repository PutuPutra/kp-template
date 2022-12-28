<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-SARPRAS SMALAN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Libraries Stylesheet -->
    <link href="/assets/abc/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/abc/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/abc/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/abc/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/abc/css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./assets/img/smalan.png">

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
    <link href="/assets/CSS_umum/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/CSS_umum/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/CSS_umum/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/CSS_umum/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">


        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 text-primary m-0">Finanza</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                fdprocessedid="suwntl" aria-expanded="true">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-twitter text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-linkedin-in text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <?= $this->renderSection('umum'); ?>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-4">Tentang Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Panglima Polim No.18, Segala Mider,
                        Tanjung Karang Barat, Bandar Lampung, Lampung 35152</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+(62) 721-772-924 / +(62) 721-701-387</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>sman9bdl@gmail.com</p>
                    <div class="d-flex pt-2">
                        <!-- <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a> -->
                        <a class="btn btn-square btn-outline-light rounded-circle me-2"
                            href="https://id-id.facebook.com/sman9bdl/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2"
                            href="https://www.youtube.com/@sman9bdl"><i class="fab fa-youtube"></i></a>
                        <!-- <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a> -->
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 px-lg-5">
                    <!-- <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div> -->
                    <a href="https://smalan.sch.id/"><img class="logo" src="./assets/img/smalan.png" alt=""
                            style="width:150px"></a>
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
                    &copy; <a class="border-bottom" href="https://smalan.sch.id/">Copyright
                        <script>
                        document.write(new Date().getFullYear())
                        </script>
                    </a> , SMAN 9 Bandarlampung
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Dikembangkan oleh <a class="border-bottom" href="<?= base_url('tentang') ?>">Non Est Ulla</a>
                    <!-- oleh <a href="https://themewagon.com">Non Est Ulla</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/CSS_umum/lib/wow/wow.min.js"></script>
    <script src="/assets/CSS_umum/lib/easing/easing.min.js"></script>
    <script src="/assets/CSS_umum/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/CSS_umum/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/CSS_umum/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/CSS_umum/js/main.js"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/abc/lib/wow/wow.min.js"></script>
    <script src="/assets/abc/lib/easing/easing.min.js"></script>
    <script src="/assets/abc/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/abc/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/abc/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/abc/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/abc/js/main.js"></script>
</body>

</html>
