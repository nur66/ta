<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pesanan as ModelPesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Pesanan extends Component
{
    public function render()
    {
        return view('livewire.pesanan', [
            'pesanan' => ModelPesanan::where('user_id', Auth::user()->id)->get(),   //auth artinya sudah login
            'total' => DB::table('pesanans')->where('user_id',Auth::user()->id)
            ->select([DB::raw("SUM(harga) AS total")])->get()
        ]);
    }
}
