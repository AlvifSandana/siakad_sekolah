@extends('layouts.master')
@section('title', 'Guru')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Data Guru</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">Guru</li>
@endsection

@section('content')
    <div class="row">
        @include('layouts.flash')
        <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-responsive" id="tbl_guru">
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
                            <td>{{ $guru->kota_lahir_guru }}, {{ $guru->tanggal_lahir_guru->format('d M Y') }}</td>
                            @if ($guru->jenis_kelamin_guru == 'p')
                            <td class="text-center">Wanita</td>
                            @else
                            <td class="text-center">Pria</td>
                            @endif
                            <td class="text-center">{{ $guru->agama }}</td>
                            <td class="text-center">
                                <form action="{{ route('guru.destroy', $guru->id_guru) }}" method="POST">
                                    <a href="{{ route('guru.show', $guru->id_guru) }}" class="btn btn-info m-1" data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="tampilkan">
                                        Detail
                                    </a>
                                    <a href="{{ route('guru.edit', $guru->id_guru) }}" class="btn btn-warning m-1" data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="ubah data">
                                        Edit
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger m-1" data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="hapus">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                     @endforeach
                    </tbody>
                  </table>
                  {{-- {{ $data_guru->links() }} --}}
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
@section('script')
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}" ></script>
<script>
    $(document).ready( function () {
        $('#tbl_guru').DataTable();
    });
</script>
@endsection
