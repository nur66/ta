<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;

use App\Models\Meja;
use App\Models\Menu as ModelsMenu;

class Menu extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.menu', [
            'menu' => ModelsMenu::where('nama','like','%'.$this->search.'%')->paginate(30),
            'meja' => Meja::all(),
        ]);
    }
}
