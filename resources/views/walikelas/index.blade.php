@extends('layouts.master')
@section('title', 'Wali Kelas')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Data Wali Kelas</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">Wali Kelas</li>
@endsection

@section('content')
<div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="tbl_wk">
                        <thead>
                            <th>ID</th>
                            <th>Nama Wali Kelas</th>
                            <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($wali_kelas as $wk)
                            <tr>
                                <td>{{ $wk->id_wali_kelas }}</td>
                                <td>{{ $wk->nama_wali_kelas }}</td>
                                <td class="text-center">
                                    <form action="{{ route('walikelas.destroy', $wk->id_wali_kelas) }}" method="post">
                                        <a href="{{ route('walikelas.edit', $wk->id_wali_kelas) }}" class="btn btn-warning">Edit</a>
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
@endsection
@section('script')
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}" ></script>
<script>
    $(document).ready( function () {
        $('#tbl_wk').DataTable();
    });
</script>
@endsection
