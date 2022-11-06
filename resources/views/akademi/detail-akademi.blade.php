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
                                    <li>{{ $dekad->judul_akademi}}</li>
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

                                <div class="sidebar__single sidebar__category">
                                    <ul class="list-unstyled sidebar__category-list">
                                        @php
                                            $akademi = \App\Models\Akademi::all();
                                        @endphp
                                        @foreach ($akademi as $ami )
                                        <li>
                                            <a href="/detailakademi/{{ $ami->id }}">{{ $ami->judul_akademi }}</a>
                                        </li>
                                        @endforeach
                                    </ul><!-- /.list-unstyled sidebar__category-list -->
                                </div><!-- /.sidebar__single -->
                                <div class="sidebar__single sidebar__contact">
                                    <h3 class="sidebar__title">Kontak</h3>
                                    <ul class="list-unstyled sidebar__contact-list">
                                        <li>
                                            <i class="fa fa-map-marker-alt"></i>
                                            <span>{{$dekad->alamat}}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <a >{{ $dekad->email }}</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <a >0{{ $dekad->notelpon }}</a>
                                        </li>
                                    </ul><!-- /.list-unstyled sidebar__category-list -->
                                </div><!-- /.sidebar__single -->
                                <div class="sidebar__single sidebar__brouchers">
                                    <h3 class="sidebar__title">Lainnya</h3>
                                    <ul class="list-unstyled sidebar__category-list">
                                        <li>
                                            <a href="/ekstra">Ekstra Kurikuler</a>
                                        </li>
                                        <li>
                                            <a href="/osis">IPM/OSIS</a>
                                        </li>
                                        <li>
                                            <a href="/alumni">Alumni</a>
                                        </li>
                                    </ul><!-- /.list-unstyled sidebar__category-list -->
                                </div><!-- /.sidebar__single -->
                                <div class="sidebar__single sidebar__brouchers">
                                    <h3 class="sidebar__title">Berita</h3>
                                    @php
                                    $muhiberita = \App\Models\Muhinews::paginate(3);
                                    @endphp
                                    <ul class="list-unstyled sidebar__category-list">
                                        @foreach ($muhiberita as $mb )
                                        <div class="sidebar__post-single">
                                            <div class="sidebar__post-image">
                                                <img src="{{ asset('fotomahasiswa/' . $mb->foto) }}" alt="">
                                            </div><!-- /.sidebar__post-image -->
                                            <div class="sidebar__post-content">
                                                <h3><a href="/muhiblog/{{ $mb->id }}">{{ $mb->deskripsi_muhinews }}</a></h3>
                                                <span>{{ $mb->created_at }}</span>
                                            </div><!-- /.sidebar__post-content -->
                                        </div><!-- /.sidebar__post-single -->
                                        @endforeach
                                    </ul><!-- /.list-unstyled sidebar__category-list -->
                                </div><!-- /.sidebar__single -->

                            </div><!-- /.sidebar -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-8">
                            <div class="service-details__main">
                                <div class="service-details__image">
                                    <img src="{{ asset('fotomahasiswa/'.$dekad->foto) }}" alt="" style="width: 500px">
                                </div><!-- /.service-details__image -->
                                <div class="service-details__content">
                                    <h3>{{ $dekad->judul_akademi}}</h3>
                                    <p>
                                        {!! $dekad->deskripsi_akademi!!}
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

            @include('koneksi.mitra')

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
