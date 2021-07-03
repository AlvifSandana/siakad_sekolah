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

    public function guru(Request $request, $id)
    {
        try {
            $photo_dir = 'profile_img/guru';
            $profile_img = $request->file('profile_img');
            $rules = [
                'profile_img' => 'mimes:jpeg,jpg,png,gif|required',
            ];
            $msg = [
                'required' => ':attribute tidak boleh kosong!',
                'mimes' => 'Ekstensi file salah! Hanya jpeg, jpg, png, gif'
            ];
            $validator = Validator::make($request->all(), $rules, $msg);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->all());
            }

            $data_update = [
                'profile_img' => $profile_img->getClientOriginalName()
            ];

            DB::table('guru')->where('id_guru', '=', $id)->update($data_update);

            $profile_img->move($photo_dir, $profile_img->getClientOriginalName());
            $request->session()->put('profile_img', $profile_img->getClientOriginalName());
            return back()->with('success', 'Foto berhasil diperbarui.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    public function siswa(Request $request, $id)
    {
        try {
            $photo_dir = 'profile_img/siswa';
            $profile_img = $request->file('profile_img');
            $rules = [
                'profile_img' => 'mimes:jpeg,jpg,png,gif|required',
            ];
            $msg = [
                'required' => ':attribute tidak boleh kosong!',
                'mimes' => 'Ekstensi file salah! Hanya jpeg, jpg, png, gif'
            ];
            $validator = Validator::make($request->all(), $rules, $msg);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->all());
            }

            $data_update = [
                'profile_img' => $profile_img->getClientOriginalName()
            ];

            DB::table('siswa')->where('id_siswa', '=', $id)->update($data_update);
            $profile_img->move($photo_dir, $profile_img->getClientOriginalName());
            return back()->with('success', 'Foto berhasil diperbarui.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }
}
