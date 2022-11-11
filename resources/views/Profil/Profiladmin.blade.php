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
                            @foreach ($fotoprofil as $fotoprofil )
                            <div id="profile-header" class="" style="background: #fff url({{ asset('fotoprofil/' . $fotoprofil->foto_bg) }}) no-repeat center center;background-size: cover;">
                                <div class="row">
                                    <div class=" profile-section col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media ml-sm-5 ml-1">
                                                    <img class="mr-sm-3 mr-2 usr-img" src="{{ asset('fotoprofil/' . $fotoprofil->foto) }}" alt="usr-img">
                                                    <div class="media-body">
                                                        <h5 class="usr-name">{{ Auth::user()->name }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- /Profile Header -->

                        <!-- Nav Tabs -->
                        <div class="col-sm-12">
                            <div class="nav-tab-section">
                                <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-2 col-sm-4 col-12 ml-auto usr-loc-join text-sm-left text-center">
                                            <h4>{{ Auth::user()->alamat }}</h4>
                                        </div>
                                    <div class="col-xl-7 col-lg-6 col-md-7 col-sm-8 col-12">
                                        <ul class="nav nav-pills justify-content-xl-end justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center mt-2" id="pills-tab1" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="/editprofiladmin">Edit Profile</a>
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
                                                <p class="mb-3">Email :<span class="usr-work-position">{{ Auth::user()->email }}</span></p>
                                                <p class="mb-3">Nama :<span class="usr-work-position">{{ Auth::user()->name }}</span></p>
                                                <p class="mb-3">Alamat :<span class="usr-work-position">{{ Auth::user()->alamat }}</span></p>
                                                <p class="mb-3">No Telpon :<span class="usr-work-position">{{ Auth::user()->notelpon }}</span></p>


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
                                                            {{--  <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                                                                <li class="nav-item text-sm-left text-center">
                                                                    <a class="nav-link active" id="pills-status-tab" data-toggle="pill" href="#pills-status" role="tab" aria-selected="true"><i class="flaticon-copy-line"></i> Status</a>
                                                                </li>
                                                                <li class="nav-item text-sm-left text-center">
                                                                    <a class="nav-link" id="pills-multimedia-tab" data-toggle="pill" href="#pills-multimedia" role="tab" aria-selected="false"><i class="flaticon-display"></i> Media</a>
                                                                </li>
                                                                <li class="nav-item text-sm-left text-center">
                                                                    <a class="nav-link" id="pills-blog-post-tab" data-toggle="pill" href="#pills-blog-post" role="tab" aria-selected="false"><i class="flaticon-edit-6"></i> Post</a>
                                                                </li>
                                                            </ul>  --}}
                                                            {{--  <div class="tab-content" id="pills-tabContent2">

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
                                                            </div>  --}}

                                                            {{--  <div class="editor-bottom-section">
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
                                                            </div>  --}}
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
<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>

@endsection
