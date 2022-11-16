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
                            <div id="profile-header" class="image-previewerr"
                            style="background: #fff url(storage/{{ Auth::user()->foto_bg }}) no-repeat center center;background-size: cover; ">
                                <div class="row">
                                    <div class=" profile-section col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media ml-sm-5 ml-1">
                                                    <img class="mr-sm-3 mr-2 usr-img image-previewer" src="{{ asset('storage/' . Auth::user()->foto) }}" alt="usr-img">
                                                    <div class="media-body">
                                                        <h5 class="usr-name">{{ Auth::user()->name }}</h5>
                                                    </div>
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
                                            {{--  <div class="mb-3">
                                                <input type="file" name="foto_id" id="edit_foto" style="opacity: 0;height: 1px;display:none">
                                                <a href="javascript:void(0)" class="btn button border btn-sm mr-5" id="ganti_foto_btn"><b>Edit
                                                        Foto</b></a>
                                            </div>  --}}
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
                                        <div class="card" style=>
                                            <div class="card-body p-0">
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info-section mb-4">
                                        <div class="card" style=>
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
