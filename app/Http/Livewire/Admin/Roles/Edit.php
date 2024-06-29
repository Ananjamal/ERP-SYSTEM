<?php

namespace App\Http\Livewire\Admin\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Edit extends Component
{
    public $name;
    public $role_id;
    public $role;
    public $permissions;
    public $rolePermissions;
    public $selectedPermission;

    protected $rules = [
        'name' => 'required|min:3',
        'selectedPermission' => 'nullable|exists:permissions,id',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        $this->role_id = $id;
        $this->role = Role::find($this->role_id);
        $this->name = $this->role->name;
        $this->rolePermissions = $this->role->permissions;
        $this->permissions = Permission::all();
    }
    public function removePermission($id)
    {
        $permission = Permission::where('id', $id)->first();
        if ($permission) {
            $this->role->revokePermissionTo($permission);
            $this->rolePermissions = $this->role->permissions; // Refresh rolePermissions after update
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تمت إزالة الإذن بنجاح']);
        } else {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'لم يتم العثور على إذن']);
        }
    }

    public function Update()
    {
        $this->validate();

        $this->role->update([
            'name' => $this->name,
        ]);

        if ($this->selectedPermission) {
            $permission = Permission::find($this->selectedPermission);

            if ($this->role->hasPermissionTo($permission)) {
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'تم منح الصلاحية بالفعل لهذا الدور']);
            } else {
                $this->role->givePermissionTo($permission);
                $this->rolePermissions = $this->role->permissions; // Refresh rolePermissions after update
                $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم تعيين الإذن بنجاح']);
            }
        } else {
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم تحديث الدور بنجاح.']);
        }

        $this->emit('hideModal', 'EditRole');
        $this->emit('refreshID');

        $this->reset(['name', 'selectedPermission']);
    }

    public function refreshID()
    {
        $this->emit('refreshID');
    }

    public function render()
    {
        return view('livewire.admin.roles.edit');
    }
}
