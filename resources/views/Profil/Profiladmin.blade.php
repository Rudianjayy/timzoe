<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/preview-equation/default-light/user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Oct 2022 08:31:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>User Profile | Equation - Multipurpose Bootstrap Dashboard Template </title>
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
<body>
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>
    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="index.html" class=""> <img src="assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none"> 
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>
        <ul class="navbar-nav flex-row">
            <li class="nav-item dropdown language-dropdown ml-1  ml-lg-0">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="flagDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/ca.svg" alt=""> <span class="d-lg-inline-block d-none"></span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="flagDropdown">
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/de.svg" class="flag-width" alt=""> &#xA0;German</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/jp.svg" class="flag-width" alt=""> &#xA0;Japanese</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/fr.svg" class="flag-width" alt=""> &#xA0;French</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/ru.svg" class="flag-width" alt=""> &#xA0;Russian</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/ca.svg" class="flag-width" alt=""> &#xA0;English</a>
                </div>
            </li>
        </ul>


        <ul class="navbar-nav flex-row mr-lg-auto ml-lg-0  ml-auto">
            <li class="nav-item dropdown message-dropdown ml-lg-4">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-mail-10"></span><span class="badge badge-primary">13</span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="messageDropdown">
                    <a class="dropdown-item title" href="javascript:void(0);">
                        <i class="flaticon-chat-line mr-3"></i><span>You have 13 new messages</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <div class="media">
                            <div class="usr-img online mr-3">
                                <img class="usr-img rounded-circle" src="assets/img/profile-9.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">Browse latest projects...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Kara Young</p>
                                    <p class="meta-time mb-0  align-self-center">1 min ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="usr-img mr-3">
                                <img class="usr-img rounded-circle" src="assets/img/profile-24.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">Design, Development and...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Amy Diaz</p>
                                    <p class="meta-time mb-0  align-self-center">5 mins ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="usr-img online mr-3">
                                <img class="usr-img rounded-circle" src="assets/img/profile-3.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">We can ensure...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Shaun Park</p>
                                    <p class="meta-time mb-0  align-self-center">1 day ago</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="footer dropdown-item" href="javascript:void(0);">
                        <div class="btn btn-info mb-3 mr-2 btn-rounded"><i class="flaticon-arrow-right mr-3"></i> View more</div>
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown notification-dropdown ml-3">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-bell-4"></span><span class="badge badge-success">15</span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                    <a class="dropdown-item title" href="javascript:void(0);">
                        <i class="flaticon-bell-13 mr-3"></i> <span>You have 15 new notifications</span>
                    </a>

                    <a class="dropdown-item text-center  p-1" href="javascript:void(0);">

                        <div class="notification-list ">
                            
                            <div class="notification-item position-relative  mb-3">
                                <div class="c-dropdown text-right">
                                    <span id="c-dropdonbtn" class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>
                               
                                <h6 class="mb-1">5 new members joined today</h6>
                                <p><span class="meta-time">1 minute ago</span> . <span class="meta-member-notification">4 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/profile-2.jpg" alt="admin-profile" class="ml-0">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/profile-3.jpg" alt="admin-profile">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/profile-4.jpg" alt="admin-profile">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/profile-5.jpg" alt="admin-profile">
                                    </li>
                                </ul>

                            </div>

                            <div class="notification-item position-relative  mb-3">

                                <div class="c-dropdown text-right">
                                    <span id="c-dropdonbtn2" class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>
                                
                                <h6 class="mb-1">Very long description...</h6>
                                <p><span class="meta-time">5 minutes ago</span> . <span class="meta-member-notification">5 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-6.jpg" class="ml-0">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-7.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-8.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-10.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-1.jpg">
                                    </li>
                                </ul>

                            </div>

                            <div class="notification-item position-relative  mb-3">
                                <div class="c-dropdown text-right">
                                    <span class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>
                                
                                <h6 class="mb-1">New item are in queue</h6>
                                <p><span class="meta-time">25 minutes ago</span> . <span class="meta-member-notification">3 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-11.jpg" class="ml-0">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-16.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-14.jpg">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                    <a class="footer dropdown-item text-center p-2">
                        <span class="mr-1">View All</span>
                        <div class="btn btn-gradient-warning rounded-circle"><i class="flaticon-arrow-right flaticon-circle-p"></i></div>
                    </a>
                </div>
            </li>
        </ul>


        <ul class="navbar-nav flex-row ml-lg-auto">
            
            <li class="nav-item  d-lg-block d-none">
                <form class="form-inline" role="search">
                    <input type="text" class="form-control search-form-control" placeholder="Search...">
                </form>
            </li>

            <li class="nav-item dropdown app-dropdown  ml-lg-4 mr-lg-2 order-lg-0 order-2">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="appDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-bulb"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="appDropdown">
                    <a class="dropdown-item" href="ecommerce_dashboard.html">
                        <i class="flaticon-commerce"></i><span>eCommerce</span>
                    </a>
                    <a class="dropdown-item" href="form_bootstrap_basic.html">
                        <i class="flaticon-edit-3"></i><span>Forms</span>
                    </a>
                    <a class="dropdown-item" href="table_basic.html">
                        <i class="flaticon-table"></i><span>Tables</span>
                    </a>
                    <a class="dropdown-item" href="ui_buttons.html">
                        <i class="flaticon-switch"></i><span>Buttons</span>
                    </a>
                    <a class="dropdown-item" href="ui_flaticon_icon.html">
                        <i class="flaticon-edit"></i><span>Font Icons</span>
                    </a>
                    <a class="dropdown-item" href="modules_widgets.html">
                        <i class="flaticon-computer-5"></i><span>Modules</span>
                    </a>
                    <a class="dropdown-item" href="map_google_basic.html">
                        <i class="flaticon-location"></i><span>Maps</span>
                    </a>
                    <a class="dropdown-item" href="apps_drag_n_drop_calendar.html">
                        <i class="flaticon-calendar-1"></i><span>Calendar</span>
                    </a>
                    <a class="dropdown-item" href="am_column_and_barchart.html">
                        <i class="flaticon-chart-3"></i><span>Charts</span>
                    </a>
                </div>
            </li>


            <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-user-12"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                    <a class="dropdown-item" href="user_profile.html">
                        <i class="mr-1 flaticon-user-6"></i> <span>My Profile</span>
                    </a>
                    <a class="dropdown-item" href="apps_scheduler.html">
                        <i class="mr-1 flaticon-calendar-bold"></i> <span>My Schedule</span>
                    </a>
                    <a class="dropdown-item" href="apps_mailbox.html">
                        <i class="mr-1 flaticon-email-fill-1"></i> <span>My Inbox</span>
                    </a>
                    <a class="dropdown-item" href="user_lockscreen_1.html">
                        <i class="mr-1 flaticon-lock-2"></i> <span>Lock Screen</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="user_login_1.html">
                        <i class="mr-1 flaticon-power-button"></i> <span>Log Out</span>
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown cs-toggle order-lg-0 order-3"> 
                <a href="#" class="nav-link toggle-control-sidebar suffle">
                    <span class="flaticon-menu-dot-fill d-lg-inline-block d-none"></span>
                    <span class="flaticon-dots d-lg-none"></span>
                </a>
            </li>
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <li class="nav-item d-flex">
                        <a href="index.html" class="navbar-brand">
                            <img src="assets/img/logo-3.png" class="img-fluid" alt="logo">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index.html" class="nav-link"> Equation </a>
                    </li>
                </ul>


                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Dashboard</span>
                            </div>

                            <div>
                                <span class="badge badge-pill badge-secondary mr-2">7</span>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#accordionExample">
                            <li>
                                <a href="index.html"> <i class="flaticon-computer-4"></i> Default </a>
                            </li>
                            <li>
                                <a href="accounting_dashboard.html"> <i class="flaticon-chart-line"></i> Accounting </a>
                            </li>
                            <li>
                                <a href="analytics_dashboard.html"> <i class="flaticon-computer-2"></i> Analytics </a>
                            </li>
                            <li>
                                <a href="car_dashboard.html"> <i class="flaticon-car"></i> Car </a>
                            </li>
                            <li>
                                <a href="classic_dashboard.html"> <i class="flaticon-computer-8"></i> Classic </a>
                            </li>
                            <li>
                                <a href="stock_market_dashboard.html"> <i class="flaticon-up-chart"></i> Stock Market </a>
                            </li>
                            <li>
                                <a href="cryptocurrency_dashboard.html"> <i class="flaticon-bitcoin-circle"></i> Cryptocurrency </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-cart-2"></i>
                                <span>Ecommerce</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ecommerce" data-parent="#accordionExample">
                            <li>
                                <a href="ecommerce_dashboard.html"> Dashboard </a>
                            </li>
                            <li>
                                <a href="ecommerce_orders.html"> Orders </a>
                            </li>
                            <li>
                                <a href="ecommerce_product.html"> Products </a>
                            </li>
                            <li>
                                <a href="ecommerce_product_catalog.html"> Product Catalog </a>
                            </li>
                            <li>
                                <a href="#product-details" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"  data-parent="#ecommerce"> Product Details <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="product-details">
                                    <li>
                                        <a href="ecommerce_product_details_1.html"> Product Details 1 </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_product_details_2.html"> Product Details 2 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ecommerce_addedit_product.html"> Add/Edit Products </a>
                            </li>
                            <li>
                                <a href="ecommerce_addedit_categories.html"> Add/Edit Categories </a>
                            </li>
                            <li>
                                <a href="ecommerce_view_cart.html"> View Cart </a>
                            </li>
                            <li>
                                <a href="ecommerce_view_payments.html"> View Payments </a>
                            </li>
                            <li>
                                <a href="ecommerce_view_customers.html"> View Customers </a>
                            </li>
                            <li>
                                <a href="ecommerce_checkout.html"> Checkout </a>
                            </li>
                            <li>
                                <a href="ecommerce_invoices.html"> Invoice </a>
                            </li>
                            <li>
                                <a href="ecommerce_shipments.html"> Shipments </a>
                            </li>
                            <li>
                                <a href="ecommerce_products_cart.html"> Products in Cart </a>
                            </li>
                            <li>
                                <a href="ecommerce_coupons.html"> Coupons </a>
                            </li>
                            <li>
                                <a href="ecommerce_low_stock.html"> Low Stock </a>
                            </li>
                            <li>
                                <a href="ecommerce_best_sellers.html"> Best Sellers </a>
                            </li>
                            <li>
                                <a href="ecommerce_refunds.html"> Refunds </a>
                            </li>
                            <li>
                                <a href="ecommerce_search_terms.html"> Search Terms </a>
                            </li>
                            <li>
                                <a href="ecommerce_newsletters.html"> Newsletters </a>
                            </li>
                            <li>
                                <a href="ecommerce_wizards.html"> Payment Wizard </a>
                            </li>
                            <li>
                                <a href="ecommerce_reviews.html"> Reviews </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="menu">
                        <a href="#ui-features" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-elements"></i>
                                <span>UI Kit</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ui-features"  data-parent="#accordionExample">
                            <li>
                                <a href="ui_helper_classes.html"> Helper Classes </a>
                            </li>
                            <li>
                                <a href="ui_color_library.html"> Color Library </a>
                            </li>
                            <li>
                                <a href="ui_grid.html"> Grid System </a>
                            </li>
                            <li>
                                <a href="ui_typography.html"> Typography </a>
                            </li>
                            <li>
                                <a href="ui_shadows.html"> Shadow </a>
                            </li>
                            <li>
                                <a href="ui_miscellaneous.html"> Miscellaneous </a>
                            </li>
                            <li>
                                <a href="ui_pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="ui_alert.html"> Alerts </a>
                            </li>
                            <li>
                                <a href="ui_tooltips_and_popovers.html"> Tooltips And Popovers </a>
                            </li>
                            <li>
                                <a href="ui_loader.html"> Loaders </a>
                            </li>
                            <li>
                                <a href="#ui-buttons" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Buttons <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="ui-buttons" data-parent="#ui-features">
                                    <li>
                                        <a href="ui_buttons.html"> Bootstrap </a>
                                    </li>
                                    <li>
                                        <a href="ui_creative.html"> Creative </a>
                                    </li>
                                    <li>
                                        <a href="ui_switches.html"> Switches </a>
                                    </li>
                                    <li>
                                        <a href="ui_social_button.html"> Social </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ui_sweetalert.html"> Sweet Alerts </a>
                            </li>
                            <li>
                                <a href="#ui-font-icons" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Font Icons <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="ui-font-icons" data-parent="#ui-features">
                                    <li>
                                        <a href="ui_flaticon_icon.html"> Flaticon </a>
                                    </li>
                                    <li>
                                        <a href="ui_linea_icon.html"> Linea </a>
                                    </li>
                                    <li>
                                        <a href="ui_themify_icon.html"> Themify </a>
                                    </li>
                                    <li>
                                        <a href="ui_pixeden_icon.html"> Pixeden </a>
                                    </li>
                                    <li>
                                        <a href="ui_fontawesome_icon.html"> Fontawesome </a>
                                    </li>
                                    <li>
                                        <a href="ui_metro_icon.html"> Metro </a>
                                    </li>
                                    <li>
                                        <a href="ui_weather_icon.html"> Weather </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ui_tabs.html"> Tabs </a>
                            </li>
                            <li>
                                <a href="ui_accordion.html"> Accordions  </a>
                            </li>
                            <li>
                                <a href="ui_modal.html"> Modals </a>
                            </li>
                            <li>
                                <a href="ui_sliders.html"> Range Sliders </a>
                            </li>
                            <li>
                                <a href="ui_timeline.html"> Timeline </a>
                            </li>
                            <li>
                                <a href="ui_tree.html"> Tree View </a>
                            </li>
                            <li>
                                <a href="#ui-progress" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Progress Bar <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="ui-progress" data-parent="#ui-features">
                                    <li>
                                        <a href="ui_bootstrap_progress_bar.html"> Bootstrap </a>
                                    </li>
                                    <li>
                                        <a href="ui_material_progress_bar.html"> Custom </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#ui-notification" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Notifications <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="ui-notification" data-parent="#ui-features">
                                    <li>
                                        <a href="ui_toastr.html"> Toastr </a>
                                    </li>
                                    <li>
                                        <a href="ui_notification.html"> Creative </a>
                                    </li>
                                    <li>
                                        <a href="ui_snackbar.html"> Snackbar </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ui_session_timeout.html"> Session Timeout </a>
                            </li>
                            <li>
                                <a href="ui_media_object.html"> Media Object </a>
                            </li>
                            <li>
                                <a href="ui_list_group.html"> List Group </a>
                            </li>
                            <li>
                                <a href="ui_nestable_list.html"> Nested List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-3d-cube"></i>
                                <span>Components</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                            <li>
                                <a href="component_portlet.html"> Portlets </a>
                            </li>
                            <li>
                                <a href="component_keypad.html"> Keypad </a>
                            </li>

                            <li>
                                <a href="#component-carousel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Carousel <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-carousel" data-parent="#components">                                    
                                    <li>
                                        <a href="component_bootstrap_carousel.html">Bootstrap</a>
                                    </li>
                                    <li>
                                        <a href="component_carousel.html">Metro</a>
                                    </li>
                                    <li>
                                        <a href="component_sliders.html">Swiper</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="component_rating.html"> Rating </a>
                            </li>
                            <li>
                                <a href="component_blockui.html"> Block UI </a>
                            </li>
                            <li>
                                <a href="component_popup.html"> Popup </a>
                            </li>
                            <li>
                                <a href="component_scroll_bars_basic.html"> Scrollbar </a>
                            </li>
                            <li>
                                <a href="component_todo_list.html"> Todo List </a>
                            </li>
                            <li>
                                <a href="component_scrollspy.html"> Scrollspy </a>
                            </li>
                            <li>
                                <a href="component_countdown.html"> Countdown </a>
                            </li>

                            <li>
                                <a href="component_counter.html"> Counter </a>
                            </li>
                            <li>
                                <a href="component_datetime_picker.html"> Date &amp; Time Picker </a>
                            </li>
                            <li>
                                <a href="component_lightbox.html"> LightBox </a>
                            </li>
                            <li>
                                <a href="component_color_picker.html"> Color Picker </a>
                            </li>
                            <li>
                                <a href="#component-media" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Media <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-media" data-parent="#components"> 
                                    <li>
                                        <a href="component_video_player.html"> Video Player </a>
                                    </li>
                                    <li>
                                        <a href="component_audio_player.html"> Audio Player </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="component_clipboard.html"> Clipboard </a>
                            </li>
                            <li>
                                <a href="component_typeahead.html"> Typeahead </a>
                            </li>
                            <li>
                                <a href="#component-search" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Search <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-search" data-parent="#components"> 
                                    <li>
                                        <a href="component_search_multiple.html"> Multiple </a>
                                    </li>
                                    <li>
                                        <a href="component_search_web.html"> Web </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#component-animation" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Animations <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-animation" data-parent="#components"> 
                                    <li>
                                        <a href="component_animation_buttons.html"> Buttons </a>
                                    </li>
                                    <li>
                                        <a href="component_animation_css.html"> CSS </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#component-img-crop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Image Cropping <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-img-crop" data-parent="#components"> 
                                    <li>
                                        <a href="component_image_cropping_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="component_image_cropping_advanced.html"> Advanced </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-copy-line"></i>
                                <span>Forms</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="forms" data-parent="#accordionExample">
                            <li>
                                <a href="#forms-bootstrap" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Bootstrap <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-bootstrap" data-parent="#forms"> 
                                    <li>
                                        <a href="form_bootstrap_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="form_bootstrap_rounded.html"> Rounded </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#forms-input-group" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Input Group <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-input-group" data-parent="#forms"> 
                                    <li>
                                        <a href="form_input_group_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="form_input_group_rounded.html"> Rounded </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="form_bootstrap_material.html"> Material </a>
                            </li>
                            <li>
                                <a href="#forms-layout" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Layouts <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-layout" data-parent="#forms"> 
                                    <li>
                                        <a href="form_layouts.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="form_layouts_rounded.html"> Rounded </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#forms-validation" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Validation <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-validation" data-parent="#forms"> 
                                    <li>
                                        <a href="form_validation.html"> Bootstrap </a>
                                    </li>
                                    <li>
                                        <a href="form_jqvalidation.html"> jQuery </a>
                                    </li>
                                    <li>
                                        <a href="form_validation_material.html"> Custom </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="form_input_mask.html"> Input Mask </a>
                            </li>
                            <li>
                                <a href="form_bootstrap_select.html"> Bootstrap Select </a>
                            </li>
                            <li>
                                <a href="form_select2.html"> Select2 </a>
                            </li>
                            <li>
                                <a href="form_bootstrap_touchspin.html"> TouchSpin </a>
                            </li>
                            <li>
                                <a href="form_multiselect.html"> Multi Select </a>
                            </li>
                            <li>
                                <a href="form_maxlength.html"> Maxlength </a>
                            </li>
                            <li>
                                <a href="form_repeater.html"> Repeater </a>
                            </li>                           
                            <li>
                                <a href="form_checkbox_radio.html"> Checkbox and Radio </a>
                            </li>

                            <li>
                                <a href="#forms-wizard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Wizards <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-wizard" data-parent="#forms"> 
                                    <li>
                                        <a href="form_bs_wizard.html"> Bootstrap </a>
                                    </li>
                                    <li>
                                        <a href="form_wizard.html"> jQuery Steps </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="form_fileupload.html"> File Upload </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-layers"></i>
                                <span>Elements</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                            <li>
                                <a href="element_steps.html"> Steps </a>
                            </li>
                            <li>
                                <a href="element_list.html"> List </a>
                            </li>
                            <li>
                                <a href="element_ribbon.html"> Ribbons </a>
                            </li>
                            <li>
                                <a href="element_overlays.html"> Overlays </a>
                            </li>
                            <li>
                                <a href="element_weatherapp.html"> Weather Apps </a>
                            </li>
                            <li>
                                <a href="element_testimonial.html"> Testimonials </a>
                            </li>
                            <li>
                                <a href="element_team.html"> Team </a>
                            </li>
                            <li>
                                <a href="element_contacts.html"> Contacts </a>
                            </li>
                            <li>
                                <a href="element_blog.html"> Blog Elements </a>
                            </li>
                            <li>
                                <a href="element_pricing_table.html"> Pricing Tables </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#editors" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-edit-2"></i>
                                <span>Editors</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="editors" data-parent="#accordionExample">
                            <li>
                                <a href="editor_tinymce.html"> Tinymce </a>
                            </li>
                            <li>
                                <a href="editor_quill.html"> Quill </a>
                            </li>
                            <li>
                                <a href="editor_markdown.html"> Markdown </a>
                            </li>
                            <li>
                                <a href="editor_contenttools.html"> ContentTools </a>
                            </li>
                            <li>
                                <a href="editor_summernote.html"> Summernote </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-table"></i>
                                <span>Tables</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tables" data-parent="#accordionExample">
                            <li>
                                <a href="table_basic.html"> Basic </a>
                            </li>
                            <li>
                                <a href="table_tablesaw.html"> Tablesaw</a>
                            </li>
                            <li>
                                <a href="table_sticky_table_header.html"> Sticky Headers</a>
                            </li>
                            <li>
                                <a href="#tables-editable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Editable <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="tables-editable" data-parent="#tables"> 
                                    <li>
                                        <a href="table_jq_spreadsheet.html"> Spreadsheet </a>
                                    </li>
                                    <li>
                                        <a href="table_jquery_tabledit.html"> TableEdit </a>
                                    </li>
                                    <li>
                                        <a href="table_editablegrid.html"> Editable Grid </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#tables-data-tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="tables-data-tables" data-parent="#tables"> 
                                    <li>
                                        <a href="table_dt_zero_configuration.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                    </li>
                                    <li>
                                        <a href="table_dt_alternative_pagination.html"> Alternative Pagination</a>
                                    </li>
                                    <li>
                                        <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_custom.html"> Custom </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_scrollable.html"> Scrollable </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_range_search.html"> Range Search </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_html5.html"> HTML5 Export </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-bar-chart-2"></i>
                                <span>Charts</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="charts" data-parent="#accordionExample">
                            <li>
                                <a href="#chart-amcharts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> amCharts <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="chart-amcharts" data-parent="#charts"> 
                                    <li>
                                        <a href="am_column_and_barchart.html"> Column &amp; Bar </a>
                                    </li>
                                    <li>
                                        <a href="am_line_and_areachart.html"> Line &amp; Area </a>
                                    </li>
                                    <li>
                                        <a href="am_pie_and_donutchart.html"> Pie &amp; Donut </a>
                                    </li>
                                    <li>
                                        <a href="am_gauge_and_otherchart.html"> Gauges  &amp; Other </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#chart-c3chart" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> C3 <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="chart-c3chart" data-parent="#charts"> 
                                    <li>
                                        <a href="charts_c3_chart.html"> Simple</a>
                                    </li>
                                    <li>
                                        <a href="charts_c3_api.html"> Api </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="charts_cssplot.html"> CSS Plot </a>
                            </li>
                            <li>
                                <a href="charts_morris.html"> Morris </a>
                            </li>
                            <li>
                                <a href="charts_flowchart.html"> Flowcharts </a>
                            </li>
                            <li>
                                <a href="charts_jQuery_sparklines.html"> jQuery Sparklines </a>
                            </li>
                            <li>
                                <a href="#chart-echart" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> eCharts <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="chart-echart" data-parent="#charts"> 
                                    <li>
                                        <a href="charts_echart_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="charts_echart_candlestick.html"> Candlestick </a>
                                    </li>
                                    <li>
                                        <a href="charts_echart_funnel_radar.html"> Funnel & Radar </a>
                                    </li>
                                    <li>
                                        <a href="charts_echart_scatters.html"> Scatter </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#chart-chartist" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Chartist <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="chart-chartist" data-parent="#charts"> 
                                    <li>
                                        <a href="charts_chartist_bar.html"> Bar </a>
                                    </li>
                                    <li>
                                        <a href="charts_chartist_line.html"> Line &amp; Area </a>
                                    </li>
                                    <li>
                                        <a href="charts_chartist_pie.html"> Pie </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="charts_google.html"> Google </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#maps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-map-1"></i>
                                <span>Maps</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="maps" data-parent="#accordionExample">
                            <li>
                                <a href="#map-googleMaps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Google <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="map-googleMaps" data-parent="#maps"> 
                                    <li>
                                        <a href="map_google_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="map_google_event.html"> Event </a>
                                    </li>
                                    <li>
                                        <a href="map_google_controls_interaction.html"> Controls and Interaction </a>
                                    </li>
                                    <li>
                                        <a href="map_google_styles.html"> Styles </a>
                                    </li>
                                    <li>
                                        <a href="map_google_other.html"> Other </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#map-jqMapael" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> jquery Mapael <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="map-jqMapael" data-parent="#maps"> 
                                    <li>
                                        <a href="map_jquerymapael_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="map_jquerymapael_advanced.html"> Advanced </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="map_jhere.html"> jhere </a>
                            </li>
                            <li>
                                <a href="map_open_layers.html"> OpenLayers </a>
                            </li>
                            <li>
                                <a href="#map-vMaps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Vector Maps <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="map-vMaps" data-parent="#maps"> 
                                    <li>
                                        <a href="map_amvector.html"> amVector</a>
                                    </li>
                                    <li>
                                        <a href="map_jvector.html"> jVector</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#mailing" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-mail-19"></i>
                                <span>Apps</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="mailing" data-parent="#accordionExample">
                            <li>
                                <a href="apps_chat.html"> Chat </a>
                            </li>
                            <li>
                                <a href="apps_mailbox.html"> Mailbox </a>
                            </li>
                            <li>
                                <a href="apps_mailbox_with_chat.html"> Mailbox With Chat </a>
                            </li>
                            <li>
                                <a href="apps_newsletter.html"> Newsletter </a>
                            </li>
                            <li>
                                <a href="apps_scheduler.html"> Scheduler </a>
                            </li>
                            <li>
                                <a href="#apps-calendars" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Calendar <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="apps-calendars" data-parent="#apps-calendars"> 
                                    <li>
                                        <a href="apps_basic_calendar.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="apps_full_calendar.html"> Full Calendar </a>
                                    </li>
                                    <li>
                                        <a href="apps_drag_n_drop_calendar.html"> Drag n Drop </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#modules" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-5"></i>
                                <span>Modules</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="modules" data-parent="#accordionExample">
                            <li>
                                <a href="modules_widgets.html"> Widgets </a>
                            </li>
                            <li>
                                <a href="modules_table_and_event.html"> Tables &amp; Events </a>
                            </li>
                            <li>
                                <a href="modules_charts_and_maps.html"> Charts &amp; Maps </a>
                            </li>
                            <li>
                                <a href="modules_weather_and_calendar.html"> Weather &amp; Calendar </a>
                            </li>
                            <li>
                                <a href="modules_cards.html"> Cards </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#users" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-user-group"></i>
                                <span>Users</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="users" data-parent="#accordionExample">
                            <li class="active">
                                <a href="user_profile.html"> Profile </a>
                            </li>
                            <li>
                                <a href="user_account_setting.html"> Account Settings </a>
                            </li>

                            <li>
                                <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#users"> 
                                    <li>
                                        <a href="user_login_1.html"> Login 1 </a>
                                    </li>
                                    <li>
                                        <a href="user_login_2.html"> Login 2 </a>
                                    </li>
                                    <li>
                                        <a href="user_login_3.html"> Login 3 </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#user-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Register <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#users"> 
                                    <li>
                                        <a href="user_register_1.html"> Register 1 </a>
                                    </li>
                                    <li>
                                        <a href="user_register_2.html"> Register 2 </a>
                                    </li>
                                    <li>
                                        <a href="user_register_3.html"> Register 3 </a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="#user-passRecovery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Password Recovery <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#users"> 
                                    <li>
                                        <a href="user_pass_recovery_1.html"> Password Recovery 1 </a>
                                    </li>
                                    <li>
                                        <a href="user_pass_recovery_2.html"> Password Recovery 2 </a>
                                    </li>
                                    <li>
                                        <a href="user_pass_recovery_3.html"> Password Recovery 3 </a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="#user-lockscreen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Lockscreen <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-lockscreen" data-parent="#users"> 
                                    <li>
                                        <a href="user_lockscreen_1.html"> Lockscreen 1 </a>
                                    </li>
                                    <li>
                                        <a href="user_lockscreen_2.html"> Lockscreen 2 </a>
                                    </li>
                                    <li>
                                        <a href="user_lockscreen_3.html"> Lockscreen 3 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-copy"></i>
                                <span>Pages</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
                            <li>
                                <a href="pages_blank_page.html"> Blank Page</a>
                            </li>
                            <li>
                                <a href="pages_helpdesk.html"> Helpdesk </a>
                            </li>
                            <li>
                                <a href="pages_contact_us.html"> Contact Form </a>
                            </li>
                            <li>
                                <a href="pages_faq.html"> FAQ </a>
                            </li>
                            <li>
                                <a href="pages_blog.html"> Blog </a>
                            </li>                            
                            <li>
                                <a href="pages_privacy.html"> Privacy Policy </a>
                            </li>
                            <li>
                                <a href="pages_cookie_consent.html"> Cookie Consent </a>
                            </li>
                            <li>
                                <a href="pages_landing_page.html" target="_blank"> Landing Page </a>
                            </li>
                            <li>
                                <a href="pages_coming_soon.html"> Coming Soon </a>
                            </li>

                            <li>
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages"> 
                                    <li>
                                        <a href="pages_error404.html"> 404 1 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error404-2.html"> 404 2 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error500.html"> 500 1 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error500-2.html"> 500 2 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error503.html"> 503 1 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error503-2.html"> 503 2 </a>
                                    </li>
                                    <li>
                                        <a href="pages_maintenence.html"> Maintanence </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#dragndrop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-redo-1"></i>
                                <span>Drag and Drop</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dragndrop" data-parent="#accordionExample">
                            <li>
                                <a href="dragndrop_gridstack.html"> Grid Stack</a>
                            </li>
                            <li>
                                <a href="dragndrop_dragula.html"> Dragula</a>
                            </li>
                            <li>
                                <a href="#dragndrop-jqueryui" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> jQuery UI <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="dragndrop-jqueryui" data-parent="#dragndrop"> 
                                    <li>
                                        <a href="dragndrop_ui_product_cart.html"> Shopping Cart </a>
                                    </li>
                                    <li>
                                        <a href="dragndrop_scrumboard.html"> Scrum Task Board</a>
                                    </li>                                    
                                    <li>
                                        <a href="dragndrop_scroll_bars.html"> Scrollbar</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#menulevel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-menu-4"></i>
                                <span>Menu Level</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="menulevel" data-parent="#accordionExample">
                            
                            <li>
                                <a href="javascript:void(0);"> Sample Link 1 </a>
                            </li>
                            <li>
                                <a href="#menulevel-sample-link1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Sub Menu 2 <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="menulevel-sample-link1" data-parent="#menulevel"> 
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 1 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 2 </a>
                                    </li>                                    
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 3 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#menulevel-sample-link2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Sub Menu 3 <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="menulevel-sample-link2" data-parent="#menulevel"> 
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 1 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 2 </a>
                                    </li>                                    
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 3 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Sample Link 2 </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Sample Link 3 </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>

        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
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
                            <div id="profile-header" class="" style="background: #fff url(assets/img/header.jpg) no-repeat center center;background-size: cover;">
                                <div class="row">
                                    <div class=" profile-section col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media ml-sm-5 ml-1">
                                                    <img class="mr-sm-3 mr-2 usr-img" src="assets/img/user-profile.jpg" alt="usr-img">
                                                    <div class="media-body">
                                                        <h5 class="usr-name">Shaun Park</h5>
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
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-selected="true">Timeline</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-selected="false">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-picture-tab" data-toggle="pill" href="#pills-picture" role="tab" aria-selected="false">Pictures</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-friend-tab" data-toggle="pill" href="#pills-friend" role="tab" aria-selected="false">Friends</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <div class="dropdown custom-dropdown-icon mt-2">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="flaticon-dot-three"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="flaticon-menu-dot-fill"></i> Profile</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="flaticon-bell-14"></i> Notification</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="flaticon-settings-7"></i> Settings</a>
                                                    </div>
                                                </div>
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
                                                <p class="mb-3"><span class="usr-work-position">Project Manager </span> at <a href="#">DesignReset</a></p>
                                                <p class="mb-4"><span class="usr-work-position">3D Artist and Animator</span> at <a href="#">Concept Agency</a></p>
                                                <p>Lives in Los Angeles, CA</p>
                                                <p>Joined March 2014</p>
                                                <p>Followed by 256 people</p>                                                
                                                <p>Joined 17 Groups</p>
                                                <div class="social-networks-section mt-5">
                                                    <h4 class="mb-4">Other Networks</h4>
                                                    <div class="row">
                                                        <div class="col-sm-12 text-center">
                                                            <div class="btn btn-outline-primary btn-rounded mb-4 mr-2">Facebook</div>
                                                            <div class="btn btn-outline-success btn-rounded mb-4 mr-2">Line</div>
                                                            <div class="btn btn-outline-warning btn-rounded mb-4 mr-2">Behance</div>
                                                            <div class="btn btn-outline-info btn-rounded mb-4 mr-2">Twitter</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="friends-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class=""><i class="flaticon-user-7"></i> Friends</h4>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><img alt="admin-profile" src="assets/img/profile-1.jpg"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="assets/img/profile-2.jpg"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="assets/img/profile-13.jpg"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="assets/img/profile-6.jpg"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="assets/img/profile-7.jpg"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="assets/img/profile-16.jpg"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="group-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class=""><i class="flaticon-user-6"></i>Groups</h4>
                                                    </div>                                                    
                                                    <div class="col-sm-12 text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <span class="badge badge-danger counter"> 12 </span>
                                                                <img alt="image-icon" src="assets/img/g-1.png">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="assets/img/g-2.png">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="assets/img/g-3.png">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="assets/img/g-4.png">
                                                                <span class="badge badge-secondary counter">8</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="assets/img/g-5.png">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="assets/img/g-6.png">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="assets/img/g-7.png">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="assets/img/g-8.png">
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="assets/img/g-9.png">
                                                                <span class="badge badge-success counter">6</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <img alt="image-icon" src="assets/img/g-10.png">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="weather-section mb-4 br-6">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-between w-real-data">
                                                    <div class="w-real-time">
                                                        <div class="time d-flex">
                                                            <p id="hour" class="mb-0"></p>
                                                            <p id="minut" class="mb-0"></p>
                                                            <p id="date" class="mb-0"></p>
                                                        </div>
                                                    </div>
                                                    <div class="w-real-day">
                                                        <div class="date d-flex">
                                                            <div id="day"></div>
                                                            <div id="month"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 text-center">                                                
                                                <div class="w-stats mb-4">                                                    
                                                    <i class="flaticon-weather mb-4"></i>
                                                    <p class="w-temp"><span>13</span></p>
                                                    <p class="w-txt">Showers</p>
                                                </div>
                                            </div>

                                            <div class="col-md-12">                                                
                                                <div class="d-flex justify-content-between w-location">                                                    
                                                    <div class="w-location-city">Los Angeles</div>
                                                    <div class="w-location-country">CA</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="photo-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class=""><i class="flaticon-photo-camera"></i> Photos</h4>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><img alt="image-gallery" src="assets/img/p1.jpg"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="assets/img/p10.jpg"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="assets/img/p3.jpg"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="assets/img/p4.jpg"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="assets/img/p5.jpg"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="assets/img/p6.jpg"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="assets/img/p7.jpg"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="assets/img/p8.jpg"></li>
                                                            <li class="list-inline-item"><img alt="image-gallery" src="assets/img/p9.jpg"></li>
                                                        </ul>
                                                    </div>
                                                </div>
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
                                                            <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                                                                <li class="nav-item text-sm-left text-center">
                                                                    <a class="nav-link active" id="pills-status-tab" data-toggle="pill" href="#pills-status" role="tab" aria-selected="true"><i class="flaticon-copy-line"></i> Status</a>
                                                                </li>
                                                                <li class="nav-item text-sm-left text-center">
                                                                    <a class="nav-link" id="pills-multimedia-tab" data-toggle="pill" href="#pills-multimedia" role="tab" aria-selected="false"><i class="flaticon-display"></i> Media</a>
                                                                </li>
                                                                <li class="nav-item text-sm-left text-center">
                                                                    <a class="nav-link" id="pills-blog-post-tab" data-toggle="pill" href="#pills-blog-post" role="tab" aria-selected="false"><i class="flaticon-edit-6"></i> Post</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content" id="pills-tabContent2">

                                                                <div class="tab-pane fade show active" id="pills-status" role="tabpanel" aria-labelledby="pills-status-tab">
                                                                    <form>
                                                                        <div class="media">
                                                                            <img class="mr-3" src="assets/img/user-profile.jpg" alt="admin-profile">
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
                                                                            <img class="mr-3" src="assets/img/user-profile.jpg" alt="admin-profile">
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
                                                                            <img class="mr-3" src="assets/img/user-profile.jpg" alt="admin-profile">
                                                                            <div class="media-body">
                                                                                <div class="form-group">
                                                                                    <textarea placeholder="Write a Post" class="form-control" id="exampleFormControlTextarea3" rows="4"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                            <div class="editor-bottom-section">
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-sm-12">

                                                    <div class="card post text-post mb-4" style="">
                                                        <div class="card-body">
                                                            <div class="media user-meta">
                                                                <img class="mr-3" src="assets/img/user-profile.jpg" alt="admin-profile">
                                                                <div class="media-body">
                                                                    <h4 class="mt-0">Shaun Park</h4>
                                                                    <p class="meta-time">11 hours ago</p>
                                                                </div>
                                                            </div>

                                                            <div class="post-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation.</p>
                                                            </div>

                                                            <ul class="list-inline action-options">
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-like-1"></i> Like</a></li>
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-chat-bubble-line"></i> Comment</a></li>
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-share-2"></i> Share</a></li>
                                                            </ul>

                                                            <div class="row people-liked-post">
                                                                <div class="col-sm-5 text-center">
                                                                    <ul class="list-inline people-liked-img">
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="assets/img/profile-6.jpg" class="ml-0">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="assets/img/profile-7.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="assets/img/profile-8.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="assets/img/profile-10.jpg">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-7 text-sm-left text-center pb-sm-0 pb-4">
                                                                    <div class="people-liked-post-name">
                                                                        <span><a href="#">Vincent, Mary</a> and 19 other like this</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="media usr-comments">
                                                                <img class="mr-3" src="assets/img/user-profile.jpg" alt="admin-profile">
                                                                <div class="media-body">
                                                                    <input type="text" class="form-control" placeholder="Write a comment...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card post image-post mb-4" style="">
                                                        <div class="card-body">
                                                            <div class="media user-meta">
                                                                <img class="mr-3" src="assets/img/user-profile.jpg" alt="admin-profile">
                                                                <div class="media-body">
                                                                    <h4 class="mt-0">Shaun Park</h4>
                                                                    <p class="meta-time">18 hours ago</p>
                                                                </div>
                                                            </div>

                                                            <div class="post-content">
                                                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                <div class="photo mx-auto text-center">
                                                                    <img alt="image-sample" src="assets/img/center-img.jpg" class="img-fluid">
                                                                </div>
                                                            </div>

                                                            <ul class="list-inline action-options">
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-like-1"></i> Like</a></li>
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-chat-bubble-line"></i> Comment</a></li>
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-share-2"></i> Share</a></li>
                                                            </ul>

                                                            <div class="row people-liked-post">
                                                                <div class="col-sm-5 text-center">
                                                                    <ul class="list-inline people-liked-img">
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="assets/img/profile-6.jpg" class="ml-0">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="assets/img/profile-7.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="assets/img/profile-8.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="assets/img/profile-10.jpg">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-7 text-sm-left text-center pb-sm-0 pb-4">
                                                                    <div class="people-liked-post-name">
                                                                        <span><a href="#">Amy, Dale</a> and 22 other like this</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="media usr-comments">
                                                                <img class="mr-3" src="assets/img/user-profile.jpg" alt="admin-profile">
                                                                <div class="media-body">
                                                                    <input type="text" class="form-control" placeholder="Write a comment...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card post gallery-post mb-4" style="">
                                                        <div class="card-body">
                                                            <div class="media user-meta">
                                                                <img class="mr-3" src="assets/img/user-profile.jpg" alt="admin-profile">
                                                                <div class="media-body">
                                                                    <h4 class="mt-0">Shaun Park</h4>
                                                                    <p class="meta-time">21 hours ago</p>
                                                                </div>
                                                            </div>

                                                            <div class="post-content">
                                                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua.</p>

                                                                <div class="gallery text-center mx-auto">
                                                                    <img alt="image-gallery" src="assets/img/center-img-2.jpg" class="img-fluid mb-3 mt-3 mr-1" style="width: 209px; height: 180px;">
                                                                    <img alt="image-gallery" src="assets/img/center-img-1.jpg" class="img-fluid mb-3 mt-3 mr-1" style="width: 209px; height: 180px;">
                                                                    <img alt="image-gallery" src="assets/img/center-img-3.jpg" class="img-fluid mb-3 mr-1" style="width: 138px; height: 120px;">
                                                                    <img alt="image-gallery" src="assets/img/center-img-4.jpg" class="img-fluid mb-3 mr-1" style="width: 138px; height: 120px;">
                                                                    <img alt="image-gallery" src="assets/img/center-img-5.jpg" class="img-fluid mb-3 mr-1" style="width: 138px; height: 120px;">
                                                                </div>
                                                            </div>

                                                            <ul class="list-inline action-options">
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-like-1"></i> Like</a></li>
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-chat-bubble-line"></i> Comment</a></li>
                                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-share-2"></i> Share</a></li>
                                                            </ul>

                                                            <div class="row people-liked-post">
                                                                <div class="col-sm-5 text-center">
                                                                    <ul class="list-inline people-liked-img">
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="assets/img/profile-6.jpg" class="ml-0">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="assets/img/profile-7.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="assets/img/profile-8.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="assets/img/profile-10.jpg">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-7 text-sm-left text-center pb-sm-0 pb-4">
                                                                    <div class="people-liked-post-name">
                                                                        <span><a href="#">Luke, Daisy</a> and 32 other like this</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="media usr-comments">
                                                                <img class="mr-3" src="assets/img/user-profile.jpg" alt="admin-profile">
                                                                <div class="media-body">
                                                                    <input type="text" class="form-control" placeholder="Write a comment...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">

                                    <div class="banner-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <h4 class="">Music Concert</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="instagram-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class=""><i class=""></i> Instagram</h4>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><img alt="admin-profile" src="assets/img/7.jpg"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="assets/img/8.jpg"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="assets/img/9.jpg"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="assets/img/10.jpg"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="assets/img/11.jpg"></li>
                                                            <li class="list-inline-item"><img alt="admin-profile" src="assets/img/12.jpg"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="calendar-section mb-4">
                                        <div class="card pb-3" style="">
                                            <div class="card-body">
                                                <div id="calendar" class="bx-top-6">
                                                    <div class="pb-5 mb-2 bx-top-6">
                                                        <div id="monthrow" class="bx-top-6">
                                                            <button id="prev" onclick="prevMonth()">&#10094;</button>
                                                            <span id="monthc"></span>
                                                            <button id="next" onclick="nextMonth()">&#10095;</button>
                                                        </div>
                                                        <div class="daysoftheweek">
                                                            <div>Su</div>
                                                            <div>Mo</div>
                                                            <div>Tu</div>
                                                            <div>We</div>
                                                            <div>Th</div>
                                                            <div>Fr</div>
                                                            <div>Sa</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    

                                    <div class="slideshow-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="assets/img/1.jpg" alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="assets/img/2.jpg" alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="assets/img/3.jpg" alt="Third slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                        <span class="icon flaticon-left-arrow" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="icon flaticon-right-arrow" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="active-feeds-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <h4 class="">Activity Feed</h4>

                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="assets/img/profile-2.jpg" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented">Angie Lamb</span> Commented on Shaun Park's <span class="comment-topic">photo</span></h5>
                                                        <p class="meta-time">8 min ago</p>
                                                    </div>
                                                </div>
                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="assets/img/profile-6.jpg" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented">Linda Nelson</span> Commented on Shaun Park's <span class="comment-topic">photo</span></h5>
                                                        <p class="meta-time">15 min ago</p>
                                                    </div>
                                                </div>
                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="assets/img/profile-4.jpg" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented">Alma Clarke</span> Commented on Shaun Park's <span class="comment-topic">photo</span></h5>
                                                        <p class="meta-time">18 min ago</p>
                                                    </div>
                                                </div>
                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="assets/img/profile-5.jpg" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented">John Doe</span> Commented on Shaun Park's <span class="comment-topic">photo</span></h5>
                                                        <p class="meta-time">20 min ago</p>
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
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->
    
    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">
            
        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    <ul class="list-inline links ml-sm-5">
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Home</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Blog</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">Buy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; 2019 <a target="_blank" href="https://designreset.com/equation">Equation Admin Theme</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->

    <!--  BEGIN CONTROL SIDEBAR  -->
    <aside class="control-sidebar control-sidebar-light-color cs-content">
        <div class="">

            <div class="row">
                <div class="col-md-12 text-right">
                    <div class="close-sidebar">
                        <i class="flaticon-close-fill p-3 toggle-control-sidebar"></i>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="usr-info text-center mb-5">
                        <img alt="admin-profile" src="assets/img/c-14.jpg" class="img-fluid rounded-circle mb-3">
                        <div class=" mt-2">
                            <h5 class="usr-name mb-0">Linda Nelson</h5>
                            <p class="usr-occupation mb-0 mt-1">Developer</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-navigation-section text-center mb-5 mt-3">
                <ul class="nav nav-tabs nav-justified mx-2">
                    <li class="nav-item">
                        <a data-toggle="tab" href="#feeds-tab" class="nav-link rounded-circle active show">
                            <p class="mb-0">Task</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#friends-tab" class="nav-link rounded-circle">
                            <p class="mb-0">Friends</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#alerts-tab" class="nav-link rounded-circle">
                            <p class="mb-0">Settings</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">

                <div id="feeds-tab" class="tab-pane tab-1 fade show active">
                    
                    <div class="tasks">

                        <div class="recent">

                            <div class="d-flex justify-content-between mb-5">
                                
                                <div class="icon">
                                    <i class="flaticon-clock-1"></i>
                                </div>


                                <div>
                                    <span class="">Today</span> <span class="notification-count ml-2">12</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>

                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-13.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Sean Freeman</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-15.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Laurie Fox</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                            <div class="media system-notify">
                                <i class="flaticon-settings-7  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">System Notifications</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>


                            <div class="media mail-notify">
                                <i class="flaticon-folder-fill-1  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">Ricky Turner</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                        </div>



                        <div class="today mt-5">
                            
                            <div class="d-flex justify-content-between mb-5">
                                
                                <div class="icon">
                                    <i class="flaticon-bell-fill-1"></i>
                                </div>
                                <div>
                                    <span>Yesterday</span> <span class="notification-count ml-2">8</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>

                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-7.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Angie Lamb</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-5.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Amy Diaz</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-7.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Irene Collins</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-9.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Lila Perry</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>


                        </div>


                        <div class="task-stats mt-5">
                            
                            <div class="t-s-header mb-5">
                                <div class="row">
                                    <div class="col-md-10 text-center">
                                        <h6><span>Task Statistics</span></h6>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <i class="flaticon-close-fill"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="t-s-body">
                                
                                <div class="row">

                                    <div class="col-md-12">
                                        
                                        <div class="d-flex justify-content-between">
                                            <p>Feature Development</p>
                                            <p>70%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        
                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Uploading files</p>
                                            <p>30%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-danger" role="progressbar" style="width: 30%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        
                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Total Progress</p>
                                            <p>86%</p>
                                        </div>

                                        <div class="progress  br-30">
                                            <div class="progress-bar  br-30 bg-info" role="progressbar" style="width: 86%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                </div>

                                <div class="text-center mt-5 mb-5">
                                    <button class="btn btn-primary btn-rounded mb-5">See all</button>
                                </div>
                                
                            </div>

                        </div>

                    </div>
                </div>

                <div id="friends-tab" class="tab-pane tab-2 fade">

                    <div class="friends">

                        <div class="recent">

                            <div class="t-s-header mb-5">

                                <div class="row">
                                    
                                    <div class="col-md-8 text-center">
                                        <h6>
                                            <span>New Activity</span>
                                        </h6>
                                    </div>

                                    <div class="col-md-4">
                                        <div>
                                            <p>See all</p>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <ul class="list-inline text-center mb-5">
                                
                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-1.jpg">
                                    <span class="badge badge-pill badge-new">8</span>
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-2.jpg">
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-13.jpg">
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-3.jpg">
                                    <span class="badge badge-pill badge-new">5</span>
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-4.jpg">
                                </li>

                            </ul>


                            <div class="friend-request">
                                
                                <div class="d-flex justify-content-between header mb-5">
                                    
                                    <div class="media">
                                        <i class="flaticon-user-plus mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-1">Friend request</h6>
                                        </div>
                                    </div>

                                    <div>
                                        <p class="mb-0 mt-2">See all</p>
                                    </div>

                                </div>

                                <div class="media">
                                    <img alt="admin-profile" src="assets/img/c-15.jpg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Kara Young</h6>
                                        <p>2 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/P-2.jpg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Justin Cross</h6>
                                        <p>5 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/c-5.jpg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Amy Diaz</h6>
                                        <p>7 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>


                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/c-6.jpg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Ernest Reeves</h6>
                                        <p>10 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                            </div>


                        </div>



                        <div class="online mt-5">
                            
                            <div class="t-s-header mb-5">

                                <div class="row">
                                    
                                    <div class="col-md-8 text-center">
                                        <h6>
                                            <span>Online</span>
                                        </h6>
                                    </div>

                                    <div class="col-md-4">
                                        <div>
                                            <p class="mb-0 mt-0">See all</p>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3" src="assets/img/c-7.jpg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Irene Collins</span><span class="badge badge-info float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p><p class="meta-time">7 mins ago</p>
                                </div>
                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 rounded" src="assets/img/c-8.jpg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Thomas Granger</span><span class="badge badge-secondary float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p><p class="meta-time">13 mins ago</p>
                                </div>
                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 rounded-circle" src="assets/img/c-9.jpg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Grace Roberts</span><span class="badge badge-warning float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p><p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                        </div>


                        <div class="away-stats">
                            

                            <div class="t-s-header mb-5 mt-5">

                                <div class="row">
                                        
                                    <div class="col-md-12">
                                        <h6>
                                            <span>Away</span>
                                        </h6>
                                    </div>

                                </div>

                            </div>

                            <div class="a-s-media mb-5">
                                    
                                <div class="media mb-3">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/profile-16.jpg" class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Traci Lopez</h6>
                                    </div>
                                </div>
                                
                                <div class="media mb-3">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/c-11.jpg" class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Kristen Beck</h6>
                                    </div>
                                </div>
                                
                                <div class="media mb-5">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/c-12.jpg" class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Keith Foster</h6>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <div id="alerts-tab" class="tab-pane tab-3 fade">

                    <div class="settings">

                        <div class="admin-setting">


                            <div class="d-flex justify-content-between">
                                        
                                <div class="media">
                                    <i class="flaticon-gear-5 mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">Admin settings</h6>
                                    </div>
                                </div>

                                <div>
                                    <p class="mb-0 mt-2">See all</p>
                                </div>

                            </div>


                            <div class="mb-3 mt-5">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show notifications</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Enable auto logout</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show recent activity</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Chat history</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Users activity</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Orders history</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show task statistics</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="general-setting mt-5">


                            <div class="d-flex justify-content-between mb-5">
                                        
                                <div class="media">
                                    <i class="flaticon-gear-5 mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">General Settings</h6>
                                    </div>
                                </div>

                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-facebook-logo fb"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-dribbble-bold dribbble"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-linkedin-logo lin"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-twitter-logo tweet"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-behance-logo behance"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>



                            


                            <div class="chk-settings mt-5">
                                
                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title">Report panel usage</span>
                                        </h6>
                                        <p class="media-text">
                                            Show information on any malicious activity
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title">Allow mail redirect</span>
                                        </h6>
                                        <p class="media-text">
                                            Redirect mail through exchange server
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Show author name in posts</span>
                                        </h6>
                                        <p class="media-text">
                                            Allow the user to show his name in blog posts
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Sync phone when connected to the PC</span>
                                        </h6>
                                        <p class="media-text">
                                            Connect smart phone automatically and sync with user profile
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                            </div>


                            <div class="mt-5 delete-chat mb-5">
                                
                                <div class="media mb-4">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Delete chat history</span>
                                        </h6>
                                    </div>
                                    <i class="del-chat-his flaticon-delete-1 mb-4"></i>

                                </div>

                            </div>


                            

                            <div class="mt-5 usr-status mb-5">
                                
                                <div class="d-flex justify-content-between mb-5">
                                        
                                    <div class="media">
                                        <i class="flaticon-chat-fill mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-2">Status</h6>
                                        </div>
                                    </div>

                                </div>

                                <div class="media mb-2 stats">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Online</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label class="new-control new-checkbox  mr-1  checkbox-outline-success new-checkbox-rounded">
                                          <input type="checkbox" class="chb new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>

                                </div>


                                <div class="media mb-2 stats">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Offline</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label class="new-control new-checkbox  mr-1  checkbox-outline-default new-checkbox-rounded">
                                          <input type="checkbox" class="chb new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>



                                <div class="media mb-5 stats">
                                    <div class="media-body mb-5">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Away</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label class="new-control new-checkbox  mr-1  checkbox-outline-warning new-checkbox-rounded">
                                          <input type="checkbox" class="chb new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </aside>
    <!--  END CONTROL SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
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

<!-- Mirrored from designreset.com/preview-equation/default-light/user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Oct 2022 08:31:17 GMT -->
</html>