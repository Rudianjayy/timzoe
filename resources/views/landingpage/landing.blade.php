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



    {{-- css juga kuambil dri ppdb landing --}}
    <!-- <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/owl.theme.default.min.css') }}"> -->

    <!-- Template Styles -->
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landingppdb/ppdb/style/assets/css/responsive.css') }}">
    <script src="https://unpkg.com/js-image-zoom@0.7.0/js-image-zoom.js" type="application/javascript"></script>


</head>

<body class="body header-fixed">

    <div class="preload preload-container">
        {{-- <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}"
                alt="Image" style="width:570 !important;"></div>
    </div>


    @include('koneksi.navbar')

    <section class="tf-slider">
        <div class="swiper-container slider ">
            <div class="swiper-wrapper">
                <div class="swiper-slide wow fadeInUp">
                    <div class="slider-item">
                        <div class="overlay"></div>
                        <div class="slider-inner flex home-1">

                            @foreach ($ss as $ss)
                                <div class="slider-content">
                                    <h1 class="heading">{{ $ss->deskripsi1_slider }}</h1>
                                    <p class="sub-heading">{{ $ss->deskripsi2_slider }} </p>
                                    <p class="sub-heading">{{ $ss->deskripsi3_slider }} </p>

                                    {{-- <div class="button-slider">
                                            <a href="explore-1.html"
                                                class="sc-button btn-bordered-white style letter "><span>Explore
                                                    More</span></a>
                                            <a href="create-item.html"
                                                class="sc-button btn-bordered-white style file"><span>Create
                                                    Now</span></a>
                                        </div> --}}
                                </div>


                                <div class="slider-img">
                                    <a href="/login">
                                        <div class="img-home-1"><img src="{{ asset('fotomahasiswa/' . $ss->foto) }}"
                                                alt="Image" style="width:570 !important;"></div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @foreach ($fs as $fs)
                    <div class="swiper-slide wow fadeInUp">
                        <div class="slider-item ">
                            <div class="overlay "></div>
                            <div class="container">


                                <div class="slider-inner style-2 home-1 flex">
                                    <div class="slider-img flex">

                                        <div class="img-left">
                                            <div class="img-1"><img
                                                    src="{{ asset('fotomahasiswa/' . $fs->foto_slider) }}"
                                                    {{-- src="{{ asset('landing/html/bidzend/assets/images/slider/rigen.jpg') }}" --}} alt="Image"></div>
                                        </div>



                                        <div class="img-right">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next btn-slide-next "></div>
            <div class="swiper-button-prev btn-slide-prev"></div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <section id="about-features" class="pd-bt-80">
        <!--container-->
        <div class="container">
            <div class="row">
                @foreach ($sa as $sa)
                    <div class="col-12 col-md-6  wow fadeInRight">
                        <div class="text-video">
                            {{-- <div class="text-center">
                            <h1>Sambutan</h1>
                            <br>
                            <h2 class="title-h2">Kepala Sekolah</h2>
                        </div> --}}



                            <p style="text-align: center;">{!! $sa->deskripsi !!}</p>
                            {{-- <p style="text-align: center;">ASSALAMUALAIKUM WARAHMATULLAHI WABARAKATUH</p>
                        <br>
                        <br>

                        <p>Puji syukur kita panjatkan kepada Allah Subhanahu Wa Ta’ala yang telah memberikan Rahmat dan
                            Anugrah-Nya sehingga website SMK Muhammadiyah 1 Genteng ini dapat terbit. Salah satu tujuan
                            dari website ini adalah untuk menjawab akan setiap kebutuhan informasi dengan memanfaatkan
                            sarana teknologi informasi yang ada. Kami sadar sepenuhnya dalam rangka memajukan pendidikan
                            di era berkembangnya teknologi informasi yang begitu pesat sangat diperlukan berbagai sarana
                            prasarana yang kondusif kebutuhan berbagai informasi siswa, orang tua, maupun masyarakat
                            sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya
                            website ini dapat membantu dan bermanfaat terutama informasi yang berhubungan dengan
                            pendidikan, ilmu pengetahuan dan informasi seputar SMK Muhammadiyah 1 Genteng besar harapan
                            kami sarana ini dapat memberi manfaat bagi semua pihak yang ada di lingkup pendidikan dan
                            pemerhati pendidikan secara khusus bagi SMK Muhammadiyah 1 Genteng. Akhirnya kami
                            mengharapkan masukan dari berbagai pihak untuk sendiri agar kami terus belajar dan update
                            sehingga tampilan isi dan mutu website akan terus berkembang dan lebih baik terima kasih
                            atas kerjasamanya maju terus untuk SMK Muhammadiyah 1 Genteng yang lebih baik lagi.</p>
                        <p style="text-align: center;">WASSALAMUALAIKUM WARAHMATULLAHI WABARAKTU</p>
                        <p style="text-align: center;"> Hormat kami,</p>

                        <p style="text-align: center;"> Kepala SMK Muhammadiyah 1 Genteng</p>


                        <p style="text-align: center;"><strong>Taslim, S.Ag, M.Pd</strong></p> --}}
                        </div>
                    </div>
                    <div class="img-right">

                        <img src="{{ asset('fotomahasiswa/' . $sa->foto) }}" alt="" width="450px"
                            style="margin-left: 80px;">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <br>
    <br>
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
                        <div class="sc-category wow fadeInUp pl-19" data-wow-delay="400ms"
                            data-wow-duration="1000ms">
                            <div class="card-media">
                                <img src="{{ asset('fotojurusan/' . $p->foto) }}" alt="">
                            </div>
                            <div class="card-content">
                                <h5><a href="/indexjurusan/{{ $p->id }}"> {{ $p->nama_jurusan }}</a>
                                </h5>
                                <p>{!! $p->deskripsi !!}</p>
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
                <div class="tf-section sc-card-blog">
                    <div class="container">
                        <div class="row">
                            @foreach ($d as $d)
                                <div class="col-lg-4 col-md-6">
                                    <article class="sc-card-article">
                                        <div class="card-media">
                                            <img src="{{ asset('fotomahasiswa/' . $d->foto) }}" alt=""
                                                style="width: 366px; height:183px;">
                                        </div>
                                        <div class="content">
                                            <div class="meta-info">
                                                <div class="item author">
                                                    <b><strong>{{ $d->judul }}</strong></b>
                                                </div>
                                                <div class="item date">{{ $d->created_at }}</div>
                                            </div>
                                            <div class="text-article">
                                                <p>{{ $d->deskripsi_muhinews }}</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                        <!-- <div class="col-md-12">
                        <div class="swiper-button-next btn-slide-next"></div>
                        <div class="swiper-button-prev btn-slide-prev"></div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="tf-section sc-card-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <article class="sc-card-article">
                        <div class="card-media">
                            <a href="blog-details.html"><img
                                    src="{{ asset('landing/html/bidzend/assets/images/background/bg1.jpg') }}"
    alt=""></a>
    </div>
    <div class="content">
        <div class="meta-info">
            <div class="item author">
            </div>
            <div class="item date">Diterbitkan : Senin, 31 Jan 2022</div>
        </div>
        <div class="text-article">
            <h5><a href="blog-details.html">PEMUDA ISLAM HARUS MILIKI PERAN DI ERA DIGITAL</a></h5>
        </div>
        <a href="/detailmuhi" class="sc-button btn-bordered-white style letter"><span>Baca Selengkapnya</span></a>
    </div>
    </article>
    </div>
    <div class="col-lg-4 col-md-6">
        <article class="sc-card-article">
            <div class="card-media">
                <a href="/detailmuhi2"><img src="{{ asset('landing/html/bidzend/assets/images/background/bg2.jpeg') }}" alt=""></a>
            </div>
            <div class="content">
                <div class="meta-info">
                    <div class="item author">
                    </div>
                    <div class="item date">Diterbitkan : Jumat, 4 Jun 2021</div>
                </div>
                <div class="text-article">
                    <h5><a href="/detailmuhi2">LEPAS SISWA KELAS XII DENGAN DISIPLIN PROKES</a></h5>
                </div>
                <a href="/detailmuhi2" class="sc-button btn-bordered-white style letter"><span>Baca Selengkapnya</span></a>
            </div>
        </article>
    </div>
    <div class="col-lg-4 col-md-6">
        <article class="sc-card-article">
            <div class="card-media">
                <a href="blog-details.html"><img src="{{ asset('landing/html/bidzend/assets/images/background/bg3.jpeg') }}" alt=""></a>
            </div>
            <div class="content">
                <div class="meta-info">
                    <div class="item author">
                    </div>
                    <div class="item date">Diterbitkan : Jumat, 4 Jun 2021</div>
                </div>
                <div class="text-article">
                    <h5><a href="blog-details.html">LULUS DI TAHUN PANDEMI DENGAN PENUH PRESTASI</a></h5>
                </div>
                <a href="blog-details.html" class="sc-button btn-bordered-white style letter"><span>Baca Selengkapnya</span></a>
            </div>
        </article>
    </div>
    <div class="col-lg-4 col-md-6">
        <article class="sc-card-article">
            <div class="card-media">
                <a href="blog-details.html"><img src="{{ asset('landing/html/bidzend/assets/images/background/bg4.jpg') }}" alt=""></a>
            </div>
            <div class="content">
                <div class="meta-info">
                    <div class="item author">
                    </div>
                    <div class="item date">Diterbitkan : Senin, 22 Feb 2021 </div>
                </div>
                <div class="text-article">
                    <h5><a href="blog-details.html">SMK MUHI SABET JUARA 2 & 3 LOMBA PERPAJAKAN</a></h5>
                </div>
                <a href="blog-details.html" class="sc-button btn-bordered-white style letter"><span>Baca Selengkapnya</span></a>
            </div>
        </article>
    </div>
    <div class="col-lg-4 col-md-6">
        <article class="sc-card-article">
            <div class="card-media">
                <a href="blog-details.html"><img src="{{ asset('landing/html/bidzend/assets/images/background/bg5.jpg') }}" alt=""></a>
            </div>
            <div class="content">
                <div class="meta-info">
                    <div class="item author">
                    </div>
                    <div class="item date">Diterbitkan : Jumat, 19 Feb 2021
                    </div>
                </div>
                <div class="text-article">
                    <h5><a href="blog-details.html">LAGI, SISWI SMK MUHI JUARA 2 LOMBA HOTEL RECEPTIONIST</a></h5>
                </div>
                <a href="blog-details.html" class="sc-button btn-bordered-white style letter"><span>Baca Selengkapnya</span></a>
            </div>
        </article>
    </div>
    <div class="col-lg-4 col-md-6">
        <article class="sc-card-article">
            <div class="card-media">
                <a href="blog-details.html"><img src="{{ asset('landing/html/bidzend/assets/images/background/bg6.jpg') }}" alt=""></a>
            </div>
            <div class="content">
                <div class="meta-info">
                    <div class="item author">
                    </div>
                    <div class="item date">Diterbitkan : Kamis, 11 Feb 2021</div>
                </div>
                <div class="text-article">
                    <h5><a href="blog-details.html">GUGUS COVID-19 SATGAS KEC. GENTENG KUNJUNGI SMK MUHI</a></h5>
                </div>
                <a href="blog-details.html" class="sc-button btn-bordered-white style letter"><span>Baca Selengkapnya</span></a>
            </div>
        </article>
    </div>


    </div>
    </div>
    </div> --}}
    <section class="tf-live-auctions tf-section bg-color-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sc-heading style-2 has-icon wow fadeInUp">
                        <div class="content-left">
                            <div class="inner">
                                <div class="group">
                                    <div class="icon"><i class="ripple"></i></div>
                                    <h3>Prestasi</h3>
                                </div>
                                {{-- <p class="desc">Most popular gaming digital nft market place </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="swiper-container live-auc">
                        <div class="swiper-wrapper">
                            @foreach ($ps as $ps)
                                <div class="swiper-slide wow fadeInUp wow fadeInUp">
                                    <div class="slider-item">


                                        <div class="sc-product-item" style="">
                                            <div class="product-img active">
                                                <img src="{{ asset('fotomahasiswa/' . $ps->foto) }}" alt="Image"
                                                    style="width: 300px; height:220px;">
                                            </div>
                                            <div class="product-content">
                                                <h5 class="author-name"><a
                                                        href="item-details.html">{!! $ps->judul_prestasi !!}</a> </h5>
                                                <div class="product-author flex">
                                                    <div class="infor">
                                                        <div class="tittle"><a
                                                                href="author.html">{!! $ps->deskripsi_prestasi !!}</a></div>
                                                        <br>
                                                        <div class="avatar">
                                                            <img src="{{ asset('landing/html/bidzend/assets/images/avatar/avt-7.jpg') }}"
                                                                alt="Image">
                                                            <span>Sang juara</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next btn-slide-next "></div>
                        <div class="swiper-button-prev btn-slide-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="tf-best-seller">
        <div class="best-seller-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="sc-heading style-2 wow fadeInUp">
                        <div class="content-left">
                            <div class="inner">
                                <h3>Iduka</h3>
                                <p class="desc">Most popular gaming digital nft market place </p>
                            </div>
                        </div>
                        <div class="content-right">
                            <button class="sc-button style letter style-2"><span>Explore More</span> </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="sc-author wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="card-avatar">
                            <img src="{{ asset('landing/html/bidzend/assets/images/avatar/avt-1.jpg') }}"
    alt="">
    </div>
    <div class="infor">
        <h6> <a href="author.html">Jason M. Stalls</a> </h6>
        <div class="details">523.7 ETH</div>
    </div>
    <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
    </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="sc-author wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
            <div class="card-avatar">
                <img src="{{ asset('landing/html/bidzend/assets/images/avatar/avt-2.jpg') }}" alt="">
            </div>
            <div class="infor">
                <h6> <a href="author.html">Frank F. Chan</a> </h6>
                <div class="details">523.7 ETH</div>
            </div>
            <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="sc-author wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
            <div class="card-avatar">
                <img src="{{ asset('landing/html/bidzend/assets/images/avatar/avt-3.jpg') }}" alt="">
            </div>
            <div class="infor">
                <h6> <a href="author.html">Robert George</a> </h6>
                <div class="details">523.7 ETH</div>
            </div>
            <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="sc-author wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
            <div class="card-avatar">
                <img src="{{ asset('landing/html/bidzend/assets/images/avatar/avt-4.jpg') }}" alt="">
            </div>
            <div class="infor">
                <h6> <a href="author.html">Frank N. Glisson</a> </h6>
                <div class="details">523.7 ETH</div>
            </div>
            <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="sc-author wow fadeInUp end" data-wow-delay="500ms" data-wow-duration="1000ms">
            <div class="card-avatar">
                <img src="{{ asset('landing/html/bidzend/assets/images/avatar/avt-5.jpg') }}" alt="">
            </div>
            <div class="infor">
                <h6> <a href="author.html">Michel ZonaS</a> </h6>
                <div class="details">523.7 ETH</div>
            </div>
            <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="sc-author wow fadeInUp end" data-wow-delay="600ms" data-wow-duration="1000ms">
            <div class="card-avatar">
                <img src="{{ asset('landing/html/bidzend/assets/images/avatar/avt-6.jpg') }}" alt="">
            </div>
            <div class="infor">
                <h6> <a href="author.html">Mizanur Mango</a> </h6>
                <div class="details">523.7 ETH</div>
            </div>
            <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
        </div>
    </div>
    </div>
    </div>
    </section> --}}
    <section class="tf-trendy-collections tf-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="sc-heading style-2 wow fadeInUp">
                        <div class="content-left">
                            <div class="inner">
                                <h3>Album Galeri</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="swiper-container trendy">

                        <div class="swiper-wrapper">
                            @foreach ($data as $row)
                                <div class="swiper-slide wow fadeInUp">
                                    <div class="swiper-slide wow fadeInUp">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-2">
                                                <div class="product-img">
                                                    <img src="{{ asset('fotomahasiswa/' . $row->foto) }}"
                                                        alt="" style="width: 366px; height:183px;">
                                                </div>
                                                <div class="card-content">
                                                    <div class="item author">
                                                        <b>
                                                            <h4>{{ $row->judul_album }}</h4>
                                                        </b>
                                                    </div>
                                                    <h5 class="card-title">{!! $row->deskripsi !!}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        {!! $data->links() !!}
                    </div>
                </div>
            </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <iframe class="map-contact"
                src="https://maps.google.com/maps?q=smk%20muhammadiyah%201%20genteng&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    </section>




    @include('koneksi.footer')

    <script src="{{ asset('landing/html/bidzend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/swiper.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/plugin.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/count-down.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/shortcodes.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/main.js') }}"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="https://cdn.jsdelivr.net/npm/medium-zoom@1.0.6/dist/medium-zoom.min.js"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/medium-zoom.min.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/main2.js') }}"></script>




    {{-- js nya ppdb kuambil truh sini --}}
    {{-- <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('landingppdb/ppdb/style/assets/js/bootstrap-datepicker.min.js') }}"></script> --}}
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/particel-config.js') }}"></script>
    <script src="{{ asset('landingppdb/ppdb/style/assets/js/theme.js') }}"></script>


</body>

<!-- Mirrored from themesflat.com/html/bidzend/bidzend/home-animation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:12:48 GMT -->

</html>
