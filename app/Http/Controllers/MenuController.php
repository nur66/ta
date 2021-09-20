<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;
use App\Models\Toko;
use App\Models\Meja;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    public function read()
    {
        return view('crud.read', [
            'menu' => Menu::all(), //all sama dengan SELECT * FROM nama_tabel akan di lempar ke read.blade.php
        ]);
    }

    

    public function create()
    {
        if(Auth::user()){
            return view('crud.create', [
                'toko' => Toko::all()
            ]);
        } else {
            return redirect('/read');
        }
    }

    public function buat(Request $request)
    {
        if(Auth::user()){
            $this->validate($request, [
                'gambar' => 'required | image | mimes:jpg,jpeg,png,svg,gif | max:20000000'
            ]);
            $foto = $request->file('gambar');
            $nama_foto = $foto->getClientOriginalName();
            $simpan_foto = time().$nama_foto;
            $foto->move(('gambar'), $simpan_foto);
    
            Menu::create([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'id_toko' => $request->id_toko,
                'gambar' => $simpan_foto
            ]);
            return redirect('/read');
        } else {
            return redirect('/');
        }
    }

    public function edit(Request $request){
        if(Auth::user()){
            return view('crud/edit', [
                'parametermenu' => \App\Models\Menu::Where('id',$request->id)->get()
            ]);
        } else {
            return redirect('/');
        }
    }

    public function update(Request $request)
    {
        if(Auth::user()){
            if($request->gambar != null)
            {
                File::delete('gambar/'.$request->gambarlama);

                $this->validate($request,[
                'gambar' => 'required | image | mimes:jpg,jpeg,png,svg,gif,PNG,JPG,JPEG | max:20000000'
                ]);
                $foto = $request->file('gambar');
                $nama_foto = $foto->getClientOriginalName();
                $simpan_foto = time().$nama_foto;
                $foto->move(('gambar'), $simpan_foto);

                //eksekusi Database
                Menu::where('id', $request->id)->update([
                    'nama' => $request->nama,   
                    'harga' => $request->harga, 
                    'id_toko' => $request->id_toko,
                    'gambar' => $simpan_foto, //karena dia baru, dan ditampung didalam variabel ini                
                ]);
                return redirect('/read');
            }
            else
            {
                Menu::where('id',$request->id)->update([
                    'nama' => $request->nama,   // panah dua artinya mengambil value dari key, contohnya keynya nama valuenya $request->nama
                    'harga' => $request->harga, // panah satu memanggil objek value, contohnya key nya $request valuenya jenis
                    'id_toko' => $request->id_toko,
                    'gambar' => $request->gambarlama,
                ]);
                return redirect('/read');
            }

        } else {
            return redirect('/');
        }
    }

    public function delete(Request $request){
        if(Auth::user()){
            Menu::where('id',$request->id)->delete();
        } else {
            return redirect('/');
        }
    }

    public function menu(){
        return view('menu');
    }

    public function modal(){
        return view('modal');
    }

    
}
