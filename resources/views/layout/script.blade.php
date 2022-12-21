<body>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

   
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/loader.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}">
    </script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/app.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/charts/chartist/chartist.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js') }}">
    </script>
    <script
        src="{{ asset('admintemp/adminnew/riski/nopan/plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js') }}">
    </script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/calendar/pignose/moment.latest.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/calendar/pignose/pignose.calendar.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/progressbar/progressbar.min.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/default-dashboard/default-custom.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/support-chat.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#vertical-scroll').DataTable({
                "scrollY": "200px",
                "scrollCollapse": true,
                "paging": false,
                "language": {
                    "paginate": {
                        "previous": "<i class='flaticon-arrow-left-1'></i>",
                        "next": "<i class='flaticon-arrow-right'></i>"
                    },
                    "info": "Showing page _PAGE_ of _PAGES_"
                }
            });
            $('#horizontal-scroll').DataTable({
                "scrollX": true,
                "language": {
                    "paginate": {
                        "previous": "<i class='flaticon-arrow-left-1'></i>",
                        "next": "<i class='flaticon-arrow-right'></i>"
                    },
                    "info": "Showing page _PAGE_ of _PAGES_"
                }
            });
            $('#vertical-horizontal-scroll').DataTable({
                "scrollY": "460",
                "scrollX": true,
                "lengthMenu": [25, 50, 75, 100],
                "language": {
                    "paginate": {
                        "previous": "<i class='flaticon-arrow-left-1'></i>",
                        "next": "<i class='flaticon-arrow-right'></i>"
                    },
                    "info": "Showing page _PAGE_ of _PAGES_"
                }
            });
        });
    </script>
    <script>
        $('#ecommerce-product-list').DataTable({
            "lengthMenu": [5, 10, 20, 50, 100],
            "language": {
                "paginate": {
                    "previous": "<i class='flaticon-arrow-left-1'></i>",
                    "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            },
            drawCallback: function(settings) {
                $('[data-toggle="tooltip"]').tooltip();
            }
        });
    </script>
    <script>
        function initCustomScrollbar() {
            var scrollPane = document.querySelector(".scroll-content");
            var scrollPaneInit = $(scrollPane).mCustomScrollbar();

            setTimeout(function() {
                var scrollInnerPane = $(scrollPane).find(".mCustomScrollBox");
                $(scrollInnerPane).height(window.innerHeight + "px");
            }, 500);

            $(window).resize(function() {
                if (window.innerWidth < 768) {
                    initCustomScrollbar();
                } else {
                    $(scrollPane).mCustomScrollBar('destroy');
                }
            });
        }

        initCustomScrollbar();
    </script>


    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/charts/amcharts/amcharts.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/charts/amcharts/serial.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/charts/amcharts/light.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN CUSTOM SCRIPTS FILE -->
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/charts/amcharts/column_and_barchart.js') }}"></script>

    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/sweetalerts/promise-polyfill.js') }}"></script>


    {{-- <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/charts/echarts/basic-charts/echarts_basic.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/charts/echarts/echarts.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/charts/echarts/basic-charts/timelineOption.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/charts/echarts/basic-charts/echarts_basic_script.js') }}"></script>
 --}}
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/bootstrap-wizard/jquery.validate.min.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script>
        $('#simple-1').bootstrapWizard();
        $('#simple-2').bootstrapWizard();
        $('#p-1').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#p-1 .progress-bar').css({
                    width: $percent + '%'
                });
            }
        });
        var $validator = $("#f-validation").validate({
            rules: {
                f_Email1: {
                    required: true,
                    email: true,
                    minlength: 3
                },
                f_name: {
                    required: true,
                    minlength: 3
                },
                f_password1: {
                    required: true,
                    minlength: 3,
                },
                f_txt_area_field: {
                    required: true,
                    minlength: 3,
                },
                f_location: {
                    required: true,
                    minlength: 3,
                },
            },
        });
        $('#validation').bootstrapWizard({
            onNext: function(tab, navigation, index) {
                var $valid = $("#f-validation").valid();
                if (!$valid) {
                    $validator.focusInvalid();
                    return false;
                }
            }
        });
    </script>

    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/notification/toastr/toastr.min.js') }}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/ui-kit/notification/custom-toastr.js') }}"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->    
    <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/custom.js') }}"></script>

    
   
</body>
