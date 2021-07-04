@extends('layouts.master')
@section('title', 'Pengaturan')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Pengaturan</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{ route('mapel.index') }}">Pengaturan</a></li>
<li class="breadcrumb-item active">Jam Pelajaran</li>
@endsection

@section('content')
<div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Jam Pelajaran</h5>
            </div>
            <div class="card-body">
                <div class="table">
                    <table class="table" id="tbl_jammapel">
                        <thead class="text-center">
                            <th>ID</th>
                            <th>Jam Mulai</th>
                            <th>Jam Akhir</th>
                            <th>Dibuat pada</th>
                            <th>Diperbarui pada</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($jam_mapel as $jm)
                            <tr class="text-center">
                                <td>{{ $jm->id_jam_mapel }}</td>
                                <td>{{ $jm->jam_mulai }}</td>
                                <td>{{ $jm->jam_akhir }}</td>
                                <td>{{ $jm->created_at }}</td>
                                <td>{{ $jm->updated_at }}</td>
                                <td>
                                    <form action="{{ route('pengaturan.jampelajaran.delete', $jm->id_jam_mapel) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('pengaturan.jampelajaran.edit', $jm->id_jam_mapel) }}" class="btn btn-sm btn-warning">
                                            Edit
                                        </a>
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Jam Pelajaran</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('pengaturan.jampelajaran.create') }}" method="post">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Jam Mulai</label>
                            <input type="time" name="jam_mulai" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Jam Akhir</label>
                            <input type="time" name="jam_akhir" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}" ></script>
<script>
    $(document).ready( function () {
        $('#tbl_jammapel').DataTable();
    });
</script>
@endsection
