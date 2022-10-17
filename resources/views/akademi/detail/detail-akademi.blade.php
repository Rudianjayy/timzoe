<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/bidzend/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:40 GMT -->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Kompetensi Keahlian</title>
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
                                    <li><a href="/indexakademi">Akademi</a></li>
                                    <li>Detail Akademi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="service-details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sidebar sidebar__left">

                                {{-- <div class="sidebar__single sidebar__category">
                                    <ul class="list-unstyled sidebar__category-list">
                                        <li>
                                            <a href="service-d-social.html">Social Marketing</a>
                                        </li>
                                        <li>
                                            <a href="service-d-content.html">Content Marketing</a>
                                        </li>
                                        <li>
                                            <a href="service-d-seo.html">SEO Optimization</a>
                                        </li>
                                        <li class="active">
                                            <a href="service-d-ppc.html">PPC Advertising</a>
                                        </li>
                                        <li>
                                            <a href="service-d-smm.html">SMM Marketing</a>
                                        </li>
                                    </ul><!-- /.list-unstyled sidebar__category-list -->
                                </div><!-- /.sidebar__single --> --}}
                                <div class="sidebar__single sidebar__contact">
                                    <h3 class="sidebar__title">Contact</h3>
                                    <ul class="list-unstyled sidebar__contact-list">
                                        <li>
                                            <i class="fa fa-map-marker-alt"></i>
                                            Royal Orville Road Apt. 728 <br> California, USA
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <a href="mailto:Inovexcompany@gmail.com">Inovexcompany@gmail.com</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <a href="tel:+88-0-1764867977">+88 (0)1764867977</a>
                                        </li>
                                    </ul><!-- /.list-unstyled sidebar__category-list -->
                                </div><!-- /.sidebar__single -->
                                {{-- <div class="sidebar__single sidebar__brouchers">
                                    <h3 class="sidebar__title">Foto</h3>
                                    <ul class="list-unstyled sidebar__category-list">
                                        <li>
                                            <a href="#">Download Now <i class="far fa-download"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">Characteristics <i class="far fa-file-pdf"></i></a>
                                        </li>
                                    </ul><!-- /.list-unstyled sidebar__category-list -->
                                </div><!-- /.sidebar__single --> --}}

                            </div><!-- /.sidebar -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-8">
                            <div class="service-details__main">
                                <div class="service-details__image">
                                    <img src="{{ asset('fotomahasiswa/'.$data->foto) }}" alt="" style="width: 500px">
                                </div><!-- /.service-details__image -->
                                <div class="service-details__content">
                                    <h3>{{ $data->akademi->judul_akademi}}</h3>
                                    <p>
                                        {!! $data->deskripsi_detail!!}
                                    </p>

                                    {{-- <ul class="service-details__list list-unstyled">
                                        <li><i class="fa fa-check-circle"></i>Labore et dolore magna aliqua</li>
                                        <li><i class="fa fa-check-circle"></i>Best Solution of the Year</li>
                                        <li><i class="fa fa-check-circle"></i>Labore et dolore magna aliqua</li>
                                    </ul><!-- /.service-details__list list-unstyled --> --}}
                                    {{-- <div class="row">
                                        @foreach ($foto as $ft )

                                        <div class="col-md-6">
                                            <img src="{{ asset('fotomahasiswa/'.$ft->foto) }}" alt="">
                                        </div><!-- /.col-lg-6 -->
                                        @endforeach
                                    </div><!-- /.row --> --}}
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor
                                        sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam,</p> --}}
                                </div><!-- /.service-details__content -->
                            </div><!-- /.service-details__main -->
                        </div><!-- /.col-lg-8 -->

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.blog-standard -->


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

</body>

<!-- Mirrored from themesflat.com/html/bidzend/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:58 GMT -->

</html>
