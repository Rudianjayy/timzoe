<header class="header navbar fixed-top navbar-expand-sm">
    <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i
            class="flaticon-menu-line-2"></i></a>


    <div>
        <p class="info">
        <h6> <a href="#" class="d-block"
                style="color: #805dca; align-items:center; display:flex; margin-top:12px;">Halo {{ Auth::user()->name }}
                :)</a></h6>
        </p>
    </div>
    @php
        $status = App\Models\Formulir::where('id_user', Auth::user()->id)->get();
        $total_status = App\Models\Formulir::where('id_user', Auth::user()->id)->count();
    @endphp
    <ul class="navbar-nav flex-row mr-lg-auto ml-lg-0  ml-auto">
        @foreach ($status as $s)
            <li class="nav-item dropdown notification-dropdown ml-3">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-bell-4"></span><span class="badge badge-success">{{ $total_status }}</span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                    <a class="dropdown-item title" href="javascript:void(0);">
                        <i class="flaticon-bell-13 mr-3"></i> <span>Kamu punya {{ $total_status }} notofikasi
                            baru</span>
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
                                @if ($s->status == 'ditolak')
                                    <h6 class="mb-1">Maaf formulir anda telah {{ $s->status }}</h6>
                                @elseif ($s->status == 'diterima')
                                    <h6 class="mb-1">Selamat formulir anda telah {{ $s->status }}</h6>
                                @elseif ($s->status == 'pending')
                                    <h6 class="mb-1">Formulir anda sedang {{ $s->status }}</h6>
                                @endif

                                {{--  <p><span class="meta-time">1 minute ago</span> . <span class="meta-member-notification">4 members</span></p>  --}}
                            </div>

                        </div>
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
    <ul class="navbar-nav flex-row ml-lg-auto">
        <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-user-12"></span>
            </a>
            <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                <a class="dropdown-item" href="/profiladmin">
                    <i class="mr-1 flaticon-user-6"></i> <span>Profil</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout" onclick="return confirm('Anda yakin ingin logout?')">
                    <i class="flaticon-log-2"></i> <span>Log Out</span>
                </a>
            </div>
        </li>
    </ul>

</header>
