<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    // Model TahunAjaran
    protected $table = 'tahun_ajaran';
    protected $primaryKey = 'id_tahun_ajaran';
    public $timestamps = true;
}
