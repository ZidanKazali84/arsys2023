<?php

namespace App\Http\Livewire\Atj;

use Livewire\Component;

class SelectMenu extends Component
{
    public $selection;
    protected $listeners = ['selectMenu'];
    public function render()
    {

        return view('livewire.atj.select-menu');
    }
    public function selectMenu($menu)
    {
        $this->selection = $menu;
    }
}
