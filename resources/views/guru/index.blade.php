@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">Data Guru</h4>
                <p class="card-category">SMP Jaya</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-center text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        NIP
                      </th>
                      <th>
                        Nama Lengkap
                      </th>
                      <th>
                        TTL
                      </th>
                      <th>
                        Jenis Kelamin
                      </th>
                      <th>Agama</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                     @foreach ($data_guru as $guru)
                        <tr>
                            <td>{{ $guru->id_guru }}</td>
                            <td>{{ $guru->nip }}</td>
                            <td>{{ $guru->nama_lengkap_guru }}</td>
                            <td>{{ $guru->kota_lahir_guru }}, {{ $guru->tanggal_lahir_guru }}</td>
                            @if ($guru->jenis_kelamin_guru == 'p')
                            <td class="text-center">Wanita</td>
                            @else
                            <td class="text-center">Pria</td>
                            @endif
                            <td class="text-center">{{ $guru->agama }}</td>
                            <td class="text-center">
                                <form action="{{ route('guru.destroy', $guru->id_guru) }}" method="POST">
                                    <a href="{{ route('guru.edit', $guru->id_guru) }}" class="btn btn-sm btn-warning">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                     @endforeach
                    </tbody>
                  </table>
                  {{ $data_guru->links() }}
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
