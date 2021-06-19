@extends('layouts.app')

@section('content')
    <div class="row">
        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <div class="message mt-2">
                    <strong>Error -</strong> {{ $errors }}
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
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
                                <th>Diperbarui pada</th>
                                <th>Action</th>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($mapel as $m)
                                <tr>
                                    <td>{{ $m->id_mapel }}</td>
                                    <td>{{ $m->nama_mapel }}</td>
                                    <td>{{ $m->updated_at}}</td>
                                    <td>
                                        <form action="{{ route('mapel.destroy', $m->id_mapel) }}" method="post">
                                            <a href="{{ route('mapel.edit', $m->id_mapel) }}" class="btn btn-sm btn-warning">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $mapel->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
