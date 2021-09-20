@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Meja</h1>
    @foreach($nomorMeja as $item)
    <form action="{{ url('/edit-meja') }}" method="post" enctype="multipart/form-data">
    @csrf
        <input type="hidden" name="id" value="{{ $item->id }}">
        <div class="form-group">
            <label for="nomor_meja">Nomor Meja</label>
            <input type="text" name="nomor_meja" id="nomro_meja" class="form-control" placeholder="Nomor Meja" required>
        </div>
        <div class="input-group">
            <input type="submit" value="Save" class="btn btn-success">
        </div>
    </form>
    @endforeach 
</div>
@endsection