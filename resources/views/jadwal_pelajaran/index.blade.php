@extends('layouts.master')
@section('title', 'Jadwal Pelajaran')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">Jadwal Pelajaran</li>
@endsection

@section('content')
    <div class="row">
        @include('layouts.flash')
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table" id="tbl_jp">
                        <thead class="text-center">
                            <th>Hari</th>
                            <th>Kelas</th>
                            <th>Mapel</th>
                            <th>Jam ke-</th>
                            <th>Pengajar</th>
                        </thead>
                        <tbody>
                            @foreach ($jadwal_pelajaran as $jp)
                            <tr class="text-center">
                                <td>{{ $jp->hari }}</td>
                                <td>{{ $jp->kelas }}</td>
                                <td>{{ $jp->mapel }}</td>
                                <td>{{ $jp->mulai.' - '.$jp->akhir }}</td>
                                <td>{{ $jp->pengajar }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}" ></script>
<script>
    $(document).ready( function () {
        $('#tbl_jp').DataTable();
    });
</script>
@endsection
