<?php

namespace App\Http\Controllers\walikelas;

use App\Guru;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class WaliKelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceksesi');
    }

    /**
     * Show dashboard page
     */
    public function dashboard(Request $request)
    {
        $id_wk = DB::table('wali_kelas')->select('id_wali_kelas')->where('guru_id', '=', $request->session()->get('id_guru'))->first();
        $kelas = DB::table('kelas')->where('wali_kls_id', '=', $id_wk->id_wali_kelas)->first();
        $id_kelas = DB::table('kelas')->select('id_kelas')->where('wali_kls_id', '=', $id_wk->id_wali_kelas)->first();
        $n_siswa_kelas = count(DB::table('siswa')->where('kelas_id', '=', $id_kelas->id_kelas)->get());
        $tahun_ajaran = DB::table('tahun_ajaran')->where('id_tahun_ajaran', '=', $kelas->tahun_ajaran_id)->first();
        $semester = DB::table('semester')->where('id_semester', '=', $kelas->semester_id)->first();
        $request->session()->put('kelas_id', $id_kelas->id_kelas);
        return view('halaman.walikelas.index', [
            'n_siswa_kelas' => $n_siswa_kelas,
            'nama_kelas' => $kelas->nama_kelas,
            'tahun_ajaran' => $tahun_ajaran->nama_tahun_ajaran,
            'semester' => $semester->nama_semester,
        ]);
    }

    /**
     * Show account info page
     */
    public function accountdetail(Request $request)
    {
        try {
            $guru = Guru::where('nip', $request->session()->get('nip'))->get();
            return view('halaman.walikelas.account', compact('guru'));
        } catch (\Throwable $th) {
            return redirect()->route('dashboard_walikelas')->withErrors($th->getMessage());
        }
    }

    /**
     * Show account edit page
     */
    public function accountedit(Request $request)
    {
        try {
            $guru = Guru::where('nip', $request->session()->get('nip'))->get();
            return view('halaman.walikelas.accountedit', compact('guru'));
        } catch (\Throwable $th) {
            return redirect()->route('dashboard_walikelas')->withErrors($th->getMessage());
        }
    }

    /**
     * update account
     */
    public function accountupdate(Request $request)
    {
        try {
            $rules = [
                'nama_lengkap_guru' => 'required',
                'nip' => 'required',
                'kota_lahir_guru' => 'required',
                'tanggal_lahir_guru' => 'required',
                'jenis_kelamin_guru' => 'required',
                'agama' => 'required',
                'alamat_guru' => 'required',
                'no_hp_guru' => 'required',
                'email_guru' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            $data_update = [
                'nama_lengkap_guru' => $request->input('nama_lengkap_guru'),
                'nip' => $request->input('nip'),
                'kota_lahir_guru' => $request->input('kota_lahir_guru'),
                'tanggal_lahir_guru' => $request->input('tanggal_lahir_guru'),
                'alamat_guru' => $request->input('alamat_guru'),
                'jenis_kelamin_guru' => $request->input('jenis_kelamin_guru'),
                'agama' => $request->input('agama'),
                'no_hp_guru' => $request->input('no_hp_guru'),
                'email' => $request->input('email_guru'),
            ];
            Guru::where('id_guru', $request->session()->get('id_guru'))->update($data_update);
            return redirect()->route('account_walikelas')->with('success', 'Account berhasil diubah.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * show Siswa Kelas page
     */
    public function siswaPage(Request $request){
        try {
            $id_kelas = $request->session()->get('kelas_id');
            $siswa = DB::table('siswa')->where('kelas_id', '=', $id_kelas)->paginate(10);
            return view('halaman.walikelas.siswa', compact('siswa'));
        } catch (\Throwable $th) {
            return view('halaman.walikelas.siswa')->withErrors($th->getMessage());
        }
    }
}
