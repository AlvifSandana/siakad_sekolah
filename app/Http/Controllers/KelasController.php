<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
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
                        ->paginate(10);
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
