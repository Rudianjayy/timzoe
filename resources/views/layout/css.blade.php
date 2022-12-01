<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    @if (auth()->user()->role == 'admin')
        <title>Admin | SMK Muhammadiyah 1 Genteng</title>
    @endif
    @if (auth()->user()->role == 'user')
        <title>User | SMK Muhammadiyah 1 Genteng</title>
    @endif
    <link rel="icon" type="image/x-icon" href="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}"/>
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

    <link rel="stylesheet" type="text/css" href="{{ asset('admintemp/adminnew/riski/nopan/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admintemp/adminnew/riski/nopan/plugins/table/datatable/custom_dt_scrollable.css') }}">

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/components/custom-counter.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/components/custom-counter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admintemp/adminnew/riski/nopan/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/sweetalerts/promise-polyfill.js') }}"></script>
    <link href="{{ asset('admintemp/adminnew/riski/nopan/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/adminnew/riski/nopan/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/ui-kit/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/modules/modules-card.css') }}">    
    <link href="{{ asset('admintemp/adminnew/riski/nopan/plugins/pricing-table/css/demo.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/adminnew/riski/nopan/plugins/pricing-table/css/component.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/ui-kit/tabs-accordian/custom-tabs.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admintemp/adminnew/riski/nopan/plugins/jqvalidation/custom-jqBootstrapValidation.css') }}">

</head>
