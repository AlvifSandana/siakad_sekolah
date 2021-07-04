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
  <li class="breadcrumb-item">Pengaturan</li>
  <li class="breadcrumb-item active">Tahun Ajaran</li>
@endsection

@section('content')
<div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Tahun Ajaran</h5>
            </div>
            <div class="card-body">
                <div class="table col-md-12">
                    <table class="table" id="tbl_ta">
                        <thead class="text-center">
                            <th>ID</th>
                            <th>Nama Tahun Ajaran</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($tahun_ajaran as $ta)
                            <tr class="text-center">
                                <td>{{ $ta->id_tahun_ajaran }}</td>
                                <td>{{ $ta->nama_tahun_ajaran }}</td>
                                <td>
                                    <form action="{{ route('pengaturan.tahunajaran.delete', $ta->id_tahun_ajaran) }}" method="post">
                                        <a href="{{ route('pengaturan.tahunajaran.edit', $ta->id_tahun_ajaran) }}" class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
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
<div class="row mb-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Tahun Ajaran</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('pengaturan.tahunajaran.add') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Tahun Ajaran</label>
                                <input type="text" name="nama_tahun_ajaran" class="form-control">
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
        $('#tbl_ta').DataTable();
    });
</script>
@endsection
