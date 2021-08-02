@extends('layouts.master')
@section('title', 'Mata Pelajaran')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Mata Pelajaran</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">Mata Pelajaran</li>
@endsection

@section('content')
    <div class="row">
        @include('layouts.flash')
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="tbl_mapel">
                            <thead class="text-primary text-center">
                                <th>ID</th>
                                <th>Mata Pelajaran</th>
                                <th>Diperbarui pada</th>
                                <th>Action</th>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($mapel as $m)
                                <tr>
                                    <td>{{ $m->id_mapel }}</td>
                                    <td>{{ $m->nama_mapel }}</td>
                                    <td>{{ $m->updated_at}}</td>
                                    <td>
                                        <form action="{{ route('mapel.destroy', $m->id_mapel) }}" method="post">
                                            <a href="{{ route('mapel.edit', $m->id_mapel) }}" class="btn btn-sm btn-warning">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $mapel->links() }} --}}
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
        $('#tbl_mapel').DataTable();
    });
</script>
@endsection

