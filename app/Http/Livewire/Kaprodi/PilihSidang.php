<?php

namespace App\Http\Livewire\Kaprodi;

use Livewire\Component;

class PilihSidang extends Component
{
    public $selection;
    protected $listeners = ['selectMenu'];
    public function render()
    {
        return view('livewire.kaprodi.pilih-sidang');
    }
    public function selectMenu($menu)
    {
        $this->selection = $menu;
    }
}
