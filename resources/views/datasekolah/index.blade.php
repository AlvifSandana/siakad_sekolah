@extends('layouts.master')
@section('title', 'Dashboard')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">Dashboard</li>
@endsection

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
            <div class="card-body">
                @foreach ($data_sekolah as $ds)
                <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Nama Sekolah</label>
                            <input type="text" name="nama_sekolah" value="{{ $ds->nama_sekolah }}" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">NPSN</label>
                            <input type="text" name="nama_sekolah" value="{{ $ds->npsn }}" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">NSS</label>
                            <input type="text" name="nama_sekolah" value="{{ $ds->nss }}" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Alamat Sekolah</label>
                            <textarea name="alamat_sekolah" class="form-control" cols="30" rows="10" disabled>{{ $ds->alamat_sekolah }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Nomor Telepon / Fax</label>
                            <input type="tel" name="telp_fax" value="{{ $ds->telp_fax }}" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Website Sekolah</label>
                            <input type="text" name="website" value="{{ $ds->website }}" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Nama Sekolah</label>
                            <input type="email" name="email" value="{{ $ds->email }}" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
