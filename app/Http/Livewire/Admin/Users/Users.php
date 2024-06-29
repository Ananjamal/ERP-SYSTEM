<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    protected $listeners = [
        'refreshID' => 'refreshID',
    ];
    public $counter;
    public $user_id;
    public function UserRoles($id){
        $this->user_id = $id;
    }
    public function DeleteUser($id){
        $this->user_id = $id;
    }
    public function refreshID(){
        $this->user_id = null;
    }
    public function render()
    {
        $admins = User::role('admin')->get();
        $employees = User::role('employee')->get();
        $suppliers = User::role('supplier')->get();
        $users = User::where('role', 'user')->get();
        return view('livewire.admin.users.users',[
            'users' => $users,
            'admins' => $admins,
            'employees' => $employees,
            'suppliers' => $suppliers,
        ])->layout('layout.admin.app');
    }
}
