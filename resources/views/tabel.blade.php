<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Sistem Pendataan Inventaris</title>
    <!-- Icons-->
    <link rel="icon" type="image/png" href="{{('/assets/img/logokai.png')}}" sizes="any" />
    <link href="{{('/assets/node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{('/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{('/assets/css/glyphicons.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/tabel">
        <img class="navbar-brand-full" src="{{('/assets/img/brand/logoresmi.png')}}" width="150" height="40" alt="KAI Logo" href="/tabel">
      </a>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-5">
          <a class="nav-link" href="/tabel">Sistem Pendataan Inventaris</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        
      </ul>
      
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
          <li class="nav-title">Tambah Data</li>
            <li class="nav-item">
              <a class="nav-link" href="/tambah">
                <i class="nav-icon icon-speedometer"></i> Tambah        
              </a>
            </li>
            <li class="nav-title">Data</li>
            <li class="nav-item">
              <a class="nav-link" href="/tahun">
                <i class="nav-icon icon-drop"></i> Tahun</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/bagian">
                <i class="nav-icon icon-pencil"></i> Bagian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kedudukan">
                <i class="nav-icon icon-pencil"></i> Kedudukan</a>
            </li>
            
              </ul>
            </li>
            
          </ul>
        </nav>
      </div>
      <main class="main">
    <br>
        <div class="container-fluid">
            <!-- /.row-->
              
            <div class="card">
              <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Inventaris
                </div>
                <!-- <span class="input-group-btn col-sm-3">
                   <a href="/print" target="_blank" class="btn btn-sm btn-success fa fa-print" style="margin-top:20px; margin-left:5px;">  Cetak </a>
                </span> -->
                <div class="form-group col-sm-2" style="margin-top:20px; margin-left:5px; margin-bottom:1px;">
                    <a href="/print" class="btn btn-md btn-success" target="_blank">
                    <span class="fa fa-print"> Print </span>
                    </a>
                </div>

                <div class="card-body">
                
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
                            <form action="{{ route('tabel.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('tabel.edit',$d->id) }}" class=" btn btn-sm btn-primary">
                                <span class="fa fa-pencil"></span>
                                </a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">
                                <span class="fa fa-trash"></span>
                                </button>
                                <a target="_blank" href="{{ route('tabel.show',$d->id) }}" class=" btn btn-sm btn-success">
                                <span class="fa fa-print"></span>
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                </div>
            </div>
            <br>
        </div>
              
              
            </div>
      </main>
          
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <script src="{{url('js/main.js')}}"></script>
  </body>
</html>
