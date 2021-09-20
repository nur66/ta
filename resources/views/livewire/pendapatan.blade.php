<div class="container-fluid">
    
    <div class="d-flex justify-content-between">
        <div>
            @foreach($total as $index)
            <h3 class="">Total Pendapatan : <b>Rp{{ $index->total }}</b></h3>
            @endforeach
        </div>
        <div>
            <select name="search" wire:model="search" id="" class="form-control">
                <option value="">Semua Toko</option>
                @foreach($toko as $tokos)
                <option value="{{ $tokos->namaToko }}">{{ $tokos->namaToko }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <hr>

    <div class="py-2">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-warning">Tanggal</th>
                    <th scope="col" class="text-warning">Nama Toko</th>
                    <th scope="col" class="text-warning">Pendapatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pendapatan as $item)
                <tr>
                    <th scope="row">{{ $item->tanggal }}</th>
                    <td>{{ $item->namaToko }}</td>
                    <td>{{ $item->pendapatan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
