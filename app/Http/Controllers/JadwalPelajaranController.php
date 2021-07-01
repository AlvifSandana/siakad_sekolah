<?php

namespace App\Http\Controllers;

use \App\JadwalPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JadwalPelajaranController extends Controller
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
            $jadwal_pelajaran = DB::table('jadwal_pelajaran')
                                    ->select('mapel.nama_mapel as mapel', 'guru.nama_lengkap_guru as pengajar', 'hari.nama_hari as hari', 'jam_mapel.jam_mulai as mulai', 'jam_mapel.jam_akhir as akhir', 'kelas.nama_kelas as kelas', 'semester.nama_semester as semester', 'tahun_ajaran.nama_tahun_ajaran as tahun_ajaran')
                                    ->join('mapel', 'mapel_id', '=', 'mapel.id_mapel')
                                    ->join('guru', 'guru_id', '=', 'guru.id_guru')
                                    ->join('hari', 'hari_id', '=', 'hari.id_hari')
                                    ->join('jam_mapel', 'jam_mapel_id', '=', 'jam_mapel.id_jam_mapel')
                                    ->join('kelas', 'kelas_id', '=', 'kelas.id_kelas')
                                    ->join('semester', 'jadwal_pelajaran.semester_id', '=', 'semester.id_semester')
                                    ->join('tahun_ajaran', 'jadwal_pelajaran.tahun_ajaran_id', '=', 'id_tahun_ajaran')
                                    ->get();
            return view('jadwal_pelajaran.index', compact('jadwal_pelajaran'));
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $mapel = DB::table('mapel')->select('id_mapel', 'nama_mapel')->get();
            $guru = DB::table('guru')->select('id_guru', 'nama_lengkap_guru')->get();
            $hari = DB::table('hari')->get();
            $jam_mapel = DB::table('jam_mapel')->get();
            $kelas = DB::table('kelas')->select('id_kelas', 'nama_kelas')->get();
            $semester = DB::table('semester')->get();
            $tahun_ajaran = DB::table('tahun_ajaran')->get();
            return view('jadwal_pelajaran.add', compact('mapel', 'guru', 'hari', 'jam_mapel', 'kelas', 'semester', 'tahun_ajaran'));
        } catch (\Throwable $th) {
            return redirect()->route('dashboard.index')->withErrors($th->getMessage());
        }
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
                'mapel_id' => 'required',
                'guru_id' => 'required',
                'hari_id' => 'required',
                'jam_mapel_id' => 'required',
                'kelas_id' => 'required',
                'semester_id' => 'required',
                'tahun_ajaran_id' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->route('jadwalpelajaran.create')->withErrors($validator);
            }
            $jadwal_input = [
                'mapel_id' => $request->input('mapel_id'),
                'guru_id' => $request->input('guru_id'),
                'hari_id' => $request->input('hari_id'),
                'jam_mapel_id' => $request->input('jam_mapel_id'),
                'kelas_id' => $request->input('kelas_id'),
                'semester_id' => $request->input('semester_id'),
                'tahun_ajaran_id' => $request->input('tahun_ajaran_id'),
            ];
            JadwalPelajaran::create($jadwal_input);
            return redirect()->route('jadwalpelajaran.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('jadwalpelajaran.create')->withErrors($th->getMessage());
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
        //
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
            $jadwal = JadwalPelajaran::where('id_jadwal', $id)->get();
            $mapel = DB::table('mapel')->select('id_mapel', 'nama_mapel')->get();
            $guru = DB::table('guru')->select('id_guru', 'nama_lengkap_guru')->get();
            $hari = DB::table('hari')->get();
            $jam_mapel = DB::table('jam_mapel')->get();
            $kelas = DB::table('kelas')->select('id_kelas', 'nama_kelas')->get();
            $semester = DB::table('semester')->get();
            $tahun_ajaran = DB::table('tahun_ajaran')->get();
            return view('jadwal_pelajaran.edit', compact('jadwal', 'mapel', 'guru', 'hari', 'jam_mapel', 'kelas', 'semester', 'tahun_ajaran'));
        } catch (\Throwable $th) {
            return redirect()->route('dashboard.index')->withErrors($th->getMessage());
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
                'mapel_id' => 'required',
                'guru_id' => 'required',
                'hari_id' => 'required',
                'jam_mapel_id' => 'required',
                'kelas_id' => 'required',
                'semester_id' => 'required',
                'tahun_ajaran_id' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->route('jadwalpelajaran.create')->withErrors($validator);
            }
            $jadwal_update = [
                'mapel_id' => $request->input('mapel_id'),
                'guru_id' => $request->input('guru_id'),
                'hari_id' => $request->input('hari_id'),
                'jam_mapel_id' => $request->input('jam_mapel_id'),
                'kelas_id' => $request->input('kelas_id'),
                'semester_id' => $request->input('semester_id'),
                'tahun_ajaran_id' => $request->input('tahun_ajaran_id'),
            ];
            JadwalPelajaran::where('id_jadwal', $id)->update($jadwal_update);
            return redirect()->route('jadwalpelajaran.index')->with('success', 'Data berhasil diperbarui.');
        } catch (\Throwable $th) {
            return redirect()->route('jadwalpelajaran.index')->withErrors($th->getMessage());
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
        JadwalPelajaran::where('id_jadwal', $id)->delete();
        return redirect()->route('jadwalpelajaran.index')->with('success', 'Data berhasil dihapus.');
    }
}
