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
            // untuk mencari namaToko karena tidak ada di tabel pendapatans
            'pendapatan' => DB::table('pendapatans')
            ->join('tokos','pendapatans.id_toko','=','tokos.id')
            // select adalah yang akan di tampilkan 
            ->select('pendapatans.tanggal','tokos.namaToko','pendapatans.pendapatan')
            ->where('namaToko', 'like', '%'.$this->search.'%')
            // kalo ada persen berarti yang mendekati kalo tidak ada persen tulisan harus sama
            ->get(),
            

            'total' => DB::table('pendapatans')
            ->join('tokos','pendapatans.id_toko','=','tokos.id')
            // remind pake [] trus function DB
            ->select([DB::raw("SUM(pendapatan) AS total")])
            ->where('tokos.namaToko','LIKE','%'.$this->search.'%')
            ->get(),

            'toko' => DB::table('tokos')->select('namaToko')->get()

        ]);

        // menampilkan data dari tabel pendapatan dengan kondisi yang ditampilkan hanya 
        // field id_toko yang sama dengan field id dari table tokos
    }
}
