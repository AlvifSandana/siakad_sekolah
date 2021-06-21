<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    // Model Kelas
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    public $timestamps = true;
    protected $fillable = [
        'nama_kelas', 'wali_kls_id', 'tahun_ajaran_id', 'semester_id'
    ];
}
