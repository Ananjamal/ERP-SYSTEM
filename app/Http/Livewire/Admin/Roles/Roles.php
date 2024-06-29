<?php

namespace App\Http\Livewire\Admin\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    public $counter;
    public $role_id;

    protected $listeners = [
        'refreshID' => 'refreshID',
    ];


    public function DeleteRole($id){
        $this->role_id = $id;
    }

    public function EditRole($id){
        $this->role_id = $id;
    }
    public function refreshID(){
        $this->role_id = null;
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.admin.roles.roles',[
            'roles' => $roles,
        ])->layout('layout.admin.app');
    }
}
