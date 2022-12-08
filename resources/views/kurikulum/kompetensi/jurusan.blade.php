<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ashik.templatepath.net/inovex-html-files/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 03:35:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

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

<body>

    <div class="preload preload-container">
        {{-- <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}" alt="Image" style="width:570 !important;"></div>
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
                                <li><a href="/">Beranda</a></li>
                                <li><a href="/kompetensi">Kompetensi Keahlian</a></li>
                                <li>{{ $data->nama_kompetensi2 }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-standard blog-details">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details__main">
                            <div class="blog-two__meta">

                                <a href="javascript: void(0);">Diterbitkan :{{ $data->created_at }}</a>
                            </div><!-- /.blog-two__meta -->
                          <center> <img src="{{ asset('fotojurusan/' . $data->foto) }}" class="img-fluid" alt="" ></center>
                            <h3>{{ $data->nama_kompetensi2 }}</h3>
                            <p>{!! $data->deskripsi_kompetensi2!!} </p>

                            <p>{!! $data->deskripsi_detail2 !!}</p>
                            {{-- <div class="row">  
                                <div class="col-sm-4">
                                    <img src="{{ asset('landingppdb/ppdb/style/assets/images/blog/blog-d-1-1.jpg') }}" alt="" class="img-fluid2">
                                </div><!-- /.col-md-4 -->
                                <div class="col-sm-4">
                                    <img src="{{ asset('landingppdb/ppdb/style/assets/images/blog/blog-d-1-2.jpg') }}" alt="" class="img-fluid2">
                                </div><!-- /.col-md-4 -->
                                <div class="col-sm-4">
                                    <img src="{{ asset('landingppdb/ppdb/style/assets/images/blog/blog-d-1-3.jpg') }}" alt="" class="img-fluid2">
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row --> --}}
                            {{-- <h4>SEO is a Cost-Effective Advertising Strategy</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur.</p> --}}
                        </div><!-- /.blog-details__main -->


                        <div class="blog-details__social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div><!-- /.blog-details__social -->



                    </div><!-- /.col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="sidebar sidebar__right">

                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Kompetensi lainnya</h3>
                                @php
                                    $jurusan = \App\Models\Jurusan::all();
                                @endphp
                                <ul class="list-unstyled sidebar__category-list" style="">
                                    @foreach ($jurusan as $js )

                                    <li>
                                        <a href="/indexjurusan/{{ $js->id }}">{{ $js->nama_kompetensi2 }}</a>
                                    </li>
                                    @endforeach
                                </ul><!-- /.list-unstyled sidebar__category-list -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Berita Terbaru</h3>
                                @php
                                    $muhiberita = \App\Models\Muhinews::orderBy('created_at','desc')->paginate(3);
                                @endphp
                                <div class="sidebar__post-wrap">
                                    @foreach ($muhiberita as $mb )

                                    <div class="sidebar__post-single">
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('fotomahasiswa/' . $mb->foto) }}" alt="">
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <h3><a href="/muhiblog/{{ $mb->id }}">{{ $mb->deskripsi_muhinews }}</a></h3>
                                            <span>{{ $mb->created_at }}</span>
                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post-single -->
                                    @endforeach

                                </div><!-- /.sidebar__post-wrap -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single sidebar__archive">
                                <h3 class="sidebar__title">Lainnya</h3>
                                <ul class="list-unstyled sidebar__archive-list">
                                    <li>
                                        <a href="/kalenderakademik">Kalender Akademik</span></a>
                                    </li>
                                    <li>
                                        <a href="/jadwalkegiatan">Jadwal Kegiatan</a>
                                    </li>
                                    <li>
                                        <a href="#">Kelulusan</a>
                                    </li>
                                </ul><!-- /.list-unstyled sidebar__archive-list -->
                            </div><!-- /.sidebar__single -->
                            {{-- <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-wrapper">
                                    <a href="#">Marketing</a>
                                    <a href="#">Business</a>
                                    <a href="#">Digital</a>
                                    <a href="#">App Design</a>
                                    <a href="#">Web Desing</a>
                                    <a href="#">Optimization</a>
                                    <a href="#">Social</a>
                                    <a href="#">SMM</a>
                                </div><!-- /.sidebar__tags-wrapper -->
                            </div><!-- /.sidebar__single --> --}}
                            <div class="blog-details__meta">
                                {{-- <div class="blog-details__tags">
                                    <span>Tags</span>
                                    <a href="#">Marketing</a>
                                    <a href="#">Business</a>
                                    <a href="#">App Design</a>
                                </div><!-- /.blog-details__tags --> --}}

                            </div><!-- /.blog-details__meta -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-standard -->

        @include('koneksi.mitra')
        @include('koneksi.footer')

    <!-- template scripts -->
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


<!-- Mirrored from ashik.templatepath.net/inovex-html-files/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 03:35:54 GMT -->

</html>
