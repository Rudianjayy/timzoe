@extends('layout.main')

@section('content')
    @include('layout.css')


    @if (auth()->user()->role == 'admin')
        <title>Admin | SMK Muhammadiyah 1 Genteng</title>
    @endif
    @if (auth()->user()->role == 'user')
        <title>User | SMK Muhammadiyah 1 Genteng</title>
    @endif
    @if (auth()->user()->role == 'operator1')
        <title>Operator | SMK Muhammadiyah 1 Genteng</title>
    @endif

    <style>
        #chartsPpdb,
        #columnlinemixchartdiv,
        #clusteredbarchartdiv,
        #cylinderchartdiv {
            width: 100%;
            height: 500px;
            font-size: 11px;
        }

        #clusteredbarchartdiv .amcharts-chart-div a {
            color: #fff !important;
            font-size: 11px !important;
            opacity: 1 !important;
            top: 40px !important;
        }
    </style>


    <link rel="icon" type="image/x-icon" href="{{ asset('admintemp/adminnew/riski/nopan/assets/img/favicon.ico') }}" />


    <body>

        <div class="container">
            <div class="page-header">
                <div class="page-title">
                    <h3>Dashboard</h3>
                </div>
            </div>
            @if (auth()->user()->role == 'admin')
                <div class="row layout-spacing ">

                    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-sales-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-double-chat"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Berita</p>
                                        <p class="widget-numeric-value count">{{ $berita }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-order-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-note-1"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Album</p>
                                        <p class="widget-numeric-value count">{{ $galery }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-sm-0 mb-4">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-customer-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-user-11"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Prestasi</p>
                                        <p class="widget-numeric-value count">{{ $prestasi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">

                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-income-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-primary"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Mitra</p>
                                        <p class="widget-numeric-value count">{{ $mitra }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
           

            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4></h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area text-center icon-counter-container">
                        <div class="row mb-5" style="padding-top: 30px;">
                            <div class="col-xl-3 col-lg-3 mb-md-0 col-md-3 mb-5 col-sm-6">
                                <i class="counter-ico flaticon-user-group-1"></i>
                                <h1 class="ico-counter1 ico-counter mt-2">{{ $total }}</h1>
                                <p class="ico-counter-text">Total Pendaftar</p>
                            </div>

                            <div class="col-xl-3 col-lg-3 mb-md-0 col-md-3 mb-5 col-sm-6">
                                <i class="counter-ico flaticon-hourglass"></i>
                                <h1 class="ico-counter4 ico-counter mt-2">{{ $formulirp }}</h1>
                                <p class="ico-counter-text">Siswa Pending</p>
                            </div>

                            <div class="col-xl-3 col-lg-3 mb-md-0 col-md-3 mb-5 col-sm-6">
                     
                                <i class="counter-ico flaticon-user-11"></i>
                                <h1 class="ico-counter2 ico-counter mt-2">{{ $formulir }}</h1>
                                <p class="ico-counter-text">Siswa Diterima</p>
                            </div>

                            <div class="col-xl-3 col-lg-3 mb-md-0 col-md-3 mb-5 col-sm-6">
                                <i class="counter-ico flaticon-users"></i>
                                <h1 class="ico-counter3 ico-counter mt-2">{{ $formulird }}</h1>
                                <p class="ico-counter-text">Siswa Ditolak</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if (auth()->user()->role == 'admin')
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">

                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Grafik Siswa Daftar Pertahun</h4>
                                </div>

                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <div id="chartsPpdb"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">

                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Grafik Siswa Daftar Pertahun</h4>
                                </div>

                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <div id="grafik"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            @endif

            {{-- <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Line Charts</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <div id="chart_line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Basic Column Chart</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <div id="basic_chart" class="" style="height:400px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12 layout-spacing">
                <div class="widget-content-area chat-messages p-0  br-4">

                    <div class="chat-container">
                        <div class="chat-header">
                            <div class="media">
                                <i class="flaticon-mail-fill icon mr-4"></i>
                                <div class="media-body">
                                    <h6 class="">Message</h6>
                                    <p class="mb-0">3 Unread Message</p>
                                </div>
                                <div class="float-right">
                                    <i class="flaticon-refresh-1 js-refresh mr-1"></i>
                                    <div class="dropdown custom-dropdown d-inline-block">
                                        <a class="dropdown-toggle pl-0" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="flaticon-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="javascript:void(0);">Account</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chat-body reload-widget-area">
                            <div class="mCustomScrollbar message-scroll" data-mcs-theme="minimal-dark">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-2.jpg') }}" class="rounded-circle mr-4" alt="user">
                                                        <div class="media-body">
                                                            <h6 class="usr-name">Andy King</h6>
                                                            <p class="message">Hey, where have you been?</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right"><p class="meta-time">5 min</p></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-3.jpg') }}" class="rounded-circle mr-4" alt="user">
                                                        <div class="media-body">
                                                            <h6 class="usr-name">Shaun Park</h6>
                                                            <p class="message">What up man? Good Morning</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right"><p class="meta-time">7 min</p></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-4.jpg') }}" class="rounded-circle mr-4" alt="user">
                                                        <div class="media-body">
                                                            <h6 class="usr-name">Nia Hillyer</h6>
                                                            <p class="message">Hey, why are you not eating anything?</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right"><p class="meta-time">11 min</p></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-6.jpg') }}" class="rounded-circle mr-4" alt="user">
                                                        <div class="media-body">
                                                            <h6 class="usr-name">Mary McDonald</h6>
                                                            <p class="message">I never said that for sure</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right"><p class="meta-time">20 min</p></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-8.jpg') }}" class="rounded-circle mr-4" alt="user">
                                                        <div class="media-body">
                                                            <h6 class="usr-name">Lisa Doe</h6>
                                                            <p class="message">That's not what I heard from Sammy</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right"><p class="meta-time">25 min</p></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-9.jpg') }}" class="rounded-circle mr-4" alt="user">
                                                        <div class="media-body">
                                                            <h6 class="usr-name">Alma Clarke</h6>
                                                            <p class="message">Good Morning Friends</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right"><p class="meta-time">33 min</p></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="text-center show-all-msg p-4">
                                <a href="#">All messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget-content-area card-widget p-0  br-4">
                    <div class="card-1 br-4">
                        <div class="d-flex justify-content-between mb-5">
                            <p class="card-title">Team Meeting</p>
                            <p class="meta-time">12:30 - 2:30 PM</p>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <div class="col-md-12 text-center mt-sm-3">
                                <button class="btn btn-outline-default btn-rounded">View Details</button>
                            </div>
                        </div>

                        <ul class="list-inline badge-collapsed-img badge-tooltip mt-5 mb-0 text-right mr-3">
                            <li class="list-inline-item chat-online-usr">
                                <img data-original-title="Alma Clarke" alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-7.jpg') }}" class="ml-0 bs-tooltip">
                            </li>
                            <li class="list-inline-item chat-online-usr">
                                <img data-original-title="Alan Green" alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-8.jpg') }}" class="bs-tooltip">
                            </li>
                            <li class="list-inline-item chat-online-usr">
                                <img data-original-title="Daisy Anderson" alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-9.jpg') }}" class="bs-tooltip">
                            </li>
                            <li class="list-inline-item chat-online-usr">
                                <img data-original-title="Judy Holmes" alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-5.jpg') }}" class="bs-tooltip">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="statbox widget box order-summary">
                    <div class="widget-header ">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Order Summary</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area ">
                        <p class="card-title pl-2 mb-0 mt-1">Total Balance</p>
                        <div class="d-flex justify-content-between mt-4">
                            <p class="t-amount mb-2">168,500</p>
                            <p class="order-rate mt-auto">20% <i class="flaticon-double-check ml-2"></i></p>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-6 mb-sm-4 mb-2">
                                <div class="media processed">
                                    <i class="flaticon-cart-bag icon mr-2"></i>
                                    <div class="media-body">
                                        <p class="mt-1">Processed</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-sm-4 mb-2">
                                <div class="progress progress-md">
                                  <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-sm-4 mb-2">
                                <div class="media pending">
                                    <i class="flaticon-danger-2 icon mr-2"></i>
                                    <div class="media-body">
                                        <p class="mt-1">Pending</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-sm-4 mb-2">
                                <div class="progress progress-md">
                                  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-sm-4 mb-2">
                                <div class="media delivered">
                                    <i class="flaticon-gift icon mr-2"></i>
                                    <div class="media-body">
                                        <p class="mt-1">Delivered</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-sm-4 mb-2">
                                <div class="progress progress-md">
                                  <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>

            <div class="row">

            <div class="col-xl-8 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="widget-content-area monthly-chart  br-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-2 col-12  align-self-center">
                            <h3>Statistics</h3>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-10 col-12 mt-sm-0 mt-3">
                            <ul class="nav justify-content-sm-end justify-content-center monthly-chart-tab nav-pills" id="monthly-chart" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="monthly-chart-weekly-tab" data-toggle="pill" href="#monthly-chart-weekly" role="tab" aria-controls="monthly-chart-weekly" aria-selected="true">Weekly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="monthly-chart-monthly-tab" data-toggle="pill" href="#monthly-chart-monthly" role="tab" aria-controls="monthly-chart-monthly" aria-selected="true">Monthly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="monthly-chart-yearly-tab" data-toggle="pill" href="#monthly-chart-yearly" role="tab" aria-controls="monthly-chart-yearly" aria-selected="false">Yearly</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 mt-3">
                            <div class="tab-content" id="monthly-chartContent">
                                <div class="tab-pane fade show active" id="monthly-chart-weekly" role="tabpanel" aria-labelledby="monthly-chart-weekly-tab">
                                    <div class="v-pv-weekly" style="height: 300px; width: 100%; margin-top: 30px;"></div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row mt-3">
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-right text-center mb-3 mr-sm-3 px-xl-0">
                                                <div class="d-flex justify-content-sm-end  justify-content-center">
                                                    <div class="d-m-visitors data-marker align-self-center"></div>
                                                    <span class="visitors">Visitors : 9,823</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-left text-center mb-3 ml-sm-3 px-xl-0">
                                                <div class="d-flex justify-content-sm-start  justify-content-center">
                                                    <div class="d-m-page-view data-marker align-self-center"></div>
                                                    <span class="page-view">Pageviews : 21,655</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="monthly-chart-monthly" role="tabpanel" aria-labelledby="monthly-chart-monthly-tab">
                                    <div class="v-pv-monthly" style="height: 300px; width: 100%; margin-top: 30px;"></div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row mt-3">
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-right text-center mb-3 mr-sm-3 px-xl-0">
                                                <div class="d-flex justify-content-sm-end  justify-content-center">
                                                    <div class="d-m-visitors data-marker data-marker-success align-self-center"></div>
                                                    <span class="visitors">Visitors : 19,823</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-left text-center mb-3 ml-sm-3 px-xl-0">
                                                <div class="d-flex justify-content-sm-start  justify-content-center">
                                                    <div class="d-m-page-view data-marker data-marker-secondary align-self-center"></div>
                                                    <span class="page-view">Pageviews : 61,655</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="monthly-chart-yearly" role="tabpanel" aria-labelledby="monthly-chart-yearly-tab">
                                    <div class="v-pv-yearly" style="height: 300px; width: 100%; margin-top: 30px;"></div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row mt-3">
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-right text-center mb-3 mr-sm-3 px-xl-0">
                                                <div class="d-flex justify-content-sm-end  justify-content-center">
                                                    <div class="d-m-visitors data-marker data-marker-success align-self-center"></div>
                                                    <span class="visitors">Visitors : 80,823</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-left text-center mb-3 ml-sm-3 px-xl-0">
                                                <div class="d-flex justify-content-sm-start  justify-content-center">
                                                    <div class="d-m-page-view data-marker data-marker-secondary align-self-center"></div>
                                                    <span class="page-view">Pageviews : 1,21,655</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-sm-12 col-12 layout-spacing">
                <div class="statbox widget box">
                    <div class="widget-header ">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Revenue and Profit</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area  monthly-profit-chart">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 mt-3">
                                        <div class="s-r mx-auto" style="height: 300px; width: 100%; max-width: 275px;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12 mt-2 mb-2">
                                <div class="row mt-4">
                                    <div class="col-lg-6 col-md-6 col-6 px-xl-0 text-right">
                                        <div class="d-flex justify-content-end">
                                            <div class="d-m-revenue data-marker align-self-center"></div>
                                            <span class="page-view mr-sm-3">Revenue</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6 px-xl-0 text-left">
                                        <div class="d-flex justify-content-start">
                                            <div class="d-m-profit data-marker align-self-center"></div>
                                            <span class="page-view">Profit</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>

         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="statbox widget box">
                    <div class="widget-header ">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>New Products</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content-area ">

                        <div class="table-responsive new-products">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="form-check-column text-center">
                                            <label  for="checkAll" class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                              <input type="checkbox" id="checkAll" class="new-control-input">
                                              <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </th>
                                        <th>Product</th>
                                        <th>Type</th>
                                        <th>SKU</th>
                                        <th class="text-center">Quantity</th>
                                        <th>Image</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="form-check-column text-center">
                                            <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                              <input type="checkbox" class="new-control-input chkbox">
                                              <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </td>
                                        <td>Camera</td>
                                        <td><span class="badge badge-info badge-pill">Simple</span></td>
                                        <td>#0001</td>
                                        <td class="text-center">1</td>
                                        <td>
                                            <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/large-img-7.jpg') }}" class="img-fluid" alt="img-1" style="border-color: #3862f5;">
                                        </td>
                                        <td class="text-center">$848.95</td>
                                        <td class="text-center">
                                            <div class="toolbar">
                                                <div class="toolbar-toggle">...</div>
                                                <ul class="toolbar-dropdown animated fadeInUp table-controls list-inline">
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="View"><i class="flaticon-view-3"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Edit"><i class="flaticon-edit-5"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Remove"><i class="flaticon-delete-6"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-check-column text-center">
                                            <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                              <input type="checkbox" class="new-control-input chkbox">
                                              <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </td>
                                        <td>Mobile</td>
                                        <td><span class="badge badge-info badge-pill">Simple</span></td>
                                        <td>#0002</td>
                                        <td class="text-center">1</td>
                                        <td>
                                            <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/large-img-4.jpg') }}" class="img-fluid" alt="img-1" style="border-color: #07e0c4;">
                                        </td>
                                        <td class="text-center">$529.95</td>
                                        <td class="text-center">
                                            <div class="toolbar">
                                                <div class="toolbar-toggle">...</div>
                                                <ul class="toolbar-dropdown animated fadeInUp table-controls list-inline">
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="View"><i class="flaticon-view-3"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Edit"><i class="flaticon-edit-5"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Remove"><i class="flaticon-delete-6"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-check-column text-center">
                                            <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                              <input type="checkbox" class="new-control-input chkbox">
                                              <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </td>
                                        <td>Windows 10</td>
                                        <td><span class="badge badge-success badge-pill">Digital</span></td>
                                        <td>#0003</td>
                                        <td class="text-center">3</td>
                                        <td>
                                            <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/large-img-1.png') }}" class="img-fluid" alt="img-1" style="border-color: #00b1f4;">
                                        </td>
                                        <td class="text-center">$1584.00</td>
                                        <td class="text-center">
                                            <div class="toolbar">
                                                <div class="toolbar-toggle">...</div>
                                                <ul class="toolbar-dropdown animated fadeInUp table-controls list-inline">
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="View"><i class="flaticon-view-3"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Edit"><i class="flaticon-edit-5"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Remove"><i class="flaticon-delete-6"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-check-column text-center">
                                            <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                              <input type="checkbox" class="new-control-input chkbox">
                                              <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </td>
                                        <td>Watch</td>
                                        <td><span class="badge badge-info badge-pill">Simple</span></td>
                                        <td>#0004</td>
                                        <td class="text-center">5</td>
                                        <td>
                                            <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/large-img-3.jpg') }}" class="img-fluid" alt="img-1" style="border-color: #f8538d;">
                                        </td>
                                        <td class="text-center">$595.99</td>
                                        <td class="text-center">
                                            <div class="toolbar">
                                                <div class="toolbar-toggle">...</div>
                                                <ul class="toolbar-dropdown animated fadeInUp table-controls list-inline">
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="View"><i class="flaticon-view-3"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Edit"><i class="flaticon-edit-5"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Remove"><i class="flaticon-delete-6"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-check-column text-center">
                                            <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                              <input type="checkbox" class="new-control-input chkbox">
                                              <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </td>
                                        <td>Drone</td>
                                        <td><span class="badge badge-info badge-pill">Simple</span></td>
                                        <td>#0005</td>
                                        <td class="text-center">1</td>                                                <td>
                                            <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/large-img-5.jpg') }}" class="img-fluid" alt="img-1" style="border-color: #ffbb44;">
                                        </td>
                                        <td class="text-center">$58.00</td>
                                        <td class="text-center">
                                            <div class="toolbar">
                                                <div class="toolbar-toggle">...</div>
                                                <ul class="toolbar-dropdown animated fadeInUp table-controls list-inline">
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="View"><i class="flaticon-view-3"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Edit"><i class="flaticon-edit-5"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Remove"><i class="flaticon-delete-6"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-check-column text-center">
                                            <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                              <input type="checkbox" class="new-control-input chkbox">
                                              <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </td>
                                        <td>Sunglasses</td>
                                        <td><span class="badge badge-secondary badge-pill">Bundled</span></td>
                                        <td>#0006</td>
                                        <td class="text-center">6</td>
                                        <td>
                                            <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/large-img-2.jpg') }}" class="img-fluid" alt="img-1" style="border-color: #25d5e4;">
                                        </td>
                                        <td class="text-center">$123.00</td>
                                        <td class="text-center">
                                            <div class="toolbar">
                                                <div class="toolbar-toggle">...</div>
                                                <ul class="toolbar-dropdown animated fadeInUp table-controls list-inline">
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="View"><i class="flaticon-view-3"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Edit"><i class="flaticon-edit-5"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Remove"><i class="flaticon-delete-6"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination-section">
                            <ul class="pagination pagination-style-1 pagination-rounded justify-content-end mt-3 mb-3">
                                <li><a href="javascript:void(0);">«</a></li>
                                <li><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li><a href="javascript:void(0);">3</a></li>
                                <li><a href="javascript:void(0);">4</a></li>
                                <li><a href="javascript:void(0);">5</a></li>
                                <li><a href="javascript:void(0);">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </div>

            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="widget-content-area raised-tickets p-0  h-100 br-4">
                        <div class=" table-header">
                            <div class="row">
                                <div class="col-6 pr-0">
                                    <p class="mb-0">Tickets</p>
                                </div>
                                <div class="col-6 pl-0 text-right">
                                    <p class="mb-0">Status</p>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-1.jpg') }}" class="rounded-circle mr-4" alt="user">
                                                <div class="media-body">
                                                    <h6 class="usr-name">Shaun Park</h6>
                                                    <p class="meta-info">
                                                        <i class="flaticon-stopwatch-1 mr-1"></i>
                                                        <span class="meta-date">9 Jan 2019 | Tue - </span>
                                                        <span class="meta-time">9:00 am</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="action text-right">
                                            <i class="flaticon-danger-2 mb-2 t-inprogress bs-tooltip" data-placement="top" title="Pending"></i>
                                            <i class="flaticon-checked-1 mb-2 bs-tooltip" data-placement="top" title="Success"></i>
                                            <i class="flaticon-cancel-circle mb-2 bs-tooltip" data-placement="top" title="Close"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-2.jpg') }}" class="rounded-circle mr-4" alt="user">
                                                <div class="media-body">
                                                    <h6 class="usr-name">Nia Hillyer</h6>
                                                    <p class="meta-info">
                                                        <i class="flaticon-stopwatch-1 mr-1"></i>
                                                        <span class="meta-date">5 Jan 2019 | Mon - </span>
                                                        <span class="meta-time">2:00 pm</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="action text-right">
                                            <i class="flaticon-danger-2 mb-2 bs-tooltip" data-placement="top" title="Pending"></i>
                                            <i class="flaticon-checked-1 mb-2 t-solved bs-tooltip" data-placement="top" title="Success"></i>
                                            <i class="flaticon-cancel-circle mb-2 bs-tooltip" data-placement="top" title="Close"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-4.jpg') }}" class="rounded-circle mr-4" alt="user">
                                                <div class="media-body">
                                                    <h6 class="usr-name">Mary McDonald</h6>
                                                    <p class="meta-info">
                                                        <i class="flaticon-stopwatch-1 mr-1"></i>
                                                        <span class="meta-date">3 Jan 2019 | Mon - </span>
                                                        <span class="meta-time">10:00 am</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="action text-right">
                                            <i class="flaticon-danger-2 mb-2 bs-tooltip" data-placement="top" title="Pending"></i>
                                            <i class="flaticon-checked-1 mb-2 bs-tooltip" data-placement="top" title="Success"></i>
                                            <i class="flaticon-cancel-circle mb-2 t-not-solved bs-tooltip" data-placement="top" title="Close"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-3.jpg') }}" class="rounded-circle mr-4" alt="user">
                                                <div class="media-body">
                                                    <h6 class="usr-name">Andy King</h6>
                                                    <p class="meta-info">
                                                        <i class="flaticon-stopwatch-1 mr-1"></i>
                                                        <span class="meta-date">29 Dec 2018 | Fri - </span>
                                                        <span class="meta-time">03:00 pm</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="action text-right">
                                            <i class="flaticon-danger-2 mb-2 bs-tooltip" data-placement="top" title="Pending"></i>
                                            <i class="flaticon-checked-1 mb-2 t-solved bs-tooltip" data-placement="top" title="Success"></i>
                                            <i class="flaticon-cancel-circle mb-2 bs-tooltip" data-placement="top" title="Close"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="widget-content-area task-container  p-0 h-100 br-4">
                        <div class="task-list">
                            <div class="task-header">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 mb-4 mb-sm-0">
                                        <h6 class="mt-3 mb-0">Today's Task</h6>
                                    </div>
                                    <div class="col-md-7 col-sm-7 text-sm-right">
                                        <button class="btn btn-gradient-warning btn-rounded">Create Task</button>
                                    </div>
                                </div>
                            </div>
                            <div class="task-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="task-item">
                                                        <h6 class="task-title mb-3">Metting Scheduled with</h6>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-5.jpg') }}" class="rounded-circle mb-2" alt="user">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-6.jpg') }}" class="rounded-circle mb-2" alt="user">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-7.jpg') }}" class="rounded-circle mb-2" alt="user">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-8.jpg') }}" class="rounded-circle mb-2" alt="user">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="action text-right">
                                                    <i class="flaticon-edit-fill bs-tooltip" data-placement="top" title="Edit"></i>
                                                    <i class="flaticon-delete-can-fill-2 ml-2 bs-tooltip" data-placement="top" title="Delete"></i>
                                                    <br/>
                                                    <p class="meta-info">
                                                        <span class="meta-time">03:20 PM Wed,</span>
                                                        <span class="meta-date">16 Jan 2019</span>
                                                    </p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="task-item">
                                                        <h6 class="task-title mb-3">Give purchase report to</h6>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-9.jpg') }}" class="rounded-circle mb-1" alt="user">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="txt-profile txt-profile-success mb-1">G</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="action text-right">
                                                    <i class="flaticon-edit-fill bs-tooltip" data-placement="top" title="Edit"></i>
                                                    <i class="flaticon-delete-can-fill-2 ml-2 bs-tooltip" data-placement="top" title="Delete"></i>
                                                    <br/>
                                                    <p class="meta-info">
                                                        <span class="meta-time">11:00 AM Wed,</span>
                                                        <span class="meta-date">16 Jan 2019</span>
                                                    </p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="task-item">
                                                        <h6 class="task-title mb-3">Receive Shipment</h6>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-10.jpg') }}" class="rounded-circle mb-2" alt="user">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-3.jpg') }}" class="rounded-circle mb-2" alt="user">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-11.jpg') }}" class="rounded-circle mb-2" alt="user">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-12.jpg') }}" class="rounded-circle mb-2" alt="user">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="action text-right">
                                                    <i class="flaticon-edit-fill bs-tooltip" data-placement="top" title="Edit"></i>
                                                    <i class="flaticon-delete-can-fill-2 ml-2 bs-tooltip" data-placement="top" title="Delete"></i>
                                                    <br/>
                                                    <p class="meta-info">
                                                        <span class="meta-time">09:00 AM Wed,</span>
                                                        <span class="meta-date">16 Jan 2019</span>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center action-button">
                                    <button class="btn btn-light-success mb-4 mt-3 box-shadow-none">View All Tasks</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="widget-content-area event-calendar p-0 br-4">
                        <div class="calendar"></div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="top-searches widget-content-area p-0 widget-content-container  h-100 br-4">
                        <div class="col-lg-12 col-md-12 col-12 map-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <p class="mb-4 mt-2">Top Searches</p>
                                </div>
                            </div>
                        </div>
                        <div class="child-content">
                            <div id="world-map" style="height: 435px; max-height: 100%;"></div>
                            <div class="world-map-section">
                                <div class="">
                                    <div class="table-responsive top-search-scroll">
                                        <table class="table table-highlight-head">
                                            <thead>
                                                <tr>
                                                    <th class="align-center">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-m-data-1 data-marker align-self-center"></div>
                                                            <span class="page-view mr-sm-3">USA</span>
                                                        </div>
                                                    </th>
                                                    <th class="align-center">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-m-data-2 data-marker align-self-center"></div>
                                                            <span class="page-view mr-sm-3">Australia</span>
                                                        </div>
                                                    </th>
                                                    <th class="align-center">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-m-data-3 data-marker align-self-center"></div>
                                                            <span class="page-view mr-sm-3">Spain</span>
                                                        </div>
                                                    </th>
                                                    <th class="align-center">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-m-data-4 data-marker align-self-center"></div>
                                                            <span class="page-view mr-sm-3">France</span>
                                                        </div>
                                                    </th>
                                                    <th class="align-center">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-m-data-5 data-marker align-self-center"></div>
                                                            <span class="page-view mr-sm-3">India</span>
                                                        </div>
                                                    </th>
                                                    <th class="align-center">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-m-data-6 data-marker align-self-center"></div>
                                                            <span class="page-view mr-sm-3">Other</span>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="align-center data-value-1">55%</td>
                                                    <td class="align-center data-value-2">30%</td>
                                                    <td class="align-center data-value-3">10%</td>
                                                    <td class="align-center data-value-4">4%</td>
                                                    <td class="align-center data-value-5">0.6%</td>
                                                    <td class="align-center data-value-6">0.4%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow latest-invoice ">
                        <div class="widget-header ">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Latest Invoice</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-area ">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="form-check-column text-center">
                                                <label for="invoiceAll" class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" id="invoiceAll" class="new-control-input">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                </label>
                                            </th>
                                            <th>Product</th>
                                            <th>Invoice no.</th>
                                            <th>Date</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-center">Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="form-check-column text-center">
                                                <label class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" class="new-control-input invoicechk">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                </label>
                                            </td>
                                            <td>Camera</td>
                                            <td>#0001</td>
                                            <td>16 Jan</td>
                                            <td class="align-center">$15,202</td>
                                            <td  class="text-center">
                                                <span class="badge badge-pills outline-badge-secondary">In Progress</span>
                                            </td>
                                            <td>
                                                <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="form-check-column text-center">
                                                <label class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" class="new-control-input invoicechk">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                </label>
                                            </td>
                                            <td>Iphone</td>
                                            <td>#0002</td>
                                            <td>16 Jan</td>
                                            <td class="align-center">$650</td>
                                            <td  class="text-center">
                                                <span class="badge badge-pills outline-badge-success">Approved</span>
                                            </td>
                                            <td>
                                                <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="form-check-column text-center">
                                                <label class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" class="new-control-input invoicechk">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                </label>
                                            </td>
                                            <td>Headphone</td>
                                            <td>#0003</td>
                                            <td>16 Jan</td>
                                            <td class="align-center">$25</td>
                                            <td  class="text-center">
                                                <span class="badge badge-pills outline-badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="form-check-column text-center">
                                                <label class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" class="new-control-input invoicechk">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                </label>
                                            </td>
                                            <td>Speakers</td>
                                            <td>#0004</td>
                                            <td>16 Jan</td>
                                            <td class="align-center">$100</td>
                                            <td  class="text-center">
                                                <span class="badge badge-pills outline-badge-secondary">In Progress</span>
                                            </td>
                                            <td>
                                                <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="form-check-column text-center">
                                                <label class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" class="new-control-input invoicechk">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                </label>
                                            </td>
                                            <td>Watch</td>
                                            <td>#0005</td>
                                            <td>16 Jan</td>
                                            <td class="align-center">$85</td>
                                            <td  class="text-center">
                                                <span class="badge badge-pills outline-badge-success">Approved</span>
                                            </td>
                                            <td>
                                                <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="form-check-column text-center">
                                                <label class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" class="new-control-input invoicechk">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                </label>
                                            </td>
                                            <td>Sunglasses</td>
                                            <td>#0006</td>
                                            <td>16 Jan</td>
                                            <td class="align-center">$19</td>
                                            <td  class="text-center">
                                                <span class="badge badge-pills outline-badge-danger">Cancelled</span>
                                            </td>
                                            <td>
                                                <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-12 layout-spacing">
                    <div class="widget-content-area p-0 card-widget-content ">
                        <div id="user-profile-card-1" class="card br-4" style="">
                            <div class="card-body p-0">
                                <div class="usr-img-meta mx-auto">
                                    <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-card-1.jpg') }}" class="rounded-circle">
                                </div>
                                <div class="usr-info-meta text-center">
                                    <p class="usr-name mb-0">Sean Freeman</p>
                                    <p class="usr-occupation">Designer</p>
                                    <button class="btn btn-secondary btn-rounded">View Profile</button>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-12 text-center mt-4">
                                        <button class="btn btn-light-info rounded-circle mb-2 mr-2"><i class="flaticon-twitter-logo flaticon-circle-p"></i>
                                        </button>
                                        <button class="btn btn-light-success rounded-circle mb-2 mr-2"><i class="flaticon-behance-logo flaticon-circle-p"></i>
                                        </button>
                                        <button class="btn btn-light-primary rounded-circle mb-2 mr-2"><i class="flaticon-facebook-logo flaticon-circle-p"></i>
                                        </button>
                                        <button class="btn btn-light-warning rounded-circle mb-2 mr-2"><i class="flaticon-dribbble-bold flaticon-circle-p"></i>
                                        </button>
                                        <button class="btn btn-light-danger rounded-circle mb-2 mr-2"><i class="flaticon-youtube-logo flaticon-circle-p"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="row">
            <div class="col-xl-5 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="widget-content-area page-views p-0  br-4">
                    <ul class="nav nav-pills py-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Daily</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Weekly</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Monthly</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="daily">
                                        <p class="d-count mb-0">5,067</p>
                                        <p>Total Page Views</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div id="daily"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="weekly">
                                        <p class="w-count mb-0">25,067</p>
                                        <p>Total Page Views</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div id="weekly"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="month">
                                        <p class="m-count mb-0">276,097</p>
                                        <p>Total Page Views</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div id="month"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="row">

                    <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                        <div class="widget-content-area social-likes text-center p-0  br-4">
                            <div class="card facebook">
                                <div class="icon mb-4">
                                    <i class="flaticon-facebook-logo"></i>
                                </div>
                                <div class="card-content">
                                    <h5>Facebook</h5>
                                    <p>13K Followers</p>
                                </div>
                                <div class="card-btn-section">
                                    <p>View Profile</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                        <div class="widget-content-area social-likes text-center p-0  br-4">
                            <div class="card dribbble">
                                <div class="icon mb-4">
                                    <i class="flaticon-dribbble-bold"></i>
                                </div>
                                <div class="card-content">
                                    <h5>Dribbble</h5>
                                    <p>4K Followers</p>
                                </div>
                                <div class="card-btn-section">
                                    <p>Check Work</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                        <div class="widget-content-area social-likes text-center p-0  br-4">
                            <div class="card twitter">
                                <div class="icon mb-4">
                                    <i class="flaticon-twitter-logo"></i>
                                </div>
                                <div class="card-content">
                                    <h5>Twitter</h5>
                                    <p>7.2K Followers</p>
                                </div>
                                <div class="card-btn-section">
                                    <p>Read Tweets</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
            </div> --}}


        </div>
        @include('layout.script')
        {{--  @include('sweetalert::alert')  --}}
        <script>
            @if (Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif
        </script>

        <script src="https://code.highcharts.com/highcharts.js"></script>

        <script>
            Highcharts.chart('grafik', {
                title: {
                    text: 'Grafik bulanan'
                },
                xAxis: {
                    categories: {!! $bulan !!}
                },
                yAxis: {
                    titlw: {
                        text: 'Total pendaftar'
                    }
                },
                plotOptions: {
                    series: {
                        allowPoinSelect: true
                    }
                },
                series: [{
                    name: 'Jumlah Pendaftar',
                    data: {!! $status !!}
                }]


            });
        </script>

        <script>
            AmCharts.makeChart("chartsPpdb", {
                "type": "serial",
                "theme": "light",
                "dataProvider": [{

                    "year": {!! $bulan !!},
                    "visits": {!! $status !!},
                }],
                "valueAxes": [{
                    "gridColor": "#FFFFFF",
                    "gridAlpha": 0.2,
                    "dashLength": 0
                }],
                "gridAboveGraphs": true,
                "startDuration": 1,
                "graphs": [{
                    "balloonText": "[[category]]: <b>[[value]]</b>",
                    "fillAlphas": 0.7,
                    "lineAlpha": 0.2,
                    "type": "column",
                    "valueField": "visits",
                    "fillColors": "#5247bd",
                    "lineColor": "#5247bd"
                }],
                "chartCursor": {
                    "categoryBalloonEnabled": false,
                    "cursorAlpha": 0,
                    "zoomable": false
                },
                "categoryField": "year",
                "categoryAxis": {
                    "gridPosition": "start",
                    "gridAlpha": 0,
                    "tickPosition": "start",
                    "tickLength": 20
                },
                "export": {
                    "enabled": true
                }
            });
        </script>




        {{-- <script>
            var chartBasic = echarts.init(document.getElementById('basic_chart'));

            option = {
                tooltip: {
                    trigger: 'axis'
                },
                color: ["#6156ce", "#ee3d50"],
                legend: {
                    data: ['Evaporation', 'Precipitation']
                },
                calculable: true,
                xAxis: [{
                    type: 'category',
                    data: ['Jan']
                }],
                yAxis: [{
                    type: 'value'
                }],
                series: [{
                        name: 'Evaporation',
                        type: 'bar',
                        data: [2.0],
                        markPoint: {
                            data: [{
                                    type: 'max',
                                    name: 'The maximum value'
                                },
                                {
                                    type: 'min',
                                    name: 'Minimum value'
                                }
                            ]
                        },
                        markLine: {
                            data: [{
                                type: 'average',
                                name: 'average value'
                            }]
                        }
                    },
                    {
                        name: 'Precipitation',
                        type: 'bar',
                        data: [2.6],
                        markPoint: {
                            data: [{
                                    name: 'The highest year',
                                    value: 0,
                                    xAxis: 7,
                                    yAxis: 183,
                                    symbolSize: 18
                                },
                                {
                                    name: 'Year minimum',
                                    value: 2.3,
                                    xAxis: 11,
                                    yAxis: 3
                                }
                            ]
                        },
                        markLine: {
                            data: [{
                                type: 'average',
                                name: 'average value'
                            }]
                        }
                    }
                ]
            };

            // Load data into the ECharts instance 
            chartBasic.setOption(option);

            $(window).on('resize', function() {
                if (chartBasic != null && chartBasic != undefined) {
                    chartBasic.resize();
                }
            });
        </script> --}}



    </body>
@endsection
