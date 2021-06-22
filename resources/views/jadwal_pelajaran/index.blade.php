@extends('layouts.master')
@section('title', 'Jadwal Pelajaran')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">Jadwal Pelajaran</li>
@endsection

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
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Hari</th>
                            <th>Kelas</th>
                            <th>Jam ke-</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
