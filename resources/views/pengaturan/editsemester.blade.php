@extends('layouts.master')
@section('title', 'Pengaturan')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
  <h3>Pengaturan</h3>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item active">Pengaturan</li>
@endsection


@section('content')
<div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit Semester</h5>
            </div>
            <div class="card-body">
                @foreach ($semester as $s)
                <form action="{{ route('pengaturan.semester.update', $s->id_semester) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Semester</label>
                                <input type="text" name="nama_semester" value="{{ $s->nama_semester }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-warning">Update Data</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
