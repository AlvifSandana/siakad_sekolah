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
                    @if (Session::get('role') == 'admin')
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
                        <a class="nav-link menu-title {{ Request::is('datasekolah/*') || Request::is('datasekolah') ? 'active': '' }}"
                            href="#"><i data-feather="info"></i><span>Data Sekolah</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Request::is('datasekolah') ? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ Request::is('datasekolah/*') || Request::is('datasekolah') ? 'block;': 'none;' }}">
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'datasekolah.edit' ? 'active' : '' }}" href="{{ route('datasekolah.edit', 1) }}">Ubah Data</a>
                            </li>
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'datasekolah.index' ? 'active' : '' }}" href="{{ route('datasekolah.index') }}">Detail</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ Request::is('guru/*') || Request::is('guru') ? 'active': '' }}"
                            href="#"><i data-feather="users"></i><span>Guru</span>
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
                            href="#"><i data-feather="users"></i><span>Wali Kelas</span>
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
                            href="#"><i data-feather="flag"></i><span>Kelas</span>
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
                            href="#"><i data-feather="book"></i><span>Mata Pelajaran</span>
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
                    <li class="dropdown">
                        <a class="nav-link menu-title {{  Request::is('spp/*') || Request::is('spp') ? 'active': '' }}"
                            href="#"><i data-feather="dollar-sign"></i><span>SPP</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Request::is('spp/*')? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ Request::is('spp/*') || Request::is('spp') ? 'block;': 'none;' }}">
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'spp.index' ? 'active' : '' }}" href="{{ route('spp.index') }}">Data SPP</a>
                            </li>
                            <li>
                                <a href="{{ route('spp.pembayaran.index') }}" class="submenu-title {{ Route::current()->getname() == 'spp.pembayaran.index' ? 'active' : ''  }}">Pembayaran</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{  Request::is('pengaturan/*') || Request::is('pengaturan') ? 'active': '' }}"
                            href="#"><i data-feather="settings"></i><span>Pengaturan</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Request::is('pengaturan/*')? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ Request::is('pengaturan/*') || Request::is('pengaturan') ? 'block;': 'none;' }}">
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'pengaturan.accountinfo' ? 'active' : '' }}" href="{{ route('pengaturan.accountinfo') }}">Akun Admin</a>
                            </li>
                            <li>
                                <a href="{{ route('pengaturan.jampelajaran') }}" class="submenu-title {{ Route::current()->getname() == 'pengaturan.jampelajaran' ? 'active' : ''  }}">Jam Pelajaran</a>
                            </li>
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'pengaturan.tahunajaran' ? 'active' : '' }}" href="{{ route('pengaturan.tahunajaran') }}">Tahun Ajaran</a>
                            </li>
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'pengaturan.semester' ? 'active' : '' }}" href="{{ route('pengaturan.semester') }}">Semester</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if (Session::get('role') == 'guru')
                    <li class="nav-item">
                        <a class="nav-link menu-title {{ Request::is('siakad/guru/dashboard') ? 'active' : '' }}"
                            href="{{ route('dashboard_guru') }}"><i data-feather="home"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{  Request::is('siakad/guru/account/*') || Request::is('siakad/guru/account') ? 'active': '' }}"
                            href="#"><i data-feather="user"></i><span>Account</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Request::is('siakad/guru/account/*')? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ Request::is('siakad/guru/account/*') || Request::is('siakad/guru/account') ? 'block;': 'none;' }}">
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'account_guru.edit' ? 'active' : '' }}" href="{{ route('account_guru.edit') }}">Edit</a>
                            </li>
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'account_guru' ? 'active' : '' }}" href="{{ route('account_guru') }}">Info</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if (Session::get('role') == 'walikelas')
                    <li class="nav-item">
                        <a class="nav-link menu-title {{ Request::is('siakad/walikelas/dashboard') ? 'active' : '' }}"
                            href="{{ route('dashboard_walikelas') }}"><i data-feather="home"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{  Request::is('siakad/walikelas/datakelas/*') || Request::is('siakad/walikelas/datakelas') ? 'active': '' }}"
                            href="#"><i data-feather="clipboard"></i><span>Data Kelas</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Request::is('siakad/walikelas/datakelas/*')? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ Request::is('siakad/walikelas/datakelas/*') || Request::is('siakad/walikelas/datakelas') ? 'block;': 'none;' }}">
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'walikelas.datakelas.siswa' ? 'active' : '' }}" href="{{ route('walikelas.datakelas.siswa') }}">Siswa</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{  Request::is('siakad/walikelas/account/*') || Request::is('siakad/walikelas/account') ? 'active': '' }}"
                            href="#"><i data-feather="user"></i><span>Account</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Request::is('siakad/walikelas/account/*')? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ Request::is('siakad/walikelas/account/*') || Request::is('siakad/walikelas/account') ? 'block;': 'none;' }}">
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'account_walikelas.edit' ? 'active' : '' }}" href="{{ route('account_walikelas.edit') }}">Edit</a>
                            </li>
                            <li>
                                <a class="submenu-title {{ Route::current()->getname() == 'account_walikelas' ? 'active' : '' }}" href="{{ route('account_walikelas') }}">Info</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
