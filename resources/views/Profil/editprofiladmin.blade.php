@extends('layout.main')

@section('content')
    @include('layout.css')

    <body>

        <head>

            <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
            <!-- BEGIN GLOBAL MANDATORY STYLES -->
            <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/loader.css') }}" rel="stylesheet"
                type="text/css" />
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/plugins.css') }}" rel="stylesheet"
                type="text/css" />
            <!-- END GLOBAL MANDATORY STYLES -->

            <!--  BEGIN CUSTOM STYLE FILE  -->
            <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/users/user-profile.css') }}" rel="stylesheet"
                type="text/css" />
                <link rel="stylesheet" href="{{ asset('landing/html/bidzend/assets/crop/ijaboCropTool.min.css') }}">

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
                            <div id="profile-header" class=""
                                style="background: #fff url({{ asset('fotoprofil/' . Auth::user()->foto_bg) }}) no-repeat center center;background-size: cover;">
                                <div class="row">
                                    <div class=" profile-section col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media ml-sm-5 ml-1">
                                                    <img class="mr-sm-3 mr-2 usr-img"
                                                        src="{{ asset('fotoprofil/' . Auth::user()->foto) }}" alt="usr-img">
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
                                        <h4>{{ Auth::user()->alamat }}</h4>
                                    </div>
                                <div class="col-xl-7 col-lg-6 col-md-7 col-sm-8 col-12">
                                    <ul class="nav nav-pills justify-content-xl-end justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center mt-2" id="pills-tab1" role="tablist">
                                        {{--  <li class="nav-item">
                                            <a class="nav-link active" href="/editprofiladmin">Edit Profile</a>
                                        </li>  --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Nav Tabs -->

                        <!-- Content -->
                        <div class="col-sm-12 mt-5">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <div class="tab-content post-section" id="pills-tabContent1">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card post-editor mb-4" style=>
                                                        <div class="card-body p-0">
                                                            <div class="widget-content widget-content-area">
                                                                <form action="/updateprofiladmin" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <h4 style="color: black">Informasi Pribadi</h4>

                                                                    <div class="form-group mb-4">
                                                                        <label for="name">Nama </label>
                                                                        <input type="text" class="form-control"
                                                                            id="name" name="name"
                                                                            value="{{ Auth::user()->name }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="alamat">Alamat</label>
                                                                        <input type="text" class="form-control"
                                                                            id="alamat" name="alamat"
                                                                            value="{{ Auth::user()->alamat }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="notelpon">No Telpon</label>
                                                                        <input type="text" class="form-control"
                                                                            id="notelpon" name="notelpon"
                                                                            value="{{ Auth::user()->notelpon }}">
                                                                    </div>
                                                                    {{--  <div class="form-group form-check pl-0 mt-5">
                                                                        <div class="custom-control custom-checkbox checkbox-info">
                                                                            <input type="checkbox" class="custom-control-input" id="rChkbox">
                                                                            <label class="custom-control-label" for="rChkbox">Subscribe to weekly newsletter</label>
                                                                        </div>
                                                                    </div>  --}}
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1"
                                                                            class="form-label">Edit Foto Profil :</label>
                                                                        <input type="file" name="foto"
                                                                            class="form-control" id="exampleInputEmail1"
                                                                            aria-describedby="emailHelp">
                                                                        @error('foto')
                                                                            <div class="alert alert-danger">{{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1"
                                                                            class="form-label">Foto Bckground :</label>
                                                                        <input type="file" name="foto_bg"
                                                                            class="form-control" id="exampleInputEmail1"
                                                                            aria-describedby="emailHelp">
                                                                        @error('foto_bg')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="btn btn-button-7 mt-3 mb-4">Submit</button>
                                                                        <a href="/profiladmin" class="btn btn-danger mt-3 mb-4">Kembali</a>

                                                                </form>
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
                    <div class="col-sm-12 mt-5">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <div class="tab-content post-section" id="pills-tabContent1">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card post-editor mb-4" style=>
                                                    <div class="card-body p-0">
                                                        <div class="widget-content widget-content-area">
                                                            <form action="/updatepassword" method="POST"
                                                            id="gantipassword" class="form-horizontal">
                                                            @csrf
                                                            <h4 style="color: black">Ganti Password</h4>
                                                                <div class="form-group">
                                                                    <label for="password_lama">Password Lama</label>
                                                                    <input type="password" class="form-control"
                                                                        name="password_lama" id="password_lama">
                                                                </div>
                                                                @if ($errors->any('password_lama'))
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('password_lama') }}</span>
                                                                @endif

                                                                <div class="form-group">
                                                                    <label for="password">Password Baru</label>
                                                                    <input type="password" class="form-control"
                                                                        name="password" id="password">
                                                                    @if ($errors->any('password'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('password') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="password_confirmation"> Confirm Password
                                                                    </label>
                                                                    <input type="password" class="form-control"
                                                                        name="password_confirmation"
                                                                        id="password_confirmation">
                                                                    @if ($errors->any('password_confirmation'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                                                    @endif
                                                                </div>

                                                                <button type="submit"
                                                                class="btn btn-button-7 mt-3 mb-4">Submit</button>
                                                                <a href="/profiladmin" class="btn btn-danger mt-3 mb-4">Kembali</a>
                                                            </form>
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
                        <script src="{{ asset('landing/html/bidzend/assets/crop/ijaboCropTool.min.js') }}"></script>

                        <script>
                            $('#_userAvatarFile').ijaboCropTool({
                                processUrl:'{{ route("user.crop")}}',
                                withCSRF:['_token','{{ csrf_token() }}'],
                                onSuccess:function(message, element, status){
                                    alert(message);
                                }
[]                            });
                        </script>

                        <!--  END CUSTOM SCRIPTS FILE  -->
    </body>
    @include('layout.script')
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
@endsection
