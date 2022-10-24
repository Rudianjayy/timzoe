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

    <link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('landingppdb/ppdb/style/assets/images/favicons/apple-touch-icon.png') }}">
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landingppdb/ppdb/style/assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landingppdb/ppdb/style/assets/images/favicons/favicon-16x16.png') }}"> -->
    <link rel="manifest" href="{{ asset('landingppdb/ppdb/style/assets/images/favicons/site.webmanifest') }}">

    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/bootstrap-select.min.css') }}">

    <!-- Template Styles -->
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/style.css') }}">
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
                            <li><a href="index.html">Beranda</a></li>
                            <li>UPJ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="service-two">


        <div class="container">
            <div class="row no-gutters">
                @foreach ($upj as $upj )
                <div class="col-xl-6 d-flex">
                    <div class="my-auto">
                        <div class="service-two__main ">
                            <div class="block-title text-left">
                                <h3>{!! $upj->judul1 !!}</h3>
                            </div><!-- /.block-title text-center -->
                            <img src="assets/images/shapes/service-sign-1-1.png" alt="">
                        </div><!-- /.service-two__main -->
                    </div><!-- /.my-auto -->
                </div><!-- /.col-lg-6 -->
                @endforeach
                <div class="col-xl-6">
                    <div class="service-two__box-wrap">
                        <div class="row">
                            @foreach ($pag as $upj2 )
                            <div class="col-md-5">
                                <div class="service-two__box  wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="service-two__box-icon">
                                        <div class="service-two__box-circle"></div>
                                        <!-- /.service-two__box-circle -->
                                        <img src="{{ asset('fotomahasiswa/' . $upj2->foto_upj) }}" alt="">
                                    </div><!-- /.service-two__box-icon -->
                                    <!-- <h3><a href="service-d-seo.html">SEO Optimization</a></h3>
                                    <p>Lorem ipsum dolor amet consectetur adipisicing eiusmod tempor.</p> -->
                                </div><!-- /.service-two__box -->
                            </div><!-- /.col-md-6 -->
                            @endforeach
                        </div><!-- /.row -->
                        <br>
                        <div class="col-md-12">
                        {!! $pag->links() !!}
                    </div>
                    </div><!-- /.service-two__box-wrap -->
                </div><!-- /.col-lg-6 -->

            </div><!-- /.row no-gutters -->
        </div><!-- /.container -->
    </section><!-- /.service-two -->


    <section class="about-one">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-one__content">
                        @foreach ($u as $u )
                        <div class="block-title text-left">
                            <h3>{!! $upj->judul2 !!}</h3>
                        </div><!-- /.block-title text-center -->
                        @endforeach
                        <div class="about-one__box-wrapper">
                            @foreach ($upj1 as $upj1 )
                            <div class="about-one__box">
                                <div class="about-one__box-icon">
                                    <i class="fad fa-arrow-circle-right"></i>
                                </div><!-- /.about-one__box-icon -->
                                <div class="about-one__box-content">
                                    <h3>{{$upj1->jasa_upj}}</h3>
                                    <!-- <p>UPJ TEKAJE menerima jasa Service PC/Laptop, Printer & Instalasi yang dilakukan oleh tenaga teknisi yang perpengalaman dibidangnya, kualitas terjamin dan bergaransi.</p> -->
                                </div><!-- /.about-one__box-content -->
                            </div><!-- /.about-one__box -->
                            @endforeach
                        </div><!-- /.about-one__box-wrapper -->
                    </div><!-- /.about-one__content -->
                </div><!-- /.col-lg-6 -->

                <div class="col-lg-20 d-flex">
                    <div class="my-auto">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            @foreach ($j as $j )
                            <div class="elementor-element elementor-element-b838dac elementor-widget elementor-widget-image" data-id="b838dac" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container" style="margin-left: 100px;">
                                    <figure class="wp-caption">
                                        <img width="400" height="330" src="{{ asset('fotomahasiswa/' . $upj->foto_upj) }}" class="attachment-medium size-medium" alt="" loading="lazy" />
                                    </figure>
                                </div>
                            </div><!-- /.my-auto -->
                            @endforeach
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
        </div>
        @foreach ($p as $p )
        <div class="block-title text-center">
            <br>
            <h1>{!! $u->judul3 !!}<br> <a href="/upj" class="thm-btn cta-one__btn"><span>Klik</span></a><!-- /.thm-btn cta-one__btn -->
            </h1>
        </div><!-- /.block-title text-center -->
        @endforeach
    </section><!-- /.about-one -->









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
