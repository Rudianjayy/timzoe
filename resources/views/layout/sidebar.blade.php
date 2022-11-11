<div class="sidebar-wrapper sidebar-theme">

    <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>

    <nav id="sidebar">

        <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
            <li class="nav-item d-flex">
                <a href="index.html" class="navbar-brand" style="width:230px;">
                    <img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/muhi-2.png') }}" class="img-fluid"
                        alt="logo" style="width:209px; margin-top:14px; margin-bottom:9px;">
                </a>

        </ul>


        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="/welcome" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-home-line"></i>
                        <span>Beranda</span>
                    </div>
                </a>
                {{-- <ul class="collapse submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                    <li class="active">
                        <a href="/welcome"> <i class="flaticon-home-line"></i> Dashboard </a>
                    </li>

                </ul> --}}
            </li>
            @if (auth()->user()->role == 'admin')
                <li class="menu-title">Menu</li>
                <li class="menu">
                    <a href="#tentangkami" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-menu-list"></i>
                            <span>Tentang Kami</span>
                        </div>
                        <div>
                            <i class="flaticon-right-arrow"></i>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="tentangkami" data-parent="#accordionExample">
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
            @endif

            @if (auth()->user()->role == 'admin')
                <li class="menu">
                    <a href="#kurikulum" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-chat-line-1"></i>
                            <span>Kurikulum</span>
                        </div>
                        <div>
                            <i class="flaticon-right-arrow"></i>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="kurikulum" data-parent="#accordionExample">
                        <li>
                            <a href="/datajurusan">Kompetensi Keahlian</a>
                        </li>
                        <li>
                            <a href="/jadwalkegiatanadmin">Jadwal Kegiatan </a>
                        </li>
                        <li>
                            <a href="/kalenderakademikadmin">Kalender Akademik</a>
                        </li>
                        <li>
                            <a href="/adminkelulusan"> Surat Kelulusan </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if (auth()->user()->role == 'admin')
            <li class="menu">
                <a href="#kesiswaan" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-plus"></i>
                        <span>Kesiswaan</span>
                    </div>
                    <div>
                        <i class="flaticon-right-arrow"></i>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="kesiswaan" data-parent="#accordionExample">
                    <li>
                        <a href="/dataakademi"> Akademi</a>
                    </li>
                    <li>
                        <a href="/ekstrakulikuleradmin">Ekstrakurikuler</a>
                    </li>
                    <li>
                        <a href="/osisadmin">Osis</a>
                    </li>
                    <li>
                        <a href="/alumniadmin">Alumni</a>
                    </li>
                </ul>
            </li>
            @endif
            @if (auth()->user()->role == 'admin')
            <li class="menu">
                <a href="#iduka" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-menu-4"></i>
                        <span>Iduka</span>
                    </div>
                    <div>
                        <i class="flaticon-right-arrow"></i>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="iduka" data-parent="#accordionExample">
                    <li>
                        <a href="/idukaadmin">Iduka</a>
                    </li>
                    <li>
                        <a href="/mouadmin">Foto Mou</a>
                    </li>
                </ul>
            </li>
            @endif
            @if (auth()->user()->role == 'admin')
            <li class="menu">
                <a href="#muhinews" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-shuffle-4"></i>
                        <span>Muhinews</span>
                    </div>
                    <div>
                        <i class="flaticon-right-arrow"></i>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="muhinews" data-parent="#accordionExample">
                    <li>
                        <a href="/muhinewsadmin">Muhinews</a>
                    </li>
                    <li>
                        <a href="/kategoriberita">Kategori Muhinews </a>
                    </li>

                </ul>
            </li>
            @endif
            @if (auth()->user()->role == 'admin') 
            <li class="menu">
                <a href="#upj" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-link-2"></i>
                        <span>UPJ</span>
                    </div>
                    <div>
                        <i class="flaticon-right-arrow"></i>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="upj" data-parent="#accordionExample">
                    <li>
                        <a href="/adminupj">UPJ TEKAJE</a>
                    </li>
                    <li>
                        <a href="/adminupj2">Foto & Jasa UPJ </a>
                    </li>
                    <li>
                        <a href="/adminbsi">BSI</a>
                    </li>
                    <li>
                        <a href="/adminmuhiprint">Muhi Printing</a>
                    </li>
                    <li>
                        <a href="/adminpegadaian">Pegadaian</a>
                    </li>
                    <li>
                        <a href="/adminsuryamart">Suryamart</a>
                    </li>
                    <li>
                        <a href="/adminedotel">Edotel</a>
                    </li>
                </ul>
            </li>
            @endif
            @if (auth()->user()->role == 'admin')
            <li class="menu-title">UPJ TEKAJE</li>
            <li class="menu">
                <a href="#upjtekaje" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-menu-line-3"></i>
                        <span>UPJ TEKAJE</span>
                    </div>
                    <div>
                        <i class="flaticon-right-arrow"></i>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="upjtekaje" data-parent="#accordionExample">
                    <li>
                        <a href="/tentangkami">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="/adminteam">Structure Team</a>
                    </li>
                    <li>
                        <a href="/adminkeunggulan">Keunggulan</a>
                    </li>
                    <li>
                        <a href="/adminjasa">Jasa</a>
                    </li>
                    <li>
                        <a href="/admingalery">Galery</a>
                    </li>
                    <li>
                        <a href="/adminvisimisi">Visi Misi</a>
                    </li>
                    <li>
                        <a href="/admintestimoni">Testimoni</a>
                    </li>
                    <li>
                        <a href="/adminupjfooter">UPJ Footer</a>
                    </li>
                    <li>
                        <a href="/adminupjfooterlink">UPJ Footer Link</a>
                    </li>
                    <li>
                        <a href="/adminupjslider">UPJ Slider</a>
                    </li>
                </ul>
            </li>
            @endif
            @if (auth()->user()->role == 'admin')  
            <li class="menu-title mb-2">Mitra</li>
            <li>
                <a href="/adminmitra" class="waves-effect">
                    <div class="" style="font-size:16px; padding:6px; color:#4f5163;">
                        <i class="flaticon-primary"></i>
                        <span style="margin-left: 15px; color:#4f5163;">Mitra</span>
                    </div>
                </a>
            </li>
            @endif
            @if (auth()->user()->role == 'admin') 
            <li class="menu-title mb-2">Management Beranda</li>
            <li>
                <a href="/data-album" class="waves-effect">
                    <div class="" style="font-size:16px; padding:6px; margin-bottom:8px; color:#4f5163;">
                        <i class="flaticon-note-1"></i>
                        <span style="margin-left: 15px; color:#4f5163;">Data Album</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/indexprestasi" class="waves-effect">
                    <div class="" style="font-size:16px; padding:6px; margin-bottom:8px; color:#4f5163;">
                        <i class="flaticon-user-11"></i>
                        <span style="margin-left: 15px; color:#4f5163;">Prestasi</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/sambutanadmin" class="waves-effect">
                    <div class="" style="font-size:16px; padding:6px; margin-bottom:8px; color:#4f5163;">
                        <i class="flaticon-3d-cube"></i>
                        <span style="margin-left: 15px; color:#4f5163;">Sambutan Kepsek</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/fotoslideradmin" class="waves-effect">
                    <div class="" style="font-size:16px; padding:6px; margin-bottom:8px; color:#4f5163;">
                        <i class="flaticon-layers"></i>
                        <span style="margin-left: 15px; color:#4f5163;">Slider</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="#footer" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-simple-screen-line"></i>
                        <span>Footer</span>
                    </div>
                    <div>
                        <i class="flaticon-right-arrow"></i>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="footer" data-parent="#accordionExample">
                    <li>
                        <a href="/footeeradmin">Footer</a>
                    </li>
                    <li>
                        <a href="/adminfooteerdua">Footer Link </a>
                    </li>
                    
                </ul>
            </li>
            @endif
            

            @if (auth()->user()->role == 'admin')
                <li class="menu-title">PPDB</li>
                <li class="menu">
                    <a href="#ppdb" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-menu-list"></i>
                            <span>Landing Ppdb</span>
                        </div>
                        <div>
                            <i class="flaticon-right-arrow"></i>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="ppdb" data-parent="#accordionExample">
                        <li>
                            <a href="/deskripsipendaftaran"> Deskripsi Landing PPDB</a>
                        </li>
                        <li>
                            <a href="/admincarapendaftaran"> Cara Penddaftaran </a>
                        </li>
                        <li>
                            <a href="/adminbiaya"> Biaya </a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </nav>
</div>

