<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
    // Model for DataSekolah
    protected $table = 'data_sekolah';
    protected $primaryKey = 'id_data_sekolah';
    public $timestamps = true;
    protected $fillable = [
        'nama_sekolah', 'npsn',
        'nss', 'alamat_sekolah',
        'telp_fax', 'website',
        'email'
    ];
}
