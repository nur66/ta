<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MejaController extends Controller
{
    public function get()
    {
        if(Auth::user()){
            return view('meja', [
                'no_meja' => Meja::all()
            ]);
        } else {
            return redirect('/');
        }
    }

    public function post(Request $request)
    {
        if(Auth::user()){
            Meja::create([
                'nomor_meja' => $request->nomor_meja,
            ]);
    
            return redirect('/meja');
        } else {
            return redirect('/');
        }
    }

    public function getEdit(Request $minta)
    {
        if(Auth::user()){
            return view('edit_meja', [
                'nomorMeja' => Meja::where('id',$minta->id)->get()
            ]);
        } else {
            return redirect('/');
        }
    }

    public function postEdit(Request $request)
    {
        if(Auth::user()){
            Meja::where('id', $request->id)->update([
                'nomor_meja' => $request->nomor_meja,
            ]);
    
            return redirect('/meja');
        } else {
            return redirect('/');
        }
    }

    public function delete(Request $request)
    {
        if(Auth::user()){
            Meja::where('id', $request->id)->delete();
        return redirect('/meja');
        } else {
            return redirect('/');
        }
    }
}
