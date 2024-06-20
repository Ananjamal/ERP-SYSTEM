<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Home extends Component
{
    protected $listeners = [
        'roles' => 'ExpandRoles',
        'permissions' => 'ExpandPermissions',
        'users' => 'ExpandUsers',
    ];
    public $roles =false;
    public $users = false;
    public $permissions = false;

    public function ExpandUsers()
    {
        $this->users = true;
        $this->roles = false;
        $this->permissions = false;
    }
    public function ExpandRoles()
    {
        $this->users = false;
        $this->roles = true;
        $this->permissions = false;
    }

    public function ExpandPermissions()
    {
        $this->users = false;
        $this->roles = false;
        $this->permissions = true;
    }
    public function refresh(){

    }
    public function render()
    {
        return view('livewire.admin.home')->layout('layout.admin.app');
    }
}
