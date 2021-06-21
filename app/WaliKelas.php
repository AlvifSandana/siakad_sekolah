<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaliKelas extends Model
{
    // Model Wali Kelas
    protected $table = 'wali_kelas';
    protected $primaryKey = 'id_wali_kelas';
    public $timestamps = true;
    protected $fillable = ['guru_id'];
}
