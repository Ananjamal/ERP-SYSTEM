<?php

namespace App\Http\Livewire\Admin\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Delete extends Component
{
    public $role_id;
    public $role;
    public function mount($id)
    {
        $this->role_id = $id;
        $this->role = Role::find($this->role_id);
    }

    public function deleteRole()
    {
            $this->role->delete();
            $this->emit('hideModal', 'DeleteRole');
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم حذف الدور بنجاح.']);
            $this->emit('refreshID');


    }
    public function refreshID(){
        $this->emit('refreshID');
    }
    public function render()
    {
        return view('livewire.admin.roles.delete');
    }
}
