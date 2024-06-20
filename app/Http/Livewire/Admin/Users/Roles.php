<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    public $name;
    public $email;
    public $user_id;
    public $user;
    public $roles;
    public $UserRoles;
    public $selectedRole;

    protected $rules = [
        'selectedRole' => 'nullable|exists:roles,id',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        $this->user_id = $id;
        $this->user = User::findOrFail($this->user_id); // Use findOrFail to handle missing user
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->UserRoles = $this->user->roles;
        $this->roles = Role::all();
    }

    public function removeRole($id)
    {
        $role = Role::find($id); // Use find method for consistency
        if ($role) {
            $this->user->removeRole($role);
            $this->UserRoles = $this->user->roles;
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تمت إزالة الدور بنجاح']);
        } else {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'لم يتم العثور على الدور']);
        }
    }

    public function Update()
    {
        $this->validate();

        if ($this->selectedRole) {
            $role = Role::find($this->selectedRole);
            if ($this->user->hasRole($role)) {
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'تم تعيين الدور بالفعل لهذا المستخدم']);
            } else {
                $this->user->assignRole($role);
                $this->UserRoles = $this->user->roles;
                $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم تعيين الدور بنجاح']);
            }
        } else {
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم تحديث المستخدم بنجاح']);
        }

        $this->emit('hideModal', 'UserRoles');
        $this->emit('refreshID');
        $this->reset('selectedRole');
    }
    public function refreshID()
    {
        $this->emit('refreshID');
    }
    public function render()
    {
        return view('livewire.admin.users.roles');
    }
}
