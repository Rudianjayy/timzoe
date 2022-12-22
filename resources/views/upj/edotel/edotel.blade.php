<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/bidzend/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:40 GMT -->

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

<body class="body header-fixed ">
    <div class="preload preload-container">
        {{--  <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/logo/muhi.jpg') }}"
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
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Pegadaian</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="blog-standard blog-details">
                <div class="container">
                    <div class="row">
                                @php

                                    $ed = \App\Models\Edotel::all();
                                @endphp
                        <div class="col-lg-8">
                            @foreach ($ed as $ed )


                            <div class="blog-details__main">

                                <div class="blog-two__meta">
                                    {{-- <a href="blog-details.html">Sara dodly</a>
                                    <span>-</span> --}}
                                    <a href="blog-details.html">Diterbitkan :{{ $ed->created_at }}</a>
                                </div><!-- /.blog-two__meta -->
                                <center><img src="{{ asset('fotomahasiswa/' . $ed->foto_edotel) }}" class="img-fluid" alt="" style="width:650px; height:352px;"></center>
                                {{-- <h3>Additional Services that will <br> Grow Business</h3> --}}
                                <p>{!! $ed->deskripsi_edotel !!} </p>

                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum deserunt mollit anim id est laborum."Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br> sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="assets/images/blog/blog-d-1-1.jpg" alt="" class="img-fluid">
                                    </div><!-- /.col-md-4 -->
                                    <div class="col-sm-4">
                                        <img src="assets/images/blog/blog-d-1-2.jpg" alt="" class="img-fluid">
                                    </div><!-- /.col-md-4 -->
                                    <div class="col-sm-4">
                                        <img src="assets/images/blog/blog-d-1-3.jpg" alt="" class="img-fluid">
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
                                <h4>SEO is a Cost-Effective Advertising Strategy</h4>
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
                            @endforeach


                            {{-- <div class="blog-post__navigations">
                                <a class="blog-post__navigations-left" href="#">Previous Post <i
                                        class="far fa-angle-left"></i></a>
                                <a class="blog-post__navigations-right" href="#">Next Post <i
                                        class="far fa-angle-right"></i></a>
                            </div><!-- /.blog-post__navigations --> --}}


                            {{-- <div class="comment-one">
                                <h3 class="comment-one__title">3 Comments</h3>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/images/blog/comment-1-1.jpg" alt="">
                                    </div><!-- /.comment-one__image -->
                                    <div class="comment-one__content">
                                        <h3>Thomas Jamie</h3>
                                        <span class="comment-one__date">Mar 15, 2020</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipcing elit sed do eiusmod tempor
                                            incididunt labore et dolore magna aliqua.</p>
                                        <a href="#" class="thm-btn comment-one__btn"><span>Reply</span></a>
                                        <!-- /.thm-btn comment-one__btn -->
                                    </div><!-- /.comment-one__content -->
                                </div><!-- /.comment-one__single -->
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/images/blog/comment-1-2.jpg" alt="">
                                    </div><!-- /.comment-one__image -->
                                    <div class="comment-one__content">
                                        <h3>Lydia Sparks</h3>
                                        <span class="comment-one__date">Mar 15, 2020</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipcing elit sed do eiusmod tempor
                                            incididunt labore et dolore magna aliqua.</p>
                                        <a href="#" class="thm-btn comment-one__btn"><span>Reply</span></a>
                                        <!-- /.thm-btn comment-one__btn -->
                                    </div><!-- /.comment-one__content -->
                                </div><!-- /.comment-one__single -->
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/images/blog/comment-1-3.jpg" alt="">
                                    </div><!-- /.comment-one__image -->
                                    <div class="comment-one__content">
                                        <h3>Owen Thornton</h3>
                                        <span class="comment-one__date">Mar 15, 2020</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipcing elit sed do eiusmod tempor
                                            incididunt labore et dolore magna aliqua.</p>
                                        <a href="#" class="thm-btn comment-one__btn"><span>Reply</span></a>
                                        <!-- /.thm-btn comment-one__btn -->
                                    </div><!-- /.comment-one__content -->
                                </div><!-- /.comment-one__single -->
                            </div><!-- /.comment-one -->
                            <div class="contact-two__form-wrap">
                                <h3>Leave a Comment</h3>

                                <form action="http://ashik.templatepath.net/inovex-html-files/assets/inc/sendemail.php" class="contact-one__form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Your Name*">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Email*">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Phone">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Subject">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-12">
                                            <textarea name="message" placeholder="Massage"></textarea><!-- /# -->
                                        </div><!-- /.col-md-12 -->
                                        <div class="col-md-12 text-left">
                                            <button type="submit" class="thm-btn contact-one__btn">Send Now</button>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </form><!-- /.contact-one__form -->

                            </div><!-- /.contact-two__form-wrap --> --}}

                        </div><!-- /.col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="sidebar sidebar__right">
                                {{-- <div class="sidebar__single sidebar__search">
                                    <form action="#" class="sidebar__search-form">
                                        <input type="text" placeholder="Search">
                                        <button type="submit" class="sidebar__search-btn"><i
                                                class="fa fa-search"></i></button><!-- /.sidebar__search-btn -->
                                    </form><!-- /.sidebar__search-form -->
                                </div><!-- /.sidebar__single --> --}}
                                <div class="sidebar__single sidebar__category">
                                    {{-- <h3 class="sidebar__title">Categories</h3> --}}
                                    <ul class="list-unstyled sidebar__category-list">
                                        <li>
                                            <a href="/indexbsi">Bank Mini Sekolah</a>
                                        </li>
                                        <li>
                                            <a href="/indexmuhiprint">Muhi Printing</a>
                                        </li>
                                        <li>
                                            <a href="/indexpegadaian">Pegadaian</a>
                                        </li>
                                        <li>
                                            <a href="/indexsuryamart">Suryamart</a>
                                        </li>
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
                                                <h3><a href="/muhiblog/{{ $mb->id }}">{{ $mb->judul }}</a></h3>
                                                <span>{{ $mb->created_at }}</span>
                                            </div><!-- /.sidebar__post-content -->
                                        </div><!-- /.sidebar__post-single -->
                                        @endforeach

                                    </div><!-- /.sidebar__post-wrap -->
                                </div><!-- /.sidebar__single -->
                                <div >
                                    {{-- <div class="blog-details__tags">
                                        <span>Tags</span>
                                        <a href="#">Marketing</a>
                                        <a class="blog-details__meta" href="#">Business</a>
                                        <a href="#">App Design</a>
                                    </div><!-- /.blog-details__tags --> --}}
                                    <div class="blog-details__social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </div><!-- /.blog-details__social -->
                                </div><!-- /.blog-details__meta -->
                                {{-- <div class="sidebar__single sidebar__archive">
                                    <h3 class="sidebar__title">Archivesh</h3>
                                    <ul class="list-unstyled sidebar__archive-list">
                                        <li>
                                            <a href="#">December 2017 <span>7</span></a>
                                        </li>
                                        <li>
                                            <a href="#">November 2017 <span>3</span></a>
                                        </li>
                                        <li>
                                            <a href="#">October 2017 <span>4</span></a>
                                        </li>
                                    </ul><!-- /.list-unstyled sidebar__archive-list -->
                                </div><!-- /.sidebar__single -->
                                <div class="sidebar__single sidebar__tags">
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
                            </div><!-- /.sidebar -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.blog-standard -->
           <br><br><br>



           @include('koneksi.mitra')


            @include('koneksi.footer')
        </div>

    </div>

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




<!-- Mirrored from themesflat.com/html/bidzend/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:13:58 GMT -->

</html>
