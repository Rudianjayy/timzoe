<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ashik.templatepath.net/inovex-html-files/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 03:30:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPJ TEKAJE - SMK Muhammadiyah 1 Genteng</title>
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('landingppdb/ppdb/style/assets/images/favicons/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/images/upj/UPJ.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/images/upj/UPJ.png') }}">
    <link rel="manifest" href="{{ asset('landingppdb/ppdb/style/') }}assets/images/favicons/site.webmanifest">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/owl.theme.default.min.css') }}">

    <!-- Template Styles -->
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/responsive.css') }}">


    <link rel="stylesheet" href="{{asset('ps/templates.hibootstrap.com/colugo/default/assets/css/style.css')}}">


</head>

<body>

    <div class="preloader">
        <div class="preload preload-container">
            <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/upj/UPJ.png') }}" alt="Image" style="width:60px;"></div>
        </div>
    </div><!-- /.preloader -->

    <div class="page-wrapper">

        <nav class="main-nav-one main-nav-one__home-three stricky">
            <div class="container-fluid">
                <div class="inner-container">

                    <div>
                        <img src="{{ asset('landing/html/bidzend/assets/images/avatar/background/UPJ.png') }}" alt="" style="width: 70px;">
                        <img src="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}" alt="" style="width: 80px;">
                    </div><!-- /.logo-box -->

                    <div class="main-nav__main-navigation">
                        <ul class="main-nav__navigation-box" style="margin-left: 77px;">
                            <li><a href="#home">Beranda</a></li>
                            <li><a href="#tentang">Tentang Kami</a></li>
                            <li><a href="#keunggulan">Keunggulan</a></li>
                            <li><a href="#jasa">Jasa</a></li>
                            <li><a href="#galery">Galeri</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#mitra">Mitra Kami</a></li>
                            <li><a href="#map">Map</a></li>
                        </ul><!-- /.main-nav__navigation-box -->
                    </div><!-- /.main-nav__main-navigation -->

                </div><!-- /.inner-container -->
            </div><!-- /.container-fluid -->
        </nav><!-- /.main-nav-one -->

        <style>
            .SLIDE_BG {
                width: 100%;
                height: 100vh;
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                backface-visibility: hidden;
                animation: slideBg 16s linear infinite 0s;
                animation-timing-function: ease-in-out;
                background-image: url('../images/services/service-d-2-1.jpg');
                position: relative;
            }

            @foreach ($us as $ul) @keyframes slideBg {
                0% {
                    background-image: url('{{ asset('fotomahasiswa/' . $ul->foto_slider1) }}');
                }

                25% {
                    background-image: url('{{ asset('fotomahasiswa/' . $ul->foto_slider2) }}');
                }

                50% {
                    background-image: url('{{ asset('fotomahasiswa/' . $ul->foto_slider3) }}');
                }
                75% {
                    background-image: url('{{ asset('fotomahasiswa/' . $ul->foto_slider4) }}');
                }
                100% {
                    background-image: url('{{ asset('fotomahasiswa/' . $ul->foto_slider2) }}');
                }
            }
            @endforeach

        </style>

        @foreach ($us as $ul )

        <section style="margin-bottom:36px;" class="SLIDE_BG" id='home'>
            <!-- <div class="banner">
                <img class="img-slider1" src="{{ asset('fotomahasiswa/' . $ul->foto_slider1) }}" >
            </div>
            <div class="banner2">
                <img class="img-slider2" src="{{ asset('fotomahasiswa/' . $ul->foto_slider2) }}" >
            </div>
            <div class="banner3">
                <img class="img-slider3" src="{{ asset('fotomahasiswa/' . $ul->foto_slider3) }}" >
            </div>iiiiui
            <div class="banner4">
                <img class="img-slider3" src="{{ asset('fotomahasiswa/' . $ul->foto_slider4) }}" >
            </div> -->
            {{-- <div class="particles-snow" id="banner-one-snow"></div><!-- /#cta-one-snow.particles-snow -->

            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-1.png') }}" class="banner-one__bg-shape-1" alt="">
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-2.png') }}" class="banner-one__bg-shape-2" alt="">
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-3.png') }}" class="banner-one__bg-shape-3" alt="">
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-4.png') }}" class="banner-one__bg-shape-4" alt="">
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-2.png') }}" class="banner-one__bg-shape-5" alt=""> --}}
            <div class="container">
                <div class="banner-one__image wow slideInUp" data-wow-duration="1500ms">
                    {{-- <img src="{{ asset('landingppdb/ppdb/style/assets/images/mocups/banner-moc-1-1.png') }}"
                    class="banner-one__image-1 " alt="">
                    <img src="{{ asset('landingppdb/ppdb/style/assets/images/mocups/banner-moc-1-2.png') }}" class="banner-one__image-2 float-bob-y" alt="">
                    <img src="{{ asset('landingppdb/ppdb/style/assets/images/mocups/banner-moc-1-3.png') }}" class="banner-one__image-3 float-bob-x" alt="">
                    <img src="{{ asset('landingppdb/ppdb/style/assets/images/mocups/banner-moc-1-4.png') }}" class="banner-one__image-4" alt="">
                    <img src="{{ asset('landingppdb/ppdb/style/assets/images/mocups/banner-moc-1-5.png') }}" class="banner-one__image-5" alt=""> --}}
                </div><!-- /.banner-one__image -->
                <div class="row">
                    <div class="col-xl-7" style="margin-top: 30vh;">
                        <div class="banner-one__content">
                            <h3>UPJ TEKAJE <br> SMK Muhammadiyah 1 Genteng</h3>
                            <p>Unit produksi dan jasa <br> Teknik Komputer dan Jaringan..</p>

                        </div><!-- /.banner-one__content -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner-one -->
        @endforeach

        <section class="about-three about-three__home-two" id='tentang'>
            <div class="container">
                @foreach ($tentang as $t)
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-three__home-two__images">
                            <img src="{{ asset('fotomahasiswa/' . $t->foto_tentangkami) }} " class="float-bob-y" alt="" style="width: 400px; margin-left: 35%;">
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-three__content">
                            <p>{!!$t->deskripsi_tentangkami!!}</p>
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                @endforeach
            </div>
        </section><!-- /.about-three -->


        <section id="features" class="features-area pb-70">
            <div class="container">
                <div class="section-title" id="keunggulan">
                    <h2>Keunggulan</h2>
                    <div class="bar"></div>
                </div>
                <div class="row">
                    @foreach ($keunguan as $keunguan )
                    <div class="col-lg-4 col-md-6">
                        <div class="single-features">
                            <div class="icon">
                                <i class="{{$keunguan->icon}}"></i>
                            </div>
                            <h3>{{$keunguan->keterangan}}</h3>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="text-center">
                <a href="https://wa.me/6283163042713?= Isi Pesan" class="thm-btn portfolio-column__more-btn"><i class="fab fa-whatsapp"></i> <span>Hubungi
                        Admin</span></a>
                <!-- /.thm-btn portfolio-grid__more-btn -->
            </div><!-- /.text-center -->
        </section>

        <section class="service-one" id='jasa'>
            <div class="container">
                <div class="section-title">
                    <h3>Jasa yang kami tawarkan</h3>
                    <div class="bar"></div>
                </div><!-- /.block-title text-center -->
                <div class="row high-gutters">
                    @foreach ($upjas as $ups)
                    <div class="col-lg-6 col-md-12 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="service-one__single">
                            <div class="service-one__icon">
                                <img src="{{ asset('fotomahasiswa/' . $ups->foto_jasa) }}" alt="" style="border-radius: 50%; width: 420px; height:120px;">
                            </div><!-- /.service-one__icon -->
                            <div class="service-one__content">
                                <h3><a href="service-details.html">{{ $ups->jasa }}</a></h3>
                                <p>{{ $ups->penjelasan }}</p>
                            </div><!-- /.service-one__content -->
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-6 php col-md-12 -->
                    @endforeach


                </div><!-- /.row -->
                <div class="text-center">
                    <a href="https://wa.wizard.id/" class="thm-btn portfolio-column__more-btn"><i class="fab fa-whatsapp"></i> <span>Hubungi
                            Admin</span></a>
                    <!-- /.thm-btn portfolio-grid__more-btn -->
                </div><!-- /.text-center -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->

        <section class="portfolio-grid" id='galery'>
            <div class="container">
                <div class="block-title text-center">
                    <p class="color-2"><span>Galery</span></p>
                    {{-- <h3>View Some of Our Latest Works <br> <span>& Case Studies for Clients</span></h3> --}}
                </div><!-- /.block-title text-center -->
                <div class="row high-gutters masonary-layout filter-layout">
                    @foreach ($upgal as $gatal)
                    <div class="col-lg-4 col-md-6 col-sm-12 filter-item masonary-item  strategy">
                        <div class="portfolio-one__single">
                            <div class="portfolio-one__image">
                                <img src="{{ asset('fotomahasiswa/' . $gatal->foto_galery) }}" alt="" style="height:250px;">
                                <a class="img-popup" href="{{ asset('fotomahasiswa/' . $gatal->foto_galery) }}"><i class="fal fa-plus"></i></a>
                            </div><!-- /.portfolio-one__image -->

                        </div><!-- /.portfolio-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                    @endforeach

                </div><!-- /.row -->

            </div><!-- /.container -->
        </section><!-- /.portfolio-grid -->

        @foreach ($upjvisimisi as $upjvisimisi)
        <section class="cta-one cta-one__about-one" style="background-image: url({{ asset('landingppdb/ppdb/style/assets/images/shapes/cta-bg-2-1.png') }});">
            <div class="container">
                <h3>Visi <br></h3>
                <p style="color: black;">{!! $upjvisimisi->upj_visi !!}</p>
                <h3>Misi <br></h3>
                <p style="color:black !important;">{!! $upjvisimisi->upj_misi !!}</p>
            </div><!-- /.container -->
        </section><!-- /.cta-one -->

        <section class="video-one">
            <div class="container">
                <div class="video-one__box text-center wow fadeInUp" data-wow-duration="1500ms" style="background-image: url({{ asset('fotomahasiswa/' . $upjvisimisi->foto_bg) }});">
                    <a href="{{ $upjvisimisi->link_yt }}" class="video-popup"><i class="fal fa-play-circle"></i></a>
                </div><!-- /.video-one__box -->
            </div><!-- /.container -->
        </section><!-- /.video-one -->
        @endforeach



        <section class="team-one team-one__about-1 team-one__home-two" id='team'>
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/team-bg-shape-1-1.png') }}" alt="" class="team-one__bg-shape-1">
            <div class="container">
                <div class="block-title text-center">
                    <p class="color-2"><span>Structure Management</span></p>
                </div><!-- /.block-title text-center -->
                <div class="row high-gutters">
                    @foreach ($team as $tm)
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="{{ asset('fotomahasiswa/' . $tm->foto_team) }}" alt="">
                                <div class="team-one__social">
                                    <div class="team-one__social-normal">
                                        <a href="#"><i class="fa fa-share-alt"></i></a>
                                    </div><!-- /.team-one__social-normal -->
                                    <div class="team-one__social-hover">
                                        <a href="{{ $tm->fb }}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ $tm->wa }}"><i class="fab fa-whatsapp"></i></a>
                                        <a href="{{ $tm->ig }}"><i class="fab fa-instagram"></i></a>
                                    </div><!-- /.team-one__social-hover -->
                                </div><!-- /.team-one__social -->
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <h3>{{ $tm->nama_team }}</h3>
                                <p>{{ $tm->jabatan_team }}</p>
                            </div><!-- /.team-one__content -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-one -->



        <section class="testimonials-one testimonials-one__about-one">
            <div class="container">
                <div class="block-title text-left">
                    <p class="color-2"><span>Testimoni</span></p>
                    {{-- <h3>We Care Client???s Issues <br> <span>So We are Popular.</span></h3> --}}
                </div><!-- /.block-title text-center -->
                <div class="testimonials-one__carousel thm__owl-carousel owl-carousel owl-theme" data-options='{
                    "items": 3, "margin": 40, "smartSpeed": 700, "autoplay": true, "autoplayTimeout": 5000,
                    "autoplayHoverPause": true, "nav": false, "dots": false, "loop": true, "responsive": {
                        "0": { "items": 1, "margin": 0},
                        "767": { "items": 1, "margin": 0},
                        "991": { "items": 2, "margin": 40},
                        "1199": { "items": 2, "margin": 40},
                        "1200": { "items": 3, "margin": 40}
                    }
                }'>


                    @foreach ($tes as $tes)
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__icon">
                                <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/testi-qoute-1-1.png') }}" alt="">
                            </div><!-- /.testimonials-one__icon -->
                            <p>{{ $tes->komen }}</p>
                            <h3>{{ $tes->tester }}</h3>
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    @endforeach

                </div><!-- /.testimonials-one__carousel -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->

        {{-- <div class="inner-container">
            <div class="row">
                <iframe class="map-contact" src="https://maps.google.com/maps?q=smk%20muhammadiyah%201%20genteng&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near" width="1200" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div> --}}

        {{-- <section class="contact-one">
            <div class="container wow fadeInUp" data-wow-duration="1500ms">
                <div class="inner-container">
                    <div class="row">
                        <iframe class="map-contact" src="https://maps.google.com/maps?q=smk%20muhammadiyah%201%20genteng&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.contact-one --> --}}

        <!-- contact -->
        <section id="about" class="about-area pb-100">
            <div class="container">
                <div class="section-title" id="map">
                    <h2>Kunjungi Kami</h2>
                    <div class="bar"></div>
                    <p>Kunjungi Kami. Kami melayani Konsultasi dan Cek Gratis.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col">
                             <center>  <iframe class="map-contact" src="https://maps.google.com/maps?q=smk%20muhammadiyah%201%20genteng&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near" width="1150" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('koneksi.mitra')


        <footer class="site-footer-upj">

            <div class="site-footer__upper" style="background-color: blue;">
                <div class="container">
                    <div class="row">
                        @foreach ($uf as $uf )

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget footer-widget__about">
                                <h3 class="footer-widget__title">Tentang UPJ</h3>
                                <p>{{$uf->tentang_upj}}</p>
                                <div class="footer-widget__social">
                                    <a href="{{ $uf->yt }}"><i class="fab fa-youtube"></i></a>
                                    <a href="{{ $uf->fb }}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $uf->ig }}"><i class="fab fa-instagram"></i></a>
                                    <a href="{{ $uf->wa }}"><i class="fab fa-whatsapp"></i></a>
                                </div><!-- /.footer-widget__social -->
                            </div><!-- /.footer-widget footer-widget__about -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                        @endforeach

                        <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                            <div class="elfsight-app-7e06bf3a-c3dd-4ad3-a974-4f6c4b30ba1e"></div>
                        </div>

                        @foreach ($uli as $uli )

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget footer-widget__links__2">
                                <h3 class="footer-widget__title">Link</h3>
                                <ul class="list-unstyled footer-widget__links-list">
                                    <li><a href="{{ $uli->link }}">{{ $uli->nama }}</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                        @endforeach
                        @foreach ($fu as $fu )

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget footer-widget__contact">
                                <h3 class="footer-widget__title">Kontak</h3>
                                <p>{{$fu->alamat}}</p>
                                <p><a href="mailto:{{ $fu->email }}">{{ $fu->email }}</a></p>
                                {{-- <p><a href="tel:720.661.2231">720.661.2231</a></p> --}}
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    </div><!-- /.row -->
                    @endforeach
                </div><!-- /.container -->

            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <p>?? 2020 copyright all right reserved</p>
                    <a href="index.html"><img src="assets/images/logo-1-1.png" alt=""></a>
                    {{-- <ul class="list-unstyled site-footer__bottom-menu">
                        <li><a href="#">Privace & Policy.</a></li>
                        <li><a href="#">Faq.</a></li>
                        <li><a href="#">Terms.</a></li>
                    </ul><!-- /.list-unstyled site-footer__bottom-menu --> --}}
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->

        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <div class="side-menu__block">

        <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
            <!-- /.fa fa-close --></a>

        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">

            <a href="index.html" class="side-menu__logo"><img src="assets/images/logo-1-1.png" alt=""></a>
            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <p class="side-menu__block__copy">(c) 2020 <a href="#">Inovex</a> - All rights reserved.</p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->

    <!-- template scripts -->
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/isotope.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.circleType.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.lettering.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/TweenMax.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/swiper.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/particles.min.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/particel-config.js') }}"></script>
        <script src="{{ asset('landingppdb/ppdb/style/assets/js/theme.js') }}"></script>
</body>


<!-- Mirrored from ashik.templatepath.net/inovex-html-files/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 03:30:31 GMT -->

</html>
