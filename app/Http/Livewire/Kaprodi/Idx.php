<?php

namespace App\Http\Livewire\Kaprodi;

use Livewire\Component;

class Idx extends Component
{
    public $modeData = null;
    protected $listeners = ['uploadAddData','addNew'];

    public function render()
    {
        return view('livewire.kaprodi.idx')->layout('adminlte::page');
    }
    public function addNew()
   {
        $this -> modeData= 'add';
   }

   public function uploadAddData()
   {
    $this -> modeData= null;
   }
}
