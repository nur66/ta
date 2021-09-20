@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Pandora Food Market</title>
</head>
<body>
<div class="container">

</div>  <!-- end container -->

    <!-- layout -->
    <div class="container-fluid pt-0">
        <div class="row">

            <!-- Kolom 1 -->
            <div class="col-2">
                <!-- judul -->
                <div class="row pt-2 bg-light">
                    <div class="col-12">
                        <h3><span class="text-warnig">F</span>ood<span class="text-warning">M</span>arket</h3>
                    </div>
                </div>   
                
                <!-- garis -->
                <div class="row pt-2">
                    <div class="progress" style="height: 1px;">
                        <div class="progress-bar bg-dark" role="progressbar" style="width:100%"></div>
                    </div>
                </div>

                <!-- Button -->
                <button type="button" class="btn btn-warning" style="width:100%; margin-top:10px">Dapur Khanza</button>
                <button type="button" class="btn btn-warning" style="width:100%; margin-top:10px">Cia Young Tofu</button>
                <button type="button" class="btn btn-warning" style="width:100%; margin-top:10px">Bebek Goreng Daeng</button>
                <button type="button" class="btn btn-warning" style="width:100%; margin-top:10px">Kitchen Warman</button>
                <button type="button" class="btn btn-warning" style="width:100%; margin-top:10px">Geprek A3</button>
                <button type="button" class="btn btn-warning" style="width:100%; margin-top:10px">Sahabat Taichan</button>
                <button type="button" class="btn btn-warning" style="width:100%; margin-top:10px">Dimsum PJS Batam</button>
                <button type="button" class="btn btn-warning" style="width:100%; margin-top:10px">Outlet</button>
                <button type="button" class="btn btn-warning" style="width:100%; margin-top:10px">Outlet</button>
                <button type="button" class="btn btn-warning" style="width:100%; margin-top:10px">Outlet</button>
                <button type="button" class="btn btn-warning" style="width:100%; margin-top:10px">Outlet</button>
                <button type="button" class="btn btn-warning" style="width:100%; margin-top:10px">Outlet</button>
            </div>


            <!-- ------------------------------------------kolom 2-------------------------------------- -->
            
            @livewire('menu')
            
            <!-- ----------------------------Kolom 3-------------------------------------------------- -->
            
            @livewire('pesanan')
        </div>
    </div>
    <!-- end layout -->



<!-- <script>
    function pilih()
    {
        var id_toko = document.getElementById('id_toko').value
        var id_menu = document.getElementById('id_menu').value
        var kode_pesanan = document.getElementById('kode_pesanan').value
        var nama = document.getElementById('nama').value
        var harga = document.getElementById('harga').value
    }
</script> -->

@endsection
</body>
</html>


