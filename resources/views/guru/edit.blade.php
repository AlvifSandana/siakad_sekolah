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
                <div class="card-header">
                    <h5>Password</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('changepwd_guru', $data_guru->id_guru) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Masukkan Password Baru</label>
                                <input type="password" name="password" class="form-control mb-2">
                                <label>Ulangi Password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-warning">Perbarui Password</button>
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
                                      <input class="form-control" type="email" value="{{ $data_guru->email }}" name="email_guru">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Role</label>
                                      <select class="form-control" name="role">
                                          <option value="">pilih...</option>
                                          <option value="admin" {{ $data_guru->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                          <option value="walikelas" {{ $data_guru->role == 'walikelas' ? 'selected' : '' }}>Wali Kelas</option>
                                          <option value="guru" {{ $data_guru->role == 'guru' ? 'selected' : '' }}>Guru</option>
                                      </select>
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
