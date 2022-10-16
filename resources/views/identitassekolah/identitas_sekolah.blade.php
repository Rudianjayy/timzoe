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
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/logo/0.png') }}" alt="Image" style="width:570 !important;"></div>
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
        <div class="content-center">
            <div class="container-riski">
                <div class="block-title text-center">
                    <h3 style="margin-right: 300px;">Identitas Sekolah</h3>
                    <center><img src="{{ asset('landing/html/bidzend/assets/images/logo/muhi.jpg') }}" alt="" style="width: 200px; height:200px; margin-bottom:20px; margin-right:300px; "></center>

                </div><!-- /.block-title text-center -->

                    @foreach ($i as $i )

                <div class="row high-gutters">
                    <div class="col-lg-6">
                        <div class="accrodion-grp" data-grp-name="career-one__accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Nama Sekolah :</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                    <label for="" class="namasekolah"><i class="fas fa-school"></i></label>
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
                                    <label for="" class="npsn"><i class="far fa-sort-numeric-down-alt"></i></label>
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
                                    <label for="" class="alamat"><i class="far fa-map-marker-alt"></i></label>
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
                                    <label for="" class="kecamatan"><i class="far fa-location-arrow"></i></label>
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
                                    <label for="" class="fax"><i class="fas fa-phone-office"></i></label>
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
                                    <label for="" class="facebook"><i class="fab fa-facebook"></i></label>
                                    <p>{{$i->facebook}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                <label for="" class="youtube"><i class="fab fa-youtube"></i></label>
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
                                    <label for="" class="kabupaten"><i class="fas fa-city"></i></label>
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
                                    <label for="" class="provinsi"><i class="fas fa-location"></i></label>
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
                                    <label for="" class="kodepos"><i class="far fa-mailbox"></i></label>
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
                                    <label for="" class="telepon"><i class="fas fa-phone-square-alt"></i></label>
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
                                    <label for="" class="email"><i class="fas fa-envelope"></i></label>
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
                                    <label for="" class="instagram"><i class="fab fa-instagram"></i></label>
                                    <p>{{$i->instagram}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>

                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->

                @endforeach
            </div><!-- /.container -->
</div>


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



