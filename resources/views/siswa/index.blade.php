@extends('layouts.master')
@section('title', 'Siswa')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
  <h3>Siswa</h3>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item active">Siswa</li>
@endsection

@section('content')
  <div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-md">
              <thead class=" text-primary">
                <th>ID</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>TTL</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Status Dalam Keluarga</th>
                <th>Anak ke-</th>
                <th>Alamat Siswa</th>
                <th>No. HP Siswa</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Alamat Orang Tua</th>
                <th>No. Telp</th>
                <th>Pekerjaan Ayah</th>
                <th>Pekerjaan Ibu</th>
                <th>Nama Wali</th>
                <th>Alamat Wali</th>
                <th>No. Telp Wali</th>
                <th>Pekerjaan Wali</th>
                <th>Kelas</th>
                <th>Angkatan</th>
                <th class="text-center">Action</th>
              </thead>
              <tbody>
                @foreach ($data_siswa as $siswa)
                  <tr>
                    <td>{{ $siswa->id_siswa }}</td>
                    <td>{{ $siswa->nisn }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->nama_lengkap }}</td>
                    <td>{{ $siswa->tanggal_lahir }}</td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td>{{ $siswa->agama_siswa }}</td>
                    <td>{{ $siswa->status_dalam_keluarga }}</td>
                    <td>{{ $siswa->anak_ke }}</td>
                    <td>{{ $siswa->alamat_siswa }}</td>
                    <td>{{ $siswa->no_hp_siswa }}</td>
                    <td>{{ $siswa->nama_ayah }}</td>
                    <td>{{ $siswa->nama_ibu }}</td>
                    <td>{{ $siswa->alamat_ortu }}</td>
                    <td>{{ $siswa->no_hp_ortu }}</td>
                    <td>{{ $siswa->pekerjaan_ayah }}</td>
                    <td>{{ $siswa->pekerjaan_ibu }}</td>
                    <td>{{ $siswa->nama_wali }}</td>
                    <td>{{ $siswa->alamat_wali }}</td>
                    <td>{{ $siswa->no_hp_wali }}</td>
                    <td>{{ $siswa->pekerjaan_wali }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->angkatan }}</td>
                    <td class="">
                      <form action="{{ route('siswa.destroy', $siswa->id_siswa) }}" method="post">
                        <a href="{{ route('siswa.show', $siswa->id_siswa) }}" class="btn btn-sm btn-info m-1" data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="detail">
                            <i class="fa fa-info"></i>
                        </a>
                        <a href="{{ route('siswa.edit', $siswa->id_siswa) }}" class="btn btn-sm btn-warning m-1" data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="edit data">
                            <i class="fa fa-edit"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger m-1" data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="hapus">
                            <i class="fa fa-trash"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="float-right pt-3">{{ $data_siswa->links() }}</div>
        </div>
      </div>
    </div>
  </div>
@endsection
