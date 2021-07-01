@extends('layouts.master')
@section('title', 'Tambah Wali Kelas')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Tambah Wali Kelas</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{ route('walikelas.index') }}">Wali Kelas</a></li>
<li class="breadcrumb-item active">Tambah Wali Kelas</li>
@endsection

@section('content')
<div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('walikelas.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Nama Guru</label>
                            <select name="nama_guru" class="form-control">
                                @foreach ($data_guru as $guru)
                                <option value="{{ $guru->id_guru }}">{{ $guru->nama_lengkap_guru }}</option>
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
