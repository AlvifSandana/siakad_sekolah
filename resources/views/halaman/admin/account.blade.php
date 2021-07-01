@extends('layouts.master')
@section('title', 'Info & Edit Akun')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Info & Edit Akun</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">Info & Edit Akun</li>
@endsection

@section('content')
    <div class="row">
        @include('layouts.flash')
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @foreach ($guru as $data_guru)
                    <form action="{{ route('guru.upload_foto', $data_guru->id_guru) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('profile_img/guru/'.$data_guru->profile_img) }}" alt="foto profil" class="img-thumbnail mb-3" style="max-width: 120px">
                                <input type="file" name="profile_img" id="" class="form-control col-md-6 mb-3">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-warning">Ganti Foto</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pengaturan.accountupdate', $data_guru->id_guru) }}" method="POST" enctype="multipart/form-data">
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
                                      <input class="form-control" type="email" value="{{ $data_guru->email }}" name="email_guru">
                                  </div>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-warning pull-right">Update Account</button>
                          <div class="clearfix"></div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
