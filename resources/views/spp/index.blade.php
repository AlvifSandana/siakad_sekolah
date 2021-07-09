@extends('layouts.master')
@section('title', 'Data SPP')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Data SPP</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">SPP</li>
<li class="breadcrumb-item active">Data SPP</li>
@endsection

@section('content')
<div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Data SPP</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="tbl_spp">
                        <thead>
                            <th>ID</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($data_spp as $spp)
                            <tr>
                                <td>{{ $spp->id_spp}}</td>
                                <td>{{ $spp->tahun}}</td>
                                <td>{{ $spp->nominal}}</td>
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
                <h5>Tambah Data SPP</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('spp.create') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="text" name="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nominal</label>
                                <input type="number" name="nominal" class="form-control">
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
    $(document).ready(function() {
        $('#tbl_spp').DataTable({
            "language": {
                "emptyTable": "Data kosong (tidak tersedia)."
            }
        });
    });
</script>
@endsection
