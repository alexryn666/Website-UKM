@php
    $site_name = get_setting_value('_site_name');
    $jumbotron = get_section_data('JUMBOTRON');
    $about = get_section_data('ABOUT');
    $foot = get_section_data('FOOT');
@endphp
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>{{$site_name}}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Teko:wght@300..700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid header-top">
            <div class="nav-shaps-2"></div>
            <div class="container d-flex align-items-center">
                <div class="d-flex align-items-center h-100">
                    <a href="#" class="navbar-brand" style="height: 145px;">
                        <h1 class="text-primary mb-0">Gendewa Geni</h1>
                        <h1 class="text-primary mb-0">Universitas Semarang</h1>
                    </a>
                </div>
                <div class="w-100 h-100">
                    <div class="topbar px-0 py-2 d-none d-lg-block" style="height: 45px;">
                        <div class="row gx-0 align-items-center">
                            <div class="col-lg-8 text-center text-lg-center mb-lg-0">
                                <div class="d-flex flex-wrap">
                                    <div class="pe-4">
                                        <a href="mailto:gendewageni25@gmail.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>gendewageni25@gmail.com</a>
                                    </div>
                                    <div class="pe-0">
                                        <a href="mailto:gendewageni25@gmail.com" class="text-muted small"><i class="fa fa-clock text-primary me-2"></i>Senin dan Jumat 16:00 - 19:00</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-bar px-0 py-lg-0" style="height: 80px;">
                        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="fa fa-bars"></span>
                                <h1 class="center"> Menu </h1>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav mx-0 mx-lg-auto">
                                    <a href="/index" class="nav-item nav-link active">Beranda</a>
                                    <a href="/about" class="nav-item nav-link">Tentang Kami</a>
                                    <a href="/berita" class="nav-item nav-link">Berita Acara</a>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                            <span class="dropdown-toggle">Jadwal Kegiatan</span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="/berlangsung" class="dropdown-item">Kegiatan Akan Berlangsung</a>
                                            <a href="/terdahulu" class="dropdown-item">Kegiatan Terdahulu</a>
                                        </div>
                                    </div>
                                    <a href="/contact" class="nav-item nav-link">Kontak Kami</a>
                                    <div class="nav-btn ps-3">
                                        <button class="btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                                        <a href="/contact" class="btn btn-primary py-2 px-4 ms-0 ms-lg-3"> <span>Hubungi Admin</span></a>
                                    </div>
                                    <div class="nav-shaps-1"></div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel overflow-hidden bg-dark">
            <div class="header-carousel-item hero-section">
                <img class="hero-bg-half-1" src="{{ Storage::url($about->thumbnail) }}"></>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h2 class="text-white text-uppercase fw-bold mb-4">{{$about->title}}</h2>
                                    <h1 class="display-2 text-white mb-4">{{strip_tags ($about->content) }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item hero-section">
                <img class="hero-bg-half-2" src="{{ Storage::url($jumbotron->thumbnail) }}"></>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h2 class="text-white text-uppercase fw-bold mb-4">{{$jumbotron->title}}</h2>
                                    <h1 class="display-2 text-white mb-4">{{strip_tags ($jumbotron->content)}}</h1>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-fluid about pt-5">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-content h-100">
                            <h1 class="display-4 text-white mb-4">{{$foot->title}}</h1>
                            <p class="mb-4">Kami memiliki Visi dan Misi yang bertujuan mengenalkan olahraga panahan agar dapat dijangkau oleh masyarakat luas.</p>
                            <div class="tab-class pb-4">
                                <ul class="nav d-flex mb-2">
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 active" data-bs-toggle="pill" href="#tab-1">
                                            <span style="width: 150px;">Visi</span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 mx-3" data-bs-toggle="pill" href="#tab-2">
                                            <span style="width: 150px;">Misi</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane fade show p-0 active">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center border-top border-bottom py-4">
                                                    <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                                    <p class="mb-0">{{ strip_tags($foot->content) }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane fade show p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center border-top border-bottom py-4">
                                                    <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                                    <p class="mb-0">1. Meningkatkan kualitas dan prestasi atlet panahan melalui program latihan, serta mengikuti berbagai kompetisi.<br>
                                                                    2. Membangun karakter dan sportivitas mahasiswa melalui kegiatan latihan, pembinaan, dan pelatihan.<br>
                                                                    3. Meningkatkan peran UKM Panahan sebagai wadah pengembangan diri dan bakat mahasiswa melalui program-program pengembangan diri dan pengabdian masyarakat.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 align-items-center">
                                <div class="col-sm-6">
                                    <a href="/contact" class="btn btn-primary py-3 px-5"> <span>Hubungi Kami</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-img h-100">
                            <div class="about-img-inner d-flex h-100">
                                <img src="{{ Storage::url($foot->thumbnail) }}" class="img-fluid w-100" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>