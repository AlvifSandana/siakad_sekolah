@extends('layouts.master')
@section('title', 'Form Input Data Guru')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Form Input Data Guru</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Guru</a></li>
<li class="breadcrumb-item">Input Data Guru</li>
@endsection


@section('content')
  <div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Lengkap Guru</label>
                  <input type="text" class="form-control" name="nama_lengkap_guru">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">NIP</label>
                  <input type="text" class="form-control" name="nip">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Tempat Lahir</label>
                  <input type="text" class="form-control" name="kota_lahir_guru">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir_guru" id="tanggal_lahir">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin_guru">
                    <option selected>pilih...</option>
                    <option value="l">Laki-laki</option>
                    <option value="p">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Agama</label>
                  <select class="form-control" name="agama">
                    <option selected>pilih...</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                    <option value="konghucu">Konghucu</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Alamat Guru</label>
                  <textarea class="form-control" name="alamat_guru" cols="30" rows="5"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nomor HP</label>
                        <input class="form-control" type="tel" name="no_hp_guru">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Email Guru</label>
                        <input class="form-control" type="email" name="email_guru">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-floating-label">Upload Foto</label>
                        <input type="file" name="profile_img" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Tambah Data</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
