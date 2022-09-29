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
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}">
     <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('landingppdb/ppdb/style/assets/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landingppdb/ppdb/style/assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landingppdb/ppdb/style/assets/images/favicons/favicon-16x16.png') }}">
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

            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/page-header-shape-1-1.png') }}" class="page-header__bg-shape-1" alt="">
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/service-2-circle-1-1.png') }}" class="page-header__bg-shape-2" alt="">
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-1.png') }}" class="page-header__bg-shape-3" alt="">
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/footer-shape-1-3.png') }}" class="page-header__bg-shape-4" alt="">
            <img src="{{ asset('landingppdb/ppdb/style/assets/images/shapes/service-2-circle-1-2.png') }}" class="page-header__bg-shape-2" alt="">

            <div class="breadcrumbs">
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li>Identitas Sekolah</li>
                </ul>
            </div>
                </div>
            </div>
        </div>
    </section>
        <section class="faq-one">
            <div class="container">
                <div class="block-title text-center">
                    <h3>Identitas Sekolah</h3>
                    <center><img src="{{ asset('landing/html/bidzend/assets/images/logo/muhi.jpg') }}" alt="" style="width: 200px; height:200px; margin-bottom:20px; "></center>

                </div><!-- /.block-title text-center -->
                    @foreach ($i as $i )

                <div class="row high-gutters">
                    <div class="col-lg-6">
                        <div class="accrodion-grp" data-grp-name="career-one__accrodion">
                            <div class="accrodion ">
                                <div class="accrodion-title">
                                    <h4>Nama Sekolah :</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>{{$i->namasekolah}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>NPSN :</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>{{$i->npsn}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Alamat : </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                    <p>{{$i->alamat}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Kecamatan</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                    <p>{{$i->kecamatan}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Fax :</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                    <p>{{$i->fax}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Facebook :</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                    <p>{{$i->facebook}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Youtube :</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                    <p>{{$i->facebook}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="accrodion-grp" data-grp-name="career-one__accrodion-2">
                            <div class="accrodion ">
                                <div class="accrodion-title">
                                    <h4>Kabupaten :</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                    <p>{{$i->kabupaten}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Provinsi</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                    <p>{{$i->provinsi}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Kode Pos : </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                    <p>{{$i->kodepos}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Telepon :</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                    <p>{{$i->telepon}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Email :</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                    <p>{{$i->email}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Instagram :</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                    <p>{{$i->instagram}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>

                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->

                @endforeach
            </div><!-- /.container -->
        </section><!-- /.faq-one -->


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
    <script src="https://cdn.jsdelivr.net/npm/medium-zoom@1.0.6/dist/medium-zoom.min.js"></script>
    <script>
        mediumZoom('.zoom', {

          })
    </script>
</body>

<!-- Mirrored from themesflat.com/html/bidzend/item-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:11 GMT -->

</html>



<div class="container">
        <div class="row">
            <table>
                <thead>
                <tr class="row-1 odd" role="row"><th class="column-1 sorting_disabled" rowspan="1" colspan="1" style="width: 212.516px;">NAMA SEKOLAH</th><th class="column-2 sorting_disabled" rowspan="1" colspan="1" style="width: 19.75px;">:</th><th class="column-3 sorting_disabled" rowspan="1" colspan="1" style="width: 422.391px;">SMK Muhammadiyah 1 Genteng</th></tr>
                </thead>
                <tbody class="row-hover">
                <tr class="row-2 even" role="row">
                    <td class="column-1">NPSN</td><td class="column-2">:</td><td class="column-3">20525597</td>
                </tr><tr class="row-3 odd" role="row">
                    <td class="column-1">ALAMAT</td><td class="column-2">:</td><td class="column-3">KH. AHMAD DAHLAN NO 10</td>
                </tr><tr class="row-4 even" role="row">
                    <td class="column-1">KECAMATAN</td><td class="column-2">:</td><td class="column-3">GENTENG</td>
                </tr><tr class="row-5 odd" role="row">
                    <td class="column-1">KABUPATEN</td><td class="column-2">:</td><td class="column-3">BANYUWANGI</td>
                </tr><tr class="row-6 even" role="row">
                    <td class="column-1">PROVINSI</td><td class="column-2">:</td><td class="column-3">JAWA TIMUR</td>
                </tr><tr class="row-7 odd" role="row">
                    <td class="column-1">KODE POS</td><td class="column-2">:</td><td class="column-3">68465</td>
                </tr><tr class="row-8 even" role="row">
                    <td class="column-1">TELEPON</td><td class="column-2">:</td><td class="column-3">(0333) 845605</td>
                </tr><tr class="row-9 odd" role="row">
                    <td class="column-1">FAX</td><td class="column-2">:</td><td class="column-3">(0333) 847370</td>
                </tr><tr class="row-10 even" role="row">
                    <td class="column-1">EMAIL</td><td class="column-2">:</td><td class="column-3">smkmuhi.genteng1968@gmail.com</td>
                </tr><tr class="row-11 odd" role="row">
                    <td class="column-1">FACEBOOK</td><td class="column-2">:</td><td class="column-3">smkmuhigenteng</td>
                </tr><tr class="row-12 even" role="row">
                    <td class="column-1">INSTAGRAM</td><td class="column-2">:</td><td class="column-3">muhi.ig</td>
                </tr><tr class="row-13 odd" role="row">
                    <td class="column-1">YOUTUBE</td><td class="column-2">:</td><td class="column-3">MUHI.TV</td>
                </tr></tbody>
                </table>
        </div>
    </div>

