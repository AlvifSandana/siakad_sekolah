@extends('layouts.master')
@section('title', 'Wali Kelas - Data Kelas')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">Data Kelas</li>
@endsection

@section('content')
<div class="row">
    @include('layouts.flash')
    @isset($siswa)
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Peserta Didik</h5>
            </div>
            <div class="body">
                <div class="table">
                    <table class="table-responsive">
                        <thead>
                            <th>ID</th>
                            <th>NISN</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>TTL</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>No. HP Siswa</th>
                            <th>Alamat</th>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $s)
                            <tr>
                                <td>{{ $s->id_siswa }}</td>
                                <td>{{ $s->nisn }}</td>
                                <td>{{ $s->nis }}</td>
                                <td>{{ $s->nama_lengkap }}</td>
                                <td>{{ $s->kota_lahir.', '.$s->tanggal_lahir }}</td>
                                <td>{{ $s->jenis_kelamin }}</td>
                                <td>{{ $s->agama_siswa }}</td>
                                <td>{{ $s->no_hp_siswa }}</td>
                                <td>{{ $s->alamat_siswa }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="float-right pt-3">{{ $siswa->links() }}</div>
            </div>
        </div>
    </div>
    @endisset
</div>
@endsection
