<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceksesi');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data_siswa = Siswa::select('siswa.*', 'tahun_ajaran.nama_tahun_ajaran as angkatan', 'kelas.nama_kelas as kelas')
                ->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran', '=', 'siswa.tahun_angkatan_id')
                ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas_id')
                ->orderBy('id_siswa')
                ->get();

            return view('siswa.index', compact('data_siswa'))->with('success', 'Data Available');
        } catch (\Throwable $th) {
            return view('siswa.index')->withErrors($th->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tahun_ajaran = DB::table('tahun_ajaran')->get();
        $kelas = DB::table('kelas')->get();
        return view('siswa.add', compact('tahun_ajaran', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nisn' => 'required',
                'nis' => 'required',
                'nama_lengkap_siswa' => 'required',
                'kota_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'agama' => 'required',
                'jenis_kelamin' => 'required',
                'alamat_siswa' => 'required',
                'no_hp_siswa' => 'required',
                'nama_ayah' => 'required',
                'nama_ibu' => 'required',
                'alamat_ortu' => 'required',
                'no_hp_ortu' => 'required',
                'pekerjaan_ayah' => 'required',
                'pekerjaan_ibu' => 'required',
                'kelas_id' => 'required',
                'tahun_angkatan_id' => 'required',
                'profile_img' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->route('siswa.create')->withErrors($validator)->withInput();
            }
            $profile_img = $request->file('profile_img');
            $siswa_input = [
                'nisn' => $request->input('nisn'),
                'nis' => $request->input('nis'),
                'nama_lengkap' => $request->input('nama_lengkap_siswa'),
                'kota_lahir' => $request->input('kota_lahir'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
                'agama_siswa' => $request->input('agama'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'status_dalam_keluarga' => 'anak',
                'anak_ke' => 1,
                'alamat_siswa' => $request->input('alamat_siswa'),
                'no_hp_siswa' => $request->input('no_hp_siswa'),
                'nama_ayah' => $request->input('nama_ayah'),
                'nama_ibu' => $request->input('nama_ibu'),
                'alamat_ortu' => $request->input('alamat_ortu'),
                'no_hp_ortu' => $request->input('no_hp_ortu'),
                'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
                'pekerjaan_ibu' => $request->input('pekerjaan_ibu'),
                'nama_wali' => $request->input('nama_wali'),
                'alamat_wali' => $request->input('alamat_wali'),
                'no_hp_wali' => $request->input('no_hp_wali'),
                'pekerjaan_wali' => $request->input('pekerjaan_wali'),
                'kelas_id' => $request->input('kelas_id'),
                'tahun_angkatan_id' => $request->input('tahun_angkatan_id'),
                'profile_img' => $profile_img == null ? 'img_siswa.jpg' : $profile_img->getClientOriginalName(),
            ];

            Siswa::create($siswa_input);
            if ($profile_img == null) {
                return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambahkan.');
            } else {
                $profile_img->move('profile_img/siswa', $profile_img->getClientOriginalName());
                return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambahkan.');
            }
        } catch (\Throwable $th) {
            return redirect()->route('siswa.create')->withErrors($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_siswa = Siswa::where('id_siswa', $id)->get();
        $kelas = DB::table('kelas')
            ->select('id_kelas', 'nama_kelas')
            ->get();
        $tahun_angkatan = DB::table('tahun_ajaran')
            ->select('id_tahun_ajaran', 'nama_tahun_ajaran as tahun_angkatan')
            ->get();;
        return view('siswa.show', compact('data_siswa', 'kelas', 'tahun_angkatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $data_siswa = Siswa::where('id_siswa', $id)->get();
            $kelas = DB::table('kelas')
                ->select('id_kelas', 'nama_kelas')
                ->get();
            $tahun_angkatan = DB::table('tahun_ajaran')
                ->select('id_tahun_ajaran', 'nama_tahun_ajaran as tahun_angkatan')
                ->get();
            return view('siswa.edit', compact('data_siswa', 'kelas', 'tahun_angkatan'));
        } catch (\Throwable $th) {
            return redirect()->route('siswa.index')->withErrors($th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nisn' => 'required',
                'nis' => 'required',
                'nama_lengkap_siswa' => 'required',
                'kota_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'agama' => 'required',
                'jenis_kelamin' => 'required',
                'alamat_siswa' => 'required',
                'no_hp_siswa' => 'required',
                'nama_ayah' => 'required',
                'nama_ibu' => 'required',
                'alamat_ortu' => 'required',
                'no_hp_ortu' => 'required',
                'pekerjaan_ayah' => 'required',
                'pekerjaan_ibu' => 'required',
                'kelas_id' => 'required',
                'tahun_angkatan_id' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('siswa.create')->withErrors($validator)->withInput();
            }
            $siswa_update = [
                'nisn' => $request->input('nisn'),
                'nis' => $request->input('nis'),
                'nama_lengkap' => $request->input('nama_lengkap_siswa'),
                'kota_lahir' => $request->input('kota_lahir'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
                'agama_siswa' => $request->input('agama'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'status_dalam_keluarga' => 'anak',
                'anak_ke' => 1,
                'alamat_siswa' => $request->input('alamat_siswa'),
                'no_hp_siswa' => $request->input('no_hp_siswa'),
                'nama_ayah' => $request->input('nama_ayah'),
                'nama_ibu' => $request->input('nama_ibu'),
                'alamat_ortu' => $request->input('alamat_ortu'),
                'no_hp_ortu' => $request->input('no_hp_ortu'),
                'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
                'pekerjaan_ibu' => $request->input('pekerjaan_ibu'),
                'nama_wali' => $request->input('nama_wali'),
                'alamat_wali' => $request->input('alamat_wali'),
                'no_hp_wali' => $request->input('no_hp_wali'),
                'pekerjaan_wali' => $request->input('pekerjaan_wali'),
                'kelas_id' => $request->input('kelas_id'),
                'tahun_angkatan_id' => $request->input('tahun_angkatan_id'),
            ];
            Siswa::where('id_siswa', $id)->update($siswa_update);
            return redirect()->route('siswa.index')->with('success', 'Data berhasil diperbarui.');
        } catch (\Throwable $th) {
            return redirect()->route('siswa.index')->withErrors($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Siswa::where('id_siswa', $id)->delete();
            return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->route('siswa.index')->withErrors($th->getMessage());
        }
    }
}
