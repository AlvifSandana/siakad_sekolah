@extends('layouts.master')
@section('title', 'Detail Data Siswa')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
  <h3>Detail Data Siswa</h3>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item"><a href="{{ route('siswa.index') }}">Siswa</a></li>
  <li class="breadcrumb-item active">Detail Data Siswa</li>
@endsection

@section('content')
  <div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          @foreach ($data_siswa as $siswa)
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Lengkap Siswa</label>
                  <input type="text" name="nama_lengkap_siswa" value="{{ $siswa->nama_lengkap }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label class="bmd-label-floating">NISN</label>
                    <input type="text" name="nisn" value="{{ $siswa->nisn }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label class="bmd-label-floating">NIS</label>
                    <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" disabled>
                  </div>
              </div>
              <div class="col-md-6">
                  <img src="{{ asset('profile_img/siswa/'.$siswa->profile_img) }}" alt="foto siswa" class="img-thumbnail">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Tempat Lahir</label>
                  <input type="text" name="kota_lahir" value="{{ $siswa->kota_lahir }}" class="form-control" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" disabled>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Jenis Kelamin</label>
                  <input type="text" name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" class="form-control" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Agama</label>
                  <input type="text" name="agama" value="{{ $siswa->agama_siswa }}" class="form-control" disabled>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Alamat Siswa</label>
                  <input type="text" class="form-control" value="{{ $siswa->alamat_siswa }}" name="alamat_siswa" disabled>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Nomor HP Siswa</label>
                  <input type="text" class="form-control" value="{{ $siswa->no_hp_siswa }}" name="no_hp_siswa" disabled>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Ayah</label>
                  <input type="text" class="form-control" value="{{ $siswa->nama_ayah }}" name="nama_ayah" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Ibu</label>
                  <input type="text" class="form-control" value="{{ $siswa->nama_ibu }}" name="nama_ibu" disabled>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Pekerjaan Ayah</label>
                  <input type="text" class="form-control" value="{{ $siswa->pekerjaan_ayah }}" name="pekerjaan_ayah" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Pekerjaan Ibu</label>
                  <input type="text" class="form-control" value="{{ $siswa->pekerjaan_ibu }}" name="pekerjaan_ibu" disabled>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Alamat Orang Tua</label>
                  <input type="text" class="form-control" value="{{ $siswa->alamat_ortu }}" name="alamat_ortu" disabled>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Nomor Telp/HP Orang Tua</label>
                  <input type="text" class="form-control" value="{{ $siswa->no_hp_ortu }}" name="no_hp_ortu" disabled>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Wali</label>
                  <input type="text" class="form-control" value="{{ $siswa->nama_wali }}" name="nama_wali" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Pekerjaan Wali</label>
                  <input type="text" class="form-control" value="{{ $siswa->pekerjaan_wali }}" name="pekerjaan_wali" disabled>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Alamat Wali</label>
                  <input type="text" class="form-control" value="{{ $siswa->alamat_wali }}" name="alamat_wali" disabled>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Nomor Telp/HP Wali</label>
                  <input type="text" class="form-control" value="{{ $siswa->no_hp_wali }}" name="no_hp_wali" disabled>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Kelas</label>
                  <select class="form-control" name="kelas_id" disabled>
                    <option selected>pilih...</option>
                    @foreach ($kelas as $k)
                      <option value="{{ $k->id_kelas }}" {{ $k->id_kelas == $siswa->kelas_id ? 'selected' : '' }}>{{ $k->nama_kelas }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Tahun Angkatan</label>
                  <select class="form-control" name="tahun_angkatan_id" disabled>
                    <option selected>pilih...</option>
                    @foreach ($tahun_angkatan as $ta)
                      <option value="{{ $ta->id_tahun_ajaran }}" {{ $ta->id_tahun_ajaran == $siswa->tahun_angkatan_id ? 'selected' : '' }}>{{ $ta->tahun_angkatan }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <a href="{{ route('siswa.edit', $siswa->id_siswa) }}" class="btn btn-warning float-right">Edit Data</a>
            <div class="clearfix"></div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
