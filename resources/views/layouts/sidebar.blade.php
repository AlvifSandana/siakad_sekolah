<div class="sidebar" data-color="green" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            SiAkad
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
            <!-- Dashboard -->
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <!-- End of Dashboard -->
            <hr/>
            <!-- Jadwal Pelajaran -->
            <li class="nav-item {{ Request::is('jadwalpelajaran') ? 'active' : '' }}">
                <a href="/jadwalpelajaran" class="nav-link">
                    <i class="material-icons">date_range</i>
                    <p>Jadwal Pelajaran</p>
                </a>
            <li class="nav-item nav-treeview">
                <a href="" class="nav-link">
                    <i class="material-icons">insert_invitation</i>
                    <p>Tambah Jadwal</p>
                </a>
            </li>
            <li class="nav-item nav-treeview">
                <a href="" class="nav-link">
                    <i class="material-icons">edit_calendar</i>
                    <p>Ubah Jadwal</p>
                </a>
            </li>
            <!-- End of Jadwal Pelajaran -->
            <hr/>
            <!-- Data Guru -->
            <li class="nav-item {{ Request::is('guru') ? 'active' : '' }}">
                <a href="{{ route('guru.index') }}" class="nav-link">
                    <i class="material-icons">work</i>
                    <p>Data Guru</p>
                </a>
            </li>
            <li class="nav-item nav-treeview {{ Request::is('guru/create') ? 'active' : '' }}">
                <a href="{{ route('guru.create') }}" class="nav-link">
                    <i class="material-icons">add</i>
                    <p>Tambah Data</p>
                </a>
            </li>
            <li class="nav-item nav-treeview">
                <a href="/guru/edit" class="nav-link">
                    <i class="material-icons">edit</i>
                    <p>Ubah Data</p>
                </a>
            </li>
            <!-- End of Data Guru -->
            <hr/>
            <!-- Data Siswa -->
            <li class="nav-item {{ Request::is('siswa') ? 'active' : '' }}">
                <a href="{{ route('siswa.index') }}" class="nav-link">
                    <i class="material-icons">people</i>
                    <p>Data Siswa</p>
                </a>
            </li>
            <li class="nav-item nav-treeview {{ Request::is('siswa/create') ? 'active' : '' }}">
                <a href="{{ route('siswa.create') }}" class="nav-link">
                    <i class="material-icons">add</i>
                    <p>Tambah Data</p>
                </a>
            </li>
            <li class="nav-item nav-treeview">
                <a href="/siswa#edit" class="nav-link">
                    <i class="material-icons">edit</i>
                    <p>Ubah Data</p>
                </a>
            </li>
            <!-- End of Data Siswa -->
            <hr/>
            <!-- Data Kelas -->
            <li class="nav-item {{ Request::is('kelas') ? 'active' : '' }}">
                <a href="{{ route('kelas.index') }}" class="nav-link">
                    <i class="material-icons">groups</i>
                    <p>Data Kelas</p>
                </a>
            </li>
            <li class="nav-item nav-treeview {{ Request::is('kelas/create') ? 'active' : '' }}">
                <a href="{{ route('kelas.create') }}" class="nav-link">
                    <i class="material-icons">add</i>
                    <p>Tambah Data</p>
                </a>
            </li>
            <li class="nav-item nav-treeview">
                <a href="/kelas/edit" class="nav-link">
                    <i class="material-icons">edit</i>
                    <p>Ubah Data</p>
                </a>
            </li>
            <!-- End of Data Kelas -->
            <hr/>
            <!-- Data Mapel -->
            <li class="nav-item {{ Request::is('mapel') ? 'active' : '' }}">
                <a href="{{ route('mapel.index') }}" class="nav-link">
                    <i class="material-icons">book</i>
                    <p>Data Mapel</p>
                </a>
            </li>
            <li class="nav-item nav-treeview {{ Request::is('mapel/create') ? 'active' : '' }}">
                <a href="{{ route('mapel.create') }}" class="nav-link">
                    <i class="material-icons">add</i>
                    <p>Tambah Data</p>
                </a>
            </li>
            <li class="nav-item nav-treeview">
                <a href="/mapel/edit" class="nav-link">
                    <i class="material-icons">edit</i>
                    <p>Ubah Data</p>
                </a>
            </li>
            <!-- End of Data Kelas -->
            <hr/>
            <!-- Pengaturan Profil -->
            <li class="nav-item ">
                <a class="nav-link" href="/profil">
                    <i class="material-icons">manage_accounts</i>
                    <p>Pengaturan Profil</p>
                </a>
            </li>
            <!-- End of Pengaturan Profil -->
        </ul>
    </div>
</div>
