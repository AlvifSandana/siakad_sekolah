@extends('layouts.master')
@section('title', 'Data Sekolah - Add')

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
                <form action="{{ route('datasekolah.create')}}" method="post">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Nama Sekolah</label>
                            <input type="text" name="nama_sekolah" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">NPSN</label>
                            <input type="text" name="npsn"  class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">NSS</label>
                            <input type="text" name="nss" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Alamat Sekolah</label>
                            <textarea name="alamat_sekolah" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Nomor Telepon / Fax</label>
                            <input type="tel" name="telp_fax"  class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Website Sekolah</label>
                            <input type="text" name="website"  class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Email Sekolah</label>
                            <input type="email" name="email"  class="form-control">
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-success">Tambahkan Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
