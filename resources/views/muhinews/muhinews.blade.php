<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/bidzend/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:11 GMT -->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>SMK Muhammadiyah 1 Genteng</title>
    <meta name="author" content="themesflat.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('landing/html/bidzend/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('landing/html/bidzend/assets/css/responsive.css') }}">

    <link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/icon/muhi.jpg') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/icon/muhi.jpg') }}">
</head>

<body class="body header-fixed">

    <div class="preload preload-container">
        {{--  <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img
            src="{{ asset('landing/html/bidzend/assets/images/logo/muhi.jpg') }}"
            alt="Image" style="width:570 !important;"></div>
    </div>

    <div id="wrapper">
        <div id="page" class="clearfix">

           @include('koneksi.navbar')

            <section class="fl-page-title">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-inner flex">
                                <div class="page-title-heading">
                                    <h2 class="heading">Muhi News</h2>
                                </div>
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="/">Beranda</a></li>
                                        <li>Muhi News</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="tf-section sc-card-blog">
                <div class="container">
                    <div class="row">
                        @foreach ($d as $d)
                            <div class="col-lg-4 col-md-6">

                                <article class="sc-card-article">
                                    <div class="card-media">
                                        <img src="{{ asset('fotomahasiswa/' . $d->foto) }}" alt="" style="width: 350px; height:300px;">
                                    </div>
                                    <div class="content">
                                        <div class="meta-info">
                                            <div class="item author">
                                            </div>
                                            <div class="item date">Diterbitkan : Senin, 31 Jan 2022</div>
                                        </div>
                                        <div class="text-article">
                                            <h5><a href="blog-details.html">{{ $d->deskripsi_muhinews }}</a></h5>
                                        </div>
                                        <a href="/detailmuhi"
                                            class="sc-button btn-bordered-white style letter"><span>Baca Selengkapnya</span></a>
                                    </div>

                                </article>

                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


   @include('koneksi.footer')

    <a id="scroll-top"></a>

    <script src="{{ asset('landing/html/bidzend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/plugin.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/count-down.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/shortcodes.js') }}"></script>
    <script src="{{ asset('landing/html/bidzend/assets/js/main.js') }}"></script>
</body>

<!-- Mirrored from themesflat.com/html/bidzend/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:29 GMT -->

</html>
