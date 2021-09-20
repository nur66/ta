<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    



    public function postTestimoni(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required | mimes:jpg,jpeg,png'
        ]);
        $foto = $request->file('foto');
        $nama_foto = time().$foto->getClientOriginalName();
        // foto nya sekarang dipindah
        $foto->move(('gambar/testimoni'), $nama_foto);
        // berarti foto ini dipindahin ke folder gambar/testimoni dengan nama $nama_foto
        Testimoni::create([
            'nama' => $request->nama,
            'foto' => $nama_foto, 
            'pendapat' => $request->pendapat,
        ]);
        return redirect('/');
    }
}
