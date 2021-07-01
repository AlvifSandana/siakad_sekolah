@extends('layouts.master')
@section('title', 'Detail Data Guru')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Detail Data Guru</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Guru</a></li>
<li class="breadcrumb-item active">Detail Data Guru</li>
@endsection

@section('content')
    <div class="row">
        @include('layouts.flash')
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @foreach ($guru as $data_guru)
                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label class="bmd-label-floating">Nama Lengkap Guru</label>
                                <input type="text" class="form-control" value="{{ $data_guru->nama_lengkap_guru}}" name="nama_lengkap_guru" disabled>
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">NIP</label>
                                <input type="text" class="form-control" value="{{ $data_guru->nip }}" name="nip" disabled>
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Tempat Lahir</label>
                                <input type="text" class="form-control" value="{{ $data_guru->kota_lahir_guru }}" name="kota_lahir_guru" disabled>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <img class="img-thumbnail" src="{{ asset('profile_img/guru/'.$data_guru->profile_img) }}" alt="Foto Guru">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="">Tanggal Lahir</label>
                                <input type="date" class="form-control" value="{{ $data_guru->tanggal_lahir_guru }}" name="tanggal_lahir_guru" id="tanggal_lahir" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">Jenis Kelamin</label>
                                <input type="text" class="form-control" value="{{ $data_guru->jenis_kelamin_guru == 'l'? 'Pria' : 'Wanita'}}" disabled>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">Agama</label>
                                <input type="text" value="{{ $data_guru->agama }}" class="form-control" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Alamat Guru</label>
                                <textarea class="form-control" name="alamat_guru" cols="30" rows="5" disabled>{{ $data_guru->alamat_guru }}</textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Nomor HP</label>
                                      <input class="form-control" type="tel" value="{{ $data_guru->no_hp_guru }}" name="no_hp_guru" disabled>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Email Guru</label>
                                      <input class="form-control" type="email" value="{{ $data_guru->email }}" name="email_guru" disabled>
                                  </div>
                              </div>
                          </div>
                          <a href="{{ route('guru.edit', $data_guru->id_guru) }}" class="btn btn-warning pull-right">Edit Data</a>
                          <div class="clearfix"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
