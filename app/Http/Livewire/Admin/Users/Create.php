<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Create extends Component
{
    public $userType = '';
    public $name;
    public $email;
    public $password;
    public $phone;
    public $address;
    public $position;
    public $salary;
    public $hire_date;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        'userType' => 'required',
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
        'position' => 'nullable|string|max:255',
        'salary' => 'nullable|numeric',
        'hire_date' => 'nullable|date',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save()
    {
        $this->validate();

        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);

        switch ($this->userType) {
            case 'user':
                $user->assignRole('user');
                break;

            case 'admin':
                $user->assignRole('admin');
                break;

            case 'employee':
                $user->phone = $this->phone;
                $user->address = $this->address;
                $user->position = $this->position;
                $user->salary = $this->salary;
                $user->hire_date = $this->hire_date;
                $user->assignRole('employee');
                break;

            case 'supplier':
                $user->phone = $this->phone;
                $user->address = $this->address;
                $user->assignRole('supplier');
                break;
        }
        $user->role = $this->userType;

        $user->save();

        $this->reset([
            'name', 'email', 'password', 'userType',
            'phone', 'address', 'position', 'salary', 'hire_date'
        ]);

        $this->emit('hideModal', 'AddAccount');
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'User Created Successfully']);
        $this->emit('refreshID');
    }

    public function render()
    {
        return view('livewire.admin.users.create');
    }
}
