<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // Model Siswa
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    public $timestamps = true;
}
