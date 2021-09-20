@extends('layouts.app')

<!-- @section('content') -->

<div class="col-3">
    <div class="pt-4 d-flex">
        <img src="gambar/logo/logo1.png" class="rounded float-start" style="width: 70px; height: 70px">
        <h3 class="pl-3">Dapur Khanza</h3>
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

                <!-- header bill -->
                <div class="row pt-3">
                    <div class="col-6">
                        <p class="fw-bolder">Menu</p>
                    </div>
                    <div class="col-6">
                        <p class="float-end fw-bolder">Harga</p>
                    </div>
                </div>
                <!-- end header bill -->

                <!-- Isi menu dan harga -->
                <div class="row pt-3">
                    <div class="col-6">
                        <p class>Ayam Penyet</p>
                    </div>
                    <div class="col-6">
                        <p class="float-end">18K</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <p class>Ayam Penyet</p>
                    </div>
                    <div class="col-6">
                        <p class="float-end">18K</p>
                    </div>
                </div>

                <a href="#" class="btn btn-light btn btn-outline-success btn-sm d-grid">Total Pembayaran</a>
            </div>
        </div>
    </section>
</div>

<!-- @endsection -->