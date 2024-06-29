<?php

namespace App\Http\Livewire\Admin\Salaries;

use Livewire\Component;

class Salaries extends Component
{
    public function render()
    {
        return view('livewire.admin.salaries.salaries')->layout('layout.admin.app');
    }
}
