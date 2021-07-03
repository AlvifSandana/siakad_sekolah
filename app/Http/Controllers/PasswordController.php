<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PasswordController extends Controller
{
    public function updatePasswordGuru(Request $request, $id){
        try {
            $rules = [
                'password' => 'required|min:8|confirmed'
            ];
            $msg = [
                'password.required' => 'Kolom password tidak boleh kosong!'
            ];
            $validator = Validator::make($request->all(), $rules, $msg);
            if($validator->fails()){
                return back()->withErrors($validator)->withInput($request->all());
            }
            $password = Hash::make($request->input('password'));
            Guru::where('id_guru', $id)->update(['password' => $password]);
            return back()->with('success', 'Password berhasil diperbarui.');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }
}
