<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/bidzend/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:40 GMT -->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Akademi</title>
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

<body class="body header-fixed ">
    <div class="preload preload-container">
        {{--  <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/logo/muhi.jpg') }}"
                alt="Image" style="width:570 !important;"></div>
    </div>

    <div id="wrapper">
        <div id="page" class="clearfix">

            @include('koneksi.navbar')


            <section class="fl-page-title">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Akademi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="service-one">
                <div class="container">
                    <div class="block-title text-center">
                        {{-- <p><span>Our Services</span></p> --}}
                        <h3>Akademi</h3>
                    </div><!-- /.block-title text-center -->


                    <div class="row high-gutters">
                        @foreach ($akdm as $ak )
                        <div class="col-lg-6 col-md-12 wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="service-one__single">
                                <div class="service-one__icon">
                                    <div class="service-one__icon-inner">
                                        @php
                                            $data = App\Models\Detailakademi::where('akademis_id', $ak->id)->first();
                                        @endphp
                                        <img src="{{asset('fotomahasiswa/' . $ak->foto) }}" alt="">
                                    </div><!-- /.service-one__icon-inner -->
                                </div><!-- /.service-one__icon -->
                                <div class="service-one__content">
                                    <h3><a href="/detailakademi/{{ $ak->id }}">{{ $ak->judul_akademi }}</a></h3>
                                    <p>{!! $ak->deskripsi_akademi !!}<a href="/detailakademi/{{ $ak->id }}"" class="thm-btn portfolio-grid__more-btn"><span>Selengkapnya</span></a></p>
                                </div><!-- /.service-one__content -->
                            </div><!-- /.service-one__single -->
                        </div><!-- /.col-lg-6 col-md-12 -->
                        @endforeach
                    </div><!-- /.row -->


                </div><!-- /.container -->
            </section><!-- /.service-one -->




            <section class="brand-one brand-one__service-page">
                <div class="container">
                    <div class="brand-one__carousel owl-carousel thm__owl-carousel owl-theme"
                        data-options='{
                "items": 5, "margin": 95, "smartSpeed": 700, "loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": false, "nav": false, "dots": false, "responsive": {"0": { "margin": 20, "items": 2 }, "575": { "margin": 30, "items": 3 },"767": { "margin": 40, "items": 4 },   "991": { "margin": 70, "items": 4 }, "1199": { "margin": 95, "items": 5 } } }'>
                        <div class="item">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/brand/brand-1-1.png') }}" alt="">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('landing/html/bidzend/assets/images/logo/humma.png') }}" alt="">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('landing/html/bidzend/assets/images/logo/mikrotik.jpg') }}" alt="">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/brand/brand-1-4.png') }}" alt="">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/brand/brand-1-5.png') }}" alt="">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/brand/brand-1-1.png') }}" alt="">
                        </div><!-- /.item -->
                        </div><!-- /.item -->
                    </div><!-- /.brand-one__carousel owl-carousel thm__owl-carousel owl-theme -->
                </div><!-- /.container -->
            </section><!-- /.brand-one -->




            @include('koneksi.footer')
        </div>

    </div>

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


</body>

<!-- Mirrored from themesflat.com/html/bidzend/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:58 GMT -->

</html>
