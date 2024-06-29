<?php

namespace App\Http\Livewire\Admin\Invoices;

use Livewire\Component;

class Invoices extends Component
{
    public function render()
    {
        return view('livewire.admin.invoices.invoices')->layout('layout.admin.app');
    }
}
