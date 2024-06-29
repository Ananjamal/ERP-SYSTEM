<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class Delete extends Component
{
    public $user_id;
    public $user;
    public function mount($id)
    {
        $this->user_id = $id;
        $this->user = User::find($this->user_id);
    }

    public function DeleteUser()
    {
        $this->user->delete();
        $this->emit('hideModal', 'DeleteUser');
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'تم حذف المستخدم بنجاح.']);

        $this->emit('refreshID');
    }
    public function refreshID()
    {
        $this->emit('refreshID');
    }
    public function render()
    {
        return view('livewire.admin.users.delete');
    }
}
