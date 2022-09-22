@extends('layout.main')

@section('content')
<<<<<<< HEAD
    
<div class="container-fluid">

    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Dashboard</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
                </ol>
=======
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Row-->
        <div class="row g-5 g-xl-10">
            <!--begin::Col-->
            <div class="col-xl-4 mb-xl-10">
                <!--begin::Lists Widget 19-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Heading-->
                    <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                        style="background-image:url('/metronic8/demo1/assets/media/svg/shapes/top-green.png"
                        data-theme="light">
                        <!--begin::Title-->
<<<<<<< HEAD
                        <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                        <span class="me-2">You have got
                        <span class="position-relative d-inline-block text-danger">
                            <a href="../pages/user-profile/overview.html" class="text-danger opacity-75-hover">2300 bonus</a>
                            <!--begin::Separator-->
                            <span class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                            <!--end::Separator-->
                        </span></span>points.
                        <br />Feel free to use them in your lessons</div>
=======
                        <h3 class="card-title align-items-start flex-column text-white pt-15">
                            <span class="fw-bold fs-2x mb-3">Hello, Tyler</span>
                            <div class="fs-4 text-white">
                                <span class="opacity-75">You have</span>
                                <span class="position-relative d-inline-block">
                                    <a href="../pages/user-profile/projects.html"
                                        class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>
                                    <!--begin::Separator-->
                                    <span
                                        class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                    <!--end::Separator-->
                                </span>
                                <span class="opacity-75">to comlete</span>
                            </div>
                        </h3>
>>>>>>> b78538454437c2030a5f0c5743b6e10c2421daad
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar pt-5">
                            <!--begin::Menu-->
                            <button
                                class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                data-kt-menu-overflow="true">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2"
                                            fill="currentColor" />
                                        <rect x="17" y="10" width="4" height="4" rx="2"
                                            fill="currentColor" />
                                        <rect x="3" y="10" width="4" height="4" rx="2"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="card-body mt-n20">
                        <!--begin::Stats-->
                        <div class="mt-n20 position-relative">
                            <!--begin::Row-->
                            <div class="row g-3 g-lg-6">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Items-->
                                    <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5 mb-8">
                                            <span class="symbol-label">
                                                <!--begin::Svg Icon | path: icons/duotune/medicine/med005.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Stats-->
                                        <div class="m-0">
                                            <!--begin::Number-->
                                            <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                            <!--end::Number-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-6">Courses</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Items-->
                                    <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5 mb-8">
                                            <span class="symbol-label">
                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Stats-->
                                        <div class="m-0">
                                            <!--begin::Number-->
                                            <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                            <!--end::Number-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-6">Certificates</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Items-->
                                    <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5 mb-8">
                                            <span class="symbol-label">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14 18V16H10V18L9 20H15L14 18Z" fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Stats-->
                                        <div class="m-0">
                                            <!--begin::Number-->
                                            <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
                                            <!--end::Number-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-6">Avg. Score</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Items-->
                                    <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5 mb-8">
                                            <span class="symbol-label">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Stats-->
                                        <div class="m-0">
                                            <!--begin::Number-->
                                            <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
                                            <!--end::Number-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-6">Hours Learned</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Lists Widget 19-->
>>>>>>> ad367d3c9522d4b7431da30bd41554a915b815a4
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-cog me-2"></i> Settings
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <!-- end page title -->
    
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-start mini-stat-img me-4">
                            <img src="assets/images/services-icon/01.png" alt="">
                        </div>
                        <h5 class="font-size-16 text-uppercase text-white-50">Orders</h5>
                        <h4 class="fw-medium font-size-24">1,685 <i
                                class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                        <div class="mini-stat-label bg-success">
                            <p class="mb-0">+ 12%</p>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="float-end">
                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                        </div>

                        <p class="text-white-50 mb-0 mt-1">Since last month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-start mini-stat-img me-4">
                            <img src="assets/images/services-icon/02.png" alt="">
                        </div>
                        <h5 class="font-size-16 text-uppercase text-white-50">Revenue</h5>
                        <h4 class="fw-medium font-size-24">52,368 <i
                                class="mdi mdi-arrow-down text-danger ms-2"></i></h4>
                        <div class="mini-stat-label bg-danger">
                            <p class="mb-0">- 28%</p>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="float-end">
                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                        </div>

                        <p class="text-white-50 mb-0 mt-1">Since last month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-start mini-stat-img me-4">
                            <img src="assets/images/services-icon/03.png" alt="">
                        </div>
                        <h5 class="font-size-16 text-uppercase text-white-50">Average Price</h5>
                        <h4 class="fw-medium font-size-24">15.8 <i
                                class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                        <div class="mini-stat-label bg-info">
                            <p class="mb-0"> 00%</p>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="float-end">
                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                        </div>

                        <p class="text-white-50 mb-0 mt-1">Since last month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-start mini-stat-img me-4">
                            <img src="assets/images/services-icon/04.png" alt="">
                        </div>
                        <h5 class="font-size-16 text-uppercase text-white-50">Product Sold</h5>
                        <h4 class="fw-medium font-size-24">2436 <i
                                class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                        <div class="mini-stat-label bg-warning">
                            <p class="mb-0">+ 84%</p>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="float-end">
                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                        </div>

                        <p class="text-white-50 mb-0 mt-1">Since last month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Monthly Earning</h4>
                    <div class="row">
                        <div class="col-lg-7">
                            <div>
                                <div id="chart-with-area" class="ct-chart earning ct-golden-section">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-center">
                                        <p class="text-muted mb-4">This month</p>
                                        <h3>$34,252</h3>
                                        <p class="text-muted mb-5">It will be as simple as in fact it
                                            will be occidental.</p>
                                        <span class="peity-donut"
                                            data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                            data-width="72" data-height="72">4/5</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center">
                                        <p class="text-muted mb-4">Last month</p>
                                        <h3>$36,253</h3>
                                        <p class="text-muted mb-5">It will be as simple as in fact it
                                            will be occidental.</p>
                                        <span class="peity-donut"
                                            data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                            data-width="72" data-height="72">3/5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end card -->
        </div>

        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h4 class="card-title mb-4">Sales Analytics</h4>
                    </div>
                    <div class="wid-peity mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <p class="text-muted">Online</p>
                                    <h5 class="mb-4">1,542</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <span class="peity-line" data-width="100%"
                                        data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}'
                                        data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wid-peity mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <p class="text-muted">Offline</p>
                                    <h5 class="mb-4">6,451</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <span class="peity-line" data-width="100%"
                                        data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}'
                                        data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <p class="text-muted">Marketing</p>
                                    <h5>84,574</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <span class="peity-line" data-width="100%"
                                        data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}'
                                        data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sales Report</h4>

                    <div class="cleafix">
                        <p class="float-start"><i class="mdi mdi-calendar me-1 text-primary"></i> Jan 01
                            - Jan 31</p>
                        <h5 class="font-18 text-end">$4230</h5>
                    </div>

                    <div id="ct-donut" class="ct-chart wid"></div>

                    <div class="mt-4">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td><span class="badge bg-primary">Desk</span></td>
                                    <td>Desktop</td>
                                    <td class="text-end">54.5%</td>
                                </tr>
                                <tr>
                                    <td><span class="badge bg-success">Mob</span></td>
                                    <td>Mobile</td>
                                    <td class="text-end">28.0%</td>
                                </tr>
                                <tr>
                                    <td><span class="badge bg-warning">Tab</span></td>
                                    <td>Tablets</td>
                                    <td class="text-end">17.5%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Activity</h4>
                    <ol class="activity-feed">
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 22</span>
                                <span class="activity-text">Responded to need “Volunteer
                                    Activities”</span>
                            </div>
                        </li>
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 20</span>
                                <span class="activity-text">At vero eos et accusamus et iusto odio
                                    dignissimos ducimus qui deleniti atque...<a href="#"
                                        class="text-success">Read more</a></span>
                            </div>
                        </li>
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 19</span>
                                <span class="activity-text">Joined the group “Boardsmanship
                                    Forum”</span>
                            </div>
                        </li>
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 17</span>
                                <span class="activity-text">Responded to need “In-Kind
                                    Opportunity”</span>
                            </div>
                        </li>
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 16</span>
                                <span class="activity-text">Sed ut perspiciatis unde omnis iste natus
                                    error sit rem.</span>
                            </div>
                        </li>
                    </ol>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Load More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="py-4">
                                <i
                                    class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>

                                <h5 class="text-primary mt-4">Order Successful</h5>
                                <p class="text-muted">Thanks you so much for your order.</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-primary btn-sm">Chack Status</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="text-center text-white py-4">
                                <h5 class="mb-4 text-white-50 font-size-16">Top Product Sale</h5>
                                <h1>1452</h1>
                                <p class="font-size-14 pt-1">Computer</p>
                                <p class="text-white-50 mb-0">At solmen va esser necessi far uniform
                                    myth... <a href="#" class="text-white">View more</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Client Reviews</h4>
                            <p class="text-muted mb-3 pb-4">" Everyone realizes why a new common
                                language would be desirable one could refuse to pay expensive
                                translators it would be necessary. "</p>
                            <div class="float-end mt-2">
                                <a href="#" class="text-primary">
                                    <i class="mdi mdi-arrow-right h5"></i>
                                </a>
                            </div>
                            <h6 class="mb-0"><img src="assets/images/users/user-3.jpg" alt=""
                                    class="avatar-sm rounded-circle me-2"> James Athey</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Transaction</h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">(#) Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col" colspan="2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">#14256</th>
                                    <td>
                                        <div>
                                            <img src="assets/images/users/user-2.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Philip Smead
                                        </div>
                                    </td>
                                    <td>15/1/2018</td>
                                    <td>$94</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14257</th>
                                    <td>
                                        <div>
                                            <img src="assets/images/users/user-3.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Brent Shipley
                                        </div>
                                    </td>
                                    <td>16/1/2019</td>
                                    <td>$112</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14258</th>
                                    <td>
                                        <div>
                                            <img src="assets/images/users/user-4.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Robert Sitton
                                        </div>
                                    </td>
                                    <td>17/1/2019</td>
                                    <td>$116</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14259</th>
                                    <td>
                                        <div>
                                            <img src="assets/images/users/user-5.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Alberto Jackson
                                        </div>
                                    </td>
                                    <td>18/1/2019</td>
                                    <td>$109</td>
                                    <td><span class="badge bg-danger">Cancel</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14260</th>
                                    <td>
                                        <div>
                                            <img src="assets/images/users/user-6.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> David Sanchez
                                        </div>
                                    </td>
                                    <td>19/1/2019</td>
                                    <td>$120</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14261</th>
                                    <td>
                                        <div>
                                            <img src="assets/images/users/user-2.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Philip Smead
                                        </div>
                                    </td>
                                    <td>15/1/2018</td>
                                    <td>$94</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Chat</h4>
                    <div class="chat-conversation">
                        <ul class="conversation-list" data-simplebar style="max-height: 367px;">
                            <li class="clearfix">
                                <div class="chat-avatar">
                                    <img src="assets/images/users/user-2.jpg"
                                        class="avatar-xs rounded-circle" alt="male">
                                    <span class="time">10:00</span>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <span class="user-name">John Deo</span>
                                        <p>
                                            Hello!
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix odd">
                                <div class="chat-avatar">
                                    <img src="assets/images/users/user-3.jpg"
                                        class="avatar-xs rounded-circle" alt="Female">
                                    <span class="time">10:01</span>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <span class="user-name">Smith</span>
                                        <p>
                                            Hi, How are you? What about our next meeting?
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="chat-avatar">
                                    <img src="assets/images/users/user-2.jpg"
                                        class="avatar-xs rounded-circle" alt="male">
                                    <span class="time">10:04</span>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <span class="user-name">John Deo</span>
                                        <p>
                                            Yeah everything is fine
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix odd">
                                <div class="chat-avatar">
                                    <img src="assets/images/users/user-3.jpg"
                                        class="avatar-xs rounded-circle" alt="male">
                                    <span class="time">10:05</span>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <span class="user-name">Smith</span>
                                        <p>
                                            Wow that's great
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix odd">
                                <div class="chat-avatar">
                                    <img src="assets/images/users/user-3.jpg"
                                        class="avatar-xs rounded-circle" alt="male">
                                    <span class="time">10:08</span>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <span class="user-name mb-2">Smith</span>

                                        <img src="assets/images/small/img-1.jpg" alt="" height="48"
                                            class="rounded me-2">
                                        <img src="assets/images/small/img-2.jpg" alt="" height="48"
                                            class="rounded">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-sm-9 col-8 chat-inputbar">
                                <input type="text" class="form-control chat-input"
                                    placeholder="Enter your text">
                            </div>
                            <div class="col-sm-3 col-4 chat-send">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->



</div>

@endsection
=======
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4 mb-xl-10">
            <!--begin::List widget 20-->
            <div class="card h-xl-100">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Recommended for you</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
                    </h3>
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-light">All Courses</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-6">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">M</div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="../pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">UI/UX Design</a>
                                <span class="text-muted fw-semibold d-block fs-7">40+ Courses</span>
                            </div>
                            <!--end:Author-->
                            <!--begin::Actions-->
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--begin::Actions-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-4"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-success text-inverse-success">Q</div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="../pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">QA Analysis</a>
                                <span class="text-muted fw-semibold d-block fs-7">18 Courses</span>
                            </div>
                            <!--end:Author-->
                            <!--begin::Actions-->
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--begin::Actions-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-4"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-info text-inverse-info">W</div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="../pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Web Development</a>
                                <span class="text-muted fw-semibold d-block fs-7">120+ Courses</span>
                            </div>
                            <!--end:Author-->
                            <!--begin::Actions-->
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--begin::Actions-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-4"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">M</div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="../pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Marketing</a>
                                <span class="text-muted fw-semibold d-block fs-7">50+ Courses.</span>
                            </div>
                            <!--end:Author-->
                            <!--begin::Actions-->
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--begin::Actions-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-4"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-warning text-inverse-warning">P</div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="../pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Philosophy</a>
                                <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                            </div>
                            <!--end:Author-->
                            <!--begin::Actions-->
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--begin::Actions-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-4"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-dark text-inverse-dark">M</div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="../pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Mathematics</a>
                                <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                            </div>
                            <!--end:Author-->
                            <!--begin::Actions-->
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--begin::Actions-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List widget 20-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8 mb-5 mb-xl-10">
            <!--begin::Timeline Widget 1-->
            <div class="card card-flush h-xl-100">
                <!--begin::Card header-->
                <div class="card-header pt-5">
                    <!--begin::Card title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Team Schedule</span>
                        <span class="text-gray-400 pt-2 fw-semibold fs-6">49 Acual Tasks</span>
                    </h3>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Tabs-->
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_day">Day</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_week">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_month">Month</a>
                            </li>
                        </ul>
                        <!--end::Tabs-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pb-0">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane active" id="kt_timeline_widget_1_tab_day" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-1-blockui="true">
                            <div class="table-responsive pb-10">
                                <!--begin::Timeline-->
                                <div id="kt_timeline_widget_1_1" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="/metronic8/demo1/assets/media/"></div>
                                <!--end::Timeline-->
                            </div>
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane" id="kt_timeline_widget_1_tab_week" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-1-blockui="true">
                            <div class="table-responsive pb-10">
                                <!--begin::Timeline-->
                                <div id="kt_timeline_widget_1_2" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="/metronic8/demo1/assets/media/"></div>
                                <!--end::Timeline-->
                            </div>
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane" id="kt_timeline_widget_1_tab_month" role="tabpanel" aria-labelledby="month-tab" data-kt-timeline-widget-1-blockui="true">
                            <div class="table-responsive pb-10">
                                <!--begin::Timeline-->
                                <div id="kt_timeline_widget_1_3" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="/metronic8/demo1/assets/media/"></div>
                                <!--end::Timeline-->
                            </div>
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Timeline Widget 1-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::List widget 21-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Active Lessons</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Avg. 72% completed lessons</span>
                    </h3>
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-light">All Lessons</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center me-3">
                            <!--begin::Logo-->
                            <img src="../assets/media/svg/brand-logos/laravel-2.svg" class="me-4 w-30px" alt="" />
                            <!--end::Logo-->
                            <!--begin::Section-->
                            <div class="flex-grow-1">
                                <!--begin::Text-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Laravel</a>
                                <!--end::Text-->
                                <!--begin::Description-->
                                <span class="text-gray-400 fw-semibold d-block fs-6">PHP Framework</span>
                                <!--end::Description=-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Statistics-->
                        <div class="d-flex align-items-center w-100 mw-125px">
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 me-2 bg-light-success">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                            <!--begin::Value-->
                            <span class="text-gray-400 fw-semibold">65%</span>
                            <!--end::Value-->
                        </div>
                        <!--end::Statistics-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center me-3">
                            <!--begin::Logo-->
                            <img src="../assets/media/svg/brand-logos/vue-9.svg" class="me-4 w-30px" alt="" />
                            <!--end::Logo-->
                            <!--begin::Section-->
                            <div class="flex-grow-1">
                                <!--begin::Text-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Vue 3</a>
                                <!--end::Text-->
                                <!--begin::Description-->
                                <span class="text-gray-400 fw-semibold d-block fs-6">JS Framework</span>
                                <!--end::Description=-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Statistics-->
                        <div class="d-flex align-items-center w-100 mw-125px">
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 me-2 bg-light-warning">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                            <!--begin::Value-->
                            <span class="text-gray-400 fw-semibold">87%</span>
                            <!--end::Value-->
                        </div>
                        <!--end::Statistics-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center me-3">
                            <!--begin::Logo-->
                            <img src="../assets/media/svg/brand-logos/bootstrap5.svg" class="me-4 w-30px" alt="" />
                            <!--end::Logo-->
                            <!--begin::Section-->
                            <div class="flex-grow-1">
                                <!--begin::Text-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Bootstrap 5</a>
                                <!--end::Text-->
                                <!--begin::Description-->
                                <span class="text-gray-400 fw-semibold d-block fs-6">CSS Framework</span>
                                <!--end::Description=-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Statistics-->
                        <div class="d-flex align-items-center w-100 mw-125px">
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 me-2 bg-light-primary">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 44%" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                            <!--begin::Value-->
                            <span class="text-gray-400 fw-semibold">44%</span>
                            <!--end::Value-->
                        </div>
                        <!--end::Statistics-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center me-3">
                            <!--begin::Logo-->
                            <img src="../assets/media/svg/brand-logos/angular-icon.svg" class="me-4 w-30px" alt="" />
                            <!--end::Logo-->
                            <!--begin::Section-->
                            <div class="flex-grow-1">
                                <!--begin::Text-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Angular 13</a>
                                <!--end::Text-->
                                <!--begin::Description-->
                                <span class="text-gray-400 fw-semibold d-block fs-6">JS Framework</span>
                                <!--end::Description=-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Statistics-->
                        <div class="d-flex align-items-center w-100 mw-125px">
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 me-2 bg-light-info">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                            <!--begin::Value-->
                            <span class="text-gray-400 fw-semibold">70%</span>
                            <!--end::Value-->
                        </div>
                        <!--end::Statistics-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center me-3">
                            <!--begin::Logo-->
                            <img src="../assets/media/svg/brand-logos/spring-3.svg" class="me-4 w-30px" alt="" />
                            <!--end::Logo-->
                            <!--begin::Section-->
                            <div class="flex-grow-1">
                                <!--begin::Text-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Spring</a>
                                <!--end::Text-->
                                <!--begin::Description-->
                                <span class="text-gray-400 fw-semibold d-block fs-6">Java Framework</span>
                                <!--end::Description=-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Statistics-->
                        <div class="d-flex align-items-center w-100 mw-125px">
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 me-2 bg-light-danger">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                            <!--begin::Value-->
                            <span class="text-gray-400 fw-semibold">56%</span>
                            <!--end::Value-->
                        </div>
                        <!--end::Statistics-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center me-3">
                            <!--begin::Logo-->
                            <img src="../assets/media/svg/brand-logos/typescript-1.svg" class="me-4 w-30px" alt="" />
                            <!--end::Logo-->
                            <!--begin::Section-->
                            <div class="flex-grow-1">
                                <!--begin::Text-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">TypeScript</a>
                                <!--end::Text-->
                                <!--begin::Description-->
                                <span class="text-gray-400 fw-semibold d-block fs-6">Better Tooling</span>
                                <!--end::Description=-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Statistics-->
                        <div class="d-flex align-items-center w-100 mw-125px">
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 me-2 bg-light-success">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                            <!--begin::Value-->
                            <span class="text-gray-400 fw-semibold">82%</span>
                            <!--end::Value-->
                        </div>
                        <!--end::Statistics-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List widget 21-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Chart widget 18-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Learn Activity</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Hours per course</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                            <!--begin::Display range-->
                            <div class="text-gray-600 fw-bold">Loading date range...</div>
                            <!--end::Display range-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                            <span class="svg-icon svg-icon-1 ms-2 me-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
                                    <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
                                    <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Daterangepicker-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_18_chart" class="h-325px w-100 min-h-auto ps-4 pe-6"></div>
                    <!--end::Chart-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Chart widget 18-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</div>
@endsection

>>>>>>> ad367d3c9522d4b7431da30bd41554a915b815a4
