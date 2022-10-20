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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">




    <!-- Template Styles -->
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/responsive.css') }}">


</head>

<body class="body header-fixed">

    <div class="preload preload-container">
        {{-- <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}" alt="Image" style="width:570 !important;"></div>
    </div>


    @include('koneksi.navbar')

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($fs as $fs )
            <div class="carousel-item active">
                <img src="{{ asset('fotomahasiswa/' . $fs->foto_slider) }}" class="d-block w-100" alt="...">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <br>
    <br>

    <section class="about-one">
        <img src="assets/images/shapes/bg-shape-1-1.png" class="error-404__bg-shape-1" alt="">
        <img src="assets/images/shapes/bg-shape-1-2.png" class="error-404__bg-shape-2" alt="">
        <img src="assets/images/shapes/bg-shape-1-3.png" class="error-404__bg-shape-3" alt="">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-one__content">
                        <div class="block-title text-left">
                            <h3>Sambutan Kepala Sekolah</h3>
                        </div><!-- /.block-title text-center -->
                        <p>“Prakata KEPALA SMK MUHAMMADIYAH 1 GENTENG”

                            ASSALAMUALAIKUM WARAHMATULLAHI WABARAKATUH



                            Puji syukur kita panjatkan kepada Allah Subhanahu Wa Ta’ala yang telah memberikan Rahmat dan Anugrah-Nya sehingga website SMK Muhammadiyah 1 Genteng ini dapat terbit. Salah satu tujuan dari website ini adalah untuk menjawab akan setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. Kami sadar sepenuhnya dalam rangka memajukan pendidikan di era berkembangnya teknologi informasi yang begitu pesat sangat diperlukan berbagai sarana prasarana yang kondusif kebutuhan berbagai informasi siswa, orang tua, maupun masyarakat sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar SMK Muhammadiyah 1 Genteng besar harapan kami sarana ini dapat memberi manfaat bagi semua pihak yang ada di lingkup pendidikan dan pemerhati pendidikan secara khusus bagi SMK Muhammadiyah 1 Genteng. Akhirnya kami mengharapkan masukan dari berbagai pihak untuk sendiri agar kami terus belajar dan update sehingga tampilan isi dan mutu website akan terus berkembang dan lebih baik terima kasih atas kerjasamanya maju terus untuk SMK Muhammadiyah 1 Genteng yang lebih baik lagi.

                            WASSALAMUALAIKUM WARAHMATULLAHI WABARAKTU

                            Hormat kami,

                            Kepala SMK Muhammadiyah 1 Genteng

                            Taslim, S.Ag, M.Pd</p>

                    </div><!-- /.about-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="my-auto">
                        <div class="about-one__image wow slideInDown" data-wow-duration="1500ms">
                            <img src="{{asset('landing/html/bidzend/assets/images/avatar/kepsekremove.png')}}" alt="" style="width: 500px; height:700px;">
                        </div><!-- /.about-one__image -->
                    </div><!-- /.my-auto -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->
    <section class="tf-category tf-section">
        <div class="category-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="sc-heading style-2 wow fadeInUp">
                        <div class="content-left">
                            <div class="inner">
                                <h3>Kompetensi Keahlian</h3>
                            </div>
                        </div>
                        <div class="content-right">
                            <button class="sc-button style letter style-2"><a href="/kompetensi"><span>Baca
                                        Selengkapnya</span></a> </button>
                        </div>
                    </div>
                </div>
                @php
                $personal = \App\Models\Personaljurusan::all();
                @endphp
                @foreach ($personal as $p)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="sc-category wow fadeInUp pl-19" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <div class="card-media">
                            <img src="{{ asset('fotojurusan/' . $p->foto) }}" alt="">
                        </div>
                        <div class="card-content">
                            <h5><a href="/indexjurusan/{{ $p->id }}" style="font-size: 18px; color:black;"> {{ $p->nama_jurusan }}</a>
                            </h5>
                            <p>{!! $p->deskripseh !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="tf-latest-collections tf-section bg-color-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sc-heading style-2 wow fadeInUp">
                        <div class="content-left">
                            <div class="inner">
                                <h3>Muhi News</h3>
                                <p class="desc">Klik button disamping jika ingin melihat lebih banyak</p>
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
                            @foreach ($d as $d )
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="blog-one__single">
                                    <div class="card-media">

                                        <a href="/muhiblog/{{ $d->id }}" style="font-size: 18px; color:black;">
                                            <img src="{{ asset('fotomahasiswa/' . $d->foto) }}" alt="" style="width: 344px; height:183px;">
                                        </a>
                                    </div>
                                    <div class="blog-one__content">
                                        <div class="blog-one__meta">
                                            <h4>{{$d->judul}}</h4>
                                        </div><!-- /.blog-one__meta -->
                                        <p>{{$d->created_at}}</p>
                                        <p>{{$d->deskripsi_muhinews}}</p>
                                        <a href="/muhiblog/{{ $d->id }}" class="thm-btn blog-one__btn"><span>Baca selengkapnya</span></a>
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
    <section class="service-three">
        <div class="container">
            <div class="block-title text-center">
                <h3>Prestasi Siswa</h3>
            </div><!-- /.block-title text-center -->
            <div class="row high-gutters">
                @foreach ($paginate as $ps )
                <div class="col-lg-4">
                    <div class="service-three__single wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-color: #007eff14;">
                        <div class="service-three__icon">
                            <img src="{{ asset('fotomahasiswa/' . $ps->foto) }}" alt="">
                        </div><!-- /.service-three__icon -->
                        <h3><a href="service-d-seo.html">{{$ps->judul_prestasi}}</a></h3>
                        <p>{!! $ps->deskripsi_prestasi !!}</p>
                    </div><!-- /.service-three__single -->
                </div><!-- /.col-lg-4 -->
                @endforeach
            </div><!-- /.row high-gutters -->
            <div class="col-md-12">
                {!! $paginate->links() !!}
            </div>
        </div><!-- /.container -->
    </section><!-- /.service-three -->

    <section class="portfolio-column">
        <div class="container">
            <div class="block-title text-center">
                <h3>Album Galeri</h3>
            </div><!-- /.block-title text-center -->
            <ul class="portfolio-filter list-unstyled post-filter ">
                <li data-filter=".filter-item" class="active"><span>All</span></li>

            </ul><!-- /.portfolio-filter list-unstyled -->
            <div class="row masonary-layout filter-layout">
                @foreach ($data as $row )
                <div class="col-lg-3 col-md-6 col-sm-12 filter-item masonary-item  strategy">
                    <div class="portfolio-two__single">
                        <div class="portfolio-two__image">
                            <img class="zoom" src="{{ asset('fotomahasiswa/' . $row->foto) }}" alt="">
                        </div><!-- /.portfolio-two__image -->
                        <div class="portfolio-two__content">
                            <p><a href="portfolio-details.html" style="font-size: 18px; color:black;">{{$row->judul_album}}</a></p>
                        </div><!-- /.portfolio-two__content -->
                    </div><!-- /.portfolio-two__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                @endforeach
            </div><!-- /.row -->

        </div><!-- /.container -->
    </section><!-- /.portfolio-grid -->

    <div class="container-fluid">
        <div class="row">
            <iframe class="map-contact" src="https://maps.google.com/maps?q=smk%20muhammadiyah%201%20genteng&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    </section>




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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>






</body>

<!-- Mirrored from themesflat.com/html/bidzend/bidzend/home-animation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:12:48 GMT -->

</html>