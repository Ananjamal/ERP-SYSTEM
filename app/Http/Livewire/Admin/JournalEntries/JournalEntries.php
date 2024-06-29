<?php

namespace App\Http\Livewire\Admin\JournalEntries;

use Livewire\Component;

class JournalEntries extends Component
{
    public function render()
    {
        return view('livewire.admin.journal-entries.journal-entries')->layout('layout.admin.app');
    }
}
