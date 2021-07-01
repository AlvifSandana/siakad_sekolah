<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UploadfotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceksesi');
    }

    public function guru(Request $request){
        try {
            $photo_dir = 'profile_img/guru';
            $profile_img = $request->file('profile_img');
            $rules = [
                'profile_img' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->all());
            }
            $data_update = [
                'profile_img' => $request->session()->get('nip').'_'.$profile_img->getClientOriginalName()
            ];
            DB::table('guru')->where('id_guru', '=', $request->session()->get('id_guru'))->update($data_update);
            $profile_img->move($photo_dir, $request->session()->get('nip').'_'.$profile_img->getClientOriginalName());
            return back()->with('success', 'Foto berhasil diperbarui.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    public function siswa(Request $request){
        try {
            $photo_dir = 'profile_img/siswa';
            $profile_img = $request->file('profile_img');
            $rules = [
                'profile_img' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->all());
            }
            $data_update = [
                'profile_img' => $request->session()->get('nis').'_'.$profile_img->getClientOriginalName()
            ];
            DB::table('siswa')->where('id_siswa', '=', $request->session()->get('id_siswa'))->update($data_update);
            $profile_img->move($photo_dir, $request->session()->get('nis').'_'.$profile_img->getClientOriginalName());
            return back()->with('success', 'Foto berhasil diperbarui.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }
}
