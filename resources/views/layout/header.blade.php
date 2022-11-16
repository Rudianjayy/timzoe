<header class="header navbar fixed-top navbar-expand-sm">
    <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>


    <div>
        <p class="info">
           <h6> <a href="#" class="d-block" style="color: #805dca; align-items:center; display:flex; margin-top:12px;">Halo {{ Auth::user()->name }} :)</a></h6>
        </p>
    </div>

    <ul class="navbar-nav flex-row ml-lg-auto">
        <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-user-12"></span>
            </a>
            <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                <a class="dropdown-item" href="/profiladmin">
                    <i class="mr-1 flaticon-user-6"></i> <span>Profil</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout"  onclick="return confirm('Anda yakin ingin logout?')">
                    <i class="flaticon-logout"></i> <span>Log Out</span>
                </a>
            </div>
        </li>

        {{-- <li class="nav-item dropdown cs-toggle order-lg-0 order-3">
            <a href="#" class="nav-link toggle-control-sidebar suffle">
                <span class="flaticon-menu-dot-fill d-lg-inline-block d-none"></span>
                <span class="flaticon-dots d-lg-none"></span>
            </a>
        </li> --}}
    </ul>
</header>
