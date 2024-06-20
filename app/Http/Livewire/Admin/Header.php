<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    public $username;
    public function mount(){
        $this->username = Auth::user()->name;
    }
    public function render()
    {
        return view('livewire.admin.header');
    }
}
