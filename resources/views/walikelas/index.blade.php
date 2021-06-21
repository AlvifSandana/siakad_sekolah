@extends('layouts.master')
@section('title', 'Wali Kelas')

@section('css')
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
    @if ( count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <div class="message mt-2">
            <strong>Error -</strong> {{ $errors }}
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
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
