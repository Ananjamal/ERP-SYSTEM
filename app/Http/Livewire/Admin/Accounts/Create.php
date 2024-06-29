<?php

namespace App\Http\Livewire\Admin\Accounts;

use App\Models\Account;
use Livewire\Component;

class Create extends Component
{
    public $account_name;
    public $account_number;
    public $account_type;

    protected $rules = [
        'account_name' => 'required|string|max:255',
        'account_type' => 'required|string',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save()
    {
        $this->validate();

        $account = new Account();
        $account->account_name = $this->account_name;
        $account->account_number = $this->generateUniqueAccountNumber(); // Generates a random 6-digit number
        $account->account_type = $this->account_type;

        $account->save();

        $this->reset(['account_name', 'account_number', 'account_type']);

        $this->emit('hideModal', 'AddAccount');
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Account Created Successfully']);
        $this->emit('refreshID');
    }
    private function generateUniqueAccountNumber()
    {
        $account_number = random_int(100000, 999999);

        if (Account::where('account_number', $account_number)->exists()) {
            return $this->generateUniqueAccountNumber(); 
        }

        return $account_number;
    }


    public function render()
    {
        return view('livewire.admin.accounts.create');
    }
}
