<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Siswa extends Model
{
    // Model Siswa
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $dates = ['tanggal_lahir'];
    public $timestamps = true;
    protected $fillable = [
        'nisn', 'nis', 'nama_lengkap',
        'kota_lahir', 'tanggal_lahir', 'agama_siswa',
        'jenis_kelamin', 'status_dalam_keluarga', 'anak_ke',
        'alamat_siswa', 'no_hp_siswa', 'nama_ayah',
        'nama_ibu', 'alamat_ortu', 'no_hp_ortu',
        'pekerjaan_ayah', 'pekerjaan_ibu', 'nama_wali',
        'alamat_wali', 'no_hp_wali', 'pekerjaan_wali',
        'kelas_id', 'tahun_angkatan_id', 'profile_img'
    ];
}
