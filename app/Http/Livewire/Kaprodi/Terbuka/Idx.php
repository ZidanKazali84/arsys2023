<?php

namespace App\Http\Livewire\Kaprodi\Terbuka;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\kaprodi\event;
class Idx extends Component
{
    public $event;
    public $modeNews = null;
    protected $listeners = ['uploadAddNews'];
    public function mount()
    {
        $this->event= Event::all();
    }
    public function render()
    {
        
        return view('livewire.kaprodi.terbuka.idx');
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
