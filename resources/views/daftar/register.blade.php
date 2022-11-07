<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/preview-equation/default-light/user_register_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Oct 2022 08:38:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Register | SMK Muhammadiyah 1 Genteng </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admintemp/adminnew/riski/nopan/assets/img/favicon.ico') }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('admintemp/adminnew/riski/nopan/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/users/register-1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
</head>
<body class="register">
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>
    <form class="form-register" action="/registeruser" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/logo-3.png') }}" class="theme-logo">
            </div>
            <div class="col-md-12">
                <label for="full-name" class="">Full Name</label>                
                <input type="text" name="name" id="full-name" class="form-control mb-4" placeholder="Full Name" >

                <label for="inputEmail" class="">Email</label>
                <input type="email" name="email" id="inputEmail" class="form-control mb-4" placeholder="Email" >

                <label for="inputPassword" class="">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control mb-5" placeholder="Password">

                {{-- <label for="inputRepeatPassword" class="">Repeat Password</label>
                <input type="password" id="inputRepeatPassword" class="form-control mb-5" placeholder="Repeat Password" required>
                 --}}
                <div class="terms-conditions-chkbox d-flex justify-content-between mb-5 mt-5">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                        <label class="custom-control-label" for="customCheck1"> <span class="d-block mt-1">I agree to all <a href="#">Terms</a></span> </label>
                    </div>
                </div>                
                <button class="btn btn-lg btn-gradient-danger btn-block btn-rounded mb-4 mt-5" type="submit">Register</button>
                <a href="/login" class="btn btn-lg btn-outline-dark btn-block btn-rounded mb-3">Go Back</a>
            </div>

            <div class="col-md-12 mb-0 text-center social-icons">
                <h5 class="mt-4 mb-4">or</h5>
                <button class="btn btn-outline-secondary rounded-circle btn-rounded mb-4 mr-2"><i class="flaticon-facebook-logo flaticon-circle-p"></i></button>
                <button class="btn btn-outline-secondary rounded-circle btn-rounded mb-4 mr-2"><i class="flaticon-google-plus-bold flaticon-circle-p"></i></button>
                <button class="btn btn-outline-secondary rounded-circle btn-rounded mb-4 mr-2"><i class="flaticon-twitter-logo flaticon-circle-p"></i></button>
            </div>
        </div>
    </form>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/loader.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/bootstrap/js/bootstrap.min.js') }}"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/preview-equation/default-light/user_register_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Oct 2022 08:38:47 GMT -->
</html>




