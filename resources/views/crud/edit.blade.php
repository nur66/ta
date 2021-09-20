@extends('layouts.app') 

@section('content')
<div class="container d-flex justify-content-center">
    <div class="col-md-8">
        <h1>Update Menu</h1>
        <form action="{{ url('/edit') }}" method="post" enctype="multipart/form-data">
            @csrf
            @foreach($parametermenu as $item)
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input value="{{ $item->nama }}" type="text" name="nama" id="" class="form-control" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input value="{{ $item->harga }}" type="number" name="harga" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="toko">Toko</label>
                <select name="toko" id="toko" class="form-control">
                    <option value="Bebek Goreng Daeng">Bebek Goreng Daeng</option>
                    <option value="Burger Dude">Burger Dude</option>
                    <option value="Cia Young Tofu">Cia Young Tofu</option>
                    <option value="Cipacipud">Cipacipud</option>
                    <option value="Dapur Khanza">Dapur Khanza</option>
                    <option value="Dimsum PJS Batam">Dimsum PJS Batam</option>
                    <option value="Geprek A3">Geprek A3</option>
                    <option value="Kitchen Warman">Kitchen Warman</option>
                    <option value="Michzio O Yatsu">Michzio O Yatsu</option>
                    <option value="Pancage Fluffy">Pancake Fluffy</option>
                    <option value="Sahabat Taichan">Sahabat Taichan</option>
                    <option value="Sotocuy">Sotocuy</option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="id_toko" value="{{ $item->id_toko }}">
                <input type="hidden" name="gambarlama" value="{{ $item->gambar }}">
            </div>
            @endforeach
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="">
            </div>
            <div class="input-group">
                <input type="submit" value="Update" class="btn btn-success"> &nbsp;
            </div>
        </form>
    </div>
</div>
@endsection


