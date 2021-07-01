@extends('layouts.master')
@section('title', 'Edit Data Kelas')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Edit Data Kelas</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('kelas.index') }}">Kelas</a></li>
    <li class="breadcrumb-item active">Edit Data Kelas</li>
@endsection

@section('content')
    <div class="row">
        @include('layouts.flash')
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @foreach ($kelas as $k)
                    <form action="{{ route('kelas.update', $k->id_kelas) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-floating-label">Nama Kelas</label>
                                    <input type="text" name="nama_kelas" value="{{ $k->nama_kelas }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-floating-label">Nama Wali Kelas</label>
                                    <select name="wali_kelas" class="form-control">
                                        @foreach ($wali_kelas as $wk)
                                        <option value="{{ $wk->id_wali_kelas }}" {{ $wk->id_wali_kelas == $k->wali_kls_id ? 'selected' : '' }}>{{ $wk->nama_wali_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-floating-label">Tahun Ajaran</label>
                                    <select name="tahun_ajaran" class="form-control">
                                        @foreach ($tahun_ajaran as $ta)
                                        <option value="{{ $ta->id_tahun_ajaran }}" {{ $ta->id_tahun_ajaran == $k->tahun_ajaran_id ? 'selected' : '' }}>{{ $ta->nama_tahun_ajaran }}</option>
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
                                        <option value="{{ $s->id_semester }}" {{ $s->id_semester == $k->semester_id ? 'selected' : '' }}>{{ $s->nama_semester }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-warning">Perbarui Data</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
