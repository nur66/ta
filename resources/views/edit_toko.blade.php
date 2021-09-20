@extends('layouts.app') 

@section('content')

<div class="container">
    <h1>Edit Toko</h1>

    @foreach($ngerti as $item)
    <!-- berarti dari controller harus lempar data agar $tokos bisa di pake -->
        <!-- url action nya yang post -->
        <form action="{{ url('/edit-toko') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="form-group">
                <label for="namaToko">nama Toko</label>
                <input type="text" name="namaToko" id="" class="form-control" placeholder="Nama Toko" required value="{{ $item->namaToko }}">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="" class="form-control" placeholder="Keterangan" required value="{{ $item->keterangan }}">
            </div>
            <div class="form-group">
                <label for="namaToko">Gambar</label>
                <input type="file" accept="image/*" name="gambar" id="foto" value="{{ $item->gambar }}">
            </div>
            <div class="input-group">
                <input type="submit" value="Save" class="btn btn-success">
            </div>
        </form>
    @endforeach
</div>

@endsection