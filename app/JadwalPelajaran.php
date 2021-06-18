<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPelajaran extends Model
{
    // Model Jadwal Pelajaran
    protected $table = 'jadwal_pelajaran';
    protected $primaryKey = 'id_jadwal_pelajaran';
    public $timestamps = true;

    // total count function
    public function totalCount()
    {
        return JadwalPelajaran::count();
    }
}
