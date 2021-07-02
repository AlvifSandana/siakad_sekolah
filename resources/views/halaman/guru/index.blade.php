@extends('layouts.master')
@section('title', 'Guru Dashboard')

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
        @include('layouts.flash')
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <p class="card-category">Jumlah Siswa</p>
                    <h4 class="card-title">{{ $n_siswa }}
                        <small>Orang</small>
                    </h4>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <p class="card-category">Jumlah Guru</p>
                    <h4 class="card-title">{{ $n_guru }} <small>Orang</small></h4>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <p class="card-category">Mata Pelajaran</p>
                    <h4 class="card-title text-nowrap">{{ $n_mapel }}<small> Mata Pelajaran</small></h4>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <p class="card-category">Jumlah Kelas</p>
                    <h4 class="card-title">{{ $n_kelas }} <small>Ruang</small></h4>
                </div>
            </div>
        </div>
    </div>
@endsection
