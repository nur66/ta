@extends('layouts.app') 

@section('content')
<div class="container-fluid">
    <div class="col-md-8">
        <h1>Tambah Toko</h1>
        <form action="{{ url('/toko') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="namaToko">Nama  Toko</label>
                <input type="text" name="namaToko" id="" class="form-control" placeholder="Nama Toko" required>
            </div>
            <div class="form-group">
                <label for="namaToko">Keterangan</label>
                <input type="text" name="keterangan" id="" class="form-control" placeholder="Keterangan" required>
            </div>
            <div class="form-group">
                <label for="foto">Gambar</label>
                <input type="file" accept="image/*" name="gambar" id="foto">
            </div>
            <div class="input-group">
                <input type="submit" value="Save" class="btn btn-success"> &nbsp;
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>

    <div class="py-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Nama Toko</th>
                    <th class="text-center">Keterangan</th>
                    <th class="text-center" style="width:15%">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tokos as $item)
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <img src="{{ asset('gambar/logo') }}/{{ $item->gambar }}" alt="" style="width:50px; height:50px; object-fit:cover; object-position:center;">
                        </td>
                        <td>
                            {{ $item->namaToko }}
                        </td>
                        <td>
                            {{ $item->keterangan }}
                        </td>
                        <th>
                            <div class="d-flex">
                                <!-- $item->id, id ini diambil dari field lalu di lempar ke url web.php  dari web.php lempar ke controller lalu bisa di gunakan oleh controller tersebut -->
                                <!-- yang namanya url itu get -->
                                <a href="{{ url('/edit-toko') }}/{{ $item->id }}" class="nav-link">
                                    Edit
                                </a> &nbsp;
                                <a href="{{ url('/delete-toko') }}/{{ $item->id }}" class="nav-link">
                                    Delete
                                </a>
                            </div>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>
@endsection


