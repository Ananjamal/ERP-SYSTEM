<?php

namespace App\Http\Livewire\Admin\Accounts;

use Livewire\Component;

class Accounts extends Component
{
    public function render()
    {
        return view('livewire.admin.accounts.accounts')->layout('layout.admin.app');
    }
}
