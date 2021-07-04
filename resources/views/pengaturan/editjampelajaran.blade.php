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
<li class="breadcrumb-item"><a href="{{ route('mapel.index') }}">Pengaturan</a></li>
<li class="breadcrumb-item active">Edit Jam Pelajaran</li>
@endsection

@section('content')
<div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit Jam Pelajaran</h5>
            </div>
            <div class="card-body">
                @foreach ($jam_mapel as $jm)
                <form action="{{ route('pengaturan.jampelajaran.update', $jm->id_jam_mapel) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Jam Mulai</label>
                            <input type="time" name="jam_mulai" value="{{ $jm->jam_mulai }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Jam Akhir</label>
                            <input type="time" name="jam_akhir" value="{{ $jm->jam_akhir }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-warning">Perbarui Data</button>
                </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
