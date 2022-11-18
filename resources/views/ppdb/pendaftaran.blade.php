<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/colugo/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 08:00:39 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/animate.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/fontawesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/odometer.css') }}">

    <link rel="stylesheet"
        href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/magnific-popup.min.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/slick.min.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/dark.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/responsive.css') }}">
    <title>PPDB - SMK Muhammadiyah 1 Genteng</title>
    <link rel="icon" type="image/png"
        href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/favicon.png') }}">
</head>

<body data-bs-spy="scroll" data-bs-offset="120">

    <div class="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="logo">
                <a href="javascript:void(0)">
                    <h3>PPDB Online</h3>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#daftar" class="nav-link">
                            Cara Pendaftaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#biaya" class="nav-link">
                            Biaya & Jadwal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#syarat" class="nav-link">
                            Syarat Pendaftaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#kontak" class="nav-link">
                            Kontak
                        </a>
                    </li>
                </ul>
                <div class="others-option">
                    <div class="d-flex align-items-center">
                        <div class="option-item">
                            <a href="/login" class="default-btn">
                                Login
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div id="home" class="main-banner">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        @foreach ($dp as $dp)
                            <div class="col-lg-6">
                                <div class="banner-content">
                                    <h1>{{ $dp->judul_slider }}</h1>
                                    <p>
                                        {{ $dp->deskripsi_slider }}
                                    </p>

                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-6">
                            <div class="banner-image">
                                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/mobile.png') }}"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="default-shape">
            <div class="shape-1">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/1.png') }}"
                    alt="image">
            </div>
            <div class="shape-2 rotateme">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/2.png') }}"
                    alt="image">
            </div>
            <div class="shape-3">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/3.svg') }}"
                    alt="image">
            </div>
            <div class="shape-4">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/4.svg') }}"
                    alt="image">
            </div>
            <div class="shape-5">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/5.png') }}"
                    alt="image">
            </div>
        </div>
    </div>


    <section class="fun-facts-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h3>
                            <span class="odometer" data-count="1020">00</span>
                        </h3>
                        <p>Usersr</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3>
                            <span class="odometer" data-count="5679">00</span>
                        </h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="fa fa-star"></i>
                        </div>
                        <h3>
                            <span class="odometer" data-count="2660">00</span>
                        </h3>
                        <p>Reviews</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="fa fa-download"></i>
                        </div>
                        <h3>
                            <span class="odometer" data-count="6789">00</span>
                        </h3>
                        <p>App Downloads</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about" class="about-area pb-100">
        <div class="container">
            <div class="section-title">
                <h2>About Our App</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3>Our process is simple, Our App is powerful</h3>
                        <div class="bar"></div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable.</p>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                            embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet
                            tend to repeat predefined chunks as necessary, making this the first true generator on the
                            Internet.</p>
                        <div class="about-btn">
                            <a href="#" class="default-btn">
                                Download Now
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/about.png') }}"
                            alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="default-shape">
            <div class="shape-1">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/1.png') }}"
                    alt="image">
            </div>
            <div class="shape-2 rotateme">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/2.png') }}"
                    alt="image">
            </div>
            <div class="shape-3">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/3.svg') }}"
                    alt="image">
            </div>
            <div class="shape-4">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/4.svg') }}"
                    alt="image">
            </div>
            <div class="shape-5">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/5.png') }}"
                    alt="image">
            </div>
        </div>
    </section>


    <section id="syarat" class="features-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Syarat Pendaftaran</h2>
                <div class="bar"></div>
                <p> </p>
            </div>
            <div class="row">
                @foreach ($cp as $cp )

                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <i class="fa-solid fa-download"></i>
                        </div>
                        <h3>{{ $cp->deskripsi }}</h3>
                        <p>{{$cp->deskripsi_detail}}</p>
                        </div>
                    </div>
                    @endforeach
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <i class="fa fa-lightbulb"></i>
                        </div>
                        <h3>Unique Design</h3>
                        <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed
                            viverra nunc tinci dunt nec elei fend et tiram.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <h3>Full Responsive</h3>
                        <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed
                            viverra nunc tinci dunt nec elei fend et tiram.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <h3>Clean Codes</h3>
                        <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed
                            viverra nunc tinci dunt nec elei fend et tiram.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <h3>Retina Ready</h3>
                        <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed
                            viverra nunc tinci dunt nec elei fend et tiram.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <i class="fa fa-camera"></i>
                        </div>
                        <h3>Unlimited Features</h3>
                        <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed
                            viverra nunc tinci dunt nec elei fend et tiram.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="default-shape">
            <div class="shape-1">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/1.png') }}"
                    alt="image">
            </div>
            <div class="shape-2 rotateme">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/2.png') }}"
                    alt="image">
            </div>
            <div class="shape-3">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/3.svg') }}"
                    alt="image">
            </div>
            <div class="shape-4">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/4.svg') }}"
                    alt="image">
            </div>
            <div class="shape-5">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/5.png') }}"
                    alt="image">
            </div>
        </div>
    </section>


    <section id="screenshots" class="screenshot-area ptb-100">
        <div class="container-fluid">
            <div class="section-title">
                <h2>App Screenshot</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="screenshot-slider owl-carousel owl-theme">
                <div class="screenshot-item">
                    <div class="image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/screenshot/1.png') }}"
                            alt="image">
                    </div>
                </div>
                <div class="screenshot-item">
                    <div class="image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/screenshot/2.png') }}"
                            alt="image">
                    </div>
                </div>
                <div class="screenshot-item">
                    <div class="image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/screenshot/3.png') }}"
                            alt="image">
                    </div>
                </div>
                <div class="screenshot-item">
                    <div class="image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/screenshot/4.png') }}"
                            alt="image">
                    </div>
                </div>
                <div class="screenshot-item">
                    <div class="image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/screenshot/5.png') }}"
                            alt="image">
                    </div>
                </div>
                <div class="screenshot-item">
                    <div class="image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/screenshot/6.png') }}"
                            alt="image">
                    </div>
                </div>
                <div class="screenshot-item">
                    <div class="image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/screenshot/1.png') }}"
                            alt="image">
                    </div>
                </div>
                <div class="screenshot-item">
                    <div class="image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/screenshot/2.png') }}"
                            alt="image">
                    </div>
                </div>
                <div class="screenshot-item">
                    <div class="image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/screenshot/3.png') }}"
                            alt="image">
                    </div>
                </div>
                <div class="screenshot-item">
                    <div class="image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/screenshot/4.png') }}"
                            alt="image">
                    </div>
                </div>
                <div class="screenshot-item">
                    <div class="image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/screenshot/5.png') }}"
                            alt="image">
                    </div>
                </div>
                <div class="screenshot-item">
                    <div class="image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/screenshot/6.png') }}"
                            alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Testimonial</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="testimonial-slides">
                <div class="client-feedback">
                    <div>
                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>
                    </div>
                    <button class="prev-arrow slick-arrow">
                        <i class="fa fa-chevron-left"></i>
                    </button>
                    <button class="next-arrow slick-arrow">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
                <div class="client-thumbnails">
                    <div>
                        <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/client/1.jpg') }}"
                                    alt="client">
                            </div>
                            <div class="title">
                                <h3>Jonus Nathan</h3>
                                <span>CEO at Envato</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="default-shape">
            <div class="shape-1">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/1.png') }}"
                    alt="image">
            </div>
            <div class="shape-2 rotateme">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/2.png') }}"
                    alt="image">
            </div>
            <div class="shape-3">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/3.svg') }}"
                    alt="image">
            </div>
            <div class="shape-4">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/4.svg') }}"
                    alt="image">
            </div>
            <div class="shape-5">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/5.png') }}"
                    alt="image">
            </div>
        </div>
    </section>


    <section class="overview-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="overview-content">
                        <h3>Overall 400k+ Our Users Please Get Download Now</h3>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip commodo.</p>
                        <div class="overview-btn">
                            <a href="#" class="default-btn">
                                Get It Now
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="overview-image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/overview.png') }}"
                            alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="biaya" class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Pricing Plan</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="tab pricing-list-tab">
                <ul class="tabs">
                    <li>
                        <a href="#">
                            Monthly
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Yearly
                        </a>
                    </li>
                </ul>
                <div class="tab_content">
                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Gelombang 1</h3>
                                    </div>
                                    <div class="price">
                                       <h5>Geratis biaya pendaftaran</h5>
                                    </div>
                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            18 Januari - 28 Februari
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Personal</h3>
                                    </div>
                                    <div class="price">
                                        <sup>$</sup>69 <sub>/ monthly</sub>
                                    </div>
                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Extra features
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Lifetime free support
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Upgrate options
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Full access
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Web Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            App Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Developement
                                        </li>
                                    </ul>
                                    <div class="pricing-btn">
                                        <a href="#" class="default-btn">
                                            Purchase
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Business</h3>
                                    </div>
                                    <div class="price">
                                        <sup>$</sup>99 <sub>/ monthly</sub>
                                    </div>
                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Extra features
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Lifetime free support
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Upgrate options
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Full access
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Web Design
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            App Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Developement
                                        </li>
                                    </ul>
                                    <div class="pricing-btn">
                                        <a href="#" class="default-btn">
                                            Purchase
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Standard</h3>
                                    </div>
                                    <div class="price">
                                        <sup>$</sup>133 <sub>/ yearly</sub>
                                    </div>
                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Extra features
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Lifetime free support
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Upgrate options
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Full access
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            App Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Developement
                                        </li>
                                    </ul>
                                    <div class="pricing-btn">
                                        <a href="#" class="default-btn">
                                            Purchase
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Personal</h3>
                                    </div>
                                    <div class="price">
                                        <sup>$</sup>169 <sub>/ yearly</sub>
                                    </div>
                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Extra features
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Lifetime free support
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Upgrate options
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Full access
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Web Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            App Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Developement
                                        </li>
                                    </ul>
                                    <div class="pricing-btn">
                                        <a href="#" class="default-btn">
                                            Purchase
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Business</h3>
                                    </div>
                                    <div class="price">
                                        <sup>$</sup>199 <sub>/ yearly</sub>
                                    </div>
                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Extra features
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Lifetime free support
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Upgrate options
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Full access
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Web Design
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            App Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Developement
                                        </li>
                                    </ul>
                                    <div class="pricing-btn">
                                        <a href="#" class="default-btn">
                                            Purchase
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="default-shape">
            <div class="shape-1">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/1.png') }}"
                    alt="image">
            </div>
            <div class="shape-2 rotateme">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/2.png') }}"
                    alt="image">
            </div>
            <div class="shape-3">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/3.svg') }}"
                    alt="image">
            </div>
            <div class="shape-4">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/4.svg') }}"
                    alt="image">
            </div>
            <div class="shape-5">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/5.png') }}"
                    alt="image">
            </div>
        </div>
    </section>


    <section id="daftar" class="faq-area ptb-100">
        <div class="container">
            @foreach ($pd as $pd)
                <div class="section-title">
                    <h2>Cara Pendaftaran</h2>
                    <div class="bar"></div>
                    <p>{!! $pd->deskripsi_pendaftaran !!}</p>
                </div>
            @endforeach
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-accordion-content">
                        <ul class="accordion">

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-chevron-down"></i>
                                    Can I get support from the Author?
                                </a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices gravida</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-chevron-down"></i>
                                    Which material types can you work with?
                                </a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices gravida</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-chevron-down"></i>
                                    Why Choose Our Services In Your Business?
                                </a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices gravida</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/faq-mobile.png') }}"
                            alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="default-shape">
            <div class="shape-1">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/1.png') }}"
                    alt="image">
            </div>
            <div class="shape-2 rotateme">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/2.png') }}"
                    alt="image">
            </div>
            <div class="shape-3">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/3.svg') }}"
                    alt="image">
            </div>
            <div class="shape-4">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/4.svg') }}"
                    alt="image">
            </div>
            <div class="shape-5">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/5.png') }}"
                    alt="image">
            </div>
        </div>
    </section>


    <section class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our Expert Team</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/team/image1.jpg') }}"
                                alt="image">
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="content">
                                <h3>Justin Roberto</h3>
                                <p>Founder & CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/team/image2.jpg') }}"
                                alt="image">
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="content">
                                <h3>Louis Agassiz</h3>
                                <p>Co-Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/team/image3.jpg') }}"
                                alt="image">
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="content">
                                <h3>Carl Anderson</h3>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="default-shape">
            <div class="shape-1">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/1.png') }}"
                    alt="image">
            </div>
            <div class="shape-2 rotateme">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/2.png') }}"
                    alt="image">
            </div>
            <div class="shape-3">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/3.svg') }}"
                    alt="image">
            </div>
            <div class="shape-4">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/4.svg') }}"
                    alt="image">
            </div>
            <div class="shape-5">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/5.png') }}"
                    alt="image">
            </div>
        </div>
    </section>


    <section class="app-download ptb-100">
        <div class="container">
            <div class="app-download-content">
                <h3>Download Our Apps Today</h3>
                <div class="bar"></div>
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                    born and I will give you a complete account the system and expound the actual teachings of the great
                    explore.</p>
                <div class="app-holder">
                    <a href="#">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/store/1.png') }}"
                            alt="image">
                    </a>
                    <a href="#">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/store/2.png') }}"
                            alt="image">
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Latest Blog Post</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="single-blog.html">
                                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/blog/image1.jpg') }}" alt="image">
                            </a>
                            <div class="btn">
                                <a href="#">App Development</a>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    12 March 2021
                                </li>
                                <li>
                                    <i class="fa fa-comments"></i>
                                    <a href="#">3 Comment</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="single-blog.html">
                                    The Most Popular New Business Apps
                                </a>
                            </h3>
                            <p>Water plan dolor sit amet consturisi velised quiLorem</p>
                            <a href="single-blog.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="single-blog.html">
                                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/blog/image2.jpg') }}" alt="image">
                            </a>
                            <div class="btn">
                                <a href="#">Web Development</a>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    18 March 2021
                                </li>
                                <li>
                                    <i class="fa fa-comments"></i>
                                    <a href="#">6 Comment</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="single-blog.html">
                                    The Most Popular New Apps in 2021
                                </a>
                            </h3>
                            <p>Water plan dolor sit amet consturisi velised quiLorem</p>
                            <a href="single-blog.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="single-blog.html">
                                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/blog/image3.jpg') }}" alt="image">
                            </a>
                            <div class="btn">
                                <a href="#">Design Development</a>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    28 March 2021
                                </li>
                                <li>
                                    <i class="fa fa-comments"></i>
                                    <a href="#">0 Comment</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="single-blog.html">
                                    The Best Marketing Management Tools
                                </a>
                            </h3>
                            <p>Water plan dolor sit amet consturisi velised quiLorem</p>
                            <a href="single-blog.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section id="kontak" class="contact-area ptb-100">
        <div class="container">
            @foreach ($kontak as $kontak)
                <div class="section-title">
                    <h2>Kontak Kami</h2>
                    <div class="bar"></div>
                    <p>{!! $kontak->deskripsi_kontak !!}</p>
                </div>
            @endforeach
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            required data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            required data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required
                                            data-error="Please enter your number" class="form-control"
                                            placeholder="Your Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject"
                                            class="form-control" required data-error="Please enter your subject"
                                            placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required
                                            data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="send-btn">
                                        <button type="submit" class="default-btn">
                                            Send Message
                                            <span></span>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="contact-info-content">
                            <h3>Contact with us by Your Phone Number or Email Address</h3>
                            <h2>
                                <a href="tel:+1-485-456-0102">+1-485-456-0102</a>
                                <span>Or</span>
                                <a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#28404d444447684b47445d4f47064b4745"><span
                                        class="__cf_email__"
                                        data-cfemail="0f676a6363604f6c60637a6860216c6062">[email&#160;protected]</span></a>
                            </h2>
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="default-shape">
            <div class="shape-1">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/1.png') }}"
                    alt="image">
            </div>
            <div class="shape-2 rotateme">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/2.png') }}"
                    alt="image">
            </div>
            <div class="shape-3">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/3.svg') }}"
                    alt="image">
            </div>
            <div class="shape-4">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/4.svg') }}"
                    alt="image">
            </div>
            <div class="shape-5">
                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/shape/5.png') }}"
                    alt="image">
            </div>
        </div>
    </section>


    <div class="subscribe-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="subscribe-content">
                        <h2>Subscribe for our Newsletter</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form class="newsletter-form">
                        <input type="email" class="input-newsletter" placeholder="Enter your Email" name="EMAIL"
                            required autocomplete="off">
                        <button type="submit">
                            Subscribe Now
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <section class="footer-area pt-100 pb-70">
    <footer id="footer" class="clearfix bg-style ft-home-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                @php
                    $ppdb = \App\Models\footeer::all();
                @endphp
                @foreach ($ppdb as $ppdb)
                    <div class="widget widget-logo">
                        <div class="logo-footer" id="logo-footer">
                            <a href="#">
                                <img id="logo_footer" src="{{ asset('fotomahasiswa/' . $ppdb->foto) }}" alt="nft-gaming"
                                    width="120" height="100" style="margin-left:50px;">
                            </a>
                        </div>
                        <p class="sub-widget-logo">{!! $ppdb->deskripsi_footeer !!}</p>
                        <div class="widget-social">
                            <ul>
                                <li><a href="https://www.facebook.com/smkmuhigenteng"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                {{--  <li><a href="#"><i class="fab fa-gmail"></i></a></li>  --}}
                                <li><a href="https://www.instagram.com/muhi.ig/?next=%2F&hl=id"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fal fa-envelope"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCJOjJCbfEcApeNYmDJ4tCCw"><i
                                            class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-7e06bf3a-c3dd-4ad3-a974-4f6c4b30ba1e"></div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="widget widget-menu menu-supports">
                    <h5 class="title-widget">Lainnya</h5>
                    @php
                        $link = \App\Models\Footeerdua::all();
                    @endphp
                    <ul>
                        @foreach ($link as $pp)
                            <li><a href="{{ $pp->link }}">{{ $pp->judul }}</a></li>
                        @endforeach

                        {{--  <li><a href="https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/39108646-470a-4aac-bee3-bc8ea91b8973">Dapodik</a></li>
                        <li><a href="https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/39108646-470a-4aac-bee3-bc8ea91b8973">UPJ TKJ</a></li>
                        <li><a href="/profilsekolah">Tentang Kami</a></li>
                        <li><a href="#">PPDB</a></li>  --}}

                    </ul>
                </div>
            </div>
            {{--  <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="widget widget-post">
                    <h5 class="title-widget">Berita </h5>
                    @php
                        $muhiberita = \App\Models\Muhinews::orderBy('created_at','desc')->paginate(3);
                    @endphp
                    <ul class="post-new">
                        @foreach ($muhiberita as $mb)
                            <li>
                                <div class="post-img">
                                    <img src="{{ asset('fotomahasiswa/' . $mb->foto) }}" alt="Post New">
                                </div>
                                <div class="post-content">
                                    <h6 class="title"><a href="/muhinews">{{ $mb->deskripsi_muhinews }}</a></h6>
                                    <a href="/muhinews" class="post-date"><i
                                            class="far fa-calendar-week"></i>{{ $mb->created_at }}</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>  --}}
        </div>
    </div>
</footer>


</div>

</div>

<a id="scroll-top"></a>

<div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 pd-40">
                <h3 class="text-center">Your Bidding
                    Successfuly Added</h3>
                <p class="text-center">your bid <span class="price color-popup">(5.23ETH) </span> has been
                    listing
                    to our database</p>
                <a href="#" class="btn btn-primary"> Watch the listings</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    </div>
</div>

    </section>


    <div class="copy-right">
        <div class="container">
            <div class="copy-right-content">
                <p>
                    Copyright © 2022 at SMK Muhammadiyah 1 Genteng. Supported by
                    <a href="https://hibootstrap.com/" target="_blank">
                        Team Zoe
                    </a>
                </p>
            </div>
        </div>
    </div>


    <div class="go-top">
        <i class="fa fa-chevron-up"></i>
        <i class="fa fa-chevron-up"></i>
    </div>


    <script data-cfasync="false"
        src="{{ asset('ps/templates.hibootstrap.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/jquery.appear.js') }}"></script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/odometer.min.js') }}"></script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/slick.min.js') }}"></script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/particles.min.js') }}"></script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/jquery.ripples-min.js') }}"></script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/jquery.magnific-popup.min.js') }}">
    </script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/wow.min.js') }}"></script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/form-validator.min.js') }}"></script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/contact-form-script.js') }}"></script>

    <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/main.js') }}"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/colugo/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 08:01:52 GMT -->

</html>
