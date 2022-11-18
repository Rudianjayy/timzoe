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

            <!--  END CUSTOM STYLE FILE  -->

            <!--  BEGIN CUSTOM STYLE FILE  -->
            <link rel="stylesheet" type="text/css"
                href="{{ asset('admintemp/adminnew/riski/nopan/plugins/dropify/dropify.min.css') }}">
            <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/users/account-setting.css') }}" rel="stylesheet"

                type="text/css" />
                <link rel="stylesheet" href="{{ asset('landing/html/bidzend/assets/crop/ijaboCropTool.min.css') }}">

            <!--  END CUSTOM STYLE FILE  -->


            <!--  END CUSTOM STYLE FILE  -->
            <style>
                .upload{
                    width: 100px;
                    position: relative;
                    margin: auto;
                  }

                  .upload img{
                    border-radius: 50%;
                    border: 6px solid #eaeaea;
                  }

                  .upload .round{
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    left: 2,5;
                    background: #00B4FF;
                    width: 32px;
                    height: 32px;
                    line-height: 33px;
                    text-align: center;
                    border-radius: 50%;
                    overflow: hidden;
                  }

                  .upload .round input[type = "file"]{
                    position: absolute;
                    transform: scale(2);
                    opacity: 0;
                  }

                  input[type=file]::-webkit-file-upload-button{
                      cursor: pointer;
                  }

            </style>
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
                                            @php
                                                $foto = App\Models\User::where('foto')->first();
                                            @endphp
                                            <div class="media ml-sm-5 ml-1">
                                                {{--  @if ($foto != null)  --}}
                                                {{--  <img class="mr-sm-3 mr-2 usr-img image-previewer"
                                                    src="storage/{{ Auth::user()->foto }}" alt="usr-img">  --}}
                                                    <div class="upload">
                                                        <img class="mr-sm-3 mr-2 usr-img image-previewer" src="storage/{{ Auth::user()->foto }}" alt="usr-img" width = 100 height = 100 >
                                                        <div class="round">
                                                          <input type="file" name="foto_id" id="edit_foto">
                                                       <a href="javascript:void(0)" id="ganti_foto_btn"><i class = "flaticon-camera-fill" style = "color: black;"></i></a>
                                                        </div>
                                                      </div>
                                                {{--  @else  --}}
                                                {{--  <img src="{{ asset('user_image/noimg.png') }}"
                                                    class="usr-img" alt="">
                                                @endif  --}}
                                                <div class="media-body">
                                                    <h5 class="usr-name" style="margin-left: 60px;">{{ Auth::user()->name }}</h5>
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
                                <div
                                    class="col-xl-3 col-lg-3 col-md-2 col-sm-4 col-12 ml-auto usr-loc-join text-sm-left text-center">
                                    {{--  <ul class="nav nav-pills mt-2"
                                    id="pills-tab1" role="tablist">
                                    <input type="file" name="foto_id" id="edit_foto"
                                        style="opacity: 0;height: 1px;display:none">
                                    <a href="javascript:void(0)" class="btn button border btn-sm mr-2"
                                        id="ganti_foto_btn"><b
                                            style=" color: white;
                                    text-shadow: 2px 2px 4px #000000;">Edit
                                            Foto Profil</b></a>  --}}

                                    {{--  <input type="file" name="foto_bg_id" id="edit_foto_bg"
                                        style="opacity: 0;height: 1px;display:none">
                                    <a href="javascript:void(0)" class="btn button border btn-sm mr-5"
                                        id="ganti_foto_bg_btn"><b
                                            style=" color: white;
                                        text-shadow: 2px 2px 4px #000000;">Edit
                                            Foto Background</b></a>  --}}

                                </ul>
                                </div>

                                <div class="col-xl-7 col-lg-6 col-md-7 col-sm-8 col-12">
                                    <ul class="nav nav-pills justify-content-xl-end justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center mt-2"
                                        id="pills-tab1" role="tablist">

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

                </div>
                <center><h2 style="color: #1a73e9; font-weight:600;">Profile Info</h2></center>
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <form action="/updateprofiladmin" method="POST" enctype="multipart/form-data" class="contact">
                        @csrf
                        <div class="info">
                            <h5 class="mt-4">Informasi Pribadi</h5>
                            <div class="row">
                                <div class="col-md-11 mx-auto">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nama</label>
                                                <input type="text" class="form-control mb-4" id="name"
                                                    name="name" value="{{ Auth::user()->name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Alamat">Alamat</label>
                                                <input type="text" class="form-control mb-4" id="alamat"
                                                    name="alamat" value="{{ Auth::user()->alamat }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="notelpon">Notelpon</label>
                                                <input type="text" class="form-control mb-4" id="notelpon"
                                                    name="notelpon" value="{{ Auth::user()->notelpon }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control mb-4" id="email"
                                                    name="email" value="{{ Auth::user()->email }}" readonly>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="save-info">
                            <div class="row">
                                <div class="col-md-11 mx-auto">
                                    {{--  <button class="btn btn-gradient-warning mb-4 float-right btn-rounded">Submit</button>  --}}

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <form action="/updatesosmed" method="POST" enctype="multipart/form-data" class="social">
                        @csrf
                        <div class="info">
                            <h5 class="mt-4">Social Media</h5>
                            <div class="row">
                                <div class="col-md-11 mx-auto">

                                    <div class="input-group social-dribbble mb-3">
                                        <div class="input-group-prepend mr-3">
                                            <span class="input-group-text"><i
                                                    class="flaticon-dribbble-bold"></i></span>
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Username" aria-describedby="dribbble" id="ig" name="ig" value="{{ Auth::user()->ig }}" readonly>
                                    </div>

                                    <div class="input-group social-fb mb-3">
                                        <div class="input-group-prepend mr-3">
                                            <span class="input-group-text" id="fb"><i
                                                    class="flaticon-facebook-logo"></i></span>
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Username" aria-describedby="fb" id="fb" name="fb" value="{{ Auth::user()->fb }}" readonly>
                                    </div>
                                    <div class="input-group social-tweet mb-3">
                                        <div class="input-group-prepend mr-3">
                                            <span class="input-group-text"><i
                                                    class="flaticon-twitter-logo"></i></span>
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Username" aria-describedby="tweet" id="twi" name="twi" value="{{ Auth::user()->twi }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="save-info">
                            <div class="row">
                                <div class="col-md-11 mx-auto">

                                </div>
                            </div>
                        </div>
                    </form>
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
        <script src="{{ asset('landing/html/bidzend/assets/crop/jquery-1.7.1.min.js') }}" type='text/javascript'></script>
        <script src="{{ asset('landing/html/bidzend/assets/crop/ijaboCropTool.min.js') }}"></script>
        <script>
            $(document).on('click', '#ganti_foto_btn', function() {
                $('#edit_foto').click();
            });

            $('#edit_foto').ijaboCropTool({
                preview: '.image-previewer',
                setRatio: 1,
                allowedExtensions: ['jpg', 'jpeg', 'png'],
                buttonsText: ['Ganti', 'Batal'],
                buttonsColor: ['#30bf7d', '#ee5155', -15],
                processUrl: '{{ route('crop') }}',
                withCSRF: ['_token', '{{ csrf_token() }}'],
                onSuccess: function(message, element, status) {
                    alert(message);
                },
                onError: function(message, element, status) {
                    alert(message);
                }
            });
        </script>



    </body>
    @include('layout.script')
@endsection
