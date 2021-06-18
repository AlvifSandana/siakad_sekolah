@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Data Mata Pelajaran</h4>
                    <p class="card-category">SMP Jaya</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary text-center">
                                <th>ID</th>
                                <th>Mata Pelajaran</th>
                                <th>Jam Mulai</th>
                                <th>Jam Akhir</th>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($data_mapel as $mapel)
                                <tr>
                                    <td>{{ $mapel->id_mapel }}</td>
                                    <td>{{ $mapel->nama_mapel }}</td>
                                    <td>{{ $mapel->jam_mulai }}</td>
                                    <td>{{ $mapel->jam_akhir }}</td>
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
