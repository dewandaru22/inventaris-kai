<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelInventaris;

class tahun extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = ModelInventaris::orderBy('id', 'asc')->paginate(10);
        return view('tahun', compact('details'));
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
        $details = ModelInventaris::where('id',$id)->get();
        $pdf = PDF::setPaper('A4', 'portrait');
        return $pdf->stream();
    }
    
    public function print()
    {
        $details = ModelInventaris::all();
        return view('print', compact('details'));
    }

    public function export()
	{
		$details = ModelInventaris::all();
		return view('tabel',['details'=>$details]);
	}

    public function export_excel()
	{
		return Excel::download(new InventarisExport, 'inventaris.xls');
    }
    
    public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('inventaris',$nama_file);
 
		// import data
		Excel::import(new InventarisImport, public_path('/inventaris/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('Sukses','Data Inventaris Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/tabel');
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = ModelInventaris::where('id',$id)->get();
       	return view('edit', compact('details'));
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
        return redirect()->route('tahun.index')->with('alert-success','Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details = ModelInventaris::where('id',$id)->first();
        $details->delete();
        return redirect()->back()->with('alert-success','Berhasil Menghapus Data!');
    }
}