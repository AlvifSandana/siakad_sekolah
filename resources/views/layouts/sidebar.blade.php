<header class="main-nav">
    <div class="logo-wrapper"><a href="{{ route('dashboard.index') }}">Siakad</a></div>
    <div class="logo-icon-wrapper"><a href="{{ route('dashboard.index') }}"><img class="img-fluid"
                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-title {{ Request::is('dashboard') ? 'active' : '' }}"
                            href="/dashboard"><i data-feather="home"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ Request::is('jadwalpelajaran/*') || Request::is('jadwalpelajaran') ? 'active': '' }}"
                            href="#"><i data-feather="file-text"></i><span>Jadwal Pelajaran</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Request::is('jadwalpelajaran') ? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ Request::is('jadwalpelajaran/*') || Request::is('jadwalpelajaran') ? 'block;': 'none;' }}">
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'jadwalpelajaran.create' ? 'active' : '' }}" href="{{ route('jadwalpelajaran.create') }}">Tambah Jadwal</a>
                            </li>
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'jadwalpelajaran.index' ? 'active' : '' }}" href="{{ route('jadwalpelajaran.index') }}">Detail</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ Request::is('guru/*') || Request::is('guru') ? 'active': '' }}"
                            href="#"><i data-feather="briefcase"></i><span>Guru</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Request::is('guru/*') ? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ Request::is('guru/*') || Request::is('guru') ? 'block;': 'none;' }}">
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'guru.create' ? 'active' : '' }}" href="{{ route('guru.create') }}">Tambah Guru</a>
                            </li>
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'guru.index' ? 'active' : '' }}" href="{{ route('guru.index') }}">Detail</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ Request::is('walikelas/*') || Request::is('walikelas') ? 'active': '' }}"
                            href="#"><i data-feather="briefcase"></i><span>Wali Kelas</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Request::is('walikelas/*') ? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ Request::is('walikelas/*') || Request::is('walikelas') ? 'block;': 'none;' }}">
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'walikelas.create' ? 'active' : '' }}" href="{{ route('walikelas.create') }}">Tambah Wali Kelas</a>
                            </li>
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'walikelas.index' ? 'active' : '' }}" href="{{ route('walikelas.index') }}">Detail</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ Request::is('kelas/*') || Request::is('kelas') ? 'active': '' }}"
                            href="#"><i data-feather="file-text"></i><span>Kelas</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Request::is('kelas/*') ? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ Request::is('kelas/*') || Request::is('kelas') ? 'block;': 'none;' }}">
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'kelas.create' ? 'active' : '' }}" href="{{ route('kelas.create') }}">Tambah Kelas</a>
                            </li>
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'kelas.index' ? 'active' : '' }}" href="{{ route('kelas.index') }}">Detail</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ Request::is('mapel/*') || Request::is('mapel') ? 'active': '' }}"
                            href="#"><i data-feather="file-text"></i><span>Mata Pelajaran</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Request::is('mapel/*')? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ Request::is('mapel/*') || Request::is('mapel') ? 'block;': 'none;' }}">
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'mapel.create' ? 'active' : '' }}" href="{{ route('mapel.create') }}">Tambah Mata Pelajaran</a>
                            </li>
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'mapel.index' ? 'active' : '' }}" href="{{ route('mapel.index') }}">Detail</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{  Request::is('siswa/*') || Request::is('siswa') ? 'active': '' }}"
                            href="#"><i data-feather="user"></i><span>Siswa</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Request::is('siswa/*')? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ Request::is('siswa/*') || Request::is('siswa') ? 'block;': 'none;' }}">
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'siswa.create' ? 'active' : '' }}" href="{{ route('siswa.create') }}">Tambah Siswa</a>
                            </li>
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'siswa.index' ? 'active' : '' }}" href="{{ route('siswa.index') }}">Detail</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
