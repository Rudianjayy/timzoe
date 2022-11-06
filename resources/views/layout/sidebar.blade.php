<div class="sidebar-wrapper sidebar-theme">

    <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>

    <nav id="sidebar">

        <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
            <li class="nav-item d-flex">
                <a href="index.html" class="navbar-brand">
                    <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/logo-3.png') }}" class="img-fluid" alt="logo">
                </a>
                <p class="border-underline"></p>
            </li>
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> Equation </a>
            </li>
        </ul>


        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-computer-6 ml-3"></i>
                        <span>Dashboard</span>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                    <li class="active">
                        <a href="/welcome"> <i class="flaticon-computer-4"></i> Dashboard </a>
                    </li>
                   
                </ul>
            </li>
            <li class="menu">
                <a href="#ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-cart-2"></i>
                        <span>Tentang Kami</span>
                    </div>
                    <div>
                        <i class="flaticon-right-arrow"></i>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="ecommerce" data-parent="#accordionExample">
                    <li>
                        <a href="/profilsekolahadmin"> Profil Sekolah</a>
                    </li>
                    <li>
                        <a href="/visimisiadmin"> Visi & Misi </a>
                    </li>
                    <li>
                        <a href="/identitas_admin"> Identitas Sekolah </a>
                    </li>
                    <li>
                        <a href="/fasilitasadmin"> Fasilitas Sekolah </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

</div>
