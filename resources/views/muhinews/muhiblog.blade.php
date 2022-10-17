<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ashik.templatepath.net/inovex-html-files/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 03:35:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhinews Detail</title>
    <!-- favicons -->
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

<body>

    <div class="preload preload-container">
        {{-- <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/logo/muhi.jpg') }}" alt="Image" style="width:570 !important;"></div>
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
                                <li><a href="index.html">Beranda</a></li>
                                <li>Blog Detail </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-standard blog-details">
            <img src="assets/images/shapes/bg-shape-1-1.png" class="section__bg-shape-1" alt="">
            <img src="assets/images/shapes/bg-shape-1-2.png" class="section__bg-shape-2" alt="">
            <img src="assets/images/shapes/bg-shape-1-3.png" class="section__bg-shape-3" alt="">


            <div class="section__bubble-1"></div><!-- /.section__bubble-1 -->
            <div class="section__bubble-2"></div><!-- /.section__bubble-2 -->
            <div class="section__bubble-3"></div><!-- /.section__bubble-3 -->
            <div class="section__bubble-4"></div><!-- /.section__bubble-4 -->
            <div class="section__bubble-5"></div><!-- /.section__bubble-5 -->
            <div class="section__bubble-6"></div><!-- /.section__bubble-6 -->
            <div class="section__bubble-7"></div><!-- /.section__bubble-7 -->
            <div class="section__bubble-8"></div><!-- /.section__bubble-8 -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="blog-details__main">
                            <div class="blog-two__meta">
                                <a href="blog-details.html">{{$blog->created_at}}</a>
                            </div><!-- /.blog-two__meta -->
                            <h3>{{$blog->judul}}</h3>
                            <img src="{{ asset('fotomahasiswa/' . $blog->foto) }}" class="img-fluid" alt="">
                            <p>{!!$blog->deskripsi_detail!!}</p>
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

                        </div><!-- /.contact-two__form-wrap -->

                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar sidebar__right">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="text" placeholder="Search">
                                    <button type="submit" class="sidebar__search-btn"><i class="fa fa-search"></i></button><!-- /.sidebar__search-btn -->
                                </form><!-- /.sidebar__search-form -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Kategori</h3>
                                <ul class="list-unstyled sidebar__category-list">
                                    <li>

                                    </li>
                                </ul><!-- /.list-unstyled sidebar__category-list -->
                            </div><!-- /.sidebar__single -->


                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Muhi News</h3>
                                <div class="sidebar__post-wrap">
                                    @foreach ($d as $d )
                                    <div class="sidebar__post-single">
                                        <div class="sidebar__post-image">
                                            
                                            <img src="{{ asset('fotomahasiswa/' . $d->foto) }}" alt="">
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <h3><a href="/muhiblog/{{ $d->id }}">{{$d->judul}}</a></h3>
                                            <span>{{$d->created_at}}</span>
                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post-single -->
                                    @endforeach
                                </div><!-- /.sidebar__post-wrap -->
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
                            </div><!-- /.sidebar__single -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-standard -->
        <section class="mailchimp-one">
            <div class="container">
                <div class="inner-container">
                    <img src="assets/images/mocups/subscribe-moc-1-1.png" class="mailchimp-one__moc-1" alt="">
                    <img src="assets/images/mocups/subscribe-moc-1-2.png" class="mailchimp-one__moc-2" alt="">

                    <img src="assets/images/shapes/subscribe-dot-1-1.png" class="mailchimp-one__bg-shape-1" alt="">
                    <img src="assets/images/shapes/subscribe-shape-1-1.png" class="mailchimp-one__bg-shape-2" alt="">
                    <div class="block-title text-center">
                        <p><span>Newsletter</span></p>
                        <h3>Signup for Our Latest <br> <span>Update</span></h3>
                    </div><!-- /.block-title text-center -->
                    <form action="#" class="mailchimp-one__form">
                        <input type="text" name="email" placeholder="Enter your email">
                        <button type="submit" class="thm-btn mailchimp-one__btn">Subscribe Now</button>
                        <!-- /.thm-btn mailchimp-one__btn -->
                    </form><!-- /.mailchimp-one__form -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.mailchimp-one -->

        @include('koneksi.footer')



    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <div class="side-menu__block">

        <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
            <!-- /.fa fa-close --></a>

        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">

            <a href="index.html" class="side-menu__logo"><img src="assets/images/logo-1-1.png" alt=""></a>
            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <p class="side-menu__block__copy">(c) 2020 <a href="#">Inovex</a> - All rights reserved.</p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->

    <!-- template scripts -->
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


<!-- Mirrored from ashik.templatepath.net/inovex-html-files/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 03:35:54 GMT -->

</html>
