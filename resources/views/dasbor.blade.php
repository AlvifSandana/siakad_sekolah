@extends('layouts.app')

@section('content')
    <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
            <i class="material-icons">people</i>
            </div>
            <p class="card-category">Jumlah Siswa</p>
            <h3 class="card-title">300
            <small>Orang</small>
            </h3>
        </div>
        <div class="card-footer">
            <div class="stats">
            <i class="material-icons text-success">info</i>
            <a href="/siswa">Selengkapnya</a>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
            <i class="material-icons">work</i>
            </div>
            <p class="card-category">Jumlah Guru</p>
            <h3 class="card-title">40 <small>Orang</small></h3>
        </div>
        <div class="card-footer">
            <div class="stats">
            <i class="material-icons text-success">info</i>
            <a href="/guru">Selengkapnya</a>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
            <i class="material-icons">library_books</i>
            </div>
            <p class="card-category">Mata Pelajaran</p>
            <h3 class="card-title">30</h3>
        </div>
        <div class="card-footer">
            <div class="stats">
            <i class="material-icons text-success">info</i>
            <a href="/mapel">Selengkapnya</a>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
            <i class="material-icons">groups</i>
            </div>
            <p class="card-category">Jumlah Kelas</p>
            <h3 class="card-title">24 <small>Ruang</small></h3>
        </div>
        <div class="card-footer">
            <div class="stats">
            <i class="material-icons text-success">info</i>
            <a href="/kelas">Selengkapnya</a>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection
