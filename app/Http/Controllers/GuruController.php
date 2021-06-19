<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_guru = Guru::paginate(10);
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
            }else{
                $data_input = [
                    'nama_lengkap_guru' => $request->input('nama_lengkap_guru'),
                    'nip' => $request->input('nip'),
                    'kota_lahir_guru' => $request->input('kota_lahir_guru'),
                    'tanggal_lahir_guru' => $request->input('tanggal_lahir_guru'),
                    'alamat_guru' => $request->input('alamat_guru'),
                    'jenis_kelamin_guru' => $request->input('jenis_kelamin_guru'),
                    'agama' => $request->input('agama'),
                    'no_hp_guru' => $request->input('no_hp_guru'),
                    'email_guru' => $request->input('email_guru'),
                    'role' => 'guru',
                    'profile_img' => 'img_guru.jpg',
                ];
                Guru::create($data_input);
                return redirect()->route('guru.index')->with('success', 'Data berhasil ditambahkan.');
            }
        } catch (\Throwable $th) {
            return redirect()->route('dashboard.index')->with('fail_msg', $th->getMessage());
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
