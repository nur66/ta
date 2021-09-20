<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function pesan(Request $request)
    {   
        $id = $request->id_toko;
        Pesanan::create([
            'id_toko' => $request->id_toko,
            'nama' => $request->nama,
            'harga' => $request->harga,
        ]);

        return redirect('/outlet/'.$id);

    }
}
