@extends('layouts.master')
@section('title', 'Pembayaran')

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
  <li class="breadcrumb-item active">Pembayaran</li>
@endsection

@section('content')
  <div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5>Data Pembayaran</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="tbl_pembayaran">
              <thead class="text-center">
                <th>ID</th>
                <th>NISN</th>
                <th>Tanggal Pembayaran</th>
                <th>Bulan Dibayar</th>
                <th>Nominal SPP</th>
                <th>Tahun</th>
                <th>Keterangan</th>
                <th>Petugas</th>
                <th>Action</th>
              </thead>
              <tbody class="text-center">
                @foreach ($data_pembayaran as $p)
                  <tr>
                    <td>{{ $p->id_pembayaran }}</td>
                    <td>{{ $p->nisn }}</td>
                    <td>{{ $p->tanggal_bayar }}</td>
                    <td>{{ $p->bulan_dibayar }}</td>
                    <td>{{ $p->nominal }}</td>
                    <td>{{ $p->tahun }}</td>
                    <td>{{ $p->keterangan }}</td>
                    <td>{{ $p->nama_petugas }}</td>
                    <td>
                      <a href="#edit" class="btn btn-warning edit" data-toggle="modal" data-target="#editModal"
                        data-id="{{ $p->id_pembayaran }}">Edit</a>
                      <a href="{{ route('spp.pembayaran.delete', $p->id_pembayaran) }}"
                        class="btn btn-danger">Hapus</a>
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
          <h5>Tambah Pembayaran</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('spp.pembayaran.add') }}" method="POST">
            @csrf
            @method('POST')
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Tanggal Pembayaran</label>
                  <input type="date" name="tanggal_bayar" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Bulan Dibayar</label>
                  <select name="bulan_dibayar" class="form-control">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nominal SPP</label>
                  <select name="spp_id" class="form-control">
                    @foreach ($data_spp as $spp)
                      <option value="{{ $spp->id_spp }}">Rp. {{ $spp->nominal }} - Tahun {{ $spp->tahun }}
                      </option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="keterangan" class="form-control" cols="30" rows="10"></textarea>
                </div>
              </div>
            </div>
            <div class="pull-right">
              <button type="submit" class="btn btn-success">Tambah Pembayaran</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- Modal for edit data --}}
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="rditModalLabel">Edit Pembayaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('spp.pembayaran.update') }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="edit_id" id="edit_id" hidden>
                  <input type="text" name="edit_nisn" id="edit_nisn" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Tanggal Pembayaran</label>
                  <input type="date" name="edit_tanggal_bayar" id="edit_tanggal_bayar" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Bulan Dibayar</label>
                  <select name="edit_bulan_dibayar" id="edit_bulan_dibayar" class="form-control">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nominal SPP</label>
                  <select name="edit_spp_id" id="edit_spp_id" class="form-control">
                    @foreach ($data_spp as $spp)
                      <option value="{{ $spp->id_spp }}">Rp. {{ $spp->nominal }} - Tahun {{ $spp->tahun }}
                      </option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="edit_keterangan" id="edit_keterangan" class="form-control" cols="30" rows="3"></textarea>
                </div>
              </div>
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
  {{-- End of Modal for edit data --}}
@endsection

@section('script')
  <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      /**
       * DataTables
       */
      $('#tbl_pembayaran').DataTable({
        "language": {
          "emptyTable": "Data kosong (tidak tersedia)."
        }
      })
      /**
       * Edit SPP Modal
       */
      $('.edit').on('click', function() {
        var id = $(this).attr('data-id');
        $.ajax({
          url: "{{ route('spp.pembayaran.show') }}?id=" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            $('#edit_id').val(data.id_pembayaran);
            $('#edit_nisn').val(data.nisn);
            $('#edit_tanggal_bayar').val(data.tanggal_bayar);
            $(`#edit_bulan_dibayar option[value=${data.bulan_dibayar}]`).attr('selected', 'selected');
            $(`#edit_spp_id option[value=${data.spp_id}]`).attr('selected', 'selected');
            $('#edit_keterangan').val(data.keterangan);
          }
        })
      })
    })
  </script>
@endsection
