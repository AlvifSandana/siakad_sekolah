<?php

namespace App\Http\Controllers;

use App\DataSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataSekolahController extends Controller
{
    public function index(){
        $data_sekolah = DataSekolah::all();
        return view('datasekolah.index', compact('data_sekolah'));
    }

    public function edit(){
        $data_sekolah = DataSekolah::where('id_data_sekolah', 1)->get();
        return view('datasekolah.edit', compact('data_sekolah'));
    }

    public function update(Request $request, $id){
        try {
            $validator = Validator::make($request->all(), [
                'nama_sekolah' => 'required',
                'alamat_sekolah' =>'required',
                'telp_fax' => 'required',
                'email' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->route('dashboard.index')->withErrors($validator);
            }

            $data_sekolah_update = [
                'nama_sekolah' => $request->input('nama_sekolah'),
                'npsn' => $request->input('npsn'),
                'nss' => $request->input('nss'),
                'alamat_sekolah' => $request->input('alamat_sekolah'),
                'telp_fax' => $request->input('telp_fax'),
                'website' => $request->input('website'),
                'email' => $request->input('email'),
            ];

            DataSekolah::where('id_data_sekolah', $id)->update($data_sekolah_update);
            return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->route('dashboard.index')->withErrors($th->getMessage());
        }
    }
}
