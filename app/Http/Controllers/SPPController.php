<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SPP;
use Illuminate\Support\Facades\Validator;

class SPPController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceksesi');
    }

    public function index(){
        $data_spp = Spp::all();
        return view('spp.index', compact('data_spp'));
    }

    public function show(Request $request){
        $spp = SPP::findOrFail($request->get('id'));
        echo json_encode($spp);
    }

    public function addSPP(Request $request){
        try {
            $rules = [
                'tahun' => 'required',
                'nominal' => 'required',
            ];
            $msg = [
                'required' => ':attribute tidak boleh kosong!'
            ];
            $validator = Validator::make($request->all(), $rules, $msg);
            if($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }
            SPP::insert([
                'tahun' => $request->input('tahun'),
                'nominal' => $request->input('nominal')
            ]);
            return redirect()->route('spp.index')->with('success', 'Data berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    public function updateSPP(Request $request){
        try {
            $rules = [
                'tahun' => 'required',
                'nominal' => 'required',
            ];
            $msg = [
                'required' => ':attribute tidak boleh kosong!'
            ];
            $validator = Validator::make($request->all(), $rules, $msg);
            if($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }
            $update_data = [
                'tahun' => $request->input('tahun'),
                'nominal' => $request->input('nominal')
            ];
            SPP::where('id_spp', $request->input('id_spp'))->update($update_data);
            return redirect()->route('spp.index')->with('success', 'Data berhasil diperbarui.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    public function deleteSPP($id){
        SPP::where('id_spp', $id)->delete();
        return redirect()->route('spp.index')->with('success', 'Data berhasil dihapus.');
    }
}
