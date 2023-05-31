<?php
namespace App\Http\Livewire\Atj\News;

use Livewire\Component;
use App\Models\Atj\News;
use Livewire\WithPagination;

class View extends Component
{
    protected $news = [
        'data' => ['news.detail']
    ];
    public $judul;
    public $isi;
    public $author;
    public $modeNews = null;
    protected $paginationTheme = 'bootstrap';
    public function mount()
    {
    }
    public function render()
    {
        $news = News::all();
        return view('livewire.atj.news.view',
        [
            'news'=>$news
        ]);
    }
    public function editNews()
   {
        dd("here");
   }
}
