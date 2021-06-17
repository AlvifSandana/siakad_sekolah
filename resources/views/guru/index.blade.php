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
                    <thead class=" text-primary">
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
                    </thead>
                    <tbody>
                     @foreach ($data_guru as $guru)
                        <tr>
                            <td>{{ $guru->id_guru }}</td>
                            <td>{{ $guru->nip }}</td>
                            <td>{{ $guru->nama_lengkap_guru }}</td>
                            <td>{{ $guru->kota_lahir_guru }}, {{ $guru->tanggal_lahir_guru }}</td>
                            @if ($guru->jenis_kelamin_guru == 'p')
                            <td>Wanita</td>
                            @else
                            <td>Pria</td>
                            @endif
                            <td>{{ $guru->agama }}</td>
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
