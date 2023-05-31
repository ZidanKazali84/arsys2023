<?php

namespace App\Http\Livewire\Atj\News;

use Livewire\Component;
use App\Models\Atj\News;

class Idx extends Component
{
    public $search;
    protected $queryString = ['search'];
    public $news,$newsSelect;
    public $modeNews = null;
    public $judul, $cari;
    public $isi;
    public $author;
    protected $listeners = ['uploadAddNews'];
    public function mount()
    {
       
    }

    public function render()
    {   $allNews = News::all();
        return view('livewire.atj.news.idx', [
            'allNews'=>$allNews
        ]);
        
    }
    public function addNews()
   {
        $this -> modeNews= 'add';
   }

   public function uploadAddNews()
   {
    $this -> modeNews= null;
   }
}
