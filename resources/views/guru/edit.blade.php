@extends('layouts.master')
@section('title', 'Ubah Data Guru')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Ubah Data Guru</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Guru</a></li>
<li class="breadcrumb-item active">Edit Data Guru</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @foreach ($guru as $data_guru)
                    <form action="{{ route('guru.update', $data_guru->id_guru) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label class="bmd-label-floating">Nama Lengkap Guru</label>
                                <input type="text" class="form-control" value="{{ $data_guru->nama_lengkap_guru}}" name="nama_lengkap_guru">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating">NIP</label>
                                <input type="text" class="form-control" value="{{ $data_guru->nip }}" name="nip">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">Tempat Lahir</label>
                                <input type="text" class="form-control" value="{{ $data_guru->kota_lahir_guru }}" name="kota_lahir_guru">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="">Tanggal Lahir</label>
                                <input type="date" class="form-control" value="{{ $data_guru->tanggal_lahir_guru }}" name="tanggal_lahir_guru" id="tanggal_lahir">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin_guru">
                                  <option value="l" {{ $data_guru->jenis_kelamin_guru == 'l' ? 'selected' : '' }}>Laki-laki</option>
                                  <option value="p" {{ $data_guru->jenis_kelamin_guru == 'p' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">Agama</label>
                                <select class="form-control" name="agama">
                                  <option value="islam" {{ $data_guru->agama == 'islam'? 'selected' : '' }}>Islam</option>
                                  <option value="kristen" {{ $data_guru->agama == 'kristen'? 'selected' : '' }}>Kristen</option>
                                  <option value="katolik" {{ $data_guru->agama == 'katolik'? 'selected' : '' }}>Katolik</option>
                                  <option value="hindu" {{ $data_guru->agama == 'hindu'? 'selected' : '' }}>Hindu</option>
                                  <option value="buddha" {{ $data_guru->agama == 'buddha'? 'selected' : '' }}>Buddha</option>
                                  <option value="konghucu" {{ $data_guru->agama == 'konghucu'? 'selected' : '' }}>Konghucu</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Alamat Guru</label>
                                <textarea class="form-control" name="alamat_guru" cols="30" rows="5">{{ $data_guru->alamat_guru }}</textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Nomor HP</label>
                                      <input class="form-control" type="tel" value="{{ $data_guru->no_hp_guru }}" name="no_hp_guru">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Email Guru</label>
                                      <input class="form-control" type="email" value="{{ $data_guru->email_guru }}" name="email_guru">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <img class="rounded img-thumbnail mb-2" src="{{ asset('profile_img/guru/'.$data_guru->profile_img )}}" alt="foto guru" >
                                      <input type="file" name="profile_img" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-warning pull-right">Update Data</button>
                          <div class="clearfix"></div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
