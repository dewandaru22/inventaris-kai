@extends('base')
@section('content')

      <section class="main">
    <br>
        <div class="container-fluid">
              <div class="container">
            <div class="card mt-5">
            @if(Session::has('alert-success'))
                <div class="alert alert-warning">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
                <div class="card-header text-center">
                    Data Inventaris
                </div>
                <div class="card-body">
                    <br/>
                    <br/>
                    <form autocomplete="off" action="{{ route('tabel.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="no_inventaris" class="col-sm-3 col-form-label">No Inventaris</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="no_inventaris" type="text" class="form-control" id="no_inventaris">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="nama_barang" type="text" class="form-control" id="nama_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="jumlah" type="text" class="form-control" id="jumlah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="satuan" type="text" class="form-control" id="satuan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_barang_item" class="col-sm-3 col-form-label">Harga Barang/Item</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="harga_barang_item" type="text" class="form-control" id="harga_barang_item">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bagian" class="col-sm-3 col-form-label">Bagian</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="bagian" type="text" class="form-control" id="bagian">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kedudukan" class="col-sm-3 col-form-label">Kedudukan</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="kedudukan" type="text" class="form-control" id="kedudukan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="tahun" type="text" class="form-control" id="tahun">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="/tabel" class="btn btn-md btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
                </div>
            <br>
        </div>
              
                
            
          </div>
        </div>
      </main>
    @endsection