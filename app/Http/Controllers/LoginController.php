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
                    'nip' => $guru->nip,
                    'nama_lengkap_guru' => $guru->nama_lengkap_guru,
                    'kota_lahir_guru' => $guru->kota_lahir_guru,
                    'tanggal_lahir_guru' => $guru->tanggal_lahir_guru,
                    'alamat_guru' => $guru->alamat_guru,
                    'jenis_kelamin_guru' => $guru->jenis_kelamin_guru,
                    'agama' => $guru->agama,
                    'no_hp_guru' => $guru->no_hp_guru,
                    'email' => $guru->email,
                    'password' => $guru->password,
                    'role' => $guru->role,
                    'profile_img' => $guru->profile_img,
                ]);
                return redirect()->route('dashboard.index');
            } elseif ($guru->role == 'admin' && Hash::check($request->input('password'), $guru->password)) {
                session([
                    'nip' => $guru->nip,
                    'nama_lengkap_guru' => $guru->nama_lengkap_guru,
                    'kota_lahir_guru' => $guru->kota_lahir_guru,
                    'tanggal_lahir_guru' => $guru->tanggal_lahir_guru,
                    'alamat_guru' => $guru->alamat_guru,
                    'jenis_kelamin_guru' => $guru->jenis_kelamin_guru,
                    'agama' => $guru->agama,
                    'no_hp_guru' => $guru->no_hp_guru,
                    'email' => $guru->email,
                    'password' => $guru->password,
                    'role' => $guru->role,
                    'profile_img' => $guru->profile_img,
                ]);
                return redirect()->route('dashboard.index');
            } elseif ($guru->role == 'walikelas' && Hash::check($request->input('password'), $guru->password)){
                session([
                    'nip' => $guru->nip,
                    'nama_lengkap_guru' => $guru->nama_lengkap_guru,
                    'kota_lahir_guru' => $guru->kota_lahir_guru,
                    'tanggal_lahir_guru' => $guru->tanggal_lahir_guru,
                    'alamat_guru' => $guru->alamat_guru,
                    'jenis_kelamin_guru' => $guru->jenis_kelamin_guru,
                    'agama' => $guru->agama,
                    'no_hp_guru' => $guru->no_hp_guru,
                    'email' => $guru->email,
                    'password' => $guru->password,
                    'role' => $guru->role,
                    'profile_img' => $guru->profile_img,
                ]);
                return redirect()->route('dashboard.index');
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
