<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelInventaris;

class kai extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelInventaris::all();
        return view('tabel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelInventaris();
		$data->no_inventaris = $request->no_inventaris;
		$data->nama_barang = $request->nama_barang;
		$data->jumlah = $request->jumlah;
        $data->satuan = $request->satuan;
        $data->harga_barang_item = $request->harga_barang_item;
        $data->bagian = $request->bagian;
        $data->kedudukan = $request->kedudukan;
        $data->save();
        return redirect()->back()->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ModelInventaris::where('id',$id)->get();
       	return view('edit', compact('data'));
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
        $data = ModelInventaris::where('id',$id)->first();
        $data->no_inventaris = $request->no_inventaris;
		$data->nama_barang = $request->nama_barang;
		$data->jumlah = $request->jumlah;
        $data->satuan = $request->satuan;
        $data->harga_barang_item = $request->harga_barang_item;
        $data->bagian = $request->bagian;
        $data->kedudukan = $request->kedudukan;
        $data->save();
        return redirect()->route('tabel.index')->with('alert-success','Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelInventaris::where('id',$id)->first();
        $data->delete();
        return redirect()->back()->with('alert-success','Berhasil Menghapus Data!');
    }
}