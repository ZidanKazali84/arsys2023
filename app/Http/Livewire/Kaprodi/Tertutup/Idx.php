<?php

namespace App\Http\Livewire\Kaprodi\Tertutup;

use Livewire\Component;

class Idx extends Component
{
    public $modeNews = null;
    public function render()
    {
        return view('livewire.kaprodi.tertutup.idx');
    }
    public function addNew()
   {
     $this -> modeNews= 'add';
   }
}
