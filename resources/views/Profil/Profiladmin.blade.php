@extends('layout.main')

@section('content')

@include('layout.css')
<body>

<head>

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
</head>

<div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Profile</h3>
                    </div>
                </div>

                <div class="container">
                    <div class="row layout-spacing">

                        <!-- Profile Header -->
                        <div class="col-sm-12">
                            <div id="profile-header" class="" style="background: #fff url({{ asset('admintemp/adminnew/riski/nopan/assets/img/header.jpg') }}) no-repeat center center;background-size: cover;">
                                <div class="row">
                                    <div class=" profile-section col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media ml-sm-5 ml-1">
                                                    <img class="mr-sm-3 mr-2 usr-img" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/user-profile.jpg') }}" alt="usr-img">
                                                    <div class="media-body">
                                                        <h5 class="usr-name">Shaun Park</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="social-contacts">
                                                    <ul class="list-inline justify-content-around d-flex">
                                                        <li class="list-inline-item">
                                                            <span class="s-m-name">Tweets</span>
                                                            <span class="s-m-count">15.1K</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="s-m-name">Following</span>
                                                            <span class="s-m-count">902</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="s-m-name">Followers</span>
                                                            <span class="s-m-count">787</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Profile Header -->

                        <!-- Nav Tabs -->
                        <div class="col-sm-12">
                            <div class="nav-tab-section">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-2 col-sm-4 col-12 ml-auto usr-loc-join text-sm-left text-center">
                                        <h4>Los Angeles, CA</h4>
                                    </div>
                                    <div class="col-xl-7 col-lg-6 col-md-7 col-sm-8 col-12">
                                        <ul class="nav nav-pills justify-content-xl-end justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center mt-2" id="pills-tab1" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-selected="true">Timeline</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-selected="false">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-picture-tab" data-toggle="pill" href="#pills-picture" role="tab" aria-selected="false">Pictures</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-friend-tab" data-toggle="pill" href="#pills-friend" role="tab" aria-selected="false">Friends</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <div class="dropdown custom-dropdown-icon mt-2">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="flaticon-dot-three"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="flaticon-menu-dot-fill"></i> Profile</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="flaticon-bell-14"></i> Notification</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="flaticon-settings-7"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Nav Tabs -->

                        <!-- Content -->
                        <div class="col-sm-12 mt-5">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <div class="search-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0">
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <h4 class="mb-4"><i class="flaticon-user-plus"></i> Profile info</h4>
                                                <p class="mb-3"><span class="usr-work-position">Project Manager </span> at <a href="#">DesignReset</a></p>
                                                <p class="mb-4"><span class="usr-work-position">3D Artist and Animator</span> at <a href="#">Concept Agency</a></p>
                                                <p>Lives in Los Angeles, CA</p>
                                                <p>Joined March 2014</p>
                                                <p>Followed by 256 people</p>
                                                <p>Joined 17 Groups</p>
                                                <div class="social-networks-section mt-5">
                                                    <h4 class="mb-4">Other Networks</h4>
                                                    <div class="row">
                                                        <div class="col-sm-12 text-center">
                                                            <div class="btn btn-outline-primary btn-rounded mb-4 mr-2">Facebook</div>
                                                            <div class="btn btn-outline-success btn-rounded mb-4 mr-2">Line</div>
                                                            <div class="btn btn-outline-warning btn-rounded mb-4 mr-2">Behance</div>
                                                            <div class="btn btn-outline-info btn-rounded mb-4 mr-2">Twitter</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="friends-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class=""><i class="flaticon-user-7"></i> Friends</h4>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-1.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-2.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-13.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-6.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-7.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-16.jpg') }}"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="group-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class=""><i class="flaticon-user-6"></i>Groups</h4>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <span class="badge badge-danger counter"> 12 </span>
                                                                <img alt="image-icon" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/g-1.png') }}">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/g-2.png') }}">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/g-3.png') }}">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/g-4.png') }}">
                                                                <span class="badge badge-secondary counter">8</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/g-5.png') }}">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/g-6.png') }}">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/g-7.png') }}">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/g-8.png') }}">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/g-9.png') }}">
                                                                <span class="badge badge-success counter">6</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/g-10.png') }}">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="weather-section mb-4 br-6">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-between w-real-data">
                                                    <div class="w-real-time">
                                                        <div class="time d-flex">
                                                            <p id="hour" class="mb-0"></p>
                                                            <p id="minut" class="mb-0"></p>
                                                            <p id="date" class="mb-0"></p>
                                                        </div>
                                                    </div>
                                                    <div class="w-real-day">
                                                        <div class="date d-flex">
                                                            <div id="day"></div>
                                                            <div id="month"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 text-center">
                                                <div class="w-stats mb-4">
                                                    <i class="flaticon-weather mb-4"></i>
                                                    <p class="w-temp"><span>13</span></p>
                                                    <p class="w-txt">Showers</p>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-between w-location">
                                                    <div class="w-location-city">Los Angeles</div>
                                                    <div class="w-location-country">CA</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="photo-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class=""><i class="flaticon-photo-camera"></i> Photos</h4>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/p1.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/p10.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/p3.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/p4.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/p5.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/p6.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/p7.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/p8.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/p9.jpg') }}"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 order-xl-0 col-lg-12 order-1 col-md-12 col-sm-12">
                                    <div class="tab-content post-section" id="pills-tabContent1">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                            <div class="row">

                                                <div class="col-sm-12">
                                                    <div class="card post-editor mb-4" style="">
                                                        <div class="card-body p-0">
                                                            <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                                                                <li class="nav-item text-sm-left text-center">
                                                                    <a class="nav-link active" id="pills-status-tab" data-toggle="pill" href="#pills-status" role="tab" aria-selected="true"><i class="flaticon-copy-line"></i> Status</a>
                                                                </li>
                                                                <li class="nav-item text-sm-left text-center">
                                                                    <a class="nav-link" id="pills-multimedia-tab" data-toggle="pill" href="#pills-multimedia" role="tab" aria-selected="false"><i class="flaticon-display"></i> Media</a>
                                                                </li>
                                                                <li class="nav-item text-sm-left text-center">
                                                                    <a class="nav-link" id="pills-blog-post-tab" data-toggle="pill" href="#pills-blog-post" role="tab" aria-selected="false"><i class="flaticon-edit-6"></i> Post</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content" id="pills-tabContent2">

                                                                <div class="tab-pane fade show active" id="pills-status" role="tabpanel" aria-labelledby="pills-status-tab">
                                                                    <form>
                                                                        <div class="media">
                                                                            <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/user-profile.jpg') }}" alt="admin-profile">
                                                                            <div class="media-body">
                                                                                <div class="form-group">
                                                                                    <textarea placeholder="What's on your mind" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <div class="tab-pane fade" id="pills-multimedia" role="tabpanel" aria-labelledby="pills-multimedia-tab">
                                                                    <form>
                                                                        <div class="media">
                                                                            <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/user-profile.jpg') }}" alt="admin-profile">
                                                                            <div class="media-body">
                                                                                <div class="form-group">
                                                                                    <textarea placeholder="Upload Media Here" class="form-control" id="exampleFormControlTextarea2" rows="4"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <div class="tab-pane fade" id="pills-blog-post" role="tabpanel" aria-labelledby="pills-blog-post-tab">
                                                                    <form>
                                                                        <div class="media">
                                                                            <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/user-profile.jpg') }}" alt="admin-profile">
                                                                            <div class="media-body">
                                                                                <div class="form-group">
                                                                                    <textarea placeholder="Write a Post" class="form-control" id="exampleFormControlTextarea3" rows="4"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                            <div class="editor-bottom-section">
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-12">
                                                                        <ul class="list-inline editor-options">
                                                                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Add a Picture">
                                                                                <a href="javascript:void(0);">
                                                                                    <i class="flaticon-display-1"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Add a Location">
                                                                                <a href="javascript:void(0);">
                                                                                    <i class="flaticon-location-line"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Record Voice">
                                                                                <a href="javascript:void(0);">
                                                                                    <i class="flaticon-disk"></i>
                                                                                </a>
                                                                            </li>

                                                                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Emoji">
                                                                                <a href="javascript:void(0);">
                                                                                    <i class="flaticon-happy-smiling"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-6 col-12 text-sm-right">
                                                                        <div class="btn-editor-actions">
                                                                            <button class="btn btn-outline-default mb-3 ml-2">Preview</button>
                                                                            <button class="btn btn-gradient-info mb-3 ml-2">Post Status</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-sm-12">

                                                    <div class="card post text-post mb-4" style="">
                                                        <div class="card-body">
                                                            <div class="media user-meta">
                                                                <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/user-profile.jpg') }}" alt="admin-profile">
                                                                <div class="media-body">
                                                                    <h4 class="mt-0">Shaun Park</h4>
                                                                    <p class="meta-time">11 hours ago</p>
                                                                </div>
                                                            </div>

                                                            <div class="post-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation.</p>
                                                            </div>

                                                            <ul class="list-inline action-options">
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-like-1"></i> Like</a></li>
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-chat-bubble-line"></i> Comment</a></li>
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-share-2"></i> Share</a></li>
                                                            </ul>

                                                            <div class="row people-liked-post">
                                                                <div class="col-sm-5 text-center">
                                                                    <ul class="list-inline people-liked-img">
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-6.jpg') }}" class="ml-0">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-7.jpg') }}">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-8.jpg') }}">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-10.jpg') }}">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-7 text-sm-left text-center pb-sm-0 pb-4">
                                                                    <div class="people-liked-post-name">
                                                                        <span><a href="#">Vincent, Mary</a> and 19 other like this</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="media usr-comments">
                                                                <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/user-profile.jpg') }}" alt="admin-profile">
                                                                <div class="media-body">
                                                                    <input type="text" class="form-control" placeholder="Write a comment...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card post image-post mb-4" style="">
                                                        <div class="card-body">
                                                            <div class="media user-meta">
                                                                <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/user-profile.jpg') }}" alt="admin-profile">
                                                                <div class="media-body">
                                                                    <h4 class="mt-0">Shaun Park</h4>
                                                                    <p class="meta-time">18 hours ago</p>
                                                                </div>
                                                            </div>

                                                            <div class="post-content">
                                                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                <div class="photo mx-auto text-center">
                                                                    <img alt="image-sample" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/center-img.jpg') }}" class="img-fluid">
                                                                </div>
                                                            </div>

                                                            <ul class="list-inline action-options">
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-like-1"></i> Like</a></li>
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-chat-bubble-line"></i> Comment</a></li>
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-share-2"></i> Share</a></li>
                                                            </ul>

                                                            <div class="row people-liked-post">
                                                                <div class="col-sm-5 text-center">
                                                                    <ul class="list-inline people-liked-img">
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-6.jpg') }}" class="ml-0">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-7.jpg') }}">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-8.jpg') }}">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-10.jpg') }}">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-7 text-sm-left text-center pb-sm-0 pb-4">
                                                                    <div class="people-liked-post-name">
                                                                        <span><a href="#">Amy, Dale</a> and 22 other like this</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="media usr-comments">
                                                                <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/user-profile.jpg') }}" alt="admin-profile">
                                                                <div class="media-body">
                                                                    <input type="text" class="form-control" placeholder="Write a comment...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card post gallery-post mb-4" style="">
                                                        <div class="card-body">
                                                            <div class="media user-meta">
                                                                <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/user-profile.jpg') }}" alt="admin-profile">
                                                                <div class="media-body">
                                                                    <h4 class="mt-0">Shaun Park</h4>
                                                                    <p class="meta-time">21 hours ago</p>
                                                                </div>
                                                            </div>

                                                            <div class="post-content">
                                                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua.</p>

                                                                <div class="gallery text-center mx-auto">
                                                                    <img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/center-img-2.jpg') }}" class="img-fluid mb-3 mt-3 mr-1" style="width: 209px; height: 180px;">
                                                                    <img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/center-img-1.jpg') }}" class="img-fluid mb-3 mt-3 mr-1" style="width: 209px; height: 180px;">
                                                                    <img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/center-img-3.jpg') }}" class="img-fluid mb-3 mr-1" style="width: 138px; height: 120px;">
                                                                    <img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/center-img-4.jpg') }}" class="img-fluid mb-3 mr-1" style="width: 138px; height: 120px;">
                                                                    <img alt="image-gallery" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/center-img-5.jpg') }}" class="img-fluid mb-3 mr-1" style="width: 138px; height: 120px;">
                                                                </div>
                                                            </div>

                                                            <ul class="list-inline action-options">
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-like-1"></i> Like</a></li>
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-chat-bubble-line"></i> Comment</a></li>
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-share-2"></i> Share</a></li>
                                                            </ul>

                                                            <div class="row people-liked-post">
                                                                <div class="col-sm-5 text-center">
                                                                    <ul class="list-inline people-liked-img">
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-6.jpg') }}" class="ml-0">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-7.jpg') }}">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-8.jpg') }}">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-10.jpg') }}">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-7 text-sm-left text-center pb-sm-0 pb-4">
                                                                    <div class="people-liked-post-name">
                                                                        <span><a href="#">Luke, Daisy</a> and 32 other like this</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="media usr-comments">
                                                                <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/user-profile.jpg') }}" alt="admin-profile">
                                                                <div class="media-body">
                                                                    <input type="text" class="form-control" placeholder="Write a comment...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">

                                    <div class="banner-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <h4 class="">Music Concert</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="instagram-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class=""><i class=""></i> Instagram</h4>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/7.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/8.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/9.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/10.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/11.jpg') }}"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/12.jpg') }}"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="calendar-section mb-4">
                                        <div class="card pb-3" style="">
                                            <div class="card-body">
                                                <div id="calendar" class="bx-top-6">
                                                    <div class="pb-5 mb-2 bx-top-6">
                                                        <div id="monthrow" class="bx-top-6">
                                                            <button id="prev" onclick="prevMonth()">&#10094;</button>
                                                            <span id="monthc"></span>
                                                            <button id="next" onclick="nextMonth()">&#10095;</button>
                                                        </div>
                                                        <div class="daysoftheweek">
                                                            <div>Su</div>
                                                            <div>Mo</div>
                                                            <div>Tu</div>
                                                            <div>We</div>
                                                            <div>Th</div>
                                                            <div>Fr</div>
                                                            <div>Sa</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slideshow-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/1.jpg') }}" alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/2.jpg') }}" alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/3.jpg') }}" alt="Third slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                        <span class="icon flaticon-left-arrow" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="icon flaticon-right-arrow" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="active-feeds-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <h4 class="">Activity Feed</h4>

                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-2.jpg') }}" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented">Angie Lamb</span> Commented on Shaun Park's <span class="comment-topic">photo</span></h5>
                                                        <p class="meta-time">8 min ago</p>
                                                    </div>
                                                </div>
                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-6.jpg') }}" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented">Linda Nelson</span> Commented on Shaun Park's <span class="comment-topic">photo</span></h5>
                                                        <p class="meta-time">15 min ago</p>
                                                    </div>
                                                </div>
                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-4.jpg') }}" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented">Alma Clarke</span> Commented on Shaun Park's <span class="comment-topic">photo</span></h5>
                                                        <p class="meta-time">18 min ago</p>
                                                    </div>
                                                </div>
                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-5.jpg') }}" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented">John Doe</span> Commented on Shaun Park's <span class="comment-topic">photo</span></h5>
                                                        <p class="meta-time">20 min ago</p>
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
            </div>

    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/loader.js') }}"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/users/calendar.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/users/custom-profile.js') }}"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
</body>
@include('layout.script')

@endsection
