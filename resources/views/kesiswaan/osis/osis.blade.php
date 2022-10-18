<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/bidzend/item-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:11 GMT -->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Smk Muhammadiyah 1 Genteng</title>
    <meta name="author" content="themesflat.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/html/bidzend/assets/css/style.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('landing/html/bidzend/assets/css/responsive.css') }}">


    <link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/icon/muhilog.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/icon/muhilog.png') }}">

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
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/responsive.css') }}">
</head>

<body class="body header-fixed">

    <div class="preload preload-container">
        {{-- <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/logo/muhi.jpg') }}" alt="Image" style="width:570 !important;"></div>
    </div>


    @include('koneksi.navbar')

    <section class="fl-page-title">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Kesiswaan</a></li>
                            <li>IPM/OSIS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="tf-section item-details-page">
        <div class="author-item">
            <div class="avatar">
                <img src="assets/images/avatar/avt-4.jpg" alt="">
            </div>
            <div class="infor">
                <h6><a href="author.html">Bagikan</a> </h6>
                <div class="widget-social">
                    <ul>
                        <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
    <section class="portfolio-details">

        <div class="portfolio-details__image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <img src="fotomahasiswa/' . $d->foto" alt="">
                    </div><!-- /.col-lg-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.portfolio-details__image -->
        <div class="portfolio-details__main">
            <div class="container">
                @foreach ($b as $b)
                <div class="row">
                    <div class="col-lg-8">
                        <div class="portfolio-details__content">
                            <h3>{{$b->judul_osis}}</h3>

                            <p>{!!$b->deskripsi_osis!!}</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('fotomahasiswa/' . $b->foto) }}" alt="">
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            @endforeach

                        </div><!-- /.portfolio-details__content -->

                    </div><!-- /.col-lg-8 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.portfolio-details__main -->
    </section><!-- /.portfolio-details -->
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
    <script src="https://cdn.jsdelivr.net/npm/medium-zoom@1.0.6/dist/medium-zoom.min.js"></script>
    <script>
        mediumZoom('.zoom', {

        })
    </script>
</body>

<!-- Mirrored from themesflat.com/html/bidzend/item-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:11 GMT -->

</html>