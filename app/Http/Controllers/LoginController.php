<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        try {
            $rules = [
                'email' => 'required|email',
                'password' => 'required|string'
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->all());
            }

            $guru = DB::table('guru')->where('email', '=', $request->input('email'))->first();

            if ($guru->role == 'guru' && Hash::check($request->input('password'), $guru->password)) {
                session([
                    'id_guru' => $guru->id_guru,
                    'nip' => $guru->nip,
                    'nama_lengkap_guru' => $guru->nama_lengkap_guru,
                    'email' => $guru->email,
                    'role' => $guru->role,
                    'profile_img' => $guru->profile_img,
                ]);
                return redirect()->route('dashboard_guru');
            } elseif ($guru->role == 'admin' && Hash::check($request->input('password'), $guru->password)) {
                session([
                    'id_guru' => $guru->id_guru,
                    'nip' => $guru->nip,
                    'nama_lengkap_guru' => $guru->nama_lengkap_guru,
                    'email' => $guru->email,
                    'role' => $guru->role,
                    'profile_img' => $guru->profile_img,
                ]);
                return redirect()->route('dashboard.index');
            } elseif ($guru->role == 'walikelas' && Hash::check($request->input('password'), $guru->password)){
                session([
                    'id_guru' => $guru->id_guru,
                    'nip' => $guru->nip,
                    'nama_lengkap_guru' => $guru->nama_lengkap_guru,
                    'email' => $guru->email,
                    'role' => $guru->role,
                    'profile_img' => $guru->profile_img,
                ]);
                return redirect()->route('dashboard_walikelas');
            } else {
                return back()->with('error', 'Email atau Password salah.');
            }
        } catch (\Throwable $th) {
            return back()->with('error', 'Email atau password salah.');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login.index');
    }
}
