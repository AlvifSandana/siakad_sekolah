@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Data Kelas</h4>
                    <p class="card-category">SMP Jaya</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Nama Kelas</th>
                                <th>Tahun Ajaran</th>
                                <th>Semester</th>
                                <th>Nama Wali Kelas</th>
                            </thead>
                            <tbody>
                                @foreach ($data_kelas as $data)
                                <tr>
                                    <td>{{ $data->id_kelas }}</td>
                                    <td>{{ $data->nama_kelas }}</td>
                                    <td>{{ $data->thn_ajaran }}</td>
                                    <td>{{ $data->nm_semester }}</td>
                                    <td>{{ $data->nama_wali_kelas }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
