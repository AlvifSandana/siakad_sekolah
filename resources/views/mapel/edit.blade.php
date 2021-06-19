@extends('layouts.app')

@section('content')
    <div class="row">
        @if (count($errors) > 0)
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
                <div class="card-header">
                    <h4 class="card-title">Edit Mata Pelajaran</h4>
                </div>
                <div class="card-body">
                    @foreach ($mapel as $m)
                        <form action="{{ route('mapel.update', $m->id_mapel) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Mata Pelajaran</label>
                                        <input type="text" name="nama_mapel" class="form-control"
                                            value="{{ $m->nama_mapel }}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning pull-right">Update Data</button>
                            <div class="clearfix"></div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
