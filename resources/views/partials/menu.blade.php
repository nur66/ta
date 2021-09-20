@extends('layouts.app')

@section('menu')
<div class="col text-center pt-4 bg-light">

    <!-- searching -->
    <div class="container-fluid">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light btn btn-dark" type="submit">Search</button>
        </form>
        <h1 class="d-flex justify-content-start">Premium</h1>
    </div>
    <!-- end searching -->

    <!-- card 1-->
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 15rem;">
                <img src="gambar/outlet/dapurKhanza/Menu/Baby Cumi.png" class="card-img-top" style="width:238px; height:200px">
                <div class="card">
                    <h5 class="card-title">Baby Cumi</h5>
                    <div class="row">
                        <div class="col-6">
                            <p class="card-text float-start pl-2">15K</p>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-warning btn-sm float-end mb-2 mr-2 text-white fw-bold">Pilih</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card pr-0" style="width: 15rem;">
                <img src="gambar/outlet/dapurKhanza/Menu/Chicken Cop.png" class="card-img-top" style="width:238px; height:200px">
                <div class="card">
                    <h5 class="card-title">Chicken Cop Avocado</h5>
                    <p class="card-text">5.00</p>
                    <a href="#" class="btn btn-warning">Pilih</a>
                </div>
            </div>
        </div>
        
        <div class="col-4">
            <div class="card pr-0" style="width: 15rem;">
                <img src="gambar/outlet/dapurKhanza/Menu/Es Krim Avocado Milo.png" class="card-img-top" style="width:238px; height:200px">
                <div class="card">
                    <h5 class="card-title">Es Krim Avocado Milo</h5>
                    <p class="card-text">5.00</p>
                    <a href="#" class="btn btn-warning">Pilih</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End card 1-->

    <!-- Card 2 -->
    <div class="row pt-4">
        <div class="col-4">
            <div class="card pr-0" style="width: 15rem;">
                <img src="gambar/outlet/dapurKhanza/Menu/Chicken Cop.png" class="card-img-top" style="width:238px; height:200px">
                <div class="card">
                    <h5 class="card-title">Chicken Cop</h5>
                    <p class="card-text">5.00</p>
                    <a href="#" class="btn btn-warning">Pilih</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card pr-0" style="width: 15rem;">
                <img src="gambar/outlet/dapurKhanza/Menu/Pisang Goreng Crispy.png" class="card-img-top" style="width:238px; height:200px">
                <div class="card">
                    <h5 class="card-title">Pisang Goreng Crispy</h5>
                    <p class="card-text">5.00</p>
                    <a href="#" class="btn btn-warning">Pilih</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card pr-0" style="width: 15rem;">
                <img src="gambar/outlet/dapurKhanza/Menu/Pisang Goreng Ceres Keju.png" class="card-img-top" style="width:238px; height:200px">
                <div class="card">
                    <h5 class="card-title">Pisang Goreng Ceres Keju</h5>
                    <p class="card-text">5.00</p>
                    <a href="#" class="btn btn-warning">Pilih</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End card 2-->

    <!-- Card 3 -->
    <div class="row pt-4">
        <div class="col-4">
            <div class="card pr-0" style="width: 15rem;">
                <img src="gambar/outlet/dapurKhanza/Menu/Roti Bakar Bandung.png" class="card-img-top" style="width:238px; height:200px">
                <div class="card">
                    <h5 class="card-title">Roti Bakar Bandung</h5>
                    <p class="card-text">5.00</p>
                    <a href="#" class="btn btn-warning">Pilih</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card pr-0" style="width: 15rem;">
                <img src="gambar/outlet/dapurKhanza/Menu/Roti Goreng Coklat Lumer.png" class="card-img-top" style="width:238px; height:200px">
                <div class="card">
                    <h5 class="card-title">Roti Goreng Lumer</h5>
                    <p class="card-text">5.00</p>
                    <a href="#" class="btn btn-warning">Pilih</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card pr-0" style="width: 15rem;">
                <img src="gambar/outlet/dapurKhanza/Menu/Salad Buah.png" class="card-img-top" style="width:238px; height:200px">
                <div class="card">
                    <h5 class="card-title">Salad Buah</h5>
                    <p class="card-text">5.00</p>
                    <a href="#" class="btn btn-warning">Pilih</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End card 3-->

    <!-- Card 4 -->
    <div class="row pt-4">
        <div class="col-4">
            <div class="card pr-0" style="width: 15rem;">
                <img src="gambar/outlet/dapurKhanza/Menu/Toast beef saos bulgogi.png" class="card-img-top" style="width:238px; height:200px">
                <div class="card">
                    <h5 class="card-title">Toas Beef Saos Bulgogi</h5>
                    <p class="card-text">5.00</p>
                    <a href="#" class="btn btn-warning">Pilih</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card pr-0" style="width: 15rem;">
                <img src="gambar/outlet/dapurKhanza/Menu/Toast chicken saos bbq.png" class="card-img-top" style="width:238px; height:200px">
                <div class="card">
                    <h5 class="card-title">Toast Chicken Saos BBQ</h5>
                    <p class="card-text">5.00</p>
                    <a href="#" class="btn btn-warning">Pilih</a>
                </div>
            </div>
        </div>
        <!-- <div class="col-4">
            <div class="card pr-0" style="width: 15rem;">
                <img src="gambar/outlet/dapurKhanza/Menu/Salad Buah.png" class="card-img-top" style="width:238px; height:200px">
                <div class="card">
                    <h5 class="card-title">Salad Buah</h5>
                    <p class="card-text">5.00</p>
                    <a href="#" class="btn btn-warning">Pilih</a>
                </div>
            </div>
        </div> -->
    </div>
    <!-- End card 4-->
</div>

@endsection