<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;


class Pendapatan extends Component
{
    use WithPagination;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        return view('livewire.pendapatan', [
            'pendapatan' => DB::table('pendapatans')
            ->join('tokos','pendapatans.id_toko','=','tokos.id')
            ->select('pendapatans.tanggal','tokos.namaToko','pendapatans.pendapatan')
            ->where('namaToko', 'like', '%'.$this->search.'%')
            ->get(),
            'total' => DB::table('pendapatans')
            ->join('tokos','pendapatans.id_toko','=','tokos.id')
            ->select([DB::raw("SUM(pendapatan) AS total")])
            ->where('tokos.namaToko','LIKE','%'.$this->search.'%')
            ->get(),
            'toko' => DB::table('tokos')->select('namaToko')->get()
        ]);
    }
}
