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
                <div class="card-header card-header-success">
                    <div class="card-title">Form Tambah Mata Pelajaran</div>
                    <div class="card-category"></div>
                </div>
                <div class="card-body">
                    <form action="{{ route('mapel.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Nama Mata Pelajaran</label>
                                    <input type="text" name="nama_mapel" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success pull-right">Tambahkan Data</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
