@extends('layouts.master')
@section('title', 'Data SPP')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/datatables.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
  <h3>Data SPP</h3>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item active">SPP</li>
  <li class="breadcrumb-item active">Data SPP</li>
@endsection

@section('content')
  <div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5>Data SPP</h5>
        </div>
        <div class="card-body">
          <div class="table">
            <table class="table" id="tbl_spp">
              <thead class="text-center">
                <th>ID</th>
                <th>Tahun</th>
                <th>Nominal</th>
                <th>Action</th>
              </thead>
              <tbody class="text-center">
                @foreach ($data_spp as $spp)
                  <tr class="data-spp-row">
                    <td class="id">{{ $spp->id_spp }}</td>
                    <td class="tahun">{{ $spp->tahun }}</td>
                    <td class="nominal">{{ $spp->nominal }}</td>
                    <td class="">
                      <a href="#edit" class="btn btn-warning edit" data-toggle="modal" data-target="#editModal"
                        data-id="{{ $spp->id_spp }}">Edit</a>
                      <a href="{{ route('spp.delete', $spp->id_spp) }}" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5>Tambah Data SPP</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('spp.create') }}" method="post">
            @csrf
            @method('POST')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tahun</label>
                  <input type="text" name="tahun" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nominal</label>
                  <input type="number" name="nominal" class="form-control">
                </div>
              </div>
            </div>
            <div class="pull-right">
              <button type="submit" class="btn btn-success">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="rditModalLabel">Edit Data SPP</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('spp.update') }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="tahun" class="col-form-label">Tahun</label>
              <input type="text" hidden name="id_spp" id="edit_id_spp"></label>
              <input type="text" class="form-control" name="tahun" id="edit_tahun">
            </div>
            <div class="form-group">
              <label for="nominal" class="col-form-label">Nominal</label>
              <input type="number" class="form-control" name="nominal" id="edit_nominal" />
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-warning">Perbarui Data</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      /**
       * DataTable
       */
      $('#tbl_spp').DataTable({
        "language": {
          "emptyTable": "Data kosong (tidak tersedia)."
        }
      });

      /**
       * Edit SPP Modal
       */
      $('.edit').on('click', function() {
        var id = $(this).attr('data-id');
        $.ajax({
          url: "{{ route('spp.show') }}?id=" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            $('#edit_id_spp').val(data.id_spp);
            $('#edit_tahun').val(data.tahun);
            $('#edit_nominal').val(data.nominal);
          }
        })
      })
    })
  </script>
@endsection
