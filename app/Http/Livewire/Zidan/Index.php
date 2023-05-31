<?php

namespace App\Http\Livewire\Zidan;

use Livewire\Component;

use App\Models\ArSys\Student;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $student;

    public function mount(){
        $this->student = Student::where('user_id', Auth::user()->id)->first();
    }

   
    public function edit(){
        return redirect()->route('arsys.user.profile.edit');
    }

    public function render()
    {
        return view('livewire.zidan.index')->layout('adminlte::page');
    }
}
