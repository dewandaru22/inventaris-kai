@extends('base')
@section('content')

      <section class="main">

        <div class="container-fluid">
            <!-- /.row-->
              
              <div class="container">
            <div class="card mt-2">
                <div class="card-header text-center">
                    Data Inventaris Berdasarkan Kedudukan
                </div>
                {{-- notifikasi form validasi --}}
                    @if ($errors->has('file'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('file') }}</strong>
                    </span>
                    @endif
                
                    {{-- notifikasi sukses --}}
                    @if ($sukses = Session::get('sukses'))
                    <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button> 
                      <strong>{{ $sukses }}</strong>
                    </div>
                    @endif
                <div class="card-body">
                <form action="/kedudukan" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control col-sm-3" name="kedudukan"
                                placeholder="Cari Kedudukan"> <span class="input-group-btn">
                                <span class="input-group-btn">
                                <button style="margin-left:10px;" type="submit" class="btn btn-success">Cari</button>
                                </button>
                                <a href="/print" class="btn btn-md btn-success" target="_blank">
                                <span class="fa fa-print"> Print </span>
                                </a>
                                <a href="/export_excel" class="btn btn-md btn-success" target="_blank">
                                <span class="fa fa-download"> Download </span>
                                </a>
                                <a class="btn btn-md btn-success " target="_blank" data-toggle="modal" data-target="#importExcel">
                                <span class="fa fa-upload"> Import </span>
                                </a>

                                <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <form method="post" action="/import_excel" enctype="multipart/form-data">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                        </div>
                                        <div class="modal-body">
                                    
                                          {{ csrf_field() }}
                                    
                                          <label>Pilih file excel</label>
                                          <div class="form-group">
                                            <input type="file" name="file" required="required">
                                          </div>
                                    
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Import</button>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                            </span>
                        </div>
                    </form>
                <br>
            <table class="table table-bordered small">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Barang</th>
                        <th>No Inventaris</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Harga Barang/Item</th>
                        <th>Bagian</th>
                        <th>Kedudukan</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($details as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama_barang }}</td>
                        <td>{{ $d->no_inventaris }}</td>
                        <td>{{ $d->jumlah }}</td>
                        <td>{{ $d->satuan }}</td>
                        <td>Rp{{ $d->harga_barang_item }}</td>
                        <td>{{ $d->bagian }}</td>
                        <td>{{ $d->kedudukan }}</td>
                        <td>
                            <form action="{{ route('kedudukan.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('kedudukan.edit',$d->id) }}" class=" btn btn-sm btn-primary">
                                <span class="fa fa-pencil"></span>
                                </a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">
                                <span class="fa fa-trash"></span>
                                </button>
                                <a target="_blank"href="{{ route('tabel.show',$d->id) }}" class=" btn btn-sm btn-success">
                                <span class="fa fa-print"></span>
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $details->render() !!}
            </div>
        </div>
              
              
            </div>
      </section>
      @endsection
