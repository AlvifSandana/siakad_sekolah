<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\WaliKelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class WaliKelasController extends Controller
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
            $wali_kelas = DB::table('wali_kelas')->select('id_wali_kelas', 'guru.nama_lengkap_guru as nama_wali_kelas')
                            ->join('guru', 'guru_id', '=', 'guru.id_guru')
                            ->orderBy('id_wali_kelas')
                            ->get();
            return view('walikelas.index', compact('wali_kelas'));
        } catch (\Throwable $th) {
            return view('walikelas.index')->withErrors($th->getMessage());
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
            $data_guru = DB::table('guru')->select('id_guru', 'nama_lengkap_guru')->get();
            return view('walikelas.add', compact('data_guru'));
        } catch (\Throwable $th) {
            return redirect()->route('walikelas.index')->withErrors($th->getMessage());
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
            $validator = Validator::make($request->all(), ['nama_guru' => 'required']);

            if ($validator->fails()) {
                return redirect()->route('walikelas.create')->withErrors($validator);
            }

            WaliKelas::create([
                'guru_id' => $request->input('nama_guru')
            ]);

            DB::table('guru')->where('id_guru' ,'=', $request->input('nama_guru'))->update(['role' => 'walikelas']);
            return redirect()->route('walikelas.index')->with('success', 'Data berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->route('walikelas.create')->withErrors($th->getMessage());
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
            $wali_kelas = WaliKelas::where('id_wali_kelas', $id)->get();
            $data_guru = DB::table('guru')->select('id_guru', 'nama_lengkap_guru')->get();
            return view('walikelas.edit', compact('data_guru', 'wali_kelas'));
        } catch (\Throwable $th) {
            return redirect()->route('walikelas.index')->withErrors($th->getMessage());
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
            $validator = Validator::make($request->all(), ['nama_guru' => 'required']);

            if ($validator->fails()) {
                return redirect()->route('walikelas.edit')->withErrors($validator);
            }

            WaliKelas::where('id_wali_kelas', '=', $id)->update(['guru_id' => $request->input('nama_guru')]);
            DB::table('guru')->where('id_guru', '=', $request->input('nama_guru'))->update(['role' => 'walikelas']);
            return redirect()->route('walikelas.index')->with('success', 'Data berhasil diperbarui.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
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
        WaliKelas::where('id_wali_kelas', '=', $id)->delete();
        return redirect()->route('walikelas.index')->with('success', 'Data berhasil dihapus.');
    }
}
