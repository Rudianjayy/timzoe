<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/bidzend/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:40 GMT -->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Bidzen | NFT Marketplace HTML Template</title>
    <meta name="author" content="themesflat.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('landing/html/bidzend/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('landing/html/bidzend/assets/css/responsive.css') }}">

    <link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/icon/muhi.jpg') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/icon/muhi.jpg') }}">
</head>

<body class="body header-fixed ">
    <div class="preload preload-container">
        {{--  <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img
            src="{{ asset('landing/html/bidzend/assets/images/logo/muhi.jpg') }}"
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
                            <div class="page-title-inner flex">
                                <div class="page-title-heading">
                                    <h2 class="heading">Kompetensi Keahlian</h2>
                                </div>
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Kompetensi Keahlian</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="hot-collections-page tf-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-heading style-2">
                                <div class="content-left">
                                    <div class="inner">
                                        <h3>Kompetensi Keahlian</h3>
                                        <p class="desc">KLIK GAMBAR DIBAWAH INI UNTUK MENUJU KE MENU SELANJUTNYA!!! </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="swiper-container popular-coll">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-author-card">
                                                <div class="card-media">
                                                    <img src="{{ asset('landing/html/bidzend/assets/images/logo/TJKT.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-author-card">
                                                <div class="card-media">
                                                    <img src="{{ asset('landing/html/bidzend/assets/images/logo/rpl.jpg') }}"
                                                        alt="">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-author-card">
                                                <div class="card-media">
                                                    <img src="{{ asset('landing/html/bidzend/assets/images/logo/BD.jpg') }}"
                                                        alt="">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-author-card">
                                                <div class="card-media">
                                                    <img src="{{ asset('landing/html/bidzend/assets/images/logo/mp.jpg') }}"
                                                        alt="">
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-author-card">
                                                <div class="card-media">
                                                    <img src="{{ asset('landing/html/bidzend/assets/images/logo/AK.jpg') }}"
                                                        alt="">
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-author-card mg-bt-0">
                                                <div class="card-media">
                                                    <img src="{{ asset('landing/html/bidzend/assets/images/logo/3.jpg') }}"
                                                        alt="">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-author-card mg-bt-0">
                                                <div class="card-media">
                                                    <img src="{{ asset('landing/html/bidzend/assets/images/logo/PH.jpg') }}"
                                                        alt="">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-author-card mg-bt-0">
                                                <div class="card-media">
                                                    <img src="{{ asset('landing/html/bidzend/assets/images/logo/DKV-1.jpg') }}"
                                                        alt="">
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
