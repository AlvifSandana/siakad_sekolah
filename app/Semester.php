<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    // Model Semester
    protected $table = 'semester';
    protected $primaryKey = 'id_semester';
    public $timestamps = true;
}
