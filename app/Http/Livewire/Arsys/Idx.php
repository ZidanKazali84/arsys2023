<?php

namespace App\Http\Livewire\Arsys;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Idx extends Component
{
    public function mount()
    {
        $user = User::where('sso', cas()->user())->first();
        Auth::login($user);
        return redirect()->route('arsys.admin.user');
        //return view('livewire.index');
    }
}
