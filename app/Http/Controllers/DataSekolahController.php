<?php

namespace App\Http\Controllers;

use App\DataSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataSekolahController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceksesi');
    }

    public function index(Request $request){
        $data_sekolah = DataSekolah::all();
        if (!$data_sekolah->isEmpty()) {
            return view('datasekolah.index', compact('data_sekolah'));
        } else {
            return redirect()->route('datasekolah.add');
        }
    }

    public function add(){
        return view('datasekolah.add');
    }

    public function create(Request $request){
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

            $data = [
                'nama_sekolah' => $request->input('nama_sekolah'),
                'npsn' => $request->input('npsn'),
                'nss' => $request->input('nss'),
                'alamat_sekolah' => $request->input('alamat_sekolah'),
                'telp_fax' => $request->input('telp_fax'),
                'website' => $request->input('website'),
                'email' => $request->input('email'),
            ];

            DataSekolah::insert($data);
            return redirect()->route('datasekolah.index')->with('success', 'Data berhasil tambahkan.');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function edit(){
        $data_sekolah = DataSekolah::all();
        if (count($data_sekolah)) {
            return view('datasekolah.edit', compact('data_sekolah'));
        } else {
            return redirect()->route('datasekolah.add');
        }
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
            return redirect()->route('datasekolah.index')->with('success', 'Data berhasil diperbarui.');
        } catch (\Throwable $th) {
            return redirect()->route('datasekolah.index')->withErrors($th->getMessage());
        }
    }
}
