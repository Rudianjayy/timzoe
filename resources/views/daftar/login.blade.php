<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Mirrored from themesflat.com/html/bidzend/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:14:03 GMT -->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Ppdb Login</title>
    <meta name="author" content="themesflat.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('nopan2/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('nopan2/assets/css/responsive.css') }}">

    <link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('landing/html/bidzend/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('landing/html/bidzend/assets/css/responsive.css') }}">

    <link rel="shortcut icon" href="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap">
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

<body class="body header-fixed">

    <div class="preload preload-container">
        {{--  <div class="preload-logo"></div>  --}}
        <div class="preload-logo"><img src="{{ asset('landing/html/bidzend/assets/images/logo/muhi.jpg') }}"
                alt="Image" style="width:570 !important;"></div>
    </div>

    <div id="wrapper">
        <div id="page" class="clearfix">


            <section class="fl-page-title">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumbs">
                                <ul>
                                    <li>Login</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tf-section login-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-create-item-content">
                                <div class="form-create-item">
                                    <form method="post" action="/loginproses">
                                        @csrf
                                        <div class="sc-heading">
                                            <h1>Login</h1>
                                            <!-- <p class="desc">Silahkan daftar dibawah ini jika belum punya akun!! </p> -->
                                            <div class="content-right">
                                                <!-- <a href="/register" class="sc-button style letter style-2"><span>Daftar</span> </button></a> -->
                                            </div>
                                        </div>
                                        {{-- <form id="create-item-1" action="#" method="GET" accept-charset="utf-8"> --}}
                                        <div class="input-group" id="create-item-1">
                                            <input name="email" value="" type="text"
                                                placeholder="Masukkan email">
                                        </div>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="input-group" id="create-item-1">
                                            <input name="password" value="" type="password"
                                                placeholder="Masukkan password">
                                        </div>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        @if (Session::has('password'))
                                            <div>
                                                <div class="alert alert-danger">Sandi salah</div>
                                            </div>
                                        @endif

                                        {{-- <div class="input-group style-2 ">
                                            <div class="btn-check">
                                                <input type="radio" id="html" name="fav_language"
                                                    value="HTML">
                                                <label for="html">Remember Me</label>
                                            </div>
                                        </div> --}}
                                        <div class="input-group" id="create-item-1">
                                            <button name="submit" type="submit"
                                                class="sc-button style letter style-2"><span>Masuk</span> </button>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="content-right">
                                            <a href="/"
                                                class="sc-button style letter style-2"><span>Kembali</span>
                                                </button></a>
                                        </div>

                                        {{-- </form> --}}
                                        <center> Belum Punya Akun?<a href="/register"
                                                class="sc-button style letter style-2">Daftar</a></center>

                                        <div class="other-login">
                                            <div class="text">Atau</div>
                                            <div class="widget-social">
                                                <ul>
                                                    <li><a href="#" class="active"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="form-background">
                                    <img src="{{ asset('nopan2/assets/images/background/img-login.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <section class="new-letter">
                <div class="container">
                    <div class="new-letter-inner flex">
                        <div class="new-letter-content">
                            <h3 class="heading">Newsletters</h3>
                            <p class="sub-heading">Most popular gaming digital nft market place </p>
                            <div class="form-subcribe">
                                <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8"
                                    class="form-submit">
                                    <input name="email" value="" class="email" type="email"
                                        placeholder="Enter Email Address" required="">
                                    <button name="submit" type="submit" id="submit"
                                        class="sc-button style letter style-2"><span>Browse More</span> </button>
                                </form>
                            </div>
                        </div>
                        <div class="new-letter-img">
                            <img src="{{ asset('template/nopan2/assets/images/background/img-newletter.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </section> --}}

            {{-- <footer id="footer" class="clearfix bg-style">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="widget widget-logo">
                                <div class="logo-footer" id="logo-footer">
                                    <a href="index.html">
                                        <img id="logo_footer"
                                            src="{{ asset('template/nopan2/assets/images/logo/logo_dark.png') }}"
                                            alt="nft-gaming" width="151" height="45"
                                            data-retina="{{ asset('template/nopan2/assets/images/logo/logo_dark@2x.png') }}"
                                            data-width="151" data-height="45">
                                    </a>
                                </div>
                                <p class="sub-widget-logo">Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptate
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaes</p>
                                <div class="widget-social">
                                    <ul>
                                        <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                            <div class="widget widget-menu menu-marketplace">
                                <h5 class="title-widget">Marketplace</h5>
                                <ul>
                                    <li><a href="item.html">Gaming </a></li>
                                    <li><a href="item.html">Product </a></li>
                                    <li><a href="item.html">All NFTs</a></li>
                                    <li><a href="item.html">Social Network</a></li>
                                    <li><a href="item.html">Domain Names</a></li>
                                    <li><a href="item.html">Collectibles</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="widget widget-menu menu-supports">
                                <h5 class="title-widget">Supports</h5>
                                <ul>
                                    <li><a href="contact.html">Setting & Privacy </a></li>
                                    <li><a href="contact.html">Help & Support </a></li>
                                    <li><a href="item.html">Live Auctions</a></li>
                                    <li><a href="item-details.html"> Item Details</a></li>
                                    <li><a href="contact.html"> 24/7 Supports</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget widget-post">
                                <h5 class="title-widget">News & Post</h5>
                                <ul class="post-new">
                                    <li>
                                        <div class="post-img">
                                            <img src="{{ asset('template/nopan2/assets/images/post/post-recent-new-4.jpg') }}"
                                                alt="Post New">
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="blog-details.html">Roll Out New Features
                                                    Without
                                                    Hurting Loyal Users</a></h6>
                                            <a href="blog-details.html" class="post-date"><i
                                                    class="far fa-calendar-week"></i> 25 JAN 2022</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-img">
                                            <img src="{{ asset('template/nopan2/assets/images/post/post-recent-new-5.jpg') }}"
                                                alt="Post New">
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="blog-details.html">An Overview The Most Comon
                                                    UX
                                                    Design Deliverables</a></h6>
                                            <a href="blog-details.html" class="post-date"><i
                                                    class="far fa-calendar-week"></i> 25 JAN 2022</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer> --}}

            <div class="bottom">
                <div class="container">
                    <div class="bottom-inner">
                        Copyright © 2022 SMK Muhammadiyah 1 Genteng. Supported by <a
                            href="https://themeforest.net/user/themesflat/portfolio"> Team Zoe</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <a id="scroll-top"></a>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>
@include('sweetalert::alert')

@include('layout.script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

<script src="{{ asset('nopan2/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('nopan2/assets/js/jquery.easing.js') }}"></script>
<script src="{{ asset('nopan2/assets/js/plugin.js') }}"></script>
<script src="{{ asset('nopan2/assets/js/jquery-validate.js') }}"></script>
<script src="{{ asset('nopan2/assets/js/count-down.js') }}"></script>
<script src="{{ asset('nopan2/assets/js/shortcodes.js') }}"></script>
<script src="{{ asset('nopan2/assets/js/main.js') }}"></script>
</body>

<!-- Mirrored from themesflat.com/html/bidzend/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:14:04 GMT -->

</html>
