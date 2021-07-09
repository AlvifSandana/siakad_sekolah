<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    public $timestamps = true;
    protected $fillable = [
        'nisn','tanggal_bayar', 'bulan_dibayar', 'keterangan', 'spp_id', 'id_petugas'
    ];
}
