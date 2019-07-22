<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Sistem Pendataan Inventaris</title>
    </head>
    <body>
        <br>
        @foreach($details as $datas)
            <table class="table table-bordered mx-auto" style="width:378px;font-size:10pt;">
                <tbody>
                    <tr>
                        <th rowspan="3" class="align-middle">
                            <img src="{{('/assets/img/brand/kai_logo.svg.png')}}" width="100" height="55">
                        </th>
                        <th class="col-sm-2 text-center">BARCODE</th>
                    </tr>
                    <tr>
                        <th class="text-center">{{ $datas->no_inventaris }}
                            <br><a class="font-weight-bold text-primary" style="font-size:7pt;">DAOP 6 YOGYAKARTA</a>
                        </th>
                    </tr>
                    <tr>
                        <th class="align-middle font-weight-bold" style="padding:3px;font-size:5pt;">JENIS BARANG: {{ $datas->nama_barang }}</th>
                    </tr>
                </tbody>
            </table>
        @endforeach 
        <br>   
    </body>
</html>