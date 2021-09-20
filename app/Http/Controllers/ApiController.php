<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class ApiController extends Controller
{
    public function apibuat(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required | image | mimes:jpg,jpeg,png,svg,gif | max:20000000'
        ]);
        $foto = $request->file('gambar');
        $nama_foto = $foto->getClientOriginalName();
        $simpan_foto = time().$nama_foto;
        $foto->move(('gambar'), $simpan_foto);

        return Menu::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'id_toko' => $request->id_toko,
            'gambar' => $simpan_foto
        ]);
    }

    public function apimenu()
    {
        return Menu::all();
    }

    public function apiedit(Request $request)
    {
        

        if( $request->file('gambar') == null){
            return Menu::where('id', $request->id)->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'id_toko' => $request->id_toko,
            ]);
        } else {
            $this->validate($request, [
                'gambar' => 'image | mimes:jpg,jpeg,png,svg,gif | max:20000000'
            ]);
            $foto = $request->file('gambar');
            $nama_foto = $foto->getClientOriginalName();
            $simpan_foto = time().$nama_foto;
            $foto->move(('gambar'), $simpan_foto);
            return Menu::where('id', $request->id)->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'id_toko' => $request->id_toko,
                'gambar' => $simpan_foto
            ]);
        }

        
    }

    public function apidelete(Request $request)
    {
        return Menu::where('id', $request->id)->delete();
    }
}
