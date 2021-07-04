@extends('layouts.master')
@section('title', 'Kelas')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Data Kelas</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">Kelas</li>
@endsection

@section('content')
    <div class="row">
        @include('layouts.flash')
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="tbl_kls">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Nama Kelas</th>
                                <th>Tahun Ajaran</th>
                                <th>Semester</th>
                                <th>Nama Wali Kelas</th>
                                <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($data_kelas as $data)
                                <tr>
                                    <td>{{ $data->id_kelas }}</td>
                                    <td>{{ $data->nama_kelas }}</td>
                                    <td>{{ $data->thn_ajaran }}</td>
                                    <td>{{ $data->nm_semester }}</td>
                                    <td>{{ $data->nama_wali_kelas }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('kelas.destroy', $data->id_kelas) }}" method="post">
                                            <a href="{{ route('kelas.edit', $data->id_kelas) }}" class="btn btn-sm btn-warning">Edit</a>
                                            @csrf
                                            @method('DELETE')
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
@endsection
@section('script')
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}" ></script>
<script>
    $(document).ready( function () {
        $('#tbl_kls').DataTable();
    });
</script>
@endsection
