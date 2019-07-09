<?php
Use App\ModelInventaris;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tabel', 'kai');
Route::get('/tambah', function () {
    return view('tambah');
});

Route::resource('kedudukan', 'kedudukan');
Route::post ( '/kedudukan', function () {
	$kedudukan = Input::get ( 'kedudukan' );
    if($kedudukan == ""){
		$details = ModelInventaris::get();
        return view ( 'kedudukan', compact('details') );
    }
    if($kedudukan != ""){
		$data = ModelInventaris::where ( 'kedudukan', 'LIKE', '%' . $kedudukan . '%' )->get();
		if (count ( $data ) > 0)
			return view ( 'kedudukan' )->withDetails ( $data )->withQuery ( $kedudukan );
		else
			return view ( 'error' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'kai/error' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::resource('tahun', 'tahun');
Route::post ( '/tahun', function () {
	$tahun = Input::get ( 'tahun' );
    if($tahun == ""){
		$details = ModelInventaris::get();
        return view ( 'tahun', compact('details') );
    }
    if($tahun != ""){
		$data = ModelInventaris::where ( 'tahun', 'LIKE', '%' . $tahun . '%' )->get();
		if (count ( $data ) > 0)
			return view ( 'tahun' )->withDetails ( $data )->withQuery ( $tahun );
		else
			return view ( 'error' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'kai/error' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::resource('bagian', 'bagian');
Route::post ( '/bagian', function () {
	$bagian = Input::get ( 'bagian' );
    if($bagian == ""){
		$details = ModelInventaris::get();
        return view ( 'bagian', compact('details') );
    }
    if($bagian != ""){
		$data = ModelInventaris::where ( 'bagian', 'LIKE', '%' . $bagian . '%' )->get();
		if (count ( $data ) > 0)
			return view ( 'bagian' )->withDetails ( $data )->withQuery ( $bagian );
		else
			return view ( 'error' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'kai/error' )->withMessage ( 'No Details found. Try to search again !' );
} );
