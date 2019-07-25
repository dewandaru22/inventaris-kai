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
    return view('auth/login');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/home', function () {
    return view('home');
});

Route::resource('tabel', 'kai');

Route::get('/tambah', function () {
    return view('tambah');
});
Route::get('/print', function () {
    return view('print');
});

Route::resource('kedudukan', 'kedudukan');
Route::any ( '/kedudukan', function () {
	$kedudukan = Input::get ( 'kedudukan' );
    if($kedudukan == ""){
        $details = ModelInventaris::orderBy('id', 'desc')->paginate (10)->setPath ( '/kedudukan' );
		return view ( 'kedudukan', compact('details') );
		$pagination = $data->appends ( array (
			'kedudukan' => Input::get ( 'kedudukan' ) 
		  ) );
    }
    if($kedudukan != ""){
		$data = ModelInventaris::where ( 'kedudukan', 'LIKE', '%' . $kedudukan . '%' )->orderBy('id', 'desc')->paginate (10)->setPath ( '' );
		$pagination = $data->appends ( array (
			'kedudukan' => Input::get ( 'kedudukan' ) 
		  ) );
		if (count ( $data ) > 0)
			return view ( 'kedudukan' )->withDetails ( $data )->withQuery ( $kedudukan );
		else
			return view ( 'error' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'kai/error' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::resource('tahun', 'tahun');
Route::any ( '/tahun', function () {
	$tahun = Input::get ( 'tahun' );
    if($tahun == ""){
		$details = ModelInventaris::orderBy('id', 'desc')->paginate (10)->setPath ( '/tahun' );
		return view ( 'tahun', compact('details') );
		$pagination = $data->appends ( array (
			'tahun' => Input::get ( 'tahun' ) 
		  ) );
    }
    if($tahun != ""){
		$data = ModelInventaris::where ( 'tahun', 'LIKE', '%' .$tahun. '%' )->orderBy('id', 'desc')->paginate (10)->setPath ( '' );
		$pagination = $data->appends ( array (
			'tahun' => Input::get ( 'tahun' ) 
		  ) );
		if (count ( $data ) > 0)
			return view ( 'tahun' )->withDetails ( $data )->withQuery ( $tahun );
		else
			return view ( 'error' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'kai/error' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::resource('bagian', 'bagian');
Route::any ( '/bagian', function () {
	$q = Input::get ( 'q' );
    if($q == ""){
		$details = ModelInventaris::orderBy('id', 'desc')->paginate (10)->setPath ( '/bagian' );
        return view ( 'bagian', compact('details') );
		$pagination = $data->appends ( array (
			'q' => Input::get ( 'q' ) 
		  ) );
	}
    if($q != ""){
		$data = ModelInventaris::where ( 'bagian', 'LIKE', '%' .$q. '%' )->orderBy('id', 'desc')->paginate (10)->setPath ( '' );
		$pagination = $data->appends ( array (
			'q' => Input::get ( 'q' ) 
		  ) );
		if (count ( $data ) > 0)
			return view ( 'bagian' )->withDetails ( $data )->withQuery ( $q );
		else
			return view ( 'error' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'kai/error' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::get('/print', 'kai@print');
Route::get('/print_kedudukan', 'kedudukan@print');
Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');

Route::get('/tabel', 'kai@export');
Route::get('/export_excel', 'kai@export_excel');
Route::post('/import_excel', 'kai@import_excel');
