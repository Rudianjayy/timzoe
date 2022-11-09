@extends('layout.main')

@section('content')
<<<<<<< HEAD
<head>
    @include('layout.css')
</head>

<body>
  <h1 class="text-center mb-4">Edit Profil Sekolah</h1>

  <div class="container" mb-5>

      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/editprosesadmin/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul :</label>
                    <input type="text" name="judul" class="form-control" value="{{ $data->judul }}">
                    @error('judul')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Deskripsi :</label>
                    <textarea class="form-control form-control-solid" name="deskripsi">{{ $data->deskripsi }}</textarea>
                    @error('deskripsi')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Foto :</label>
                  <input type="file" name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->foto }}" >
                  <img src="{{ asset('fotomahasiswa/' . $data->foto) }}" alt="" style="width: 70px">
                  @error('foto')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>




                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script>
    const selection = document.getElementById('matkul')
    selection.onchange = function(e){
      const dosen = e.target.options[e.target.selectedIndex].dataset.dosen
      document.getElementById('dosen').value = dosen;
    }
  </script>
  @include('layout.script')
</body>
=======

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
                                                        <h5 class="usr-name">{{ Auth::user()->name }}</h5>
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
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-selected="true">Edit Profile</a>
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

                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <div class="tab-content post-section" id="pills-tabContent1">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card post-editor mb-4" style="">
                                                        <div class="card-body p-0">
                                                            <div class="widget-content widget-content-area">
                                                                <form action="/updateprofiladmin" method="POST">
                                                                    @csrf
                                                                    <div class="form-group mb-4">
                                                                        <label for="name">Nama </label>
                                                                        <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="alamat">Alamat</label>
                                                                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ Auth::user()->alamat }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="notelpon">No Telpon</label>
                                                                        <input type="text" class="form-control" id="notelpon" name="notelpon" value="{{ Auth::user()->notelpon }}">
                                                                    </div>
                                                                    {{--  <div class="form-group form-check pl-0 mt-5">
                                                                        <div class="custom-control custom-checkbox checkbox-info">
                                                                            <input type="checkbox" class="custom-control-input" id="rChkbox">
                                                                            <label class="custom-control-label" for="rChkbox">Subscribe to weekly newsletter</label>
                                                                        </div>
                                                                    </div>  --}}
                                                                    <button type="submit" class="btn btn-button-7 mt-3 mb-4">Submit</button>
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
    <!--  END CUSTOM SCRIPTS FILE  -->
</body>
@include('layout.script')
>>>>>>> 42c8731b1d8eac8f986959af1037135d072ae698

@endsection
