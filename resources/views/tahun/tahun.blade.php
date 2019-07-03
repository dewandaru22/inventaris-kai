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
    <link rel="icon" type="image/png" href="{{('assets/img/kai_logo.svg.png')}}" sizes="any" />
    <link href="{{('assets/node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{('assets/node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{('assets/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{('assets/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{('assets/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
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
    
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{('assets/img/brand/kai_logo.svg.png')}}" width="100" height="50" alt="KAI Logo">
        <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Sistem Pendataan Inventaris</a>
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
              <a class="nav-link" href="/admin">
                <i class="nav-icon icon-speedometer"></i> Tambah        
              </a>
            </li>
            <li class="nav-title">Data</li>
            <li class="nav-item">
              <a class="nav-link" href="colors.html">
                <i class="nav-icon icon-drop"></i> Tahun</a>
                <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="base/breadcrumb.html">
                    <i class="nav-icon icon-puzzle"></i> 2016</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/breadcrumb.html">
                    <i class="nav-icon icon-puzzle"></i> 2017</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/breadcrumb.html">
                    <i class="nav-icon icon-puzzle"></i> 2018</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/breadcrumb.html">
                    <i class="nav-icon icon-puzzle"></i> 2019</a>
                </li>
                </ul>
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
          <div class="animated fadeIn">
            <!-- /.row-->
            <div class="card">
              <div class="card-body">
              <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Inventaris
                </div>
                <div class="card-body">
                <a class="btn btn-primary" style="color:white;">Tahun</a>
                <select size="1">
                  <option>2019
                  <option>2018
                  <option>2017
                  <option>2016
                </select>
                <br/>
                <br/>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>No Inventaris</td>
                                <td><input type="text" name="fname" style="width:100%;"/></td>
                            </tr>
                            <tr>
                                <td>Nama Barang</td>
                                <td><input type="text" name="fname" style="width:100%;"/></td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td><input type="text" name="fname" style="width:100%;"/></td>
                            </tr>
                            <tr>
                                <td>Satuan</td>
                                <td><input type="text" name="fname" style="width:100%;"/></td>
                            </tr>
                            <tr>
                                <td>Harga beli/item</td>
                                <td><input type="text" name="fname" style="width:100%;"/></td>
                            </tr>
                            <tr>
                                <td>Bagian</td>
                                <td><input type="text" name="fname" style="width:100%;"/></td>
                            </tr>
                            <tr>
                                <td>Kedudukan</td>
                                <td><input type="text" name="fname" style="width:100%;"/></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <a class="btn btn-danger" style="color:white; float:right;">Batal</a>
            <a class="btn btn-success" style="color:white; float:right;  margin-right:10px;">Simpan</a>
        </div>
              </div>
              
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </main>
      <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
              <i class="icon-list"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
              <i class="icon-speech"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
              <i class="icon-settings"></i>
            </a>
          </li>
        </ul>
    </aside>
          
    <footer class="app-footer">
     
    </footer>
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
