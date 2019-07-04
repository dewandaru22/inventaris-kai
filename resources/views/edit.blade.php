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
    <link rel="icon" type="image/png" href="{{('/assets/img/kai_logo.svg.png')}}" sizes="any" />
    <link href="{{('/assets/node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{('/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
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
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistem Pendataan Inventaris</title>
    
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{('/assets/img/brand/kai_logo.svg.png')}}" width="100" height="50" alt="KAI Logo">
        
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
              <a class="nav-link" href="typography.html">
                <i class="nav-icon icon-pencil"></i> Bagian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="typography.html">
                <i class="nav-icon icon-pencil"></i> Kedudukan</a>
            </li>
            
              </ul>
            </li>
            
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
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
                <div class="card-body">
                @foreach($data as $datas)
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
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
                </div>
            </div>
            <br>
        </div>

        </div>
      </main>
          
    <!-- CoreUI and necessary plugins-->
    <script src="{{('/assetsnode_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{('/assetsnode_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{('/assetsnode_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{('/assetsnode_modules/pace-progress/pace.min.js')}}"></script>
    <script src="{{('/assetsnode_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{('/assetsnode_modules/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{('/assetsnode_modules/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{('/assetsnode_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
  </body>
</html>
              
              
            