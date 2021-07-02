<?php

namespace App\Http\Controllers\walikelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WaliKelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceksesi');
    }

    public function index(Request $request)
    {
        $id_wk = DB::table('wali_kelas')->select('id_wali_kelas')->where('guru_id', '=', $request->session()->get('id_guru'))->first();
        $nama_kelas = DB::table('kelas')->select('nama_kelas')->where('wali_kls_id', '=', $id_wk->id_wali_kelas)->first();
        $id_kelas = DB::table('kelas')->select('id_kelas')->where('wali_kls_id', '=', $id_wk->id_wali_kelas)->first();
        $n_siswa_kelas = count(DB::table('siswa')->where('kelas_id', '=', $id_kelas->id_kelas)->get());
        $request->session()->put('kelas_id', $id_kelas->id_kelas);
        return view('halaman.walikelas.index', [
            'n_siswa_kelas' => $n_siswa_kelas,
            'nama_kelas' => $nama_kelas->nama_kelas,
        ]);
    }

    public function siswakelas(){
        
    }
}
