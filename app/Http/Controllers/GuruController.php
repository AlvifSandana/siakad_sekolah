<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceksesi');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_guru = Guru::all();
        return view('guru.index', compact('data_guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama_lengkap_guru' => 'required',
                'nip' => 'required',
                'kota_lahir_guru' => 'required',
                'tanggal_lahir_guru' => 'required',
                'jenis_kelamin_guru' => 'required',
                'agama' => 'required',
                'alamat_guru' => 'required',
                'no_hp_guru' => 'required',
                'email_guru' => 'required'
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            } else {
                $profile_img = $request->file('profile_img');
                $data_input = [
                    'nama_lengkap_guru' => $request->input('nama_lengkap_guru'),
                    'nip' => $request->input('nip'),
                    'kota_lahir_guru' => $request->input('kota_lahir_guru'),
                    'tanggal_lahir_guru' => $request->input('tanggal_lahir_guru'),
                    'alamat_guru' => $request->input('alamat_guru'),
                    'jenis_kelamin_guru' => $request->input('jenis_kelamin_guru'),
                    'agama' => $request->input('agama'),
                    'no_hp_guru' => $request->input('no_hp_guru'),
                    'email' => $request->input('email_guru'),
                    'password' => $request->input('password'),
                    'role' => $request->input('role'),
                    'profile_img' => !$profile_img->getClientOriginalName() ? 'profile_img.jpg' : $profile_img->getClientOriginalName(),
                ];
                Guru::create($data_input);
                $profile_img->move('profile_img/guru', $profile_img->getClientOriginalName());
                return redirect()->route('guru.index')->with('success', 'Data berhasil ditambahkan.');
            }
        } catch (\Throwable $th) {
            return redirect()->route('dashboard.index')->withErrors($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::where('id_guru', $id)->get();
        return view('guru.show', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::where('id_guru', $id)->get();
        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama_lengkap_guru' => 'required',
                'nip' => 'required',
                'kota_lahir_guru' => 'required',
                'tanggal_lahir_guru' => 'required',
                'jenis_kelamin_guru' => 'required',
                'agama' => 'required',
                'alamat_guru' => 'required',
                'no_hp_guru' => 'required',
                'email_guru' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('guru.index')->withErrors($validator)->withInput();
            } else {
                $data_update = [
                    'nama_lengkap_guru' => $request->input('nama_lengkap_guru'),
                    'nip' => $request->input('nip'),
                    'kota_lahir_guru' => $request->input('kota_lahir_guru'),
                    'tanggal_lahir_guru' => $request->input('tanggal_lahir_guru'),
                    'alamat_guru' => $request->input('alamat_guru'),
                    'jenis_kelamin_guru' => $request->input('jenis_kelamin_guru'),
                    'agama' => $request->input('agama'),
                    'no_hp_guru' => $request->input('no_hp_guru'),
                    'email' => $request->input('email_guru'),
                    'role' => $request->input('role'),
                ];
                Guru::where('id_guru', '=', $id)->update($data_update);
                return redirect()->route('guru.index')->with('success', 'Data berhasil ditambahkan.');
            }
        } catch (\Throwable $th) {
            return redirect()->route('dashboard.index')->withErrors($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guru::where('id_guru', '=', $id)->delete();
        return redirect()->route('guru.index')->with('success', 'Data berhasil dihapus.');
    }
}
