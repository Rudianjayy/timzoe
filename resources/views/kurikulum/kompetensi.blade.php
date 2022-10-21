<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/bidzend/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:40 GMT -->

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
                                    <li>Kompetensi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            {{-- <section class="hot-collections-page tf-section">
                <div class="container">
                    <div class="row">

                        @foreach ($kompetensi as $k)
                        <div class="col-md-12">
                            <div class="sc-heading style-2">
                                <div class="content-left">
                                    <div class="inner">
                                        <h1>{{ $k->judul_kompetensi }}</h1>
                                        <p class="desc">{{ $k->deskripsi_kompetensi }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-md-12">
                            <div class="swiper-container popular-coll">
                                <div class="swiper-wrapper">
                                    @foreach ($pj as $khj)
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-author-card">
                                                <div class="card-media">
                                                    @php
                                                        $foto = App\Models\Jurusan::where('personaljurusans_id',$khj->id)->first();
                                                    @endphp
                                                    <a href="/indexjurusan/{{ $khj->id }}">
                                                     @if ($foto != null)   
                                                        <img src="{{ asset('fotojurusan/'. $foto->foto) }}"
                                                            class="img-fluid" alt="">
                                                    @else
                                                        <img src="{{ asset('fotomahasiswa/album1.jpg') }}"
                                                        class="img-fluid" alt="">
                                                    @endif
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <section class="tf-section connect-wallet">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="sc-heading">
                                <h1>Kompetensi Keahlian</h1>
                                {{-- <p class="desc">{!! $kp->deskripsi_kompetensi !!} </p> --}}
                            </div>

                        </div>
                        <br><br><br>
                        @foreach ($kh as $khj)
                            <div class="col-lg-4 col-md-4">
                                <div class="sc-wallet">
                                    <div class="icon">
                                        
                                        <a href="/indexjurusan/{{ $khj->id }}">
                                            @if ($foto != null)
                                                <img src="{{ asset('fotojurusan/' . $khj->foto) }}" class="img-fluid"
                                                    alt="" style="border-radius: 50%">
                                            @else
                                                <img src="{{ asset('fotomahasiswa/ppkosong.webp') }}" class="img-fluid"
                                                    alt="" style="border-radius: 50%">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4><a href="/indexjurusan/{{ $khj->id }}"> {{ $khj->nama_kompetensi2 }}</a>
                                        </h4>

                                        <p>{!! $khj->deskripsi_kompetensi2 !!}</p>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

           @include('koneksi.mitra')
            {{-- <section class="blog-standard blog-details">
                <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/bg-shape-1-1.png') }}" class="section__bg-shape-1" alt="">
                <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/bg-shape-1-2.png') }}" class="section__bg-shape-2" alt="">
                <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/bg-shape-1-3.png') }}" class="section__bg-shape-3" alt="">
    
    
                <div class="section__bubble-1"></div><!-- /.section__bubble-1 -->
                <div class="section__bubble-2"></div><!-- /.section__bubble-2 -->
                <div class="section__bubble-3"></div><!-- /.section__bubble-3 -->
                <div class="section__bubble-4"></div><!-- /.section__bubble-4 -->
                <div class="section__bubble-5"></div><!-- /.section__bubble-5 -->
                <div class="section__bubble-6"></div><!-- /.section__bubble-6 -->
                <div class="section__bubble-7"></div><!-- /.section__bubble-7 -->
                <div class="section__bubble-8"></div><!-- /.section__bubble-8 -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-details__main">
                                <div class="blog-two__meta">
                                    <a href="blog-details.html">Sara dodly</a>
                                    <span>-</span>
                                    <a href="blog-details.html">Mar 15, 2020</a>
                                </div><!-- /.blog-two__meta -->
                                <h3>Additional Services that will <br> Grow Business</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    
                                <img src="{{ asset('landingppdb/ppdb/style/assets/images/blog/blog-2-1.jpg') }}" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum deserunt mollit anim id est laborum."Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br> sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('landingppdb/ppdb/style/assets/images/blog/blog-d-1-1.jpg') }}" alt="" class="img-fluid">
                                    </div><!-- /.col-md-4 -->
                                    <div class="col-sm-4">
                                        <img src="{{ asset('landingppdb/ppdb/style/assets/images/blog/blog-d-1-2.jpg') }}" alt="" class="img-fluid">
                                    </div><!-- /.col-md-4 -->
                                    <div class="col-sm-4">
                                        <img src="{{ asset('landingppdb/ppdb/style/assets/images/blog/blog-d-1-3.jpg') }}" alt="" class="img-fluid">
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
                                <h4>SEO is a Cost-Effective Advertising Strategy</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div><!-- /.blog-details__main -->
    
                            
                        </div><!-- /.col-lg-8 -->
                        
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section> --}}
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
