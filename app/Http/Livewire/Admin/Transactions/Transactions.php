<?php

namespace App\Http\Livewire\Admin\Transactions;

use Livewire\Component;

class Transactions extends Component
{
    public function render()
    {
        return view('livewire.admin.transactions.transactions')->layout('layout.admin.app');
    }
}
