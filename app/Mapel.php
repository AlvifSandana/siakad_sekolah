<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    // Model Mapel
    protected $table = 'mapel';
    protected $primaryKey = 'id_mapel';
    public $timestamps = true;
    protected $fillable = [
        'nama_mapel'
    ];
}
