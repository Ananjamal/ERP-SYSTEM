<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Sidebar extends Component
{
    // public function users(){
    //     $this->emit('users');
    // }
    // public function roles(){
    //     $this->emit('roles');
    // }

    // public function permissions(){
    //     $this->emit('permissions');
    // }
    public function render()
    {
        return view('livewire.admin.sidebar');
    }
}
