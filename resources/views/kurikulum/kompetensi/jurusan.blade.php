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
                            <div class="particles-snow" id="header-snow"></div><!-- /#header-snow.particles-snow -->

                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/page-header-shape-1-1.png') }}"
                                class="page-header__bg-shape-1" alt="">
                            <img src="" class="page-header__bg-shape-2" alt="">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-1.png') }}"
                                class="page-header__bg-shape-3" alt="">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-3.png') }}"
                                class="page-header__bg-shape-4" alt="">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="/kompetensi">Kompetensi</a></li>
                                    <li>Jurusan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            {{-- <section class="hot-collections-page tf-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-heading style-2">
                                <div class="content-left">
                                    <div class="inner">
                                        <h3>{{ $data->personal->nama_jurusan }}</h3>
                                        <p class="desc">{{ $data->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="swiper-container popular-coll">
                                <div class="swiper-wrapper">
                                    @foreach ($foto as $ft)
                                        <div class="swiper-slide">
                                            <div class="slider-item">
                                                <div class="sc-author-card">
                                                    <div class="card-media">
                                                        <img width="500" height="500"
                                                            src="{{ asset('fotojurusan/'.$ft->foto) }}"
                                                            alt="">
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

            <section class="blog-standard blog-details" style="margin-top: 5px;">
                <img src="assets/images/shapes/bg-shape-1-1.png" class="section__bg-shape-1" alt="">
                <img src="assets/images/shapes/bg-shape-1-2.png" class="section__bg-shape-2" alt="">
                <img src="assets/images/shapes/bg-shape-1-3.png" class="section__bg-shape-3" alt="">


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
                                    {{-- <a href="blog-details.html">Sara dodly</a>
                                    <span>-</span> --}}
                                    <a href="blog-details.html">{{ $data->created_at }}</a>
                                </div><!-- /.blog-two__meta -->
                                <h3>{{ $data->personal->nama_jurusan }}</h3>
                                {{-- <img src="{{ asset('landingppdb/ppdb/style/assets/images/blog/blog-2-1.jpg') }}"
                                    class="img-fluid" alt=""> --}}
                                <p>{!! $data->deskripsi!!}</p>

                                
                                {{-- <blockquote>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur.</p> --}}
                            </div><!-- /.blog-details__main -->

                            <div class="blog-details__meta">
                                <div class="blog-details__tags">
                                    <span>Tags</span>
                                    {{-- <a href="#">Marketing</a>
                                    <a href="#">Business</a>
                                    <a href="#">App Design</a> --}}
                                </div><!-- /.blog-details__tags -->
                                <div class="blog-details__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div><!-- /.blog-details__social -->
                            </div><!-- /.blog-details__meta -->
                        </div><!-- /.col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="sidebar sidebar__right">
                                {{-- <div class="sidebar__single sidebar__search">
                                    <form action="#" class="sidebar__search-form">
                                        <input type="text" placeholder="Search">
                                        <button type="submit" class="sidebar__search-btn"><i
                                                class="fa fa-search"></i></button><!-- /.sidebar__search-btn -->
                                    </form><!-- /.sidebar__search-form -->
                                </div><!-- /.sidebar__single --> --}}
                                <div class="sidebar__single sidebar__category">
                                    <h3 class="sidebar__title">Foto</h3>
                                    <ul class="list-unstyled sidebar__category-list">
                                        @foreach ($foto as $ft )
                                        <li>
                                            <div class="sc-author-card">
                                                <div class="card-media">
                                                    <img class="zoom" width="500" height="500"
                                                        src="{{ asset('fotojurusan/'.$ft->foto) }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </li>
                                        
                                    @endforeach
                                    </ul><!-- /.list-unstyled sidebar__category-list -->
                                </div><!-- /.sidebar__single -->

                            </div><!-- /.sidebar -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>

            <section class="brand-one brand-one__pricing-page brand-one__home-three">
                <div class="container">
                    <div class="block-title text-center">
                        <p class="color-2"><span>Bekerja sama dengan</span></p>
                        {{-- <h3>Trusted by Over 25,000 World’s <br> <span>Leading Companies</span></h3> --}}
                    </div><!-- /.block-title text-center -->
    
                    <div class="brand-one__carousel owl-carousel thm__owl-carousel owl-theme"
                        data-options='{
                "items": 5, "margin": 95, "smartSpeed": 700, "loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": false, "nav": false, "dots": false, "responsive": {"0": { "margin": 20, "items": 2 }, "575": { "margin": 30, "items": 3 },"767": { "margin": 40, "items": 4 },   "991": { "margin": 70, "items": 4 }, "1199": { "margin": 95, "items": 5 } } }'>
                        <div class="item">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/brand/brand-1-1.png') }}" alt="">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/brand/brand-1-2.png') }}" alt="">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/brand/brand-1-3.png') }}" alt="">
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
                        <div class="item">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/brand/brand-1-2.png') }}" alt="">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/brand/brand-1-3.png') }}" alt="">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/brand/brand-1-4.png') }}" alt="">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('landingppdb/ppdb/style/assets/images/brand/brand-1-5.png') }}" alt="">
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

<!-- Mirrored from themesflat.com/html/bidzend/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:58 GMT -->

</html>
