<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KelasController extends Controller
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
        // show data of kelas table
        try {
            $data_kelas = DB::table('kelas')
                        ->join('wali_kelas', 'wali_kls_id', '=', 'wali_kelas.id_wali_kelas')
                        ->join('tahun_ajaran', 'tahun_ajaran_id', '=', 'tahun_ajaran.id_tahun_ajaran')
                        ->join('semester', 'semester_id', '=', 'semester.id_semester')
                        ->join('guru', 'wali_kelas.guru_id', '=', 'guru.id_guru')
                        ->select('id_kelas', 'nama_kelas', 'tahun_ajaran.nama_tahun_ajaran as thn_ajaran', 'semester.nama_semester as nm_semester', 'guru.nama_lengkap_guru as nama_wali_kelas')
                        ->orderBy('id_kelas')
                        ->get();
            return view('kelas.index', compact('data_kelas'))->with('success', 'Data Available');

        } catch (\Throwable $th) {
            return view('kelas.index')->with('failed', $th);
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
            $tahun_ajaran = DB::table('tahun_ajaran')->get();
            $semester = DB::table('semester')->get();
            $wali_kelas = DB::table('wali_kelas')
                            ->select('id_wali_kelas', 'guru.nama_lengkap_guru as nama_wali_kelas')
                            ->join('guru', 'guru_id', '=', 'guru.id_guru')
                            ->orderBy('id_wali_kelas')
                            ->get();
            return view('kelas.add', compact('tahun_ajaran', 'semester', 'wali_kelas'));
        } catch (\Throwable $th) {
            return redirect()->route('kelas.index')->withErrors($th->getMessage());
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
                'nama_kelas' => 'required',
                'wali_kelas' => 'required',
                'tahun_ajaran' => 'required',
                'semester' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->route('mapel.create')->withErrors($validator);
            }

            $data_kelas = [
                'nama_kelas' => $request->input('nama_kelas'),
                'wali_kls_id' => $request->input('wali_kelas'),
                'tahun_ajaran_id' => $request->input('tahun_ajaran'),
                'semester_id' => $request->input('semester')
            ];

            Kelas::create($data_kelas);
            return redirect()->route('kelas.index')->with('success', 'Data berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->route('kelas.index')->withErrors($th->getMessage());
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
            $kelas = Kelas::where('id_kelas', $id)->get();
            $tahun_ajaran = DB::table('tahun_ajaran')->get();
            $semester = DB::table('semester')->get();
            $wali_kelas = DB::table('wali_kelas')
                            ->select('id_wali_kelas', 'guru.nama_lengkap_guru as nama_wali_kelas')
                            ->join('guru', 'guru_id', '=', 'guru.id_guru')
                            ->orderBy('id_wali_kelas')
                            ->get();
            return view('kelas.edit', compact('kelas', 'tahun_ajaran', 'semester', 'wali_kelas'));
        } catch (\Throwable $th) {
            return redirect()->route('kelas.index')->withErrors($th->getMessage());
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
                'nama_kelas' => 'required',
                'wali_kelas' => 'required',
                'tahun_ajaran' => 'required',
                'semester' => 'required'
            ]);

            if ($validator->fails()) {
                return view('kelas.edit')->withErrors($validator);
            }

            $data_kelas = [
                'nama_kelas' => $request->input('nama_kelas'),
                'wali_kls_id' => $request->input('wali_kelas'),
                'tahun_ajaran_id' => $request->input('tahun_ajaran'),
                'semester_id' => $request->input('semester')
            ];
            Kelas::where('id_kelas', $id)
                    ->update($data_kelas);
            return redirect()->route('kelas.index')->with('success', 'Data berhasil diperbarui.');
        } catch (\Throwable $th) {
            return redirect()->route('kelas.edit')->withErrors($th->getMessage());
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
        Kelas::where('id_kelas','=', $id)->delete();
        return redirect()->route('kelas.index')->with('success', 'Data berhasil dihapus.');
    }
}
