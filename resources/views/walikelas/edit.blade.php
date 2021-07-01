@extends('layouts.master')

@section('title', 'Ubah Data Wali Kelas')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Ubah Data Wali Kelas</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{ route('walikelas.index') }}">Wali Kelas</a></li>
<li class="breadcrumb-item active">Ubah Data Wali Kelas</li>
@endsection

@section('content')
<div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
        @foreach ($wali_kelas as $wk)
        <form action="{{ route('walikelas.update', $wk->id_wali_kelas) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-floating-label">Nama Guru</label>
                        <select name="nama_guru" class="form-control">
                            @foreach ($data_guru as $guru)
                            <option value="{{ $guru->id_guru }}" {{ $guru->id_guru == $wk->guru_id ? 'selected' : '' }}>{{ $guru->nama_lengkap_guru }}</option>
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
@endsection
