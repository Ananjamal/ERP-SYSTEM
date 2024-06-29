<?php

namespace App\Http\Livewire\Admin\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Permissions extends Component
{
    public $permission_id;
    public $counter;
    public $permission;

    protected $listeners = [
        'flash' => 'flash',
        'errorflash' => 'Errorflash',
        'refreshPage' => 'refresh',
        'refreshID' => 'refreshID',
    ];


    public function DeletePermission($id)
    {
        $this->permission_id = $id;
    }

    public function EditPermission($id)
    {
        $this->permission_id = $id;
    }
    public function refreshID()
    {
        $this->permission_id = null;
    }
    // public function refresh()
    // {
    //     $this->mount();
    // }
    public function render()
    {
        $permissions = Permission::all();

        return view('livewire.admin.permissions.permissions', [
            'permissions' => $permissions,
        ])->layout('layout.admin.app');
    }
}
