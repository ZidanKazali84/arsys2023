<?php

namespace App\Http\Livewire\Kaprodi\Terbuka;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.kaprodi.terbuka.view')->layout('adminlte::page');
    }
}
