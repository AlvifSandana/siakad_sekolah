<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;
use Illuminate\Support\Facades\Validator;

class MapelController extends Controller
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
        // show data of mapel
        try {
            $mapel = Mapel::all();
            return view('mapel.index', compact('mapel'));
        } catch (\Throwable $th) {
            //throw $th;
            return view('mapel.index')->with('error', $th->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel.add');
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
                'nama_mapel' => 'required'
            ]);

            if($validator->fails()){
                return redirect()->route('mapel.create')->withErrors($validator);
            }

            Mapel::create($request->all());
            return redirect()->route('mapel.index')->with('success', 'Data berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->route('mapel.create')->withErrors($th->getMessage());
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
        $mapel = Mapel::where('id_mapel', '=', $id)->get();
        return view('mapel.edit', compact('mapel'));
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
                'nama_mapel' => 'required'
            ]);

            if($validator->fails()){
                return back()->withErrors($validator);
            }

            $mapel_update = [
                'nama_mapel' => $request->input('nama_mapel')
            ];

            Mapel::where('id_mapel', '=', $id)->update($mapel_update);

            return redirect()->route('mapel.index')->with('success', 'Data berhasil diperbarui.');
        } catch (\Throwable $th) {
            return redirect()->route('mapel.edit', $id)->withErrors($th->getMessage());
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
        try {
            Mapel::where('id_mapel', '=', $id)->delete();
            return redirect()->route('mapel.index')->with('success', 'Data berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->route('mapel.index')->withErrors($th->getMessage());
        }

    }
}
