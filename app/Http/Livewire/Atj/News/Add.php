<?php

namespace App\Http\Livewire\Atj\News;

use Livewire\Component;
use App\Models\Atj\News;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{
    use LivewireAlert;
    public $newsTitle, $fullText,$newsAuthor;
    public function render()
    {
        return view('livewire.atj.news.add');
    }
    public function saveNews()
    {
        $this->validate([
            'newsTitle'=>'required',
            'fullText'=>'required',
            'newsAuthor'=>'required'
        ]);
        
        News::create([
            'judul'=> $this->newsTitle,
            'isi'=> $this->fullText,
            'author'=> $this->newsAuthor,
        ]);
        $this->newsTitle ='';
        $this->fullText='';
        $this->newsAuthor='';
        $this->alert('success', 'The profile has been recorded');
        return redirect()->with('success', 'Data berhasil disimpan');
    }
        
}
