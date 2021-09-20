<div class="col-3">
    <form action="{{ url('/pendapatan') }}" method="post">
        @csrf
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
                        
                            <!-- Modal --> 
                            <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                            <div class="modal-dialog" role="document">     

                            <div class="modal-content"> 
                                <div class="modal-header"> 
                                    <h5 class="modal-title" id="exampleModalLabel">Total Belanja</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> 
                                </div> 

                                
                                
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
                                                    <input type="hidden" name="bill" value="{{ $bill->total }}" required>
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
