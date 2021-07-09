<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        $data_pembayaran = DB::table('pembayaran')
            ->join('spp', 'pembayaran.spp_id', '=', 'spp.id_spp')
            ->join('guru', 'id_petugas', '=', 'guru.id_guru')
            ->select('pembayaran.*', 'spp.tahun as tahun', 'spp.nominal as nominal', 'guru.nama_lengkap_guru as nama_petugas')
            ->get();
        $data_spp = DB::table('spp')->get();
        return view('spp.pembayaran', compact('data_pembayaran', 'data_spp'));
    }

    public function show(Request $request)
    {
        $pembayaran = Pembayaran::findOrFail($request->get('id'));
        echo json_encode($pembayaran);
    }

    public function addPembayaran(Request $request)
    {
        try {
            $rules = [
                'nisn' => 'required',
                'tanggal_bayar' => 'required',
                'bulan_dibayar' => 'required',
                'keterangan' => 'required',
                'spp_id' => 'required'
            ];
            $msg = [
                'required' => ':attribute tdak boleh kosong!'
            ];
            $validator = Validator::make($request->all(), $rules, $msg);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            Pembayaran::insert([
                'nisn' => $request->input('nisn'),
                'tanggal_bayar' => $request->input('tanggal_bayar'),
                'bulan_dibayar' => $request->input('bulan_dibayar'),
                'keterangan' => $request->input('keterangan'),
                'spp_id' => $request->input('spp_id'),
                'id_petugas' => $request->session()->get('id_guru'),
            ]);
            return redirect()->route('spp.pembayaran.index')->with('success', 'Pembayaran berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->route('spp.pembayaran.index')->withErrors($th->getMessage());
        }
    }

    public function updatePembayaran(Request $request)
    {
        try {
            $rules = [
                'edit_nisn' => 'required',
                'edit_tanggal_bayar' => 'required',
                'edit_bulan_dibayar' => 'required',
                'edit_keterangan' => 'required',
                'edit_spp_id' => 'required'
            ];
            $msg = [
                'required' => ':attribute tdak boleh kosong!'
            ];
            $validator = Validator::make($request->all(), $rules, $msg);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            $update_data = [
                'nisn' => $request->input('edit_nisn'),
                'tanggal_bayar' => $request->input('edit_tanggal_bayar'),
                'bulan_dibayar' => $request->input('edit_bulan_dibayar'),
                'keterangan' => $request->input('edit_keterangan'),
                'spp_id' => $request->input('edit_spp_id'),
                'id_petugas' => $request->session()->get('id_guru'),
            ];
            Pembayaran::where('id_pembayaran', $request->input('edit_id'))->update($update_data);
            return redirect()->route('spp.pembayaran.index')->with('success', 'Data pembayaran berhasil diperbarui.');
        } catch (\Throwable $th) {
            return redirect()->route('spp.pembayaran.index')->withErrors($th->getMessage());
        }
    }

    public function deletePembayaran($id)
    {
        Pembayaran::where('id_pembayaran', $id)->delete();
        return redirect()->route('spp.pembayaran.index')->with('success', 'Pembayaran berhasil dihapus.');
    }
}
