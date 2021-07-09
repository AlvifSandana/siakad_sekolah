<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SPP;
use Illuminate\Support\Facades\Validator;

class SPPController extends Controller
{
    public function index(){
        $data_spp = Spp::all();
        return view('spp.index', compact('data_spp'));
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
            $spp = SPP::create([
                'tahun' => $request->input('tahun'),
                'nominal' => $request->input('nominal')
            ]);
            return redirect()->route('spp.index')->with('success', 'Data berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }
}
