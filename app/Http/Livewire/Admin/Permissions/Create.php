<?php

namespace App\Http\Livewire\Admin\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

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

        Permission::create([
            'name' => $this->name,
        ]);
        $this->emit('hideModal', 'AddPermission');
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم إنشاء الصلاحية بنجاح.']);
        $this->emit('refreshID');
        $this->reset('name');
    }
    public function render()
    {
        return view('livewire.admin.permissions.create');
    }
}
