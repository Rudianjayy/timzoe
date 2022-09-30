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

    <link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/icon/muhi.jpg') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/icon/muhi.jpg') }}">

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
        {{--  <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/logo/muhi.jpg') }}"
                alt="Image" style="width:570 !important;"></div>
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
                    <div class="particles-snow" id="header-snow"></div><!-- /#header-snow.particles-snow -->

                    <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/page-header-shape-1-1.png') }}"
                        class="page-header__bg-shape-1" alt="">
                    <img src="" class="page-header__bg-shape-2" alt="">
                    <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-1.png') }}"
                        class="page-header__bg-shape-3" alt="">
                    <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-3.png') }}"
                        class="page-header__bg-shape-4" alt="">
                    <div class="container text-center">
                        <h2>IDUKA</h2>
                        <ul class="list-unstyled thm-breadcrumb">
                            <li><a href="/">Beranda</a></li>
                            <li><span>IDUKA</span></li>
                        </ul><!-- /.thm-breadcrumb -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br><br>
    <section class="history-one">
        <div class="container">
            @foreach ($i as $i)
                <div class="block-title text-center">
                    <h3>{{ $i->judul_iduka }}</h3>
                </div><!-- /.block-title text-center -->
                <div class="block-title text-center">
                    <h4>
                        <p>{{ $i->deskripsi_iduka }}</p>
                    </h4>
                </div>
            @endforeach
            <br>
            <br>
            <br>
            
                <div class="history-one__row-wrap">
                    <div class="history-one__row-circle"></div><!-- /.history-one__row-circle -->
                    @foreach ($f as $f)
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__box wow fadeInLeft" data-wow-duration="1500ms">
                                <div class="history-one__image">
                                    <img class="zoom" src="{{ asset('fotomahasiswa/' . $f->foto_iduka) }}" alt="">
                                </div><!-- /.history-one__image -->
                                <!-- /.history-one__content -->
                            </div><!-- /.history-one__box -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="my-auto">
                                <div class="history-one__date">
                                    <h3>{{ $f->jurusan_mou }}
                                    </h3>
                                </div><!-- /.history-one__date -->
                            </div><!-- /.my-auto -->
                        </div><!-- /.col-lg-6 d-flex -->
                    </div><!-- /.row -->
                    @endforeach

                    <!-- /.row -->
                </div><!-- /.history-one__row-wrap -->

        </div><!-- /.container -->
    </section>
    <section class="cta-one cta-one__about-one"
        style="background-image: url{{ asset('landingppdb/ppdb/style/assets/images/shapes/cta-bg-2-1.png') }};">
        <div class="particles-snow" id="cta-one-snow"></div><!-- /#cta-one-snow.particles-snow -->

        <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-1.png') }}"
            class="cta-one__bg-shape-1" alt="">
        <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-2.png') }}"
            class="cta-one__bg-shape-2" alt="">
        <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-3.png') }}"
            class="cta-one__bg-shape-3" alt="">
        <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-4.png') }}"
            class="cta-one__bg-shape-4" alt="">

        <div class="error-404__bubble-1"></div><!-- /.error-404__bubble-1 -->
        <div class="error-404__bubble-2"></div><!-- /.error-404__bubble-2 -->
        <div class="error-404__bubble-3"></div><!-- /.error-404__bubble-3 -->
        <div class="error-404__bubble-4"></div><!-- /.error-404__bubble-4 -->
        <div class="error-404__bubble-5"></div><!-- /.error-404__bubble-5 -->
        <div class="error-404__bubble-6"></div><!-- /.error-404__bubble-6 -->
        <div class="error-404__bubble-7"></div><!-- /.error-404__bubble-7 -->
        <div class="error-404__bubble-8"></div><!-- /.error-404__bubble-8 -->

        <!-- /.container -->
    </section>
    {{-- <div class="tf-section sc-card-blog">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="sc-heading">
                        <h3>Gencarkan MoU dengan Iduka</h3>
                        <p class="desc">Baru-baru ini SMK Muhammadiyah 1 (Muh1) Genteng tengah menggencarkan
                            Memorandum of Understanding (MoU) dengan Dunia Industri dan Dunia Kerja (Iduka). MoU ini
                            terkait erat dengan penyelarasan kurikulum sekolah dengan kebutuhan di dunia kerja. Dengan
                            penyelerasan tersebut SMK Muhi nantinya dapat mencetak peserta didik yang terampil sesuai
                            kebutuhan Iduka.

                            Adapun MoU tersebut telah dilakukan oleh seluruh Kompetensi Keahlian (KK) yang ada di SMK
                            Muh1 Genteng. Kerjasama yang SMK Muh1 Genteng jalin meliputi penempatan Praktek Kerja
                            Lapangan (PKL) bagi peserta didik, sinkronisasi kurikulum, kelas industri, guru magang,
                            bahkan juga meliputi rekruitment kerja. </p>
                    </div>
                </div><!-- /.col-lg-6 -->

                <!-- /.col-lg-6 -->
            </div>
            <div class="col-xl-6">
                <div class="service-two__box-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-two__box  wow flipInY" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="service-two__box-icon">
                                    <div class="service-two__box-circle"></div>
                                    <!-- /.service-two__box-circle -->
                                    <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/service-2-i-1.png') }}" alt="">
                                </div><!-- /.service-two__box-icon -->
                                <h3><a href="service-d-seo.html">SEO Optimization</a></h3>
                                <p>Lorem ipsum dolor amet consectetur adipisicing eiusmod tempor.</p>
                            </div><!-- /.service-two__box -->
                            <div class="service-two__box  wow flipInY" data-wow-delay="300ms"
                                data-wow-duration="1500ms">
                                <div class="service-two__box-icon">
                                    <div class="service-two__box-circle"></div>
                                    <!-- /.service-two__box-circle -->
                                    <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/service-2-i-2.png') }}" alt="">
                                </div><!-- /.service-two__box-icon -->
                                <h3><a href="service-d-seo.html">SEO Optimization</a></h3>
                                <p>Lorem ipsum dolor amet consectetur adipisicing eiusmod tempor.</p>
                            </div><!-- /.service-two__box -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 d-flex">
                            <div class="my-auto">
                                <div class="service-two__box  wow flipInY" data-wow-delay="600ms"
                                    data-wow-duration="1500ms">
                                    <div class="service-two__box-icon">
                                        <div class="service-two__box-circle"></div>
                                        <!-- /.service-two__box-circle -->
                                        <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/service-2-i-3.png') }}" alt="">
                                    </div><!-- /.service-two__box-icon -->
                                    <h3><a href="service-d-seo.html">SEO Optimization</a></h3>
                                    <p>Lorem ipsum dolor amet consectetur adipisicing eiusmod tempor.</p>
                                </div><!-- /.service-two__box -->
                            </div><!-- /.my-auto -->
                        </div><!-- /.col-md-6 d-flex -->
                    </div><!-- /.row -->
                </div><!-- /.service-two__box-wrap -->
            </div>
        </div>
    </div> --}}
    @include('koneksi.footer')
    </div>
    </div>


    </div>

    <a id="scroll-top"></a>

    <div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <h3 class="text-center">Your Bidding
                        Successfuly Added</h3>
                    <p class="text-center">your bid <span class="price color-popup">(4ETH) </span> has been listing to
                        our database</p>
                    <a href="#" class="btn btn-primary"> Watch the listings</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
        </div>
    </div>

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
