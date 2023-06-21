<?php

namespace App\Http\Livewire\Kaprodi\Tertutup;

use App\Models\Kaprodi\Examiner;
use Livewire\Component;


class Idx extends Component
{
    public $penguji;
    public $modeNews = null;
    protected $listeners = ['uploadAddNews'];
    public function render()
    {
      $this->penguji= Examiner::all ();
        return view('livewire.kaprodi.tertutup.idx');
    }
    public function addNew()
   {
     $this -> modeNews= 'add';
   }
   public function uploadAddNews()
   {
    $this -> modeNews= null;
   }
}
