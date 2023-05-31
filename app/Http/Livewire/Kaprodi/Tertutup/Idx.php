<?php

namespace App\Http\Livewire\Kaprodi\Tertutup;

use Livewire\Component;

class Idx extends Component
{
    public function render()
    {
        return view('livewire.kaprodi.tertutup.idx');
    }
    public function addNew()
   {
        dd("tambah Sidang tertutup");
   }
}
