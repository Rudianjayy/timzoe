<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/bidzend/item-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:11 GMT -->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>SMK Muhammadiyah 1 Genteng</title>
    <meta name="author" content="themesflat.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('landing/html/bidzend/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('landing/html/bidzend/assets/css/responsive.css') }}">

    <link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/icon/muhilog.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/icon/muhilog.png') }}">

    {{-- css juga kuambil dri ppdb landing --}}
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
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/responsive.css') }}">


</head>

<body class="body header-fixed">

    <div class="preload preload-container">
        {{-- <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/logo/0.png') }}" alt="Image" style="width:570 !important;"></div>
    </div>

    {{-- <div id="wrapper">
        <div id="page" class="clearfix">
            <div class="topbar">
                <div class="container">
                    <div class="topbar-inner flex">
                        <div class="menu-options flex">
                            <div class="ethereum">
                                <div id="ethereum" class="dropdown">
                                    <a href="#" class="btn-selector nolink">Ethereum</a>
                                    <ul>
                                        <li><span>Ethereum</span></li>
                                        <li><span>Bitski</span></li>
                                        <li><span>Fortmatic</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="english">
                                <div id="english" class="dropdown">
                                    <a href="#" class="btn-selector nolink">English</a>
                                    <ul>
                                        <li><span>English</span></li>
                                        <li><span>USA</span></li>
                                        <li><span>France</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="topbar-right flex">
                            <span>New Product Coming Soon</span>
                            <div class="countdown">
                                <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                            </div>
                            <ul class="socical-icon flex">
                                <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  --}}
    @include('koneksi.navbar')

    <section class="fl-page-title">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="particles-snow" id="header-snow"></div><!-- /#header-snow.particles-snow -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li>Detail Foto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio-column">
        <div class="container">
            <div class="block-title text-center">
                <h3>{{$detailfoto->judul_fasilitas}}</h3>
            </div><!-- /.block-title text-center -->

            <div class="row masonary-layout filter-layout">
                <div class="col-lg-3 col-md-6 col-sm-12 filter-item masonary-item  strategy">
                    <div class="portfolio-two__single">
                        <div class="portfolio-two__image">
                        <!-- @foreach (explode(',', $detailfoto->foto) as $detailfoto) -->
                            <img src="{{ asset('files/' . $detailfoto) }}" alt="">
                        <!-- @endforeach -->
                            <a class="img-popup" href=""><i class="fal fa-plus"></i></a>
                        </div><!-- /.portfolio-two__image -->
                        <div class="portfolio-two__content">
                            <h3><a href="portfolio-details.html">Content Strategy</a></h3>
                            <p>Development</p>
                        </div><!-- /.portfolio-two__content -->
                    </div><!-- /.portfolio-two__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12 filter-item masonary-item optimization ">
                    <div class="portfolio-two__single">
                        <div class="portfolio-two__image">
                            <img src="assets/images/portfolio/portfolio-col-1-2.jpg" alt="">
                            <a class="img-popup" href="assets/images/portfolio/portfolio-col-1-2.jpg"><i class="fal fa-plus"></i></a>
                        </div><!-- /.portfolio-two__image -->
                        <div class="portfolio-two__content">
                            <h3><a href="portfolio-details.html">SEO Optimization</a></h3>
                            <p>Development</p>
                        </div><!-- /.portfolio-two__content -->
                    </div><!-- /.portfolio-two__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12 filter-item masonary-item advertising">
                    <div class="portfolio-two__single">
                        <div class="portfolio-two__image">
                            <img src="assets/images/portfolio/portfolio-col-1-3.jpg" alt="">
                            <a class="img-popup" href="assets/images/portfolio/portfolio-col-1-3.jpg"><i class="fal fa-plus"></i></a>
                        </div><!-- /.portfolio-two__image -->
                        <div class="portfolio-two__content">
                            <h3><a href="portfolio-details.html">Content Marketing</a></h3>
                            <p>Development</p>
                        </div><!-- /.portfolio-two__content -->
                    </div><!-- /.portfolio-two__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12 filter-item masonary-item social">
                    <div class="portfolio-two__single">
                        <div class="portfolio-two__image">
                            <img src="assets/images/portfolio/portfolio-col-1-4.jpg" alt="">
                            <a class="img-popup" href="assets/images/portfolio/portfolio-col-1-4.jpg"><i class="fal fa-plus"></i></a>
                        </div><!-- /.portfolio-two__image -->
                        <div class="portfolio-two__content">
                            <h3><a href="portfolio-details.html">PPC Advertising</a></h3>
                            <p>Development</p>
                        </div><!-- /.portfolio-two__content -->
                    </div><!-- /.portfolio-two__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12 filter-item masonary-item social">
                    <div class="portfolio-two__single">
                        <div class="portfolio-two__image">
                            <img src="assets/images/portfolio/portfolio-col-1-5.jpg" alt="">
                            <a class="img-popup" href="assets/images/portfolio/portfolio-col-1-5.jpg"><i class="fal fa-plus"></i></a>
                        </div><!-- /.portfolio-two__image -->
                        <div class="portfolio-two__content">
                            <h3><a href="portfolio-details.html">Social Marketing</a></h3>
                            <p>Development</p>
                        </div><!-- /.portfolio-two__content -->
                    </div><!-- /.portfolio-two__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12 filter-item masonary-item advertising">
                    <div class="portfolio-two__single">
                        <div class="portfolio-two__image">
                            <img src="assets/images/portfolio/portfolio-col-1-6.jpg" alt="">
                            <a class="img-popup" href="assets/images/portfolio/portfolio-col-1-6.jpg"><i class="fal fa-plus"></i></a>
                        </div><!-- /.portfolio-two__image -->
                        <div class="portfolio-two__content">
                            <h3><a href="portfolio-details.html">SEM Strategy</a></h3>
                            <p>Development</p>
                        </div><!-- /.portfolio-two__content -->
                    </div><!-- /.portfolio-two__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12 filter-item masonary-item social">
                    <div class="portfolio-two__single">
                        <div class="portfolio-two__image">
                            <img src="assets/images/portfolio/portfolio-col-1-7.jpg" alt="">
                            <a class="img-popup" href="assets/images/portfolio/portfolio-col-1-7.jpg"><i class="fal fa-plus"></i></a>
                        </div><!-- /.portfolio-two__image -->
                        <div class="portfolio-two__content">
                            <h3><a href="portfolio-details.html">Social Marketing</a></h3>
                            <p>Development</p>
                        </div><!-- /.portfolio-two__content -->
                    </div><!-- /.portfolio-two__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12 filter-item masonary-item advertising">
                    <div class="portfolio-two__single">
                        <div class="portfolio-two__image">
                            <img src="assets/images/portfolio/portfolio-col-1-8.jpg" alt="">
                            <a class="img-popup" href="assets/images/portfolio/portfolio-col-1-8.jpg"><i class="fal fa-plus"></i></a>
                        </div><!-- /.portfolio-two__image -->
                        <div class="portfolio-two__content">
                            <h3><a href="portfolio-details.html">SEM Strategy</a></h3>
                            <p>Development</p>
                        </div><!-- /.portfolio-two__content -->
                    </div><!-- /.portfolio-two__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
            </div><!-- /.row -->
            <div class="text-center">
                <a href="#" class="thm-btn portfolio-column__more-btn"><span>Load More</span></a>
                <!-- /.thm-btn portfolio-grid__more-btn -->
            </div><!-- /.text-center -->
        </div><!-- /.container -->
    </section><!-- /.portfolio-grid -->
    </div>
    </div>
    @include('koneksi.footer')

    <a id="scroll-top"></a>

    <script src="{{ asset('landing/html/bidzend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/swiper.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/plugin.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/count-down.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/shortcodes.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/main.js') }}"></script>

    {{-- js nya ppdb kuambil truh sini --}}
    {{-- <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('landingppdb/ppdb/style/assets/js/bootstrap-datepicker.min.js') }}"></script> --}}
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

    <script src="https://cdn.jsdelivr.net/npm/medium-zoom@1.0.6/dist/medium-zoom.min.js"></script>
    <script>
        mediumZoom('.zoom', {

        })
    </script>
</body>

<!-- Mirrored from themesflat.com/html/bidzend/item-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:11 GMT -->

</html>
