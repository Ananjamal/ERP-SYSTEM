<?php

namespace App\Http\Livewire\Admin\Inventory;

use Livewire\Component;

class Inventory extends Component
{
    public function render()
    {
        return view('livewire.admin.inventory.inventory')->layout('layout.admin.app');
    }
}
