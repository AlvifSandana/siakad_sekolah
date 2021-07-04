@extends('layouts.master')
@section('title', 'Edit Data Siswa')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
  <h3>Edit Data Siswa</h3>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item"><a href="{{ route('siswa.index') }}">Siswa</a></li>
  <li class="breadcrumb-item active">Edit Data Siswa</li>
@endsection

@section('content')
  <div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          @foreach ($data_siswa as $siswa)
            <form action="{{ route('siswa.upload_foto', $siswa->id_siswa) }}" method="post"
              enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col-md-12">
                  <img src="{{ asset('profile_img/siswa/' . $siswa->profile_img) }}" alt="foto profil"
                    class="img-thumbnail mb-3" style="max-width: 120px">
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
          <form action="{{ route('siswa.update', $siswa->id_siswa) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Lengkap Siswa</label>
                  <input type="text" name="nama_lengkap_siswa" value="{{ $siswa->nama_lengkap }}" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">NISN</label>
                  <input type="text" name="nisn" value="{{ $siswa->nisn }}" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">NIS</label>
                  <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Tempat Lahir</label>
                  <input type="text" name="kota_lahir" value="{{ $siswa->kota_lahir }}" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                    value="{{ $siswa->tanggal_lahir }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin">
                    <option selected>pilih...</option>
                    <option value="laki-laki" {{ $siswa->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="perempuan" {{ $siswa->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Agama</label>
                  <select class="form-control" name="agama">
                    <option selected>pilih...</option>
                    <option value="islam" {{ $siswa->agama_siswa == 'islam' ? 'selected' : '' }}>Islam</option>
                    <option value="kristen" {{ $siswa->agama_siswa == 'kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="katolik" {{ $siswa->agama_siswa == 'katolik' ? 'selected' : '' }}>Katolik</option>
                    <option value="hindu" {{ $siswa->agama_siswa == 'hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="buddha" {{ $siswa->agama_siswa == 'buddha' ? 'selected' : '' }}>Buddha</option>
                    <option value="konghucu" {{ $siswa->agama_siswa == 'konghucu' ? 'selected' : '' }}>Konghucu</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Alamat Siswa</label>
                  <input type="text" class="form-control" value="{{ $siswa->alamat_siswa }}" name="alamat_siswa">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Nomor HP Siswa</label>
                  <input type="text" class="form-control" value="{{ $siswa->no_hp_siswa }}" name="no_hp_siswa">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Ayah</label>
                  <input type="text" class="form-control" value="{{ $siswa->nama_ayah }}" name="nama_ayah">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Ibu</label>
                  <input type="text" class="form-control" value="{{ $siswa->nama_ibu }}" name="nama_ibu">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Pekerjaan Ayah</label>
                  <input type="text" class="form-control" value="{{ $siswa->pekerjaan_ayah }}" name="pekerjaan_ayah">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Pekerjaan Ibu</label>
                  <input type="text" class="form-control" value="{{ $siswa->pekerjaan_ibu }}" name="pekerjaan_ibu">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Alamat Orang Tua</label>
                  <input type="text" class="form-control" value="{{ $siswa->alamat_ortu }}" name="alamat_ortu">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Nomor Telp/HP Orang Tua</label>
                  <input type="text" class="form-control" value="{{ $siswa->no_hp_ortu }}" name="no_hp_ortu">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Wali</label>
                  <input type="text" class="form-control" value="{{ $siswa->nama_wali }}" name="nama_wali">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Pekerjaan Wali</label>
                  <input type="text" class="form-control" value="{{ $siswa->pekerjaan_wali }}" name="pekerjaan_wali">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Alamat Wali</label>
                  <input type="text" class="form-control" value="{{ $siswa->alamat_wali }}" name="alamat_wali">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Nomor Telp/HP Wali</label>
                  <input type="text" class="form-control" value="{{ $siswa->no_hp_wali }}" name="no_hp_wali">
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
                      <option value="{{ $k->id_kelas }}" {{ $k->id_kelas == $siswa->kelas_id ? 'selected' : '' }}>
                        {{ $k->nama_kelas }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Tahun Angkatan</label>
                  <select class="form-control" name="tahun_angkatan_id">
                    <option selected>pilih...</option>
                    @foreach ($tahun_angkatan as $ta)
                      <option value="{{ $ta->id_tahun_ajaran }}"
                        {{ $ta->id_tahun_ajaran == $siswa->tahun_angkatan_id ? 'selected' : '' }}>
                        {{ $ta->tahun_angkatan }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-warning float-right">Perbarui Data</button>
            <div class="clearfix"></div>
          </form>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
