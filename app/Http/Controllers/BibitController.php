<?php

namespace App\Http\Controllers;

use App\Models\Bibit;
use Illuminate\Http\Request;

class BibitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Bibit::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $bibit = new Bibit;
        $bibit->nama = $request->nama;
        $bibit->jenis = $request->jenis;
        $bibit->gambar = $request->gambar;
        $bibit->deskripsi = $request->deskripsi;
        $bibit->save();

        return response()->json([
            'nama' => $bibit->nama,
            'jenis' => $bibit->jenis,
            'gambar' => $bibit->gambar,
            'deskripsi' => $bibit->deskripsi,
            'result' => 'Data Berhasil Disimpan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bibit  $bibit
     * @return \Illuminate\Http\Response
     */
    public function show(Bibit $bibit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bibit  $bibit
     * @return \Illuminate\Http\Response
     */
    public function edit(Bibit $bibit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bibit  $bibit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nama = $request->nama;
        $jenis = $request->jenis;
        $gambar = $request->gambar;
        $deskripsi = $request->deskripsi;

        $bibit = Bibit::find($id);
        $bibit->nama = $nama;
        $bibit->jenis = $jenis;
        $bibit->gambar = $gambar;
        $bibit->deskripsi = $deskripsi;
        $bibit->save();

        return response()->json([
            'nama' => $bibit->nama,
            'jenis' => $bibit->jenis,
            'gambar' => $bibit->gambar,
            'deskripsi' => $bibit->deskripsi,
            'result' => 'Data Berhasil Diubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bibit  $bibit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $bibit = Bibit::find($id);
        $bibit->delete();

        return 'Data Berhasil Dihapus';
    }
}