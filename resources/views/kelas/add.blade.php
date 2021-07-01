@extends('layouts.master')
@section('title', 'Form Input Data Kelas')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Form Input Data Kelas</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{ route('kelas.index') }}">Kelas</a></li>
<li class="breadcrumb-item active">Input Data Kelas</li>
@endsection

@section('content')
    <div class="row">
        @include('layouts.flash')
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('kelas.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-floating-label">Nama Kelas</label>
                                    <input type="text" name="nama_kelas" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-floating-label">Nama Wali Kelas</label>
                                    <select name="wali_kelas" class="form-control">
                                        @foreach ($wali_kelas as $wk)
                                        <option value="{{ $wk->id_wali_kelas }}">{{ $wk->nama_wali_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-floating-label">Tahun Ajaran</label>
                                    <select class="form-control" name="tahun_ajaran">
                                        @foreach ($tahun_ajaran as $ta)
                                        <option value="{{ $ta->id_tahun_ajaran }}">{{ $ta->nama_tahun_ajaran }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-floating-label">Semester</label>
                                    <select name="semester" class="form-control">
                                        @foreach ($semester as $s)
                                        <option value="{{ $s->id_semester }}">{{ $s->nama_semester }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-success">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
