@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <h3>Navigation</h3>
            
        </div>

        <div class="col-10">
            <h3>Hasil Pendapatan</h3>

            <div class="bg-white mb-3" style="width: 100%; height: 250px; border-radius: 15px">
                <div class="row">
                    <div class="col-5">
                        <h3 class="m-4">Dapur Khanza</h3>
                        <div class="row m-4">
                            <h5>2 Hari yang lalu</h5>
                        </div>
                        <div class="row m-4">
                            <h5>1 Hari yang lalu</h5>
                        </div>
                        <div class="row m-4">
                            <h5>Hari ini</h5>
                        </div>
                    </div>

                    <div class="col-7"> 
                        <h3 class="m-4">Total Keuntungan</h3>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>


@endsection