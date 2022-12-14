<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ashik.templatepath.net/inovex-html-files/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 03:35:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhinews Detail</title>
    <!-- favicons -->
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

<body>

    <div class="preload preload-container">
        {{-- <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/logo/muhi.jpg') }}" alt="Image" style="width:570 !important;"></div>
    </div>

    <div class="page-wrapper">

        @include('koneksi.navbar')

        <section class="fl-page-title">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">


                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Beranda</a></li>
                                <li>Blog Detail </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-standard blog-details">
            <img src="assets/images/shapes/bg-shape-1-1.png" class="section__bg-shape-1" alt="">
            <img src="assets/images/shapes/bg-shape-1-2.png" class="section__bg-shape-2" alt="">
            <img src="assets/images/shapes/bg-shape-1-3.png" class="section__bg-shape-3" alt="">



            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details__main">
                            <div class="blog-two__meta">
                                <a href="blog-details.html">{{$blog->created_at}}</a>
                            </div><!-- /.blog-two__meta -->
                            <h3>{{$blog->judul}}</h3>
                            <img src="{{ asset('fotomahasiswa/' . $blog->foto) }}" class="img-fluid" alt="" style="width: 700px; height:360px;">
                            <p>{!!$blog->deskripsi_detail!!}</p>
                        </div><!-- /.comment-one -->
                    
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar sidebar__right">
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Kategori</h3>
                                @foreach ($kategori as $kategori)
                                <ul class="list-unstyle d sidebar__category-list">
                                    <li>
                                        <a href="#">{{$kategori->kategori}}</a>
                                    </li>
                                </ul><!-- /.list-unstyled sidebar__category-list -->
                                @endforeach
                            </div><!-- /.sidebar__single -->


                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Muhi News</h3>
                                <div class="sidebar__post-wrap">
                                    @foreach ($d as $d )
                                    <div class="sidebar__post-single">
                                        <div class="sidebar__post-image">
                                            <img class="zoom" src="{{ asset('fotomahasiswa/' . $d->foto) }}" alt="">
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <h3><a href="/muhiblog/{{ $d->id }}">{{$d->judul}}</a></h3>
                                            <span>{{$d->created_at}}</span>
                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post-single -->
                                    @endforeach
                                </div><!-- /.sidebar__post-wrap -->
                            </div><!-- /.sidebar__single -->
                           
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-standard -->


        @include('koneksi.footer')



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


<!-- Mirrored from ashik.templatepath.net/inovex-html-files/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 03:35:54 GMT -->

</html>
