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
            <li class="nav-item active  ">
                <a class="nav-link" href="/">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <!-- End of Dashboard -->
            <hr/>
            <!-- Jadwal Pelajaran -->
            <li class="nav-item">
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
            <li class="nav-item">
                <a href="/guru" class="nav-link">
                    <i class="material-icons">work</i>
                    <p>Data Guru</p>
                </a>
            </li>
            <li class="nav-item nav-treeview">
                <a href="/guru/tambah" class="nav-link">
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
            <li class="nav-item">
                <a href="/siswa" class="nav-link">
                    <i class="material-icons">people</i>
                    <p>Data Siswa</p>
                </a>
            </li>
            <li class="nav-item nav-treeview">
                <a href="/siswa/tambah" class="nav-link">
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
            <li class="nav-item">
                <a href="/kelas" class="nav-link">
                    <i class="material-icons">groups</i>
                    <p>Data Kelas</p>
                </a>
            </li>
            <li class="nav-item nav-treeview">
                <a href="/kelas/tambah" class="nav-link">
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
            <li class="nav-item">
                <a href="/mapel" class="nav-link">
                    <i class="material-icons">book</i>
                    <p>Data Mapel</p>
                </a>
            </li>
            <li class="nav-item nav-treeview">
                <a href="/mapel/tambah" class="nav-link">
                    <i class="material-icons">add</i>
                    <p>Tambah Data</p>
                </a>
            </li>
            <li class="nav-item nav-treeview">
                <a href="/mapel#edit" class="nav-link">
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
