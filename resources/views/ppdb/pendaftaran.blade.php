<!doctype html>
<html lang="">

<!-- Mirrored from templates.hibootstrap.com/colugo/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 08:00:39 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/fontawesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/odometer.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/magnific-popup.min.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/slick.min.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/dark.css') }}">

    <link rel="stylesheet" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/css/responsive.css') }}">
    <title>PPDB - SMK Muhammadiyah 1 Genteng</title>
    <link rel="icon" type="image/png" href="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/favicon.png') }}">
</head>

<body data-bs-spy="scroll" data-bs-offset="120">

    <div class="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="logo">
                <a href="javascript:void(0)">
                    <h3>PPDB Online</h3>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#daftar" class="nav-link">
                            Cara Pendaftaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#biaya" class="nav-link">
                            Biaya & Jadwal
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#kontak" class="nav-link">
                            Kontak
                        </a>
                    </li>
                </ul>
                <div class="others-option">
                    <div class="d-flex align-items-center">
                        <div class="option-item">
                            <a href="/login" class="default-btn">
                                Login
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div id="home" class="main-banner">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        @foreach ($dp as $dp)
                        <div class="col-lg-6">
                            <div class="banner-content" style="padding: 58px; padding-top:26px;">
                                <h1>{{ $dp->judul_slider }}</h1>
                                <p>
                                    {{ $dp->deskripsi_slider }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-lg-6">
                            <div class="banner-image">
                                <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/mobile.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="syarat" class="feature-section ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Kenapa Harus SMK Muhi?</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5">
                    <div class="download-img">
                        <img src="{{asset('ps/templates.hibootstrap.com/colugo/default/assets/img/mahok.png')}}" alt="download" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="feature-contents section-heading">
                        <ul class="list-unstyled">
                            @foreach($info as $i)
                            <li class="py-2">
                                <div class="d-flex align-items-right">
                                    <div>
                                        <div class="badge badge-circle badge-danger mr-3">
                                            <span class="ti-check"></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="m b-0">Pelopor sekolah IT pertama di Indonesia sejak 1992.</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="daftar" class="faq-area ptb-100">
        <div class="container">
            @foreach ($pd as $pd)
            <div class="section-title">
                <h2>Cara Pendaftaran</h2>
                <div class="bar"></div>
                <p>{!! $pd->deskripsi_pendaftaran !!}</p>
            </div>
            @endforeach
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-accordion-content">
                        <ul class="accordion">
                            @foreach ($langkah as $l )
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-chevron-down"></i>
                                    {{ $l->judul_langkah }}
                                </a>
                                <p class="accordion-content">{{$l->deskripsi_langkah}}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-image">
                        <img src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/img/faq-mobile.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="biaya" class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Biaya Pendaftaran</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="tab pricing-list-tab">
                <!-- <ul class="tabs">
                    <li>
                        <a href="#">
                            Monthly
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Yearly
                        </a>
                    </li>
                </ul> -->
                <div class="tab_content">
                    <div class="tabs_item">
                        <div class="row">
                            @foreach ($biaya as $b )

                            @php
                                $tanggal_awal = date('Y-m-d',strtotime('$b->jadwal_mulai'));
                                $tanggal_akhir = date('Y-m-d',strtotime('$b->jadwal_ditutup' ));
                            @endphp


                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>{{$b->gelombang}}</h3>
                                    </div>
                                    <div class="price">
                                        <h5>{{$b->penjelasan}}</h5>
                                        <h5>Rp.{{ number_format($b['biaya'], 2, '.', '.') }}</h5>
                                    </div>
                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            {{ $b->jadwal_mulai }} - {{ $b -> jadwal_ditutup }}
                                        </li>
                                    </ul>
                                </div>

                                @if ( $b->jadwal_mulai < now() && $b->jadwal_ditutup > now())
                                    <div class="text-center">
                                        <div class="send-btn">

                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                @else
                                <div class="text-center">
                                    <div class="send-btn ">

                                    </div>
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <form action="" id="submit_form" method="POST">
                    @csrf
                    <input type="hidden" name="json" id="json_callback">
                    <input type="hidden" name="biaya_ids" id="biaya_ids">
                </form>
            </div>
        </div>

    </section>
            <section class="footer-area pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget">
                                @foreach ($footerppdb as $f)
                                <a href="#" class="logo">
                                    <h2>Colugo</h2>
                                </a>
                                <p>{!! $f->deskripsi_footeer !!}</p>
                                @endforeach
                                <ul class="social-list">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget pl-5">
                                <h3>Company</h3>
                                <ul class="list">
                                    <li>
                                        <a href="#">
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Carrers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Awards
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            User Program
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Locations
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget">
                                <h3>Lainnya</h3>
                                @php
                                $link = \App\Models\Footeerdua::all();
                                @endphp
                                <ul class="list">
                                    @foreach ($footerlink as $f)
                                    <li><a href="{{ $f->link }}">{{ $f->judul }}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget">
                                <h3>Pengunjung</h3>
                                <ul class="footer-holder">
                                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                                    <div class="elfsight-app-8ad5f200-9e00-438d-95d7-3ab159095b4f"></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="copy-right">
                <div class="container">
                    <div class="copy-right-content">
                        <p>
                            Copyright © 2022 at SMK Muhammadiyah 1 Genteng. Supported by
                            <a href="https://hibootstrap.com/" target="_blank">
                                Team Zoe
                            </a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="go-top">
                <i class="fa fa-chevron-up"></i>
                <i class="fa fa-chevron-up"></i>
            </div>

            <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script src="{{asset('ps/templates.hibootstrap.com/colugo/default/assets/js/jquery.min.js')}}"></script>

            <script src="{{asset('ps/templates.hibootstrap.com/colugo/default/assets/js/bootstrap.bundle.min.js')}}"></script>

            <script src="{{asset('ps/templates.hibootstrap.com/colugo/default/assets/js/owl.carousel.min.js')}}"></script>

            <script src="{{asset('ps/templates.hibootstrap.com/colugo/default/assets/js/jquery.appear.js')}}"></script>

            <script src="{{asset('ps/templates.hibootstrap.com/colugo/default/assets/js/odometer.min.js')}}"></script>

            <script src="{{asset('ps/templates.hibootstrap.com/colugo/default/assets/js/slick.min.js')}}"></script>

            <script src="{{asset('ps/templates.hibootstrap.com/colugo/default/assets/js/particles.min.js')}}"></script>


            <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/jquery.ripples-min.js') }}"></script>

            <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/jquery.magnific-popup.min.js') }}">
            </script>

            <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/wow.min.js') }}"></script>

            <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/jquery.ajaxchimp.min.js') }}"></script>

            <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/form-validator.min.js') }}"></script>

            <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/contact-form-script.js') }}"></script>

            <script src="{{ asset('ps/templates.hibootstrap.com/colugo/default/assets/js/main.js') }}"></script>

            <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-SwazW8iq5q-s8p6I"></script>
            <script type="text/javascript">
                // For example trigger on button clicked, or any time you need
                var payButton = document.querySelectorAll('.pay-button');
                $('.pay-button').click(function() {
                    // alert('aa')

                    const biaya_id = $(this).attr('data-biaya_id')
                    const biaya_gelombang = $(this).attr('data-biaya_gelombang')
                    const biaya = $(this).attr('data-biaya')


                    const data = {
                        biaya_id,
                        biaya_gelombang,
                        biaya
                    }

                    console.log(data)

                    console.log("{{ URL::to('/api/snap') }}");

                    $.ajax({
                        method: 'post',
                        url: "{{ URL::to('/api/pendaftaran/snap') }}",
                        data: data,
                        dataType: 'JSON',
                        success: function(e) {

                            var bebas = document.getElementById('biaya_ids')
                            // console.log(e)
                            bebas.value = e.biaya

                            window.snap.pay(e.snap, {
                                onSuccess: function(result) {
                                    /* You may add your own implementation here */
                                    console.log(result);
                                    send_response_to_form(result);
                                },
                                onPending: function(result) {
                                    /* You may add your own implementation here */
                                    console.log(result);
                                    send_response_to_form(result);
                                },
                                onError: function(result) {
                                    /* You may add your own implementation here */
                                    console.log(result);
                                    send_response_to_form(result);
                                },
                                onClose: function() {
                                    /* You may add your own implementation here */
                                    alert('You closed the popup without finishing the payment');
                                }
                            });
                        },
                        error: function(err) {
                            console.log(err)
                        }
                    })
                    // fetch("{{ URL::to('/api/perusahaan/project/snap') }}", {
                    // method: 'POST',
                    // headers: {
                    //     'Content-Type': 'application/json',
                    // },
                    // body: JSON.stringify(data),
                    // })
                    // .then((response) => response.json())
                    // .then((data) => {
                    //     console.log('Success:', data);

                    //     var bebas = document.getElementById('jobs_ids')

                    //     bebas.value = data.jobs

                    //     window.snap.pay(data.snap, {
                    //         onSuccess: function(result){
                    //         /* You may add your own implementation here */
                    //         console.log(result);
                    //         send_response_to_form(result);
                    //         },
                    //         onPending: function(result){
                    //         /* You may add your own implementation here */
                    //         console.log(result);
                    //         send_response_to_form(result);
                    //         },
                    //         onError: function(result){
                    //         /* You may add your own implementation here */
                    //         console.log(result);
                    //         send_response_to_form(result);
                    //         },
                    //         onClose: function(){
                    //         /* You may add your own implementation here */
                    //         alert('You closed the popup without finishing the payment');
                    //         }
                    //     })
                    // })
                    // .catch((error) => {
                    //     console.error('Error:', error);
                    // });

                })

                function send_response_to_form(result) {
                    document.getElementById('json_callback').value = JSON.stringify(result);
                    $('#submit_form').submit();
                }
            </script>
</body>


</html>
