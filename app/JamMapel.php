<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JamMapel extends Model
{
    // Model Jam Mapel
    protected $table = 'jam_mapel';
    protected $primaryKey = 'id_jam_mapel';
    public $timestamps = true;
    protected $fillable = [
        'jam_mulai',
        'jam_akhir',
    ];
}
