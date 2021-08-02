@extends('layouts.master')
@section('title', 'Form Input Jadwal Pelajaran')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Form Input Jadwal Pelajaran</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="#">Jadwal Pelajaran</a></li>
<li class="breadcrumb-item active">Input Jadwal Pelajaran</li>
@endsection

@section('content')
<div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('jadwalpelajaran.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Hari</label>
                            <select name="hari_id" class="form-control">
                                @foreach ($hari as $h)
                                <option value="{{ $h->id_hari }}">{{ $h->nama_hari }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Jam</label>
                            <select name="jam_mapel_id" class="form-control">
                                @foreach ($jam_mapel as $jm)
                                <option value="{{ $jm->id_jam_mapel }}">{{ $jm->jam_mulai }} - {{ $jm->jam_akhir }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Mapel</label>
                            <select name="mapel_id" class="form-control">
                                @foreach ($mapel as $m)
                                <option value="{{ $m->id_mapel }}">{{ $m->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Guru</label>
                            <select name="guru_id" class="form-control">
                                @foreach ($guru as $g)
                                <option value="{{ $g->id_guru }}">{{ $g->nama_lengkap_guru }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Kelas</label>
                            <select name="kelas_id" class="form-control">
                                @foreach ($kelas as $k)
                                <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Semester</label>
                            <select name="semester_id" class="form-control">
                                @foreach ($semester as $s)
                                <option value="{{ $s->id_semester }}">{{ $s->nama_semester }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Tahun Ajaran</label>
                            <select name="tahun_ajaran_id" class="form-control">
                                @foreach ($tahun_ajaran as $ta)
                                <option value="{{ $ta->id_tahun_ajaran }}">{{ $ta->nama_tahun_ajaran }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
