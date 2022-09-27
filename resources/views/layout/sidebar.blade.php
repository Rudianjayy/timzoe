<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Menu</li>

        <li >
            <a href="/welcome" class="waves-effect">
                <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end"></span>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="/data-identitas" class="waves-effect">
                <i class="mdi mdi-book-edit-outline"></i><span class="badge rounded-pill bg-primary float-end"></span>
                <span>Data Identitas</span>
            </a>
        </li>
@if (auth()->user()->role=="admin")

        <li>
            <a href="/data-album" class="waves-effect">
                <i class="mdi mdi-account-details-outline"></i> <span class="badge rounded-pill bg-primary float-end"></span>
                <span>Data Album</span>
            </a>
        </li>
        @endif
        @if (auth()->user()->role=="admin")
        <li>
            <a href="/idukaadmin" class="waves-effect">
                <i class="mdi mdi-account-details-outline"></i> <span class="badge rounded-pill bg-primary float-end"></span>
                <span>Iduka</span>
            </a>
        </li>
        <li>
            <a href="/muhinewsadmin" class="waves-effect">
                <i class="mdi mdi-account-details-outline"></i> <span class="badge rounded-pill bg-primary float-end"></span>
                <span>Muhinews</span>
            </a>
        </li>
        @endif

        <li>
            <a href="/logout" class="waves-effect">
                <i class="mdi mdi-chevron-left"></i> <span class="badge rounded-pill bg-primary float-end"></span>
                <span>Keluar</span>
            </a>
        </li>
    </ul>
</div>
