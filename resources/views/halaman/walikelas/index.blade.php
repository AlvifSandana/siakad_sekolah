@extends('layouts.master')
@section('title', 'Wali Kelas Dashboard')

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
            <div class="card-header card-header-info card-header-icon">
                <p class="card-category">Nama Kelas</p>
                <h4 class="card-title"> {{ $nama_kelas }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <p class="card-category">Tahun Ajaran</p>
                <h4 class="card-title"> {{ $tahun_ajaran }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <p class="card-category">Semester</p>
                <h4 class="card-title"> {{ $semester }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <p class="card-category">Siswa Kelas {{ $nama_kelas }}</p>
                <h4 class="card-title">{{ $n_siswa_kelas }} <small>Orang</small></h4>
            </div>
        </div>
    </div>
</div>
@endsection
