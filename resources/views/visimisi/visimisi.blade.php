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

<link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}">

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

            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/page-header-shape-1-1.png') }}" class="page-header__bg-shape-1" alt="">
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/service-2-circle-1-1.png') }}" class="page-header__bg-shape-2" alt="">
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-1.png') }}" class="page-header__bg-shape-3" alt="">
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-3.png') }}" class="page-header__bg-shape-4" alt="">
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/service-2-circle-1-2.png') }}" class="page-header__bg-shape-2" alt="">

            <div class="breadcrumbs">
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li>Visi & Misi</li>
                </ul>
            </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tf-section item-details-page">
        <div class="author-item">
            <div class="avatar">
                <img src="assets/images/avatar/avt-4.jpg" alt="">
            </div>

        </div>
        @foreach ($v as $v )


        <div class="container">
            <div class="row">
                <div class="content">
                  <center> <h1>{{$v->judulvisi}}</h1></center>

                   <center> <p class="desc">{!!$v->deskripsivisi!!}</p></center>
                    <br>
                    <center>  <h1   >{{$v->judulmisi}}</h1 ></center>
                    <center> <p class="desc">{!!$v->deskripsimisi!!}</p></center>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </section>

    @include('koneksi.footer')


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
</body>

<!-- Mirrored from themesflat.com/html/bidzend/item-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:11 GMT -->

</html>
