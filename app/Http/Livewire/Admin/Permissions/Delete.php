<?php

namespace App\Http\Livewire\Admin\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Delete extends Component
{
    public $permission_id;
    public $permission;
    public function mount($id)
    {
        $this->permission_id = $id;
        $this->permission = Permission::find($this->permission_id);
    }

    public function deletePermission()
    {
            $this->permission->delete();
            $this->emit('hideModal', 'DeletePermission');
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم حذف الصلاحية بنجاح.']);
            // $this->emit('refreshPage');
            $this->emit('refreshID');
    }
    public function refreshID(){
        $this->emit('refreshID');
    }
    public function render()
    {
        return view('livewire.admin.permissions.delete');
    }
}
