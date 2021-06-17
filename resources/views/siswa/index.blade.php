@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Data Siswa</h4>
                    <p class="card-category">SMP Jaya</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>NISN</th>
                                <th>NIS</th>
                                <th>Nama Lengkap</th>
                                <th>TTL</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Status Dalam Keluarga</th>
                                <th>Anak ke-</th>
                                <th>Alamat Siswa</th>
                                <th>No. HP Siswa</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Alamat Orang Tua</th>
                                <th>No. Telp</th>
                                <th>Pekerjaan Ayah</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Nama Wali</th>
                                <th>Alamat Wali</th>
                                <th>No. Telp Wali</th>
                                <th>Pekerjaan Wali</th>
                                <th>Kelas</th>
                            </thead>
                            <tbody>
                                @foreach ($data_siswa as $siswa)
                                    <tr>
                                        <td>{{ $siswa->id_siswa }}</td>
                                        <td>{{ $siswa->nisn }}</td>
                                        <td>{{ $siswa->nis }}</td>
                                        <td>{{ $siswa->nama_lengkap }}</td>
                                        <td>{{ $siswa->tanggal_lahir }}</td>
                                        <td>{{ $siswa->jenis_kelamin }}</td>
                                        <td>{{ $siswa->agama_siswa }}</td>
                                        <td>{{ $siswa->status_dalam_keluarga }}</td>
                                        <td>{{ $siswa->anak_ke }}</td>
                                        <td>{{ $siswa->alamat_siswa }}</td>
                                        <td>{{ $siswa->no_hp_siswa }}</td>
                                        <td>{{ $siswa->nama_ayah }}</td>
                                        <td>{{ $siswa->nama_ibu }}</td>
                                        <td>{{ $siswa->alamat_ortu }}</td>
                                        <td>{{ $siswa->no_hp_ortu }}</td>
                                        <td>{{ $siswa->pekerjaan_ayah }}</td>
                                        <td>{{ $siswa->pekerjaan_ibu }}</td>
                                        <td>{{ $siswa->nama_wali }}</td>
                                        <td>{{ $siswa->alamat_wali }}</td>
                                        <td>{{ $siswa->no_hp_wali }}</td>
                                        <td>{{ $siswa->pekerjaan_wali }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$data_siswa->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
