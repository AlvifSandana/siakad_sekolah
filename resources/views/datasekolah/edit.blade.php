@extends('layouts.master')
@section('title', 'Data Sekolah')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Data Sekolah</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Data Sekolah</li>
<li class="breadcrumb-item active">Edit Data Sekolah</li>
@endsection

@section('content')
<div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @foreach ($data_sekolah as $ds)
                <form action="{{ route('datasekolah.update', $ds->id_data_sekolah)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Nama Sekolah</label>
                            <input type="text" name="nama_sekolah" value="{{ $ds->nama_sekolah }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">NPSN</label>
                            <input type="text" name="npsn" value="{{ $ds->npsn }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">NSS</label>
                            <input type="text" name="nss" value="{{ $ds->nss }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Alamat Sekolah</label>
                            <textarea name="alamat_sekolah" class="form-control" cols="30" rows="10">{{ $ds->alamat_sekolah }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Nomor Telepon / Fax</label>
                            <input type="tel" name="telp_fax" value="{{ $ds->telp_fax }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Website Sekolah</label>
                            <input type="text" name="website" value="{{ $ds->website }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Nama Sekolah</label>
                            <input type="email" name="email" value="{{ $ds->email }}" class="form-control">
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
