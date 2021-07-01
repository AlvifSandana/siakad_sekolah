@extends('layouts.master')
@section('title', 'Edit Jadwal Pelajaran')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Edit Jadwal Pelajaran</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="#">Jadwal Pelajaran</a></li>
<li class="breadcrumb-item active">Edit Jadwal Pelajaran</li>
@endsection

@section('content')
<div class="row">
    @include('layouts.flash')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @foreach ($jadwal as $j)
                <form action="{{ route('jadwalpelajaran.update', $j->id_jadwal) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-floating-label">Hari</label>
                            <select name="hari_id" class="form-control">
                                @foreach ($hari as $h)
                                <option value="{{ $h->id_hari }}" {{ $h->id_hari == $j->hari_id ? 'selected' : ''}}>{{ $h->nama_hari }}</option>
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
                                <option value="{{ $jm->id_jam_mapel }}" {{ $jm->id_jam_mapel == $j->jam_mapel_id ? 'selected' : ''}}>{{ $jm->jam_mulai }} - {{ $jm->jam_akhir }}</option>
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
                                <option value="{{ $m->id_mapel }}" {{ $m->id_mapel == $j->mapel_id ? 'selected' : '' }}>{{ $m->nama_mapel }}</option>
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
                                <option value="{{ $g->id_guru }}" {{ $g->id_guru == $j->guru_id ? 'selected' : '' }}>{{ $g->nama_lengkap_guru }}</option>
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
                                <option value="{{ $k->id_kelas }}" {{ $k->id_kelas == $j->kelas_id ? 'selected' : ''}}>{{ $k->nama_kelas }}</option>
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
                                <option value="{{ $s->id_semester }}" {{ $s->id_semester == $j->semester_id ? 'selected' : ''}}>{{ $s->nama_semester }}</option>
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
                                <option value="{{ $ta->id_tahun_ajaran }}" {{ $ta->id_tahun_ajaran == $j->tahun_ajaran_id ? 'selected' : '' }}>{{ $ta->nama_tahun_ajaran }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-warning">Perbarui Data</button>
                </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
