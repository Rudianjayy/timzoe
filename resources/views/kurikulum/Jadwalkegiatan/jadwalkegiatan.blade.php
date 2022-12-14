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


    <link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/icon/muhilog.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/icon/muhilog.png') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap">
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

    <body class="body header-fixed">

        <div class="preload preload-container">
            {{-- <div class="preload-logo"></div>  --}}
            <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/logo/muhi.jpg') }}" alt="Image" style="width:570 !important;"></div>
        </div>


        @include('koneksi.navbar')

        <section class="fl-page-title">
            <div class="overlay"></div>
            <section>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">


                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Kurikulum</a></li>
                                <li>Jadwal Kegiatan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">


            <div class="row margin-bottom-120">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                 <center><h4 style="margin-top: 20px; font-size:23px; margin-bottom:10px;">Jadwal Kegiatan</h4></center>
                                </div>

                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">

                                <table id="ecommerce-product-list" class="table  table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Kegiatan</th>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">Tempat</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $no = 1;

                                        @endphp
                                        @foreach ($data as $d)
                                            <tr>
                                                <th>{{ $no++ }}</th>

                                                <td>{{ $d->namakegiatan }}</td>
                                                <td>{{ $d->waktu }}</td>
                                                <td>{{ $d->tempat }}</td>


                                             
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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


        <script src="{{ asset('style/assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>

    </body>

    <!-- Mirrored from themesflat.com/html/bidzend/item-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:11 GMT -->

</html>
