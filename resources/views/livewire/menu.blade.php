<div class="col-7 text-center pt-4 bg-light">
    <!-- searching -->
    <div class="container-fluid">
        <div class="d-flex">
            <input class="form-control me-2" wire:model="search" type="search" placeholder="Search" aria-label="Search">
            <!-- <button class="btn btn-outline-light btn btn-dark" type="submit">Search</button> -->
        </div>
            <div class="">
                <div class="d-flex justify-content-between">
                    <h1 class="">Premium</h1> 
                </div>
            </div>
    </div>
    <!-- end searching -->

    <!-- card -->
    
        <div class="row">
            <div class="row">
                @foreach($menu as $item)
                <form action="{{ url('/pesanan') }}" method="post" class="col-4">
                    @csrf
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
    
    <!-- End card 1-->
</div>
