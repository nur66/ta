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

            <!-------------------------------------------- Kolom 1 ---------------------------------------> 
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
                @foreach($toko as $tokos)
                    <a href="{{ url('/outlet') }}/{{ $tokos->id }}" class="btn btn-warning" style="width:100%; margin-top:10px">{{ $tokos->namaToko }}</a>
                @endforeach

                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse"
                    data-bs-target="#navmenu"
                    >
                    
                    <!-- hamburger icon -->
                    <span class="navbar-toggler-icon"></span>
                </button>


            </div>


            <!-- ------------------------------------------kolom 2-------------------------------------- -->
            
            <div class="col-7">
                <div class="row">
                    <div class="row">
                        @foreach($menu as $item)
                        <form action="{{ url('/pesanan') }}" method="post" class="col-4">
                            @csrf
                            <input type="hidden" name="id_toko" value="{{ $item->id_toko }}">
                            <div class="card pr-0" style="width: 15rem;">
                                <img src="{{ asset('gambar') }}/{{ $item->gambar }}" class="card-img-top" style="width:238px; height:200px; object-fit:cover; object-position:center">
                                <div class="card">
                                    <input type="hidden" name="nama" value="{{ $item->nama }}">
                                    <input type="hidden" name="harga" value="{{ $item->harga }}">
                                    <h5 class="card-title" id="nama">{{ $item->nama }}</h5>
                                    <p class="card-text" id="harga">Rp. {{ $item->harga }}</p>
                                    <input type="submit" class="btn btn-warning d-flex" value="Pilih" /> 
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- ----------------------------Kolom 3-------------------------------------------------- -->
            
            @foreach($warung as $items)
            <div class="col-3">
                
            <form action="{{ url('/pendapatan') }}" method="post">
                    @csrf
                    <input type="hidden" name="id_toko" value="{{ $items->id }}">
                    <div class="pt-4 d-flex">
                        <!-- karena dia ada di public/gambar/logo -->
                        <img src="{{ asset('gambar/logo') }}/{{ $items->gambar }}" class="rounded float-start" style="width: 70px; height: 70px">
                        <h3 class="pl-3">{{ $items->namaToko }}</h3>
                    </div>
                        <section class="pt-5">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Bill Details</h5>
                                    <!-- Sub Judul Menu dan Harga -->

                                    <!-- Garis -->
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!-- End Garis -->

                                    <div class="row pt-3">
                                        <div class="col-6">
                                            <p class="fw-bolder">Menu</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-end fw-bolder">Harga</p>
                                        </div>
                                    </div>

                                    @foreach($pesanan as $item)
                                    <!-- Isi menu dan harga -->
                                    <div class="row pt-3">
                                        <div class="col-6">
                                            <p class>{{ $item->nama }}</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-end">Rp. {{ $item->harga }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    @foreach($total as $harga)
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#reportModal"> Bill</button> 
                                    
                            <!--------------------------------------- Modal ------------------------------------------------------------------------------------------>
                                        
                                        <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                                        <div class="modal-dialog" role="document">     

                                        <!-- Content -->
                                        <div class="modal-content"> 
                                            <div class="modal-header"> 
                                                <h5 class="modal-title" id="exampleModalLabel">Total Belanja</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> 
                                            </div> 
                                            
                                        <!-- Body -->
                                                <div class="modal-body">
                                                    <div class="row ">
                                                        <div class="col-6">
                                                            <h5>Menu</h5>
                                                            @foreach($pesanan as $hasil)
                                                            <p class>{{ $hasil->nama }}</p>
                                                            @endforeach
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="row ">
                                                                <h5 class="d-flex justify-content-end">Harga</h5>    
                                                            </div>
                                                            <div class="row">
                                                            @foreach($pesanan as $hasil)
                                                                <p class="d-flex justify-content-end">Rp. {{ $hasil->harga }}</p>
                                                            @endforeach
                                                            </div>
                                                            <div class="row">
                                                            @foreach($total as $bill)    
                                                                <h5>Total : <b>Rp. {{ $bill->total }}</b></h5>
                                                                <input type="hidden" name="pendapatan" value='{{ $bill->total }}'>
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Footer -->
                                                    <div class="modal-footer"> 
                                                        <input type="submit" class="btn btn-primary" value="Bayar">
                                                    </div>
                                                </div>
                                            
                                        </div> 
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                                                
                </form>
            </div>
        @endforeach




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


