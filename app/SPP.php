<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    protected $table = 'spp';
    protected $primaryKey = 'id_spp';
    public $timestamps = true;
    protected $fillable = [
        'tahun', 'nominal'
    ];
}
