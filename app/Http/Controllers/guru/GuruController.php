<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guru;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceksesi');
    }

    /**
     * Show dashboard guru page
     */
    public function dashboard()
    {
        $jumlah_siswa = count(DB::table('siswa')->get());
        $jumlah_guru = count(DB::table('guru')->get());
        $jumlah_kelas = count(DB::table('kelas')->get());
        $jumlah_mapel = count(DB::table('mapel')->get());

        return view('halaman.guru.index', [
            'n_siswa' => $jumlah_siswa,
            'n_guru' => $jumlah_guru,
            'n_kelas' => $jumlah_kelas,
            'n_mapel' => $jumlah_mapel,
        ]);
    }

    /**
     * Show account info page
     */
    public function accountdetail(Request $request)
    {
        try {
            $guru = Guru::where('nip', $request->session()->get('nip'))->get();
            return view('halaman.guru.account', compact('guru'));
        } catch (\Throwable $th) {
            return redirect()->route('dashboard_guru')->withErrors($th->getMessage());
        }
    }

    /**
     * Show account edit page
     */
    public function accountedit(Request $request)
    {
        try {
            $guru = Guru::where('nip', $request->session()->get('nip'))->get();
            return view('halaman.guru.accountedit', compact('guru'));
        } catch (\Throwable $th) {
            return redirect()->route('dashboard_guru')->withErrors($th->getMessage());
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
            $msg = [
                'required' => ':attribute tidak boleh kosong!',
            ];
            $validator = Validator::make($request->all(), $rules, $msg);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->all());
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
            return redirect()->route('account_guru')->with('success', 'Account berhasil diubah.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }
}
