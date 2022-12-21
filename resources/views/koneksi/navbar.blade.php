<header id="header_main" class="header_1 js-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-button"><span></span></div>
                <div id="site-header-inner" class="flex">
                    <div class="clearfix">
                        <div id="site--inner">
                            <img id="logo_header" src="{{ asset('landing/html/bidzend/assets/images/avatar/muhi2.png') }}"
                                alt="" width="300" height="300"
                                data-retina="{{ asset('landing/html/bidzend/assets/images/avatar/muhi2.png') }}"
                                data-width="200" data-height="200">
                        </div>
                    </div>
                    {{-- <form class="form-search">
                        <input type="text" placeholder="Search here">
                        <button><i class="far fa-search"></i></button>
                    </form> --}}
                    <div id="site-menu">
                        <nav id="main-nav" class="main-nav">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item {{ Route::is('landing') ? 'current-item' : '' }}">
                                    <a href="/">Beranda</a>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="/">Tentang Kami</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item {{ Route::is('profilsekolah') ? 'current-item' : '' }}"><a
                                                href="/profilsekolah">Profil Sekolah</a></li>
                                        <li class="menu-item {{ Route::is('visimisi') ? 'current-item' : '' }}"><a
                                                href="/visimisi">Visi & Misi</a></li>
                                        <li class="menu-item {{ Route::is('identitassekolah') ? 'current-item' : '' }}">
                                            <a href="/identitas_sekolah">Identitas Sekolah</a>
                                        </li>
                                        <li class="menu-item {{ Route::is('fasilitassekolah') ? 'current-item' : '' }}">
                                            <a href="/fasilitassekolah">Fasilitas</a>
                                        </li>
                                </li>
                            </ul>

                            <li class="menu-item menu-item-has-children">
                                <a href="#"> Kurikulum</a>
                                <ul class="sub-menu">
                                    <li
                                        class="menu-item menu-item-has-children {{ Route::is('kompetensi') ? 'current-item' : '' }}">
                                        <a href="/kompetensi"> Kompetensi Keahlian</a>
                                        <ul class="sub-menu">
                                            @php
                                                $jurusan = \App\Models\Jurusan::all();
                                            @endphp
                                            @foreach ($jurusan as $js)
                                                <li class="menu-item {{ Route::is('nama_kompetensi2') ? 'current-item' : ''}}   ">
                                                    <a href="/indexjurusan/{{ $js->id }}">{{ $js->nama_kompetensi2 }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item {{ Route::is('kalenderakademik') ? 'current-item' : '' }}"><a
                                            href="/kalenderakademik">Kalender Akademik</a></li>
                                    <li class="menu-item {{ Route::is('jadwalkegiatan') ? 'current-item' : '' }}"><a
                                            href="/jadwalkegiatan">Jadwal Kegiatan</a></li>
                                    <li class="menu-item {{ Route::is('kelulusan') ? 'current-item' : '' }}"><a
                                            href="/kelsan">Kelulusan</a></li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children">
                                <a href="#"> Kesiswaan</a>
                                <ul class="sub-menu">

                                    <li
                                        class="menu-item menu-item-has-children {{ Route::is('kompetensi') ? 'current-item' : '' }}">
                                        <a href="/indexakademi"> Akademi</a>
                                        @php
                                            $akademi = \App\Models\Akademi::all();
                                            $ekstra = \App\Models\ekstrakulikuler::all();
                                        @endphp
                                        <ul class="sub-menu">
                                            @foreach ($akademi as $ami)
                                                <li class="menu-item "><a
                                                        href="/detailakademi/{{ $ami->id }}">{{ $ami->judul_akademi }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>



                                    <li class="menu-item {{ Route::is('ekstra') ? 'current-item' : '' }}"><a
                                            href="/ekstra">Ekstra Kulikuler</a>
                                        <ul class="sub-menu">
                                            @foreach ($ekstra as $ab)
                                                <li class="menu-item "><a
                                                        href="/detailekstrakulikuler/{{ $ab->id }}">{{ $ab->judul_ekstra }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    {{--  <li class="menu-item {{ Route::is('osis') ? 'current-item' : '' }}"><a
                                            href="/ekstra">Ekstrakulikuler</a></li>  --}}
                                    <li class="menu-item {{ Route::is('osis') ? 'current-item' : '' }}"><a
                                            href="/osis">IPM/OSIS</a></li>
                                    <li class="menu-item {{ Route::is('alumni') ? 'current-item' : '' }}"><a
                                            href="/alumni">Alumni</a></li>
                            </li>
                            </ul>
                            </li>
                            <li class="menu-item ">
                                <a href="/iduka">Iduka</a>
                            </li>
                            <li class="menu-item">
                                <a href="/muhinews">Muhi News</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href=""> UPJ</a>
                                <ul class="sub-menu">
                                    <li class="menu-item {{ Route::is(' indexupj') ? 'current-item' : '' }}"><a
                                            href="/indexupj">UPJ TKJ</a></li>
                                    <li class="menu-item"><a href="/indexbsi">Bank Mini Sekolah(BSI)</a></li>
                                    <li class="menu-item"><a href="/indexmuhiprint">Muhi Printing</a></li>
                                    <li class="menu-item"><a href="/indexpegadaian">Pegadaian</a></li>
                                    <li class="menu-item"><a href="/indexsuryamart">Surya Mart</a></li>
                                    <li class="menu-item"><a href="/indexedotel">Edotel</a></li>
                            </li>
                            </ul>
                            </li>
                            
                            {{-- <li class="menu-item menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="author.html">Authors</a></li>
                                    <li class="menu-item"><a href="connect-wallet.html">Wallet
                                            Connect</a></li>
                                    <li class="menu-item"><a href="create-item.html">Create Item</a>
                                    </li>
                                    <li class="menu-item"><a href="login.html">Login</a></li>
                                    <li class="menu-item"><a href="register.html">Register</a></li>
                                </ul>
                            </li>
                            <li class="menu-item ">
                                <a href="contact.html">Contact</a>
                            </li> --}}
                            <li class="menu-item ">
                                <a href="/pendaftaran">PPDB</a>
                            </li>

                            </ul>
                        </nav>
                    </div>
                    {{-- <div class="mode_switcher">
                        <h6><span>Dark Mode</span> <strong>Activate</strong></h6>
                        <a href="#" class="light d-flex align-items-center is_active">
                            <img src="{{ asset('landing/html/bidzend/assets/images/icon/sun.png') }}"
                                alt="">
                        </a>
                        <a href="#" class="dark d-flex align-items-center ">
                            <img id="moon_dark"
                                src="{{ asset('landing/html/bidzend/assets/images/icon/moon.png') }}"
                                alt="">
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</header>
