@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-8">
        <form action="{{ url('/meja') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="no_meja">Nomor Meja</label>
                <input type="text" class="form-control" name="nomor_meja" id="no_meja" placeholder="Nomor Meja" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Save" class="btn btn-success"> &nbsp;
                <input type="submit" value="Reset" class="btn btn-danger">
            </div>
        </form>

        <div class="py-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Nomor Meja</th>
                        <th class="text-center" style="width:15%">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- no_meja hasil dari lempar data dari controller -->
                    @foreach($no_meja as $item)
                        <tr>
                            <td>
                                <!-- nomor_meja adalah field yang ada di database -->
                                {{ $item->nomor_meja }}
                            </td>
                            <th>
                                <div class="d-flex">
                                    <!-- $item->id, id ini diambil dari field lalu di lempar ke url web.php  dari web.php lempar ke controller lalu bisa di gunakan oleh controller tersebut -->
                                    <!-- yang namanya url itu get -->
                                    <a href="{{ url('/edit-meja') }}/{{ $item->id }}" class="nav-link">
                                        Edit
                                    </a> &nbsp;
                                    <a href="{{ url('/delete-meja') }}/{{ $item->id }}" class="nav-link">
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
</div>

@endsection