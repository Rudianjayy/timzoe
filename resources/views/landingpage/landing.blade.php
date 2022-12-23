<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/bidzend/home-animation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:12:48 GMT -->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>SMK Muhammadiyah 1 Genteng</title>
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

<body class="body header-fixed">

    <div class="preload preload-container">
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}"
                alt="Image" style="width:570 !important;"></div>
    </div>


    @include('koneksi.navbar')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php $i = 0; ?>
            @foreach ($fs as $f)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i++ }}" class="active"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($fs as $key => $fs)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('fotomahasiswa/' . $fs->foto_slider) }}" class="d-block w-100" alt="...">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <br>


    <section class="about-one">
        @foreach ($sa as $sa)
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-one__content">
                            <!-- <div class="block-title text-left">
                            <h3>Sambutan Kepala Sekolah</h3>
                        </div> -->
                        <h3 style="font-size: 40px; font-weight:600;">Sambutan Kepala Sekolah</h3>
                        <p>{!! $sa->deskripsi !!}</p>

                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="my-auto">
                            <div class="" data-wow-duration="1500ms">
                                <img src="{{ asset('fotomahasiswa/' . $sa->foto) }}" alt=""
                                    style="width: 500px; height:700px;">
                            </div><!-- /.about-one__image -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        @endforeach
    </section><!-- /.about-one -->
    <div class="cs-parallax cs-style8">
        <div class="container">
            <div class="col-md-12">
                <div class="sc-heading style-2 wow fadeInUp">
                    <div class="content-left">
                        <div class="inner">
                            <h3>Kompetensi Keahlian</h3>
                        </div>
                    </div>
                    <div class="content-right">
                        <a href="/muhinews" class="sc-button style letter style-2"><span>Lebih Banyak</span>
                            </button></a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-left: 15px; margin-top:35px;">
                @php
                    $jurusan = App\Models\Jurusan::all();
                @endphp
                @foreach ($jurusan as $js)
                    <div class="col-lg-4 col-sm-6">
                        <div class="cs-icon__box cs-style6">
                            <div class="cs-icon__box__icon">
                                <img src="{{ asset('fotojurusan/' . $js->foto) }}" alt=""
                                    style="border-radius: 50%; width:109px; height:90px;">
                            </div>
                            <h2 class="cs-icon__box__title">{{ $js->nama_kompetensi2 }}</h2>
                            <div style="overflow:hidden; text-overflow:ellipsis; width:330px; height:60px; position:relative; margin-bottom:20px; -webkit-line-clamp: 2; -webkit-box-orient: vertical; display: -webkit-box; word-break: break-word;" class="cs-icon__box__subtitle">{!! $js->deskripsi_kompetensi2 !!}</div>
                            <a href="/indexjurusan/{{ $js->id }}" class="cs-btn cs-style2">Lihat Selengkapnya <i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div><!-- .col -->
                @endforeach
               
                </div><!-- .col -->
                
            </div>
        </div>
    </div>



    <section class="tf-latest-collections tf-section bg-color-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sc-heading style-2 wow fadeInUp">
                        <div class="content-left">
                            <div class="inner">
                                <h3>Muhi News</h3>
                            </div>
                        </div>
                        <div class="content-right">     
                            <a href="/muhinews" class="sc-button style letter style-2"><span>Lebih Banyak</span>
                                </button></a>
                        </div>
                    </div>
                </div>
                <br>
                <section class="blog-grid">
                    <div class="container">
                        <div class="row high-gutters">
                            @foreach ($d as $d)
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="blog-one__single">
                                        <div class="card-media">

                                            <a href="/muhiblog/{{ $d->id }}"
                                                style="font-size: 18px; color:black;">
                                                <center> <img src="{{ asset('fotomahasiswa/' . $d->foto) }}"
                                                        alt="" style="width: 344px; height:183px;"></center>
                                            </a>
                                        </div>
                                        <div class="blog-one__content">
                                            <div class="blog-one__meta">
                                                <h4 style="font-size: 15px; font-weight:550;">{{ $d->judul }}</h4>
                                            </div><!-- /.blog-one__meta -->
                                            <p>{{ $d->created_at }}</p>
                                            <p
                                                style="overflow:hidden; text-overflow:ellipsis; width:330px; height:60px; position:relative; margin-bottom:20px; -webkit-line-clamp: 2; -webkit-box-orient: vertical; display: -webkit-box; word-break: break-word;">
                                                {{ $d->deskripsi_muhinews }}</p>
                                            <a href="/muhiblog/{{ $d->id }}"
                                                class="thm-btn blog-one__btn"><span>Baca selengkapnya</span></a>
                                            <!-- /.thm-btn blog-one__btn -->
                                        </div><!-- /.blog-one__content -->
                                    </div><!-- /.blog-one__single -->
                                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                            @endforeach
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </section><!-- /.blog-grid -->
            </div>
        </div>
    </section>
    <div class="cs-parallax cs-style9 overflow-hidden">
        <div class="container">
            <div class="cs-section__heading cs-style1 text-center">
                <h2 class="cs-section__title">Prestasi Siswa SMK Muhi</h2>
                <div class="cs-height__25 cs-height__lg__15"></div>
                <div class="cs-section__subtitle">Dibawah ini adalah prestasi yang diraih oleh siswa <br>SMK
                    Muhammadiyah 1 Genteng.</div>
            </div>
            <div class="cs-height__70 cs-height__lg__50"></div>
            <div class="row">
                @foreach ($paginate as $ps)
                <div class="col-lg-4">
                    <div class="cs-pricing__table cs-style1">
                        <img src="{{ asset('fotomahasiswa/' . $ps->foto) }}" alt="" style="width: 261px; height:249px;">
                        <div class="cs-pricing__table_seperator"></div>
                        <br>
                        <h4>{!! $ps->judul_prestasi !!}</h4>
            
                        <p>{!! $ps->deskripsi_prestasi !!}</p>
                        
                    </div>
                    <div class="cs-height__40 cs-height__lg__40"></div>
                </div><!-- .col -->
                @endforeach
            </div>
            <div class="col-md-12">
                {!! $paginate->links() !!}
            </div>
        </div>
    </div>
  

    <section class="portfolio-column">
        <div class="container">
            <div class="block-title text-center">
                <h3>Album Galeri</h3>
            </div><!-- /.block-title text-center -->
            <ul class="portfolio-filter list-unstyled post-filter ">
                <!-- <li data-filter=".filter-item" class="active"><span>All</span></li> -->

            </ul><!-- /.portfolio-filter list-unstyled -->
            <div class="row masonary-layout filter-layout">
                @foreach ($data as $row)
                    <div class="col-lg-3 col-md-6 col-sm-12 filter-item masonary-item  strategy">
                        <div class="portfolio-two__single">
                            <div class="portfolio-two__image">
                                <img src="{{ asset('fotomahasiswa/' . $row->foto) }}" alt="" style="width:232px; height:289x;">
                            </div><!-- /.portfolio-two__image -->
                            <div class="portfolio-two__content">
                                <p><a href="portfolio-details.html"
                                        style="font-size: 18px; color:black;">{{ $row->judul_album }}</a></p>
                            </div><!-- /.portfolio-two__content -->
                        </div><!-- /.portfolio-two__single -->
                    </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                @endforeach
            </div><!-- /.row -->
            `
        </div><!-- /.container -->
    </section><!-- /.portfolio-grid -->

    <div class="container-fluid">
        <div class="row">
            <iframe class="map-contact"
                src="https://maps.google.com/maps?q=smk%20muhammadiyah%201%20genteng&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near"
                width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>




    @include('koneksi.footer')

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>






</body>

<!-- Mirrored from themesflat.com/html/bidzend/bidzend/home-animation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:12:48 GMT -->

</html>
