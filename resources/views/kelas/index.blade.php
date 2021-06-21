@extends('layouts.master')
@section('title', 'Kelas')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Data Kelas</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">Kelas</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
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
