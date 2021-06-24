@extends('layouts.master')
@section('title', 'Dashboard')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">Dashboard</li>
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
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <p class="card-category">Jumlah Siswa</p>
            <h4 class="card-title">{{ $n_siswa }}
            <small>Orang</small>
            </h4>
        </div>
        <div class="card-footer">
            <div class="stats">
            <a href="{{ route('siswa.index') }}">Selengkapnya<i class="float-right" data-feather="arrow-right"></i></a>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
            <p class="card-category">Jumlah Guru</p>
            <h4 class="card-title">{{ $n_guru }} <small>Orang</small></h4>
        </div>
        <div class="card-footer">
            <div class="stats">
            <a href="{{ route('guru.index') }}">Selengkapnya<i class="float-right" data-feather="arrow-right"></i></a>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-danger card-header-icon">
            <p class="card-category">Mata Pelajaran</p>
            <h4 class="card-title text-nowrap">{{ $n_mapel }}<small> Mata Pelajaran</small></h4>
        </div>
        <div class="card-footer">
            <div class="stats">
            <a href="{{ route('mapel.index') }}">Selengkapnya<i class="float-right" data-feather="arrow-right"></i></a>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
            <p class="card-category">Jumlah Kelas</p>
            <h4 class="card-title">{{ $n_kelas }} <small>Ruang</small></h4>
        </div>
        <div class="card-footer">
            <div class="stats">
            <a href="{{ route('kelas.index') }}">Selengkapnya<i class="float-right" data-feather="arrow-right"></i></a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
