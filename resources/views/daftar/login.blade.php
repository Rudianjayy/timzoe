<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/preview-equation/default-light/user_login_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Oct 2022 08:31:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login | SMK Muhammadiyah 1 Genteng</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admintemp/adminnew/riski/nopan/assets/img/favicon.ico') }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('admintemp/adminnew/riski/nopan/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/users/login-1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
</head>
<body class="login">
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>
    <form class="form-login" method="post" action="/loginproses">
        @csrf
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/logo-3.png') }}" class="theme-logo">
            </div>

            <div class="col-md-12">
                <label for="inputEmail" class="">Login</label>                
                <input type="email" name="email" id="inputEmail" class="form-control mb-4" placeholder="Login">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror  

                <label for="inputPassword" class="">Password</label>                
                <input type="password" name="password" id="inputPassword" class="form-control mb-5" placeholder="Password">   

                <div class="checkbox d-flex justify-content-between mb-4 mt-3">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                        <label class="custom-control-label" for="customCheck1">Remember</label>
                    </div>
                    <div class="forgot-pass">
                        <a href="user_pass_recovery_1.html">Forgot Password?</a>
                    </div>
                </div>                
                <button class="btn btn-lg btn-gradient-danger btn-block btn-rounded mb-4 mt-5" type="submit">Login</button>
                <a href="/register" class="btn btn-lg btn-outline-dark btn-block btn-rounded mb-3">Register</a>
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
    

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BEGIN THEME GLOBAL STYLE -->
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/preview-equation/default-light/user_login_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Oct 2022 08:31:29 GMT -->
</html>