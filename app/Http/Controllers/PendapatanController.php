<?php

namespace App\Http\Controllers;

use App\Models\Pendapatan;
use App\Models\Pesanan;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendapatanController extends Controller
{
    public function post(Request $request)
    {
        if($request->pendapatan == ''){
            return redirect('/');
        }else{
            Pesanan::truncate();
            Pendapatan::create([
                'tanggal' => date('d F Y'),
                'id_toko' => $request->id_toko,
                'pendapatan' => $request->pendapatan,
            ]);
            return redirect('/');
        }
    }

    public function getHasil()
    {
        return view('pendapatan', [
            'hasil' => Pendapatan::all()
        ]);
    }

   
    // public function hapus(Request $request)
    // {
    //     Pesanan::where('user_id', $request->user_id)->delete();
    //     return redirect('/home');
    // }

    public function getIncome()
    {
        return view('income', );
    }

    public function postIncome(Request $request)
    {
        Pendapatan::where('id_toko', $request->id_toko)->get();
    }
}
