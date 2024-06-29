<?php

namespace App\Http\Livewire\Admin\Accounts;

use App\Models\Account;
use Livewire\Component;

class Accounts extends Component
{
    protected $listeners = [
        'refreshID' => 'refreshID',
    ];

    public $account_id;
    public function EditAccount($id)
    {
        $this->account_id = $id;
    }
    public function DeleteAccount($id)
    {
        $this->account_id = $id;
    }
    public function refreshID()
    {
        $this->account_id = null;
    }
    public function render()
    {
        $assetAccounts = Account::where('account_type', 'Asset')->get();
        $liabilityAccounts = Account::where('account_type', 'Liability')->get();
        $equityAccounts = Account::where('account_type', 'Equity')->get();
        $revenueAccounts = Account::where('account_type', 'Revenue')->get();
        $expenseAccounts = Account::where('account_type', 'Expense')->get();

        return view('livewire.admin.accounts.accounts', [
            'assetAccounts' => $assetAccounts,
            'liabilityAccounts' => $liabilityAccounts,
            'equityAccounts' => $equityAccounts,
            'revenueAccounts' => $revenueAccounts,
            'expenseAccounts' => $expenseAccounts,
        ])->layout('layout.admin.app');
    }
}
