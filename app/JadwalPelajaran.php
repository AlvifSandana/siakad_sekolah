<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPelajaran extends Model
{
    // Model Jadwal Pelajaran
    protected $table = 'jadwal_pelajaran';
    protected $primaryKey = 'id_jadwal_pelajaran';
    public $timestamps = true;
    protected $fillable = [
        'mapel_id',
        'guru_id',
        'hari_id',
        'jam_mapel_id',
        'kelas_id',
        'semester_id',
        'tahun_ajaran_id'
    ];

    // total count function
    public function totalCount()
    {
        return JadwalPelajaran::count();
    }
}
