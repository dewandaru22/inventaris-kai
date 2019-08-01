@extends('base')
@section('content')

      <section class="main">
    <br>
        <div class="container-fluid">
            <!-- /.row-->
              
            <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Inventaris
                </div>
                <div class="card-body">
                @foreach($details as $datas)
            <form action="{{ route('tabel.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama_barang">Nama Barang:</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $datas->nama_barang }}">
                </div>
                <div class="form-group">
                    <label for="no_inventaris">No Inventaris:</label>
                    <input type="no_inventaris" class="form-control" id="no_inventaris" name="no_inventaris" value="{{ $datas->no_inventaris }}">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $datas->jumlah }}">
                </div>
                <div class="form-group">
                    <label for="satuan">Satuan:</label>
                    <input type="text" class="form-control" id="satuan" name="satuan" value="{{ $datas->satuan }}">
                </div>
                <div class="form-group">
                    <label for="harga_barang_item">Harga Barang/Item:</label>
                    <input type="text" class="form-control" id="harga_barang_item" name="harga_barang_item" value="{{ $datas->harga_barang_item }}">
                </div>
                <div class="form-group">
                    <label for="bagian">Bagian:</label>
                    <input type="text" class="form-control" id="bagian" name="bagian" value="{{ $datas->bagian }}">
                </div>
                <div class="form-group">
                    <label for="kedudukan">Kedudukan:</label>
                    <input type="text" class="form-control" id="kedudukan" name="kedudukan" value="{{ $datas->kedudukan }}">
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun:</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $datas->tahun }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <a href="javascript:javascript:history.go(-1)" class="btn btn-md btn-danger">Cancel</a>
                </div>
            </form>
            @endforeach
            </div>
            <br>
        </div>

        </div>
      </section>
@endsection