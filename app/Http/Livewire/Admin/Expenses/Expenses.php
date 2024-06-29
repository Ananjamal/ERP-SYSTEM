<?php

namespace App\Http\Livewire\Admin\Expenses;

use Livewire\Component;

class Expenses extends Component
{
    public function render()
    {
        return view('livewire.admin.expenses.expenses')->layout('layout.admin.app');
    }
}
