<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Roles extends Component
{
    public $name;
    public $email;
    public $user_id;
    public $user;
    public $roles;
    public $UserRoles;
    public $selectedRole;
    public $permissions;
    public $UserPermissions;
    public $selectedPermission;

    protected $rules = [
        'selectedRole' => 'nullable|exists:roles,id',
        'selectedPermission' => 'nullable|exists:permissions,id',

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
        $this->UserPermissions = $this->user->permissions;

        $this->roles = Role::all();
        $this->permissions = Permission::all();

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
    public function removePermission($id)
    {
        $permission = Permission::where('id', $id)->first();
        if ($permission) {
            $this->user->revokePermissionTo($permission);
            $this->UserPermissions = $this->user->permissions; // Refresh rolePermissions after update
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تمت إزالة الصلاحية بنجاح']);
        } else {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'لم يتم العثور على الصلاحية']);
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
        }
        if ($this->selectedPermission) {
            $permission = Permission::find($this->selectedPermission);

            if ($this->user->hasPermissionTo($permission)) {
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'تم منح الصلاحية بالفعل لهذا الدور']);
            } else {
                $this->user->givePermissionTo($permission);
                $this->UserPermissions = $this->user->permissions; // Refresh rolePermissions after update
                $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم تعيين الصلاحية بنجاح']);
            }
        }
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم تحديث المستخدم بنجاح']);

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
