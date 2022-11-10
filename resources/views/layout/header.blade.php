<header class="header navbar fixed-top navbar-expand-sm">
    <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>


    <div>
        <p class="info">
           <h6> <a href="#" class="d-block" style="color: rgb(226, 10, 10); align-items:center; display:flex; margin-top:12px;">Halo {{ Auth::user()->name }} :)</a></h6>
        </p>
    </div>

    <ul class="navbar-nav flex-row ml-lg-auto">
        <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-user-12"></span>
            </a>
            <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                <a class="dropdown-item" href="/profiladmin">
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
