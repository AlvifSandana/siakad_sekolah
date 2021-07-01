@extends('layouts.master')
@section('title', 'Form Input Data Siswa')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Form Input Data Siswa</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{ route('siswa.index') }}">Siswa</a></li>
<li class="breadcrumb-item active">Input Data Siswa</li>
@endsection

@section('content')
  <div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Lengkap Siswa</label>
                  <input type="text" name="nama_lengkap_siswa" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">NISN</label>
                  <input type="text" name="nisn" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">NIS</label>
                  <input type="text" name="nis" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Tempat Lahir</label>
                  <input type="text" name="kota_lahir" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin">
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
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Alamat Siswa</label>
                  <input type="text" class="form-control" name="alamat_siswa">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Nomor HP Siswa</label>
                  <input type="text" class="form-control" name="no_hp_siswa">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Ayah</label>
                  <input type="text" class="form-control" name="nama_ayah">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Ibu</label>
                  <input type="text" class="form-control" name="nama_ibu">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Pekerjaan Ayah</label>
                  <input type="text" class="form-control" name="pekerjaan_ayah">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Pekerjaan Ibu</label>
                  <input type="text" class="form-control" name="pekerjaan_ibu">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Alamat Orang Tua</label>
                  <input type="text" class="form-control" name="alamat_ortu">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Nomor Telp/HP Orang Tua</label>
                  <input type="text" class="form-control" name="no_hp_ortu">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Wali</label>
                  <input type="text" class="form-control" name="nama_wali">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Pekerjaan Wali</label>
                  <input type="text" class="form-control" name="pekerjaan_wali">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Alamat Wali</label>
                  <input type="text" class="form-control" name="alamat_wali">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Nomor Telp/HP Wali</label>
                  <input type="text" class="form-control" name="no_hp_wali">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Kelas</label>
                  <select class="form-control" name="kelas_id">
                    <option selected>pilih...</option>
                    @foreach ($kelas as $k)
                    <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Tahun Angkatan</label>
                  <select class="form-control" name="tahun_angkatan_id">
                    <option selected>pilih...</option>
                    @foreach ($tahun_ajaran as $ta)
                    <option value="{{ $ta->id_tahun_ajaran }}">{{ $ta->nama_tahun_ajaran }}</option>
                    @endforeach
                  </select>
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
