<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    // Model Kelas
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    public $timestamps = true;
}
