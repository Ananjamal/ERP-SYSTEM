<?php

namespace App\Http\Livewire\Admin\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function Store()
    {
        $this->validate();

        Role::create([
            'name' => $this->name,
        ]);
        $this->emit('hideModal', 'AddRole');
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم إنشاء الدور بنجاح']);
        $this->emit('refreshID');
        $this->reset('name');
    }
    public function render()
    {
        return view('livewire.admin.roles.create');
    }
}
