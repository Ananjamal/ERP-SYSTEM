<?php

namespace App\Http\Livewire\Admin\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Edit extends Component
{
    public $name;
    public $permission_id;
    public $permission;

    public $roles;
    public $permissionRoles;
    public $selectedRole;

    protected $rules = [
        'name' => 'min:3',
        'selectedRole' => 'nullable|exists:roles,id',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function mount($id)
    {
        $this->permission_id = $id;
        $this->permission = Permission::find($this->permission_id);
        $this->name = $this->permission->name;
        // dd($this->permission);
        $this->permissionRoles = $this->permission->roles;
        $this->roles = Role::all();
    }

    public function Update()
    {
        $this->validate();

        $this->permission->update([
            'name' => $this->name,
        ]);
        if ($this->selectedRole) {
            $role = Role::find($this->selectedRole);

            if ($this->permission->hasRole($role)) {
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'تم منح الدور بالفعل لهذه الصلاحية']);
            } else {
                $this->permission->assignRole($role);
                $this->permissionRoles = $this->permission->roles; // Refresh rolePermissions after update
                $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم تعيين الدور بنجاح']);
            }
        } else {
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم تحديث الصلاحية بنجاح.']);
        }
        $this->emit('hideModal', 'EditPermission');
        $this->emit('refreshID');

        $this->reset('name');
    }
    public function removeRole($id)
    {
        $role = Role::where('id', $id)->first();
        if ($role) {
            $this->permission->removeRole($role);
            $this->permissionRoles = $this->permission->roles; // Refresh rolePermissions after update
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تمت إزالة الدور بنجاح']);
        } else {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'الدور غير موجود']);
        }
    }
    public function refreshID()
    {
        $this->emit('refreshID');
    }
    public function render()
    {
        return view('livewire.admin.permissions.edit');
    }
}
