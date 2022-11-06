<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Ppdb</li>

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

<li class="menu-title">Menu</li>
        @endif
        @if (auth()->user()->role=="admin")
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
            <a href="#" class="has-arrow waves-effect">
                <i class="ti-package"></i>
                <span>Kurikulum</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="/datajurusan">Kompetensi Keahlian</a></li>
                {{-- <li><a href="/kompetensiadmin">Kompetensi Keahlian</a></li>
                <li><a href="/fotokompetensiadmin">Foto Kompetensi</a></li> --}}
                <li><a href="/jadwalkegiatanadmin">Jadwal Kegiatan</a></li>
                <li><a href="/kalenderakademikadmin">Kalender Akademik</a></li>
                <li><a href="/adminkelulusan">Surat Kelulusan</a></li>
            </ul>
        </li>

        @endif
        <li>
            <a href="#" class="has-arrow waves-effect">
                <i class="ti-package"></i>
                <span>Kesiswaan</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="/dataakademi">Akademi</a></li>
                <li><a href="/ekstrakulikuleradmin">Ekstra Kurikuler</a></li>
                <li><a href="/osisadmin">IPM/OSIS</a></li>
                <li><a href="/alumniadmin">Alumni</a></li>
            </ul>
        </li>

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

        <li>
            <a href="/fotoslideradmin" class="waves-effect">
                <i class="mdi mdi-account-details-outline"></i> <span class="badge rounded-pill bg-primary float-end"></span>
                <span>Slider</span>
            </a>
        </li>



        {{-- <li>
            <a href="/datajurusan" class="waves-effect">
                <i class="mdi mdi-account-details-outline"></i> <span class="badge rounded-pill bg-primary float-end"></span>
                <span>Kompetensi Keahlian</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="/datajurusan">Kompetensi Keahlian</a></li>
                <li><a href="/adminfotojurusan">Masing jurusan</a></li>
            </ul>
        </li> --}}




        @endif

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-package"></i>
                <span>Footer</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="/footeeradmin">Footer</a></li>
                <li><a href="/adminfooteerdua">Footerlink</a></li>
            </ul>
        </li>
        <li>
        <li>
            <a href="/logout" class="waves-effect">
                <i class="mdi mdi-chevron-left"></i> <span class="badge rounded-pill bg-primary float-end"></span>
                <span>Keluar</span>
            </a>
        </li>
    </ul>
</div>

