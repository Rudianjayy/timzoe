<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/bidzend/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:14:03 GMT -->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Ppdb Login</title>
    <meta name="author" content="themesflat.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('template/nopan2/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('template/nopan2/assets/css/responsive.css') }}">

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
            {{-- <div class="topbar">
                <div class="container">
                    <div class="topbar-inner flex">
                        <div class="menu-options flex">
                            <div class="ethereum">
                                <div id="ethereum" class="dropdown">
                                    <a href="#" class="btn-selector nolink">Ethereum</a>
                                    <ul>
                                        <li><span>Ethereum</span></li>
                                        <li><span>Bitski</span></li>
                                        <li><span>Fortmatic</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="english">
                                <div id="english" class="dropdown">
                                    <a href="#" class="btn-selector nolink">English</a>
                                    <ul>
                                        <li><span>English</span></li>
                                        <li><span>USA</span></li>
                                        <li><span>France</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="topbar-right flex">
                            <span>New Product Coming Soon</span>
                            <div class="countdown">
                                <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                            </div>
                            <ul class="socical-icon flex">
                                <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <header id="header_main" class="header_1 js-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-button"><span></span></div>
                            <div id="site-header-inner" class="flex">
                                <div id="site-logo" class="clearfix">
                                    <div id="site-logo-inner">
                                        <a href="index.html" rel="home" class="main-logo">
                                            <img id="logo_header" src="{{ asset('template/nopan2/assets/images/logo/logo_dark.png') }}"
                                                alt="nft-gaming" width="151" height="45"
                                                data-retina="{{ asset('template/nopan2/assets/images/logo/logo_dark@2x.png') }}" data-width="151"
                                                data-height="45">
                                        </a>
                                    </div>
                                </div>
                                <form class="form-search">
                                    <input type="text" placeholder="Search here">
                                    <button><i class="far fa-search"></i></button>
                                </form>
                                <div id="site-menu">
                                    <nav id="main-nav" class="main-nav">
                                        <ul id="menu-primary-menu" class="menu">
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">Home</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="index.html">Home 1</a></li>
                                                    <li class="menu-item"><a href="home2.html">Home 2</a></li>
                                                    <li class="menu-item"><a href="home-animation.html">Home
                                                            Animation</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">Explore</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="explore-1.html">Explore 1</a></li>
                                                    <li class="menu-item"><a href="explore-2.html">Explore 2</a></li>
                                                    <li class="menu-item"><a href="creator.html">Creator</a></li>
                                                    <li class="menu-item"><a href="item.html">Item </a></li>
                                                    <li class="menu-item"><a href="item-details.html">Item Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children ">
                                                <a href="#">Community</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item "><a href="blog.html">Blog</a></li>
                                                    <li class="menu-item"><a href="blog-details.html">Blog Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children current-item">
                                                <a href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="author.html">Authors</a></li>
                                                    <li class="menu-item"><a href="connect-wallet.html">Wallet
                                                            Connect</a></li>
                                                    <li class="menu-item"><a href="create-item.html">Create Item</a>
                                                    </li>
                                                    <li class="menu-item current-item"><a href="login.html">Login</a>
                                                    </li>
                                                    <li class="menu-item"><a href="register.html">Register</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="button-connect-wallet">
                                    <a href="connect-wallet.html" class="sc-button wallet  style-2">
                                        <img src="{{ asset('template/nopan2/assets/images/icon/connect-wallet.svg') }}" alt="icon">
                                        <span>Connect Wallet</span>
                                    </a>
                                </div>
                                <div class="mode_switcher">
                                    <h6><span>Dark Mode</span> <strong>Activate</strong></h6>
                                    <a href="#" class="light d-flex align-items-center">
                                        <img src="{{ asset('template/nopan2/assets/images/icon/sun.png') }}" alt="">
                                    </a>
                                    <a href="#" class="dark d-flex align-items-center is_active">
                                        <img id="moon_dark" src="{{ asset('template/nopan2/assets/images/icon/moon.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header> --}}

            <section class="fl-page-title">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-inner flex">
                                <div class="page-title-heading">
                                    <h2 class="heading">Log In</h2>
                                </div>
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="/ppdb">Ppdb</a></li>
                                        <li>Log In</li>
                                    </ul>
                                </div>
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
                                            <h3>Login Disini</h3>
                                            <p class="desc">Silahkan daftar dibawah ini jika belum punya akun!! </p>
                                            <a href="/register">Daftar disini</a>
                                        </div>
                                        {{-- <form id="create-item-1" action="#" method="GET" accept-charset="utf-8"> --}}
                                        <div class="input-group" id="create-item-1">
                                            <input name="email" value="" type="text"
                                                placeholder="User Name/Email Address" required="">
                                            </div>

                                            <div class="input-group" id="create-item-1">
                                            <input name="password" value="" type="password" placeholder="Password"
                                                required="">
                                            </div>

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
                                        {{-- </form> --}}
                                        <div class="other-login">
                                            <div class="text">Atau</div>
                                            <div class="widget-social">
                                                <ul>
                                                    <li><a href="#" class="active"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="form-background">
                                    <img src="{{ asset('template/nopan2/assets/images/background/img-login.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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

    <script src="{{ asset('template/nopan2/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/nopan2/assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('template/nopan2/assets/js/plugin.js') }}"></script>
    <script src="{{ asset('template/nopan2/assets/js/jquery-validate.js') }}"></script>
    <script src="{{ asset('template/nopan2/assets/js/count-down.js') }}"></script>
    <script src="{{ asset('template/nopan2/assets/js/shortcodes.js') }}"></script>
    <script src="{{ asset('template/nopan2/assets/js/main.js') }}"></script>
</body>

<!-- Mirrored from themesflat.com/html/bidzend/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 01:14:04 GMT -->

</html>
