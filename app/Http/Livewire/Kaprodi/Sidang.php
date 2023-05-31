<?php

namespace App\Http\Livewire\Kaprodi;

use Livewire\Component;

class Sidang extends Component
{
    public $TerbukaTab = false;
    public $TertutupTab = false;
    public function render()
    {
        return view('livewire.kaprodi.sidang');
    }
    public function selectMenu($menu){
        if(!is_null($menu)){
            if($menu == 'Tertutup'){
                $this->emit('selectMenu', $menu);
                $this->TertutupTab = true;
                $this->TerbukaTab = false;
            }
            if($menu == 'Terbuka'){
                $this->emit('selectMenu', $menu);
                $this->TertutupTab = false;
                $this->TerbukaTab = true;
                
            }
           
        }
    }
    public function mount(){
    }
}
