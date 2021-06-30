<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Guru;
use App\Kelas;
use App\Mapel;
use App\DataSekolah;

use Illuminate\Http\Request;

class DashboardController extends Controller
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
        $jumlah_siswa = count(Siswa::all());
        $jumlah_guru = count(Guru::all());
        $jumlah_kelas = count(Kelas::all());
        $jumlah_mapel = count(Mapel::all());
        $data_sekolah = DataSekolah::all();

        return view('dashboard.index', [
            'n_siswa' => $jumlah_siswa,
            'n_guru' => $jumlah_guru,
            'n_kelas' => $jumlah_kelas,
            'n_mapel' => $jumlah_mapel,
            'sekolah' => $data_sekolah
        ]);
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
