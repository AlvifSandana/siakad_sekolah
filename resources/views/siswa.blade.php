@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">Data Siswa</h4>
                <p class="card-category">SMP Jaya</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
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
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
