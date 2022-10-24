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

    {{--  <div id="wrapper">
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
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="/">Beranda</a></li>
                                <li>Iduka</li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="history-one">
        <div class="container">
            @foreach ($i as $i)
                <div class="block-title text-center">
                    <h3>{{ $i->judul_iduka }}</h3>
                </div><!-- /.block-title text-center -->
                <div class="block-title text-center">
                    <h4>
                        <p>{!! $i->deskripsi_iduka !!}</p>
                    </h4>
                </div>
            @endforeach
            <br>
            <br>
            <br>

                <div class="history-one__row-wrap">
                    <div class="history-one__row-circle"></div><!-- /.history-one__row-circle -->
                    @foreach ($fotoiduka as $fa)
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__box wow fadeInLeft" data-wow-duration="1500ms">
                                <div class="history-one__image">
                                    <img class="zoom" src="{{ asset('fotomahasiswa/' . $fa->foto_iduka) }}" alt="">
                                </div><!-- /.history-one__image -->
                                <!-- /.history-one__content -->
                            </div><!-- /.history-one__box -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="my-auto">
                                <div class="history-one__date">
                                    <h3>{{ $fa->jurusan_mou }}
                                    </h3>
                                </div><!-- /.history-one__date -->
                            </div><!-- /.my-auto -->
                        </div><!-- /.col-lg-6 d-flex -->
                    </div><!-- /.row -->
                    @endforeach
                </div>
        </div>
    </section>

    <a id="scroll-top"></a>
    @include('koneksi.footer')

    <script src="{{ asset('landing/html/bidzend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/swiper.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/plugin.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/count-down.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/shortcodes.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/medium-zoom@1.0.6/dist/medium-zoom.min.js"></script>
    <script>
        mediumZoom('.zoom', {

          })
    </script>
</body>

<!-- Mirrored from themesflat.com/html/bidzend/item-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:11 GMT -->

</html>
