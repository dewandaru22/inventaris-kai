<!doctype html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ public_path('/assets/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ public_path('/assets/css/style.css')}}" rel="stylesheet">
        <link href="{{ public_path('/assets/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
        <title>Sistem Pendataan Inventaris</title>
    </head>
    <body>
        <br>
        @foreach($details as $datas)
            <table class="table table-bordered mx-auto" style="height:50px; width:378px;font-size:10pt;">
                <tbody>
                    <tr>
                        <th rowspan="3" class="align-middle">
                            <img src="{{ public_path('/assets/img/brand/kai_logo.svg.png')}}" width="80" height="40">
                        </th>
                        <th class="col-sm-2 text-center">
                        <?php
                            $data=$datas->no_inventaris;
                            echo DNS1D::getBarcodeHTML("$data", "C128", 1, 30);
                        ?>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center font-weight-bold" style="font-size:7pt;">{{ $datas->no_inventaris }}
                            <br><a class="font-weight-bold text-primary" style="font-size:6pt;">DAOP 6 YOGYAKARTA</a>
                        </th>
                    </tr>
                    <tr>
                        <th class="align-middle font-weight-bold" style="padding-left:3px;font-size:5pt;">JENIS BARANG: {{ $datas->nama_barang }}</th>
                    </tr>
                </tbody>
            </table>
        @endforeach 
        <br>   
    </body>
</html>