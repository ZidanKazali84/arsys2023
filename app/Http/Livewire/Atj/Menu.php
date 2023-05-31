<?php

namespace App\Http\Livewire\Atj;

use Livewire\Component;

class Menu extends Component
{
    public $NewsTab = false;
    public $HomeTab = false;
    public function render()
    {
        return view('livewire.atj.menu');
    }
    public function selectMenu($menu){
        if(!is_null($menu)){
            if($menu == 'News'){
                $this->emit('selectMenu', $menu);
                $this->NewsTab = true;
                $this->HomeTab = false;
            }
            if($menu == 'Home'){
                $this->emit('selectMenu', $menu);
                $this->NewsTab = false;
                $this->HomeTab = true;
                
            }
           
        }
    }
    public function mount(){
    }
}
