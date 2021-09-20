<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Http\Request;

use App\Models\Toko;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
{
    public function get()
    {
        if(Auth::user()){
            return view('toko', [
                'tokos' => Toko::all()  //yang diambil dari tabel tokos
            ]);
        } else {
            return redirect('/');
        }
    }

    public function post(Request $request)
    {
        if(Auth::user()){
            
            $this->validate($request, [
                'gambar' => 'required | image | mimes:jpg,jpeg,png,svg,gif | max:20000000'
            ]);
            $foto = $request->file('gambar');
            $nama_foto = $foto->getClientOriginalName();
            $simpan_foto = time().$nama_foto;
            $foto->move(('gambar/logo'), $simpan_foto);

            Toko::create([
                'namaToko' => $request->namaToko,
                'keterangan' => $request->keterangan,
                'gambar' => $simpan_foto,
            ]);
    
            return redirect('/toko');
        } else {
            return redirect('/');
        }
    }

    public function getEdit(Request $request)   //karena dia bawa data dari url ke controller maka harus Request
    {
        if(Auth::user()){
            return view('edit_toko', [
                'ngerti' => Toko::where('id',$request->id)->get()
            ]);
        } else {
            return redirect('/');
        }
    }

    public function postEdit(Request $request)
    {
        if(Auth::user()){
            Toko::where('id', $request->id)->update([
                'namaToko' => $request->namaToko,
                'keterangan' => $request->keterangan,
                'gambar' => $request->gambar,
            ]);
    
            return redirect('/toko');
        } else {
            return redirect('/');
        }
    }

    public function delete(Request $request)
    {
        if(Auth::user()){
            Toko::where('id', $request->id)->delete();
            return redirect('/toko');
        } else {
            return redirect('/');
        }
    }

    public function outlet($id)
    {
        return view('outlet',[
            'menu' => Menu::where('id_toko',$id)->get(), //untuk dapatkan 
            'warung' => Toko::where('id', $id)->get(),
            'toko' => Toko::all(),
            'pesanan' => Pesanan::where('id_toko', $id)->get(),   //auth artinya sudah login
            'total' => DB::table('pesanans')->where('id_toko',$id)
            ->select([DB::raw("SUM(harga) AS total")])->get()
        ]);
    }

    public function coba(Request $request)
    {
        return Menu::where('id_toko', $request->id)->get();
    }

}
