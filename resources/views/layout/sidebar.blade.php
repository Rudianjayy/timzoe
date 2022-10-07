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
            <a href="#" class="has-arrow waves-effect">
                <i class="ti-package"></i>
                <span>Kurikulum</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="/kompetensiadmin">Kompetensi Keahlian</a></li>
                <li><a href="/fotokompetensiadmin">Foto Kompetensi</a></li>
                <li><a href="/jadwaladmin">Jadwal Kegiatan</a></li>
                <li><a href="/kalenderakademikadmin">Kalender Akademik</a></li>
                <li><a href="/kelulusanadmin">Kelulusan</a></li>
            </ul>
        </li>

        @endif
        @if (auth()->user()->role=="admin")
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-package"></i>
                <span>Iduka</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="/idukaadmin">Iduka</a></li>
                <li><a href="/mouadmin">Foto</a></li>
            </ul>
        </li>


        <li>
            <a href="#" class="has-arrow waves-effect">
                <i class="ti-package"></i>
                <span>Kesiswaan</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="/ekstrakulikuleradmin">Ekstra Kurikuler</a></li>
                <li><a href="/osisadmin">IPM/OSIS</a></li>
                <li><a href="/alumniadmin">Alumni</a></li>
            </ul>
        </li>

        <li>
            <a href="/muhinewsadmin" class="waves-effect">
                <i class="mdi mdi-account-details-outline"></i> <span class="badge rounded-pill bg-primary float-end"></span>
                <span>Muhinews</span>
            </a>
        </li>
        @endif
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-package"></i>
                <span>Tentang Kami</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="/profilsekolahadmin">Profil Sekolah</a></li>
                <li><a href="/visimisiadmin">Visi & Misi</a></li>
                <li><a href="/identitas_admin">Identitas Sekolah</a></li>
                <li><a href="/fasilitasadmin">Fasilitas Sekolah </a></li>
            </ul>
        </li>

        <li>
            <a href="/footeeradmin" class="waves-effect">
                <i class="mdi mdi-account-details-outline"></i> <span class="badge rounded-pill bg-primary float-end"></span>
                <span>Footer</span>
            </a>
        </li>
        <li>
            <a href="/logout" class="waves-effect">
                <i class="mdi mdi-chevron-left"></i> <span class="badge rounded-pill bg-primary float-end"></span>
                <span>Keluar</span>
            </a>
        </li>
    </ul>
</div>
