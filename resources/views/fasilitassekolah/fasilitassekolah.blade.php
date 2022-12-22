<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/bidzend/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:40 GMT -->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Fasilitas Sekolah</title>
    <meta name="author" content="themesflat.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('landing/html/bidzend/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('landing/html/bidzend/assets/css/responsive.css') }}">


    <link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/icon/muhilog.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/icon/muhilog.png') }}">
    <link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">





    <!-- Template Styles -->
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/responsive.css') }}">

</head>

<body class="body header-fixed ">
    <div class="preload preload-container">
        {{-- <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/logo/0.png') }}" alt="Image" style="width:570 !important;"></div>
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
                                    <li><a href="index.html">Beranda</a></li>
                                    <li>Fasilitas Sekolah</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="portfolio">
                <div class="container">
                  <div class="cs-section__heading cs-style1 text-center">
                    <h2 style="margin-top: 30px;" class="cs-section__title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Fasilitas Sekolah</h2>
                    <div class="cs-height__25 cs-height__lg__15"></div>
                  </div>
                  <div class="cs-height__70 cs-height__lg__50"></div>
                  <div class="row">
                    @foreach ($q as $y )
                    <div class="col-lg-4 col-sm-6">
                      <a href="#" class="cs-portfolio cs-style1">
                        <img src="{{ asset('fotomahasiswa/' . $y->foto) }}" alt="" style="width:366px; height:368px;">
                        <div class="cs-portfolio__info">
                          <div class="cs-portfolio__info__up">
                            <h2 class="cs-portfolio__title">{{ $y->judul_fasilitas }}</h2>
                            <div class="cs-portfolio__subtitle" style="color: white;">{!! $y->deskripsi !!}</div>
                          </div>
                          <div class="cs-portfolio__info__down">
                            
                          </div>
                          <div class="cs-portfolio__info__bg"></div>
                        </div>
                      </a>
                      <div class="cs-height__30 cs-height__lg__30"></div>
                    </div><!-- .col -->
                    @endforeach
                    </div><!-- .col -->
                  </div>
                 
                </div>
              </div>
              <div class="cs-height__130 cs-height__lg__70"></div>
        
        </div>
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

<!-- Mirrored from themesflat.com/html/bidzend/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:58 GMT -->

</html>
