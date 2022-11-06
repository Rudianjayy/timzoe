
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/preview-equation/default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Oct 2022 08:22:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Default | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('admintemp/adminnew/riski/nopan/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/support-chat.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/adminnew/riski/nopan/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/adminnew/riski/nopan/plugins/charts/chartist/chartist.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/default-dashboard/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="default-sidebar">
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>

    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="index.html" class=""> <img src="assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none">
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    @include('layout.header')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

       @include('layout.sidebar')

        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Dashboard</h3>
                    </div>
                </div>

                <div class="row layout-spacing ">

                    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-sales-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-line-chart"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Sales</p>
                                        <p class="widget-numeric-value">98,225</p>
                                    </div>
                                </div>
                                <p class="widget-total-stats mt-2">94% New Sales</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-order-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-cart-bag"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Orders</p>
                                        <p class="widget-numeric-value">24,017</p>
                                    </div>
                                </div>
                                <p class="widget-total-stats mt-2">552 New Orders</p>
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
                                        <p class="widget-text mb-0">Customers</p>
                                        <p class="widget-numeric-value">92,251</p>
                                    </div>
                                </div>
                                <p class="widget-total-stats mt-2">390 New Customers</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">

                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-income-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Income</p>
                                        <p class="widget-numeric-value">9.5 M</p>
                                    </div>
                                </div>
                                <p class="widget-total-stats mt-2">$2.1 M This Week</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
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
                                                                <img src="assets/img/profile-2.jpg" class="rounded-circle mr-4" alt="user">
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
                                                                <img src="assets/img/profile-3.jpg" class="rounded-circle mr-4" alt="user">
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
                                                                <img src="assets/img/profile-4.jpg" class="rounded-circle mr-4" alt="user">
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
                                                                <img src="assets/img/profile-6.jpg" class="rounded-circle mr-4" alt="user">
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
                                                                <img src="assets/img/profile-8.jpg" class="rounded-circle mr-4" alt="user">
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
                                                                <img src="assets/img/profile-9.jpg" class="rounded-circle mr-4" alt="user">
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
                                        <img data-original-title="Alma Clarke" alt="admin-profile" src="assets/img/profile-7.jpg" class="ml-0 bs-tooltip">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img data-original-title="Alan Green" alt="admin-profile" src="assets/img/profile-8.jpg" class="bs-tooltip">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img data-original-title="Daisy Anderson" alt="admin-profile" src="assets/img/profile-9.jpg" class="bs-tooltip">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img data-original-title="Judy Holmes" alt="admin-profile" src="assets/img/profile-5.jpg" class="bs-tooltip">
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
                                                    <img src="assets/img/large-img-7.jpg" class="img-fluid" alt="img-1" style="border-color: #3862f5;">
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
                                                    <img src="assets/img/large-img-4.jpg" class="img-fluid" alt="img-1" style="border-color: #07e0c4;">
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
                                                    <img src="assets/img/large-img-1.png" class="img-fluid" alt="img-1" style="border-color: #00b1f4;">
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
                                                    <img src="assets/img/large-img-3.jpg" class="img-fluid" alt="img-1" style="border-color: #f8538d;">
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
                                                    <img src="assets/img/large-img-5.jpg" class="img-fluid" alt="img-1" style="border-color: #ffbb44;">
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
                                                    <img src="assets/img/large-img-2.jpg" class="img-fluid" alt="img-1" style="border-color: #25d5e4;">
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
                                                    <img src="assets/img/profile-1.jpg" class="rounded-circle mr-4" alt="user">
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
                                                    <img src="assets/img/profile-2.jpg" class="rounded-circle mr-4" alt="user">
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
                                                    <img src="assets/img/profile-4.jpg" class="rounded-circle mr-4" alt="user">
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
                                                    <img src="assets/img/profile-3.jpg" class="rounded-circle mr-4" alt="user">
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
                                                                    <img src="assets/img/profile-5.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <img src="assets/img/profile-6.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <img src="assets/img/profile-7.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <img src="assets/img/profile-8.jpg" class="rounded-circle mb-2" alt="user">
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
                                                                    <img src="assets/img/profile-9.jpg" class="rounded-circle mb-1" alt="user">
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
                                                                    <img src="assets/img/profile-10.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <img src="assets/img/profile-3.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <img src="assets/img/profile-11.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <img src="assets/img/profile-12.jpg" class="rounded-circle mb-2" alt="user">
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
                                        <img alt="admin-profile" src="assets/img/profile-card-1.jpg" class="rounded-circle">
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
                </div>

                <div class="row">
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
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN CHAT  -->
    <div id="chat">
        <div id="chat-circle" class="btn btn-raised  d-lg-block d-none">
            <i class="flaticon-comment"></i>
        </div>
        <div class="chat-box">
            <div class="chat-box-header">
                <div class="media">
                    <i class="flaticon-chat-fill-1 chat align-self-center mr-3"></i>
                    <img src="assets/img/profile-3.jpg" class="rounded-circle mr-2 mt-2" alt="user">
                    <div class="media-body">
                        <h6 class="mt-2 mb-1">Equation Admin</h6>
                        <p>How May I help you ?</p>
                    </div>
                    <span class="chat-box-toggle mt-1"><i class="flaticon-close-fill"></i></span>
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">
                </div>
                <div class="chat-logs">
                </div>
            </div>
            <div class="chat-input">
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message...">
                    <button type="submit" class="chat-submit" id="chat-submit"><i class="flaticon-send-fill-1 chat"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!--  END CHAT  -->

    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">

        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    <ul class="list-inline links ml-sm-5">
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Home</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Blog</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">Buy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; 2019 <a target="_blank" href="https://designreset.com/equation">Equation Admin Theme</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->

    <!--  BEGIN CONTROL SIDEBAR  -->
    <aside class="control-sidebar control-sidebar-light-color cs-content">
        <div class="">

            <div class="row">
                <div class="col-md-12 text-right">
                    <div class="close-sidebar">
                        <i class="flaticon-close-fill p-3 toggle-control-sidebar"></i>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="usr-info text-center mb-5">
                        <img alt="admin-profile" src="assets/img/c-14.jpg" class="img-fluid rounded-circle mb-3">
                        <div class=" mt-2">
                            <h5 class="usr-name mb-0">Linda Nelson</h5>
                            <p class="usr-occupation mb-0 mt-1">Developer</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-navigation-section text-center mb-5 mt-3">
                <ul class="nav nav-tabs nav-justified mx-2">
                    <li class="nav-item">
                        <a data-toggle="tab" href="#feeds-tab" class="nav-link rounded-circle active show">
                            <p class="mb-0">Task</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#friends-tab" class="nav-link rounded-circle">
                            <p class="mb-0">Friends</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#alerts-tab" class="nav-link rounded-circle">
                            <p class="mb-0">Settings</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">

                <div id="feeds-tab" class="tab-pane tab-1 fade show active">

                    <div class="tasks">

                        <div class="recent">

                            <div class="d-flex justify-content-between mb-5">

                                <div class="icon">
                                    <i class="flaticon-clock-1"></i>
                                </div>


                                <div>
                                    <span class="">Today</span> <span class="notification-count ml-2">12</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>

                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-13.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Sean Freeman</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-15.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Laurie Fox</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                            <div class="media system-notify">
                                <i class="flaticon-settings-7  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">System Notifications</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>


                            <div class="media mail-notify">
                                <i class="flaticon-folder-fill-1  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">Ricky Turner</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                        </div>



                        <div class="today mt-5">

                            <div class="d-flex justify-content-between mb-5">

                                <div class="icon">
                                    <i class="flaticon-bell-fill-1"></i>
                                </div>
                                <div>
                                    <span>Yesterday</span> <span class="notification-count ml-2">8</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>

                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-7.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Angie Lamb</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-5.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Amy Diaz</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-7.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Irene Collins</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-9.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Lila Perry</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>


                        </div>


                        <div class="task-stats mt-5">

                            <div class="t-s-header mb-5">
                                <div class="row">
                                    <div class="col-md-10 text-center">
                                        <h6><span>Task Statistics</span></h6>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <i class="flaticon-close-fill"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="t-s-body">

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between">
                                            <p>Feature Development</p>
                                            <p>70%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Uploading files</p>
                                            <p>30%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-danger" role="progressbar" style="width: 30%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Total Progress</p>
                                            <p>86%</p>
                                        </div>

                                        <div class="progress  br-30">
                                            <div class="progress-bar  br-30 bg-info" role="progressbar" style="width: 86%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                </div>

                                <div class="text-center mt-5 mb-5">
                                    <button class="btn btn-primary btn-rounded mb-5">See all</button>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div id="friends-tab" class="tab-pane tab-2 fade">

                    <div class="friends">

                        <div class="recent">

                            <div class="t-s-header mb-5">

                                <div class="row">

                                    <div class="col-md-8 text-center">
                                        <h6>
                                            <span>New Activity</span>
                                        </h6>
                                    </div>

                                    <div class="col-md-4">
                                        <div>
                                            <p>See all</p>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <ul class="list-inline text-center mb-5">

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-1.jpg">
                                    <span class="badge badge-pill badge-new">8</span>
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-2.jpg">
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-13.jpg">
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-3.jpg">
                                    <span class="badge badge-pill badge-new">5</span>
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-4.jpg">
                                </li>

                            </ul>


                            <div class="friend-request">

                                <div class="d-flex justify-content-between header mb-5">

                                    <div class="media">
                                        <i class="flaticon-user-plus mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-1">Friend request</h6>
                                        </div>
                                    </div>

                                    <div>
                                        <p class="mb-0 mt-2">See all</p>
                                    </div>

                                </div>

                                <div class="media">
                                    <img alt="admin-profile" src="assets/img/c-15.jpg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Kara Young</h6>
                                        <p>2 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/P-2.jpg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Justin Cross</h6>
                                        <p>5 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/c-5.jpg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Amy Diaz</h6>
                                        <p>7 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>


                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/c-6.jpg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Ernest Reeves</h6>
                                        <p>10 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                            </div>


                        </div>



                        <div class="online mt-5">

                            <div class="t-s-header mb-5">

                                <div class="row">

                                    <div class="col-md-8 text-center">
                                        <h6>
                                            <span>Online</span>
                                        </h6>
                                    </div>

                                    <div class="col-md-4">
                                        <div>
                                            <p class="mb-0 mt-0">See all</p>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3" src="assets/img/c-7.jpg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Irene Collins</span><span class="badge badge-info float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p><p class="meta-time">7 mins ago</p>
                                </div>
                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 rounded" src="assets/img/c-8.jpg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Thomas Granger</span><span class="badge badge-secondary float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p><p class="meta-time">13 mins ago</p>
                                </div>
                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 rounded-circle" src="assets/img/c-9.jpg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Grace Roberts</span><span class="badge badge-warning float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p><p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                        </div>


                        <div class="away-stats">


                            <div class="t-s-header mb-5 mt-5">

                                <div class="row">

                                    <div class="col-md-12">
                                        <h6>
                                            <span>Away</span>
                                        </h6>
                                    </div>

                                </div>

                            </div>

                            <div class="a-s-media mb-5">

                                <div class="media mb-3">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/profile-16.jpg" class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Traci Lopez</h6>
                                    </div>
                                </div>

                                <div class="media mb-3">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/c-11.jpg" class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Kristen Beck</h6>
                                    </div>
                                </div>

                                <div class="media mb-5">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/c-12.jpg" class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Keith Foster</h6>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <div id="alerts-tab" class="tab-pane tab-3 fade">

                    <div class="settings">

                        <div class="admin-setting">


                            <div class="d-flex justify-content-between">

                                <div class="media">
                                    <i class="flaticon-gear-5 mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">Admin settings</h6>
                                    </div>
                                </div>

                                <div>
                                    <p class="mb-0 mt-2">See all</p>
                                </div>

                            </div>


                            <div class="mb-3 mt-5">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show notifications</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Enable auto logout</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show recent activity</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Chat history</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Users activity</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Orders history</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show task statistics</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="general-setting mt-5">


                            <div class="d-flex justify-content-between mb-5">

                                <div class="media">
                                    <i class="flaticon-gear-5 mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">General Settings</h6>
                                    </div>
                                </div>

                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-facebook-logo fb"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-dribbble-bold dribbble"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-linkedin-logo lin"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-twitter-logo tweet"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-behance-logo behance"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>






                            <div class="chk-settings mt-5">

                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title">Report panel usage</span>
                                        </h6>
                                        <p class="media-text">
                                            Show information on any malicious activity
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title">Allow mail redirect</span>
                                        </h6>
                                        <p class="media-text">
                                            Redirect mail through exchange server
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Show author name in posts</span>
                                        </h6>
                                        <p class="media-text">
                                            Allow the user to show his name in blog posts
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Sync phone when connected to the PC</span>
                                        </h6>
                                        <p class="media-text">
                                            Connect smart phone automatically and sync with user profile
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                            </div>


                            <div class="mt-5 delete-chat mb-5">

                                <div class="media mb-4">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Delete chat history</span>
                                        </h6>
                                    </div>
                                    <i class="del-chat-his flaticon-delete-1 mb-4"></i>

                                </div>

                            </div>




                            <div class="mt-5 usr-status mb-5">

                                <div class="d-flex justify-content-between mb-5">

                                    <div class="media">
                                        <i class="flaticon-chat-fill mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-2">Status</h6>
                                        </div>
                                    </div>

                                </div>

                                <div class="media mb-2 stats">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Online</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label class="new-control new-checkbox  mr-1  checkbox-outline-success new-checkbox-rounded">
                                          <input type="checkbox" class="chb new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>

                                </div>


                                <div class="media mb-2 stats">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Offline</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label class="new-control new-checkbox  mr-1  checkbox-outline-default new-checkbox-rounded">
                                          <input type="checkbox" class="chb new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>



                                <div class="media mb-5 stats">
                                    <div class="media-body mb-5">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Away</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label class="new-control new-checkbox  mr-1  checkbox-outline-warning new-checkbox-rounded">
                                          <input type="checkbox" class="chb new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </aside>
    <!--  END CONTROL SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/loader.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/charts/chartist/chartist.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/') }}plugins/calendar/pignose/moment.latest.min.js"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/') }}plugins/calendar/pignose/pignose.calendar.js"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/') }}plugins/progressbar/progressbar.min.js"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/') }}assets/js/default-dashboard/default-custom.js"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/') }}assets/js/support-chat.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/preview-equation/default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Oct 2022 08:30:18 GMT -->
</html>
