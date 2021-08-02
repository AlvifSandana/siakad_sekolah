@extends('layouts.master')
@section('title', 'Ubah Data Mata Pelajaran')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Ubah Data Mata Pelajaran</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{ route('mapel.index') }}">Mata Pelajaran</a></li>
<li class="breadcrumb-item active">Edit Mata Pelajaran</li>
@endsection

@section('content')
    <div class="row">
        @include('layouts.flash')
        <div class="col-md-12">
            <div class="card">
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
