<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'id_guru';
    protected $dates = ['tanggal_lahir_guru'];
    protected $fillable = [
        'nama_lengkap_guru',
        'nip',
        'kota_lahir_guru',
        'tanggal_lahir_guru',
        'alamat_guru',
        'jenis_kelamin_guru',
        'agama',
        'no_hp_guru',
        'email',
        'password',
        'role',
        'rememberToken',
        'profile_img',
    ];
    protected $hidden = ['password', 'rememberToken'];
    public $timestamps = true;
}
