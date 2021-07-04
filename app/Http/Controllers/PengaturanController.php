<?php

namespace App\Http\Controllers;

use App\Semester;
use App\TahunAjaran;
use App\Guru;
use App\JamMapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PengaturanController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceksesi');
    }

    /**
     * Tahun Ajaran
     */
    public function tahunajaran(){
        $tahun_ajaran = TahunAjaran::all();
        return view('pengaturan.tahunajaran', compact('tahun_ajaran'));
    }

    /**
     * Add tahun ajaran
     */
    public function addTahunAjaran(Request $request){
        try {
            $rules = [
                'nama_tahun_ajaran' => 'required'
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->all());
            }
            TahunAjaran::insert(
                ['nama_tahun_ajaran' => $request->input('nama_tahun_ajaran')]
            );
            return redirect()->route('pengaturan.tahunajaran')->with('success', 'Data berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Delete tahun ajaran
     */
    public function deleteTahunAjaran($id){
        try {
            TahunAjaran::where('id_tahun_ajaran', $id)->delete();
            return back()->with('success', 'Data berhasil dihapus.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Show tahun ajaran edit page
     */
    public function editTahunAjaran($id){
        try {
            $tahun_ajaran = TahunAjaran::where('id_tahun_ajaran', $id)->get();
            return view('pengaturan.edittahunajaran', compact('tahun_ajaran'));
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Update tahun ajaran
     */
    public function updateTahunAjaran(Request $request, $id){
        try {
            $rules = [
                'nama_tahun_ajaran' => 'required'
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->all());
            }
            TahunAjaran::where('id_tahun_ajaran', $id)->update(['nama_tahun_ajaran' => $request->input('nama_tahun_ajaran')]);
            return redirect()->route('pengaturan.tahunajaran')->with('success', 'Data berhasil diperbarui.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Semester
     */
    public function semester(){
        $semester = Semester::all();
        return view('pengaturan.semester', compact('semester'));
    }

    /**
     * Add semester
     */
    public function addSemester(Request $request){
        try {
            $rules = [
                'nama_semester' => 'required'
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->all());
            }
            Semester::insert(
                ['nama_semester' => $request->input('nama_semester')]
            );
            return redirect()->route('pengaturan.semester')->with('success', 'Data berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Update semester
     */
    public function updateSemester(Request $request, $id){
        try {
            $rules = [
                'nama_semester' => 'required'
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->all());
            }
            Semester::where('id_semester', $id)->update(['nama_semester' => $request->input('nama_semester')]);
            return redirect()->route('pengaturan.semester')->with('success', 'Data berhasil diperbarui.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Delete Semester
     */
    public function deleteSemester($id){
        try {
            Semester::where('id_semester', $id)->delete();
            return back()->with('success', 'Data berhasil dihapus.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Show semester edit page
     */
    public function editSemester($id){
        try {
            $semester = Semester::where('id_semester', $id)->get();
            return view('pengaturan.editsemester', compact('semester'));
        } catch (\Throwable $th) {
            return  redirect()->route('pengaturan.semester')->withErrors($th->getMessage());
        }
    }

    /**
     * Admin Account
     *
     */
    public function accountinfo(){
        $guru = DB::table('guru')->where('id_guru', '=', session()->get('id_guru'))->get();
        return view('halaman.admin.account', compact('guru'));
    }

    /**
     * Update Admin Account
     */
    public function accountUpdate(Request $request){
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
            return redirect()->route('pengaturan.accountinfo')->with('success', 'Account berhasil diubah.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Jam pelajaran
     */
    public function jampelajaran(){
        try {
            $jam_mapel = JamMapel::all();
            return view('pengaturan.jampelajaran', compact('jam_mapel'));
        } catch (\Throwable $th) {
            return view('pengaturan.jampelajaran')->withErrors($th->getMessage());
        }
    }

    /**
     * create jam pelajaran
     */
    public function createJamPelajaran(Request $request){
        try {
            $rules = [
                'jam_mulai' => 'required',
                'jam_akhir' => 'required',
            ];
            $msg = [
                'required' => ':attribute tidak boleh kosong!',
            ];
            $validator = Validator::make($request->all(), $rules, $msg);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            JamMapel::firstOrCreate([
                'jam_mulai' => $request->input('jam_mulai'),
                'jam_akhir' => $request->input('jam_akhir'),
            ]);
            return redirect()->route('pengaturan.jampelajaran')->with('success', 'Data berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * edit jam pelajaran
     */
    public function editJamPelajaran($id){
        $jam_mapel = JamMapel::where('id_jam_mapel', $id)->get();
        return view('pengaturan.editjampelajaran', compact('jam_mapel'));
    }

    /**
     * update jam pelajaran
     */
    public function updateJamPelajaran(Request $request, $id){
        try {
            $rules = [
                'jam_mulai' => 'required',
                'jam_akhir' => 'required',
            ];
            $msg = [
                'required' => ':attribute tidak boleh kosong!',
            ];
            $validator = Validator::make($request->all(), $rules, $msg);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            JamMapel::where('id_jam_mapel', $id)->update([
                'jam_mulai' => $request->input('jam_mulai'),
                'jam_akhir' => $request->input('jam_akhir'),
            ]);
            return redirect()->route('pengaturan.jampelajaran')->with('success', 'Data berhasil diperbarui.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Delete jam pelajaran
     */
    public function deleteJamPelajaran($id){
        try {
            JamMapel::where('id_jam_mapel', $id)->delete();
            return redirect()->route('pengaturan.jampelajaran')->with('success', 'Data berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->route('pengaturan.jampelajaran')->withErrors($th->getMessage());
        }
    }
}
